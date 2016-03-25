<?php 
namespace CodeAgenda\Http\Controllers;

use CodeAgenda\Entities\Person;
use DB;

class AgendaController extends Controller
{
	public function index($letter = 'A')
	{
		$letters = Person::select(DB::raw("left(nickname,1) as letter"))
		->distinct()
		->orderBy(DB::raw("left(nickname,1)"))
		->get();

		$people = Person::where('nickname','like',$letter.'%')->get();

		return view('agenda.index', compact('people','letters'));
	}
}