<?php 
namespace CodeAgenda\Http\Controllers;

use Illuminate\Http\Request;
use CodeAgenda\Entities\Person;
use DB;

class AgendaController extends Controller
{
	public function index($letter = 'A', Request $request)
	{
		$search = '';

		$letters = Person::select(DB::raw("left(nickname,1) as letter"))
		->distinct()
		->orderBy(DB::raw("left(nickname,1)"))
		->get();

		$people = Person::where('nickname','like',$letter.'%');

		if(count($request->all()) > 0 && !empty($request->search)){
			$search = $request->search;

			$people->where('nickname', 'like', '%'.$search.'%')
				   ->orWhere('name', 'like', '%'.$search.'%');
		}
		
		$people = $people->get();

		return view('agenda.index', compact('people','letters','search'));
	}

	public function destroyPerson($personId)
	{

		Person::find($personId)->delete();

        return redirect()->route("agenda.index");
	}

	public function destroyPhone($personId, $phoneId)
	{

       Person::find($personId)->phones()->find($phoneId)->delete();
      
       return redirect()->route("agenda.index");
	}
}