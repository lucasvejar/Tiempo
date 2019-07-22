
<div class="container my-5 mx-auto">
		<div class="row">
			<div class="col"></div>
			<div class="col-9 card loginCard my-5">
				<center>
				<h1 class="text-white mt-3 tituloLogin"><i class="fas fa-edit"></i><b> Formulario de Registro</b></h1>
				<hr class="my-2" >
				<div id="info"></div>
				<form class="form-inline my-3" method="post">
					<div class="form-group mb-2 col-3 text-white ">
                        <label class="mt-3 mr-5" for="nombre"><b>Nombre de usuario </b></label>
						<label class="mt-3 mr-2" for="email"><b>Email </b></label>
						<label class="mt-3 mr-5" for="contraseña"><b>Password </b></label>
					</div>
					<div class="form-group mb-2 col-6">
                        <input type="text" class="form-control mt-4 ml-5" id="nombre" name="nombre" placeholder="Ingrese un nombre..." required="required" >
						<input type="text" class="form-control mt-2 ml-5" id="usuario" name="usuario" aria-describedby="emailHelp" placeholder="Ingrese su email..." required="required" >
						<input type="password" class="form-control mt-2 ml-5" id="password" name="password" placeholder="Ingrese una contraseña..." required="required" >
					</div>
					<div class="container-fluid posicionBoton text-white mx-auto">
						<button id="btnRegistro" type="button" class="btn btn-success mb-1 mt-2">Registrar</button>
						<hr class="my-2" >
						<p><i><b>Gracias por registrarse! 👍 </b></i></p>	
					</div>
				</form>
				</center>
			</div>
			<div class="col"></div>
		</div>
	</div>



<script>

$('#btnRegistro').off().click(function (e) { 
	e.preventDefault();
	var nombre = $('#nombre').val();
	var usuario = $('#usuario').val();
	var pass = $('#password').val();

	if (nombre && usuario && pass) {
		console.log("okey bro");
		$.ajax({
			type: "POST",
			url: "<?= base_url('index.php/C_Registro/registrar') ?>",
			data: {
				nombre: nombre,
				usuario: usuario,
				password: pass
			},
			dataType: "JSON",
			success: function (data) {
				var response = data;
				console.log("respuesta :"+ response);
				if (response == "Añadido") {
					$('#info').html('<div class="alert alert-success" role="alert"><h5><i class="fas fa-comment-alt-check"></i> Usuario registrado exitosamente!.</h5></div>');
					$('#info').fadeIn();
					$('#info').fadeOut(5000);
				} else {
					$('#info').html('<div class="alert alert-danger" role="alert"><h5><i class="fas fa-exclamation-triangle"></i> '+response+'</h5></div>');
					$('#info').fadeIn();
					$('#info').fadeOut(5000);
				}	
			}
		});
	} else {
		console.log('salamin');
		$('#info').html('<div class="alert alert-warning" role="alert"><h5><i class="fas fa-exclamation-triangle"></i> Debe completar todos los datos del formulario!</h5></div>');
		$('#info').fadeIn();
		$('#info').fadeOut(5000);
		
	}
});


</script>