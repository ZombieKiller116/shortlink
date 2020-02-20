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
	</nav>
	<div class="alert alert-primary description">Enter description and link to the site</div>
	<div class="container">
	<form method="post" action="{{route('createStore')}}">
		@csrf
		@method('put')
		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
	  <div class="form-group">
	    <label for="exampleFormControlInput1">Title(max 50 chars)</label>
	    <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value="{{old('title')}}" autocomplete="off">
	  </div>
	  <div class="form-group">
	    <label for="exampleFormControlInput2">Link for your site</label>
	    <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="http://site.com" name="site" value="{{old('site')}}" autocomplete="off">
	  </div>
	  <div class="form-group">
	    <label for="exampleFormControlSelect1">Example select</label>
	    <select class="form-control" id="exampleFormControlSelect1" name="access" value="{{old('access')}}">
	      <option value="public">public</option>
	      <option value="private">private(by password)</option>
	    </select>
	  </div>
	  <div class="form-group pas1">
	    <label for="pass">Password for your site</label>
	    <input type="password" class="form-control" id="pass" name="password" autocomplete="new-password">
	  </div>
	  <div class="form-group">
	  	<div id="captcha">{!! captcha_img('flat') !!}</div>
	  	<label for="capt">Enter captcha</label>
	    <input type="text" class="form-control" name="captcha" id="capt">
	  </div>
	  <div class="form-group">
	  	<button type="submit" class="btn btn-primary btn-lg btn-block">Shorten the link</button>
	  </div>
	</form>
	</div>
 </body>
</html>