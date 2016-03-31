<p><a href="#" class="label label-primary">Novo Telefone</a></p>
<table class="table">
    @foreach($phones as $phone)
		<tr>
			<td>{{ $phone->description }}</td>
			<td>{{ $phone->number }}</td>
			<td>
				<a href="{{ route('phone.destroy',['id' => $phone->id]) }}" class="text-danger" data-toggle="tooltip" data-placement="top" title="Excluir"><i class="fa fa-minus-circle"></i></a>
			</td>	
		</tr>
    @endforeach
</table>