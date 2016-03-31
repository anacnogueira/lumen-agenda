<?php 
namespace CodeAgenda\Http\Controllers;

use Illuminate\Http\Request;
use CodeAgenda\Entities\Person;
use DB;

class AgendaController extends Controller
{
	public function index($letter = 'A')
	{
		$people = Person::where('nickname','like',$letter.'%')->get();	

		$letters = $this->getLetters();		

		return view('agenda.index', compact('people','letters'));
	}

	public function search(Request $request)
	{
		$search = $request->search;
		$people = [];
		if(!empty($search)){
			$people = Person::where('nickname', 'like', '%'.$search.'%')
				   ->orWhere('name', 'like', '%'.$search.'%')
				   ->get();
		}

		$letters = $this->getLetters();

		return view('agenda.index', compact('people','letters'));	
		
	}

	protected function getLetters()
	{
		$letters = [];
		foreach (Person::all() as $person) {
			$letters[] = strtoupper(substr($person->nickname,0,1));
		}
		sort($letters);

		return array_unique($letters);
	}

	
}