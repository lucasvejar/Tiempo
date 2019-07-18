<div class="container">
    Something happens
</div>
<div class="icono"></div>

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
   
      $('.icono').html("<img src='http://openweathermap.org/img/w/" + data.weather[0].icon + ".png' class='weather-icon'></img>");
   },
   error: function (jqXHR, textStatus, errorThrown) {
      alert(errorThrown);
   }
});

</script>