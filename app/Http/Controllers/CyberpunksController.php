<?php namespace App\Http\Controllers;

use App\Course;
use App\Cyberpunk;
use App\Http\Requests;
use App\Http\Requests\StoreCyberpunkRequest;
use App\Http\Requests\UpdateCyberpunkRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Laracasts\Flash\Flash;

class CyberpunksController extends AdminController {


	public function __construct()
	{
		parent::__construct();
	}

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

		$courses = Course::lists('name', 'id');

		return view('cyberpunks.create', compact('cyberpunk', 'courses'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param StoreCyberpunkRequest $cyberpunkRequest
	 * @return Response
	 */
	public function store(StoreCyberpunkRequest $cyberpunkRequest)
	{
		$data = Input::only(['name', 'email', 'deree_student_id', 'courses']);

		$cyberpunk = new Cyberpunk(Input::only(['name', 'email', 'deree_student_id']));

		$cyberpunk->save();

		$courseCyberpunks = [];

		foreach ($data['courses'] as $courseId)
		{
			$courseCyberpunks[] = ['course_id' => $courseId, 'cyberpunk_id' => $cyberpunk->id];
		}

		DB::table('course_cyberpunk')->insert($courseCyberpunks);

		Flash::success("Cyberpunk successfully registered!");

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
		$cyberpunk = Cyberpunk::with('courses')->where('id', $id)->first();

		$courses = Course::lists('name', 'id');

		return view('cyberpunks.edit', compact('cyberpunk', 'courses'));
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
		$data = Input::only(['name', 'email', 'deree_student_id', 'courses']);

		$cyberpunk = Cyberpunk::find($id);

		$cyberpunk->fill($data);

		$cyberpunk->save();

		$cyberpunk->courses()->sync($data['courses']);

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
		$cyberpunk = Cyberpunk::find($id);

		$cyberpunk->delete();

		Flash::success('Cyberpunk successfully deleted!');

		return redirect()->back();
	}
}
