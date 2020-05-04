<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!--Aqui esta el CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="css/form.css">
	<title>Registro de pacientes</title>
</head>
<body>
	<!--contenedor del menu -->
	<nav class="navbar navbar-inverse">
  	
	  	<div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">Coronis</a>
		    </div>
		    <ul class="nav navbar-nav navbar-top ">
		      <li class="active"><a href="index.html">Inicio</a></li>
		      <li class="dropdown">
		        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Departamentos
		        <span class="caret"></span></a>
		        <ul class="dropdown-menu">
		        	<li><b href="#">Zona Oriental</b></li>
		          <li><a 	href="#">San Miguel</a></li>
		          <li><a href="#">La Unión</a></li>
		          <li><a href="#">Morazan</a></li>
		          <li><a href="#">Usulutan</a></li>
		        </ul>
		      </li>
		      <li><a href="#">Enfermedades</a></li>
		      <li><a href="/registro">Registro de pacientes</a></li>
		      <li><a href="#">Estadisticas</a></li>
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
		      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Usuario X</a></li>
		      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Cerrar Sesión</a></li>
		    </ul>
	  </div>
	</nav>
	 <div class="row text-center">
      <div class="col-lg-11 col-md-11 mb-11">
        <div class="card h-50">
        	<div class="card-body">
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputnombre">Escriba el nombre del paciente</label>
      <input type="text" class="form-control" id="inputnombre" placeholder="nombre completo">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEnfermedad">Tipo de enfermedad</label>
      <input type="text" class="form-control" id="inputEnfermedad" placeholder="Respiratoria, cardiaca.">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Dirección</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="5. call. pont. San Miguel">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Observaciones del paciente</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputDate">Fecha de Ingreso</label>
      <input type="Date" class="form-control" id="inputDate">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEdad">Edad</label>
       <input type="text" class="form-control" id="inputEdad">
    </div>
    <div class="form-group col-md-2">
      <label for="inputCod">codigo</label>
      <input type="text" class="form-control" id="inputCod">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="CheckM">
      <label class="form-check-label" for="CheckM">
        Masculino
      </label>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="CheckF">
      <label class="form-check-label" for="CheckF">
        Femenino
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-danger">Guardar</button>
</form>
</div>
</div>
</div>
</div>

</body>
</html>
