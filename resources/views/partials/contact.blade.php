<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">
  	{{ $person->nickname}}
	<span class="pull-right">
    	<a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit"></i></a>
    	<a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Excluir"><i class="fa fa-minus-circle"></i></a>
    </span>
  </div>
  <div class="panel-body">
    <h3>{{ $person->name }}</h3>
    
    <table class="table">
    	@foreach($person->phones as $phone)
			<tr>
				<td>{{ $phone->description }}</td>
				<td>{{ $phone->number }}
				</td>
				<td>
					<a href="#" class="text-danger" data-toggle="tooltip" data-placement="top" title="Excluir"><i class="fa fa-minus-circle"></i></a>
				</td>	
			</tr>
    	@endforeach
    </table>
  </div>
</div>  