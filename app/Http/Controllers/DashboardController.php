<?php namespace App\Http\Controllers;

use App\Http\Requests;

class DashboardController extends AdminController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('dashboard');
	}

}
