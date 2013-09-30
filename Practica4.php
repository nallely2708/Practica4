<?php
            $paises=array();
            $paises["Mexico"]=array("Guadalajara", "Cd.Mexico", "Monterrey", "Tepic", "Manzanillo");
            $paises["Japon"]= array("Tokyo", "Shinjuku" , "Osaka", "Odaiba", "Iroshima");
            $paises["Italia"]= array("Toscana", "Florencia", "Roma", "Cerdeña", "Sicilia");
            $paises["Francia"]=array("Paris", "Niza", "Reims", "Toulouse", "Lille");
            $paises["Inglaterra"]=array("Londres", "Sheffield", "Liverpool", "Cambridge", "Bath");
            $paises["Alemania"]=array("Berlin", "Magdeburgo", "Munich", "Hamburgo", "Nuremberg");
            $paises["Canada"]=array("Ottawa", "Quebec", "Victoria", "Toronto", "Calgary");
            $paises["Estados Unidos"]=array("Dallas", "Houston", "New York", "Phoenix", "Santa Fe");
            $paises["Colombia"]=array("Bogota", "Buenaventura", "Puerto Carreño", "Medellin", "Poreira");
            $paises["Venezuela"]=array("Valencia", "Ciudad Guayana", "Trinidad y Tobago", "Maracaibo", "Barquisimeto");
            
            echo"<ul>";
            foreach($paises as $pais => $ciudades){
                echo "<li>".$pais."<ul>";
                
                 foreach($ciudades as $ciudad){
                   echo "<li>".$ciudad."</li>";
                 }
            echo "</ul></li>";
            }
?>