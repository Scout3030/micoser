<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\JobOffer;
use Illuminate\Http\Request;

class JobOfferController extends Controller {
	public function index() {
		return view('admin.job-offer.index');
	}

	public function create() {
		$jobOffer = new JobOffer;
		$btnText = 'Crear oferta de empleo';
		return view('admin.job-offer.create-edit', compact('jobOffer', 'btnText'));
	}

	public function edit(JobOffer $jobOffer) {
		$btnText = 'Guardar cambios';
		return view('admin.job-offer.create-edit', compact('jobOffer', 'btnText'));
	}

	public function store(Request $request) {
		$request->validate([
			'title' => 'required',
			'description' => 'required',
		]);
		$request->merge(['expires_at' => date("Y-m-d", strtotime($request->expires_at))]);
		JobOffer::create($request->input());
		return back()
			->with(['message' => "Oferta de empleo creada", 'description' => "Puedes editar la oferta de empleo en cualquier momento"]);
	}

	public function update(Request $request, JobOffer $jobOffer) {
		$request->validate([
			'title' => 'required',
			'description' => 'required',
		]);
		$request->merge(['expires_at' => date("Y-m-d", strtotime($request->expires_at))]);
		$jobOffer->fill($request->input())->save();
		return back()
			->with(['message' => "Oferta editada", 'description' => "Los datos de la oferta de empleo fueron editados correctamente"]);
	}

	public function destroy(JobOffer $jobOffer) {
		$jobOffer->delete();
		return back()
			->with(['message' => "Oferta eliminada", 'description' => "Los datos han sido borrados correctamente"]);
	}

	public function datatable() {
		$jobOffers = JobOffer::get();
		$actions = 'admin.job-offer.datatable.actions';
		$status = 'admin.job-offer.datatable.status';
		return datatables()->of($jobOffers)
			->editColumn('created_at', '{{date("d-m-Y", strtotime($created_at))}}')
			->editColumn('expires_at', '{{date("d-m-Y", strtotime($expires_at))}}')
			->editColumn('status', $status)
			->addColumn('actions', $actions)
			->rawColumns(['actions', 'status'])
			->toJson();
	}

	public function pause(JobOffer $jobOffer) {
		$jobOffer->status == JobOffer::ACTIVE ? $jobOffer->status = JobOffer::PAUSED : $jobOffer->status = JobOffer::ACTIVE;
		$jobOffer->save();
		if ($jobOffer->status == JobOffer::ACTIVE) {
			return back()
				->with(['message' => "Oferta publicada", 'description' => "La oferta de empleo se ha publicado nuevamente"]);
		} else {
			return back()
				->with(['message' => "Oferta pausada", 'description' => "La oferta de empleo se ha pausado"]);
		}

	}
}
