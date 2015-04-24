<?php namespace App\Http\Controllers;

use App\Course;
use App\Http\Requests;
use App\Http\Requests\UpdateCourseRequest;
use Illuminate\Support\Facades\Input;
use Laracasts\Flash\Flash;

class CoursesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$courses = Course::all();

		return view('courses.index', compact('courses'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('courses.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		$course = Course::find($id);

		return view('courses.edit', compact('course'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int $id
	 * @param UpdateCourseRequest $updateCourseRequest
	 * @return Response
	 */
	public function update($id, UpdateCourseRequest $updateCourseRequest)
	{
		$data = Input::only(['name']);

		$course = Course::find($id);

		$course->fill($data);

		$course->save();

		Flash::success("Course successfully updated!");

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
