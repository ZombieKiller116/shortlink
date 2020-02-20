<!DOCTYPE html>
<html>
<head>
	<title>Create new link</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">	
	<link rel="stylesheet" type="text/css" href="/public/access/css.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"
  	integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  	crossorigin="anonymous"></script>
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
	<script type="text/javascript" src="/public/access/js.js"></script>
</head>
<body>
	<nav class="navbar navbar-light bg-light">
	  	<a class="navbar-brand">Secret links</a>
	    <a class="btn btn-inline btn-primary my-2 my-sm-0" href="{{route('create')}}">Create link</a>
	</nav>
	<div class="container">
	<div class="alert alert-success">Your link was shortened! Short Link: {{route('show', ['link' => $link])}}</div>
	</div>
 </body>
</html>