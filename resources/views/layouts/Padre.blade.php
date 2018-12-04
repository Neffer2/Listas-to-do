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


  <nav class="navbar fixed-top navbar-light" style="background-color:  #fcfcfc; padding: 10px;">
     <a class="navbar-brand" href="/home" style="font-style: italic;">Tus tareas</a>  
     <a class="navbar-brand" href="/exit">Salir</a> 
    </nav>
  <br>
  <br>


	@section ('Contenido')

	@show

</body>
    </html>