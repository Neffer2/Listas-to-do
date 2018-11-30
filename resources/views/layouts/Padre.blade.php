<!DOCTYPE html>
<html>
<head>
	<title> @yield ('Title') </title>
	      <link href="css/Bootstrap.min.css" rel="stylesheet">
	      <link rel="stylesheet" type="text/css" href="css/Style.css">
	      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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