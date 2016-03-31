<div class="panel @if($person->gender == 'F') panel-danger @else panel-info @endif">
  <!-- Default panel contents -->
  <div class="panel-heading">
    <span class="pull-left">
      <i class="fa {{ $person->gender == 'M' ? 'fa-male' : 'fa-female' }}"></i>
    </span> {{ $person->nickname }}
  
	<span class="pull-right">
    	<a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit"></i></a>
    	<a href="{{ route('person.destroy',['id' => $person->id]) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Excluir"><i class="fa fa-minus-circle"></i></a>
    </span>
  </div>
  <div class="panel-body">
    <h3>{{ $person->name }}</h3>
    
    @include('partials.phones',['phones' => $person->phones])
  </div>
</div>  