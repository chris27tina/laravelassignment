<?php

class Person extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];
	protected $guarded = array();
	// Don't forget to fill this array
	// protected $fillable = [
	// 	name => $data['name'],
	// 	email => $data['email'],
	// 	dob => $data['dob'],
	// 	marital_status => $data['marital_status'],
	// 	gender => $data['gender'],
	// 	phone => $data['phone'],
	// 	country => $data['country']
	// ];

}