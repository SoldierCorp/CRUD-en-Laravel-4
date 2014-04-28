<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel CRUD</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<style>
		body {
			width: 450px;
			margin: 50px auto;
		}
		.badge {
			float: right;
		}
	</style>
</head>
<body>
	<h1>CRUD en Laravel 4</h1>
	<nav class="navbar navbar-default" role="navigation">
  		<div class="container-fluid">
  			<div class="navbar-header">
				<a class="navbar-brand" href="#">CodeJobs</a>
  			</div>
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      			<ul class="nav navbar-nav">
        			<li><a href="#">Todos</a></li>
        			<li><a href="#">Nuevo</a></li>
        		</ul>
        	</div>
        </div>
    </nav>

	<div class="panel panel-success">
  		<div class="panel-heading">
  			<h4>Editar usuario</h4>
  		</div>

  		<div class="panel-body">
        @if (!empty($user))
    			<form method="post" action="/users/update/{{ $user->id }}">
          <p>
            <input value="{{ $user->name }}" type="text" name="name" placeholder="Nombre" class="form-control" required>
          </p>
          <p>
            <input value="{{ $user->twitter }}" type="text" name="twitter" placeholder="Twitter" class="form-control" required>
          </p>
          <input type="submit" value="Guardar" class="btn btn-success">
          @else
          <p>
            No existe información para éste usuario.
          </p>
          @endif
        <a href="/users" class="btn btn-default">Regresar</a>
      </form>
		</div>
	</div>

  @if(Session::has('message'))
    <div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
  @endif
</body>
</html>