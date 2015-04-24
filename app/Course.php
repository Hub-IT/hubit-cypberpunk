<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {

	protected $fillable = ['name'];

	public function cyberpunks()
	{
		return $this->belongsToMany('App\Course');
	}

}
