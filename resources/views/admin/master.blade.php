<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Navbar Static top Template</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		{!! HTML::style('css/bootstrap.min.css') !!}
    {!! HTML::style('css/admin/style.css') !!}
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
<div class="navbar navbar-default navbar-static-top">
  <div class="container">

    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          {!! HTML::image('img/logocut.jpg' , 'Лого' , ['style' => 'height:20px']) !!}
        </a>
      </div>
    </div>

  <!--

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Taxi</a>
    </div>

  -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li @if (!empty($homelink) and $homelink) class="active" @endif ><a href="{{ url('admin') }}">Начало</a></li>
        <li @if (!empty($taxidb) and $taxidb) class="active" @endif ><a href="{{ url('admin/taxi') }}">База такси</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('auth/logout') }}">Выход</a></li>
        <li><a href="{{ url('/') }}">На сайт</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

<div class="container">
    @include('admin.messages')

    @yield('content', 'default')  
  
</div><!-- /.container -->
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		{!! HTML::script('js/libs/bootstrap.min.js')  !!}
	</body>
</html>