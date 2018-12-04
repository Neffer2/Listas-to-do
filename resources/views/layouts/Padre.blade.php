<!DOCTYPE html>
<html>
<head>
	<title> @yield ('Title') </title>
	      <link href="css/Bootstrap.min.css" rel="stylesheet">
	      <link rel="stylesheet" type="text/css" href="css/Style.css">
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	 


</head>


   <div align="center" style="">
      <ul class="nav nav-tabs">
      <li role="presentation" class="active"><a href="/home">Home</a></li>
      <li role="presentation"><a href="/home">T&uacute;s tareas</a></li>
      <li role="presentation"><a href="/exit">Salir</a></li>
    </ul>
  </div>
  <br>
  <br>
 

	@section ('Contenido')

	@show

  
<!-- development version, includes helpful console warnings -->
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</body>


</html>