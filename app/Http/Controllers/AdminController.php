<?php namespace App\Http\Controllers;

use App\Course;
use App\Cyberpunk;
use Illuminate\Support\Facades\View;

/**
 * @author Rizart Dokollari
 * @since 25/4/2015
 */
class AdminController extends Controller {

	public function __construct()
	{
		View::share('totalCyberpunks', count(Cyberpunk::all()));
		View::share('totalCourses', count(Course::all()));
	}
}