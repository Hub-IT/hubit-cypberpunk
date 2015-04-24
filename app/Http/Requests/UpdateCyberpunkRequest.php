<?php namespace App\Http\Requests;

class UpdateCyberpunkRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name'             => 'required|max:255',
			'email'            => 'required|email|unique:cyberpunks,email,' . $this->get('id'),
			'deree_student_id' => 'required|digits:6',
		];
	}

}
