



<?php

require_once 'vendor/autoload.php';
use SujalPatel\IntToEnglish\IntToEnglish;
use Ballen\Distical\Calculator as DistanceCalculator;
use Ballen\Distical\Entities\LatLong;



IntToEnglish::Int2Eng(1000); // One Thousand
IntToEnglish::Int2Eng(10500); // Ten Thousand Five hundred



if (isset($_REQUEST['calcular'])){
    $lat1;
    $lat1 = htmlspecialchars($_REQUEST['n_entero']);
    $lat2;
    $lat2 = htmlspecialchars($_REQUEST['n_entero2']);
    $lat3;
    $lat3 = htmlspecialchars($_REQUEST['n_entero3']);
    $lat4;
    $lat4 = htmlspecialchars($_REQUEST['n_entero4']);

    $location1 = new LatLong($lat1, $lat2);
    $location2 = new LatLong($lat3, $lat4);



// Get the distance between these two Lat/Long coordinates...
$distanceCalculator = new DistanceCalculator($location1, $location2);

// You can then compute the distance...
$distance = $distanceCalculator->get();
// you can also chain these methods together eg. $distanceCalculator->get()->asMiles();

// We can now output the miles using the asMiles() method, you can also calculate and use asKilometres() or asNauticalMiles() as required!

echo '<div style= “top:50%> Distance in miles between Valladolid and Sevilla is: ' . $distance->asMiles(). '</div>';

};




echo'

<!DOCTYPE html>
<html>

<head>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8">
</head>

<style>
@import url(css/css.css)
</style>

<body>

    <div class="marca" >BAJO</div>
    <hr>

    <div class="container">

        <div class="col s12  blue center-align card-panel teal lighten-2">
            <h4 class="tit">Examen Despliegue Aplicaciones Web Diego Bajo</h4>
        </div>
        
        <div class="container2">
            
            <p id=font>Lo que vamos a realizar es una aplicacion en PHP, que realize lo siguiente:
            <ol>
            <li id=font>Dado dos puntos calcular la distancia entre ellos. Esos puntos vendran marcados por su latitud y su longitud </li>
            <li id=font>Una vez halla calculado la distancia quiero que me traduzca al ingles esa distancia.</li>
            </ol>
            </p>
            <p>
            Por ejemplo dadas las siguientes coordenadas:
            <ul>
            <li id=font>(41.65518, -4.72372) corresponde a Valladolid </li>
            <li id=font>(37.38283, -5.97317) corresponde a Sevilla </li>
            </ul>
            
            </p>
        
            
        </div>
        <aside class="img">
                    
                   
                    <p>
                    <a title="Heroku" href=""><img class=heroku src="imagenes/heroku.png" alt="Heroku" width="120" height="120" /></a>
                    </p>
        </aside>
        <form  method = "POST" action="">
            <div class="row">
                
                <div>
                    <label id=font for="n_entero">Introduce la Latitud Punto 1:</label>
                    <input name="n_entero" type="text" class="validate">
                    
                </div>
                <div >
                    <label id=font for="n_entero">Introduce la Longitud  Punto 1:</label>
                    <input name="n_entero2" type="text" class="validate">
                
                </div>
                <div>
                    <label id=font for="n_entero">Introduce la Latitud Punto 2:</label>
                    <input name="n_entero3" type="text" class="validate">
                
                </div>
                <div>
                    <label id=font for="n_entero">Introduce la Longitud  Punto 2:</label>
                    <input name="n_entero4" type="text" class="validate">
                
                </div>
               

                <div class="row "></div> <!-- linea en blanco -->
                <div class="col s4">

                    <button class="btn waves-effect waves-light" type="submit" name="calcular">Calcular

                    </button>

                </div>
                
            </div>
        </form>
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    
</body>

</html>'; 



