<?php namespace App\Http\Controllers;

use App\Cyberpunk;
use App\Http\Requests;
use App\Http\Requests\StoreCyberpunkRequest;
use App\Http\Requests\UpdateCyberpunkRequest;
use Illuminate\Support\Facades\Input;
use Laracasts\Flash\Flash;

class CyberpunksController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$cyberpunks = Cyberpunk::with('courses')
			->get();

		return view('cyberpunks.index', compact('cyberpunks'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$cyberpunk = new Cyberpunk;

		return view('cyberpunks.create', compact('cyberpunk'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param StoreCyberpunkRequest $cyberpunkRequest
	 * @return Response
	 */
	public function store(StoreCyberpunkRequest $cyberpunkRequest)
	{
		$data = Input::only(['name', 'email', 'deree_student_id']);

		$cyberpunk = new Cyberpunk($data);

		$cyberpunk->save();

		Flash::success("Cyberpunk successfully created!");

		return redirect()->route('cyberpunks.edit', $cyberpunk);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function edit($id)
	{
		$cyberpunk = Cyberpunk::find($id);

		return view('cyberpunks.edit', compact('cyberpunk'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int $id
	 * @param UpdateCyberpunkRequest $updateCyberpunkRequest
	 * @return Response
	 */
	public function update($id, UpdateCyberpunkRequest $updateCyberpunkRequest)
	{
		$data = Input::only(['name', 'email', 'deree_student_id']);

		$cyberpunk = Cyberpunk::find($id);

		$cyberpunk->fill($data);

		$cyberpunk->save();

		Flash::success("Cyberpunk successfully updated!");

		return redirect()->back();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
