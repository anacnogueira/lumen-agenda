<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Code Agenda</title>

    <!-- Bootstrap -->
    <link href="css/app.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
    	<div class="row">
    		<div class="col-lg-12 page-header">
    			<h1>
    				Code.Education <br>
    				<small><i class="glyphicon glyphicon-phone-alt"></i> Agenda Telefônica</small>
    			</h1>
    			<span class="pull-right">
    				<form action="{{  route('agenda.index') }}" class="form-inline" method="post">

    					<div class="input-group">
					      <input type="text" name="search" value="{{ $search }}" class="form-control" placeholder="Pesquisar contato">
					      <span class="input-group-btn">
					        <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
					      </span>
					    </div>
    				</form>
    			</span>
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-lg-12">
    			@foreach($letters as $letter)
					<a href="{{ route('agenda.letter',['letter' => $letter->letter]) }}" class="btn btn-primary btn-xs">{{  $letter['letter'] }}</a>
    			@endforeach
    		</div>
    	</div>
        <div class="row">
            <div class="col-lg-12 btn-row">
                <a href="#" class="btn btn-primary">Novo Contato</a>
            </div>
        </div>
    	<div class="row">
    		@yield('content')
    	</div>
    </div>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/scripts.js"></script>
  </body>
</html>
