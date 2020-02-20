<!DOCTYPE html>
<html>
<head>
	<title>Сайт</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">	
	<link rel="stylesheet" type="text/css" href="/public/access/css.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"
  	integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  	crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
	<script type="text/javascript" src="/public/access/show.js"></script>
</head>
<body>
	<nav class="navbar navbar-light bg-light">
	  	<a class="navbar-brand">Secret links</a>
	    <a class="btn btn-inline btn-primary my-2 my-sm-0" href="{{route('create')}}">Create link</a>
	</nav>
	<div class="alert alert-primary description">{{$link->title}}</div>
	@if (Session::has('message'))
		<div class="alert alert-danger description">{{Session::get('message')}}</div>
	@endif
	<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			
				@if($link->password)
				<form method="post" action="{{route('redirect', ['link' => $link->id])}}">
				@csrf
					<div class="container">
							<div class="alert alert-warning" style="text-align: center;">The link is password protected! Enter your password for access:</div>
							<input type="password" class="form-control" name="password" id="password" autocomplete="new-password">
							<br>
							<button class="btn btn-primary form-control" type="submit">Go to the site</button>
						
					</div>
				</form>
				@else
					<input type="hidden" value="{{$link->id}}" id="link">
					<button type="button" class="mainButton btn btn-secondary btn-lg btn-block" id="but">Go to the site</button>
				@endif
			
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Link to the site</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<a href="#" class="btn btn-primary btn-lg btn-block" id="modal_link" target="_blank">Open site</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="myModal2">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Error!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<div class="alert alert-danger" id="danger"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>