<?php

namespace App\Http\Controllers\Admin;

use App\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller {
	public function index() {
		return view('admin.client.index');
	}

	public function create() {
		$client = new Client;
		$btnText = 'Crear cliente';
		return view('admin.client.create-edit', compact('client', 'btnText'));
	}

	public function edit(Client $client) {
		$btnText = 'Guardar cambios';
		return view('admin.client.create-edit', compact('client', 'btnText'));
	}

	public function store(Request $request) {
		$request->validate([
			'name' => 'required',
			'document' => 'required',
			'phone' => 'required',
			'email' => 'required|email|unique:clients,email',
			'address' => 'required',
		]);
		Client::create($request->input());
		return back()
			->with(['message' => "Cliente registrado correctamente", 'description' => "Se ha registrado un nuevo cliente, ahora puedes crear cotizaciones"]);
	}

	public function update(Request $request, Client $client) {
		$request->validate([
			'name' => 'required',
			'document' => 'required',
			'phone' => 'required',
			'email' => 'required|email',
			'address' => 'required',
		]);
		$client->fill($request->input())->save();
		return back()
			->with(['message' => "Cliente editado correctamente", 'description' => "Los datos del cliente fueron editados correctamente"]);
	}

	public function destroy(Client $client) {
		$client::delete();
		return back()
			->with(['message' => "Cliente eliminado correctamente", 'description' => "Los datos del cliente han sido borrados correctamente"]);
	}

	public function datatable() {
		$clients = Client::get();
		$actions = 'admin.client.datatable.actions';
		return datatables()->of($clients)
			->addColumn('actions', $actions)
			->rawColumns(['actions', 'status'])
			->toJson();
	}
}
