<!DOCTYPE html>
<html>
<head>
	<title>Deals4U | Hackathon</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="material/dist/css/bootstrap-material-design.min.css">
	<link rel="stylesheet" type="text/css" href="material/dist/css/ripples.css">

</head>
<body>
<div class="container">
<div class="navbar navbar-warning">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-warning-collapse">
        <span class="glyphicon glyphicon-search"></span>
      </button>
      <a class="navbar-brand" href="javascript:void(0)">Deals4You</a>
    </div>
    <div class="navbar-collapse collapse navbar-warning-collapse">
      <!--ul class="nav navbar-nav">
        <li class="active"><a href="javascript:void(0)">Active</a></li>
        <li><a href="javascript:void(0)">Link</a></li>
        <li class="dropdown">
          <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="javascript:void(0)">Action</a></li>
            <li><a href="javascript:void(0)">Another action</a></li>
            <li><a href="javascript:void(0)">Something else here</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Dropdown header</li>
            <li><a href="javascript:void(0)">Separated link</a></li>
            <li><a href="javascript:void(0)">One more separated link</a></li>
          </ul>
        </li>
      </ul-->
      <ul style="margin-right:15px;" class="nav navbar-nav navbar-right">
            <li><a href="#search"><span class="glyphicon glyphicon-search">&nbsp;Search</span></a></li>
      </ul>

      <!--ul class="nav navbar-nav navbar-right">
        <li><a href="javascript:void(0)">Link</a></li>
        <li class="dropdown">
          <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="javascript:void(0)">Action</a></li>
            <li><a href="javascript:void(0)">Another action</a></li>
            <li><a href="javascript:void(0)">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="javascript:void(0)">Separated link</a></li>
          </ul>
        </li>
      </ul-->

    </div>
  </div>
</div>
<div id="search">
    <button type="button" class="close">×</button>
    <form method="GET" action="/search">
        <input type="search" name="s" value="" placeholder="Search Products..." />
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>
<div class="container">
	@yield('content')
</div>
</div>
<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="material/dist/js/material.js"></script>
<script src="material/dist/js/ripples.js"></script>
<script src="js/script.js"></script>

</body>
</html>
