<div class="container my-5 mx-auto">
		<div class="row">
			<div class="col"></div>
			<div class="col-9 card loginCard my-5">
				<center>
				<h1 class="text-white mt-3 tituloLogin"><i class="fas fa-user"></i><b> Información del clima</b></h1>
				<hr class="my-2" >
				<form class="form-inline my-3" >
                <div class="container">
                    <div class="infoClima mb-5 ml-5 col-9 text-white ">
						<label class="mt-3 mr-5" ><b id="ciudad">Ciudad: </b></label>
                        <label class="mt-3 mr-5" ><b id="pais">País: </b></label>  
                        <label class="mt-3 mr-5"><b id="cli">Clima: </b></label>
                        <label class="mt-3 mr-5" ><b id="hum">Humedad: </b></label>
                        <label class="mt-3 mr-5" ><b id="pres">Presión: </b></label>
                        <label class="mt-3 mr-5" ><b id="temp">Temperatura: </b></label>
                        <label class="mt-3 mr-5" ><b id="vis">Visibilidad: </b></label>
                        <label class="mt-3 mr-5" ><b id="nub">Nubosidad: </b></label>
                        <label class="mt-3 mr-5" ><b id="vel">Velocidad del viento: </b></label>
                    </div>
                </div>
				</form>
				</center>
			</div>
			<div class="col"></div>
		</div>
</div>



<script>

var temp_f;  //---> variable para mostrar la temperatura en Farenheit
var id_ciudad = '3860443';   //--> id_ciudad
var APPID = 'bdab99ce6e54bcc3d864bdeb4e1ecc4a';

// http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=
// http://api.openweathermap.org/data/2.5/weather?q=San Juan, PR&APPID=bdab99ce6e54bcc3d864bdeb4e1ecc4a

$.ajax({
   type: "GET",
   url: "http://api.openweathermap.org/data/2.5/weather?id="+id_ciudad+"&APPID="+APPID,
   dataType: "json",
   success: function (data) {
      
      temp_f = 1.8 * (data.main.temp - 273.15) + 32;
      console.log("Ciudad: " + data.name);
      console.log("Humedad: " + data.main.humidity +"%");
      console.log("Presion: " + data.main.pressure + " hPascales" );
      console.log("Temperatura: " + (data.main.temp-273.15) + "°C , " + temp_f + " F°" );
      console.log("País: " + data.sys.country );
      console.log("Visibilidad: " + data.visibility + "Km" );
      console.log("Clima: "+ data.weather[0].main + ", Descripcion: " + data.weather[0].description);
      console.log("Nubosidad: " + data.clouds.all + "%");
      console.log("Viento: velocidad -> " + data.wind.speed + " km/h");

      $('#ciudad').html('<label class="mb-1 mr-5" ><b id="ciudad">Ciudad: '+data.name+'</b></label>');
      $('#pais').html('<label class="mt-3 mr-5" ><b id="pais">País: '+data.sys.country+'</b></label>');
      $('#hum').html('<label class="mt-3 mr-5" ><b id="hum">Humedad: '+data.main.humidity+' %</b></label>');
      $('#pres').html('<label class="mt-3 mr-5" ><b id="pres">Presión: '+data.main.pressure+' hPascales</b></label>');
      $('#temp').html('<label class="mt-3 mr-5" ><b id="temp">Temperatura:  '+(data.main.temp - 273.15)+' °C, '+ temp_f +' F°</b></label>');
      $('#vis').html('<label class="mt-3 mr-5" ><b id="vis">Visibilidad: '+data.visibility+' Km</b></label>');
      $('#nub').html('<label class="mt-3 mr-5" ><b id="nub">Nubosidad: '+data.clouds.all+' %</b></label>');
      $('#vel').html('<label class="mt-3 mr-5" ><b id="vel">Velocidad del viento: '+data.wind.speed+' km/h</b></label>');

      $('#cli').html('<label class="mb-1 mr-5" ><b id="cli">Clima: '+ data.weather[0].main + " <img src='http://openweathermap.org/img/w/"+ data.weather[0].icon +".png' class='weather-icon'></img>, Descripcion: " + data.weather[0].description +'</b></label>');
   },
   error: function (jqXHR, textStatus, errorThrown) {
      alert(errorThrown);
   }
});

</script>