<?php
namespace CodeAgenda\Entities;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
	protected $table = "phones";

	protected $fillabe = [
		'description',
		'cod_country',
		'ddd',
		'prefix',
		'sufix'
	];

	public function phones()
	{
		//
	}
}