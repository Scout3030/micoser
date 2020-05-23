<?php

namespace App\Http\Controllers\Admin;

use App;
use App\Http\Controllers\Controller;
use App\Quotation;
use App\QuotationDetail;
use Illuminate\Http\Request;

class QuotationController extends Controller {
	public function index() {
		return view('admin.quotation.index');
	}

	public function create() {
		$quotation = new Quotation;
		$btnText = 'Crear cotizacion';
		return view('admin.quotation.create-edit', compact('quotation', 'btnText'));
	}

	public function edit(Quotation $quotation) {
		$btnText = 'Guardar cambios';
		return view('admin.quotation.create-edit', compact('quotation', 'btnText'));
	}

	public function show(Quotation $quotation) {
		$btnText = 'Imprimir';
		return view('admin.quotation.show', compact('quotation', 'btnText'));
	}

	public function store(Request $request) {
		$validatedData = $request->validate([
			'title' => 'required|max:255',
			'additional_informacion' => 'required',
			'time' => 'required',
			'client_id' => 'required',
		]);
		$total = collect(json_decode($request->items, true))->reduce(function ($sum, $item) {
			return $sum + ($item['price'] * $item['qty']);
		});

		$request->merge(['total' => $total]);

		$quotation = Quotation::create($request->input());

		$itemLines = [];
		collect(json_decode($request->items, true))->map(function ($item) use (&$itemLines, $quotation) {

			$itemLines[] = [
				"quotation_id" => $quotation->id,
				"description" => $item['description'],
				"price" => $item['price'],
				"qty" => $item['qty'],
			];
		});

		QuotationDetail::insert($itemLines);

		return back()
			->with(['message' => "Cotización creada", 'description' => "Cotización creada correctamente, puedes editarla o imprimirla en cualquier momento"]);
	}

	public function datatable() {
		$quotations = Quotation::with(['client'])->get();
		$actions = 'admin.quotation.datatable.actions';
		return datatables()->of($quotations)
			->editColumn('created_at', '{{date("d-M-Y", strtotime($created_at))}}')
			->addColumn('actions', $actions)
			->rawColumns(['actions'])
			->toJson();
	}

	public function generatePDF(Quotation $quotation) {
		\PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);

		$quotation->load('quotationDetails');
		// return view('pdf.order', ['sell' => $sell]);
		$pdf = \PDF::loadView('admin.quotation.pdf', ['quotation' => $quotation]);
		return $pdf->stream();
		// return $pdf->download('admin.quotation.pdf');
	}

}
