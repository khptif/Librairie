<?php

$test = file_get_contents("pageAccueil.html");
$test2 = "cecie est un test";
$html=<<<END

<!DOCTYPE html>
<html>

    <head>
        <title> Titre Provisoire $test2 </title>
    </head>

    <body>
        <div id="entete">
            <div id="accueil">
                <a href=""> Accueil </a>
            </div>
            <div id="Contact">
                <a href=""> Contact </a>
            </div>

        </div>

        <div id="LignePrincipale>
            <div id="logo">
                <a href="" > LOGO </a>
            </div>
            <div id="recherche">
                
            </div>
            
    </body>

</html>

END;

echo $test;

?>