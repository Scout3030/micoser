<?php

namespace App\Http\Controllers;
use App\Mail\NewSolicitude;
use Illuminate\Http\Request;

class AdminController extends Controller {
	public function index() {
		return view('admin.index');
	}

	public function mail(Request $request) {
		\Mail::to('sistema@micosersa.com')->send(new NewSolicitude($request));
		return back();
	}
}
