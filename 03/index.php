<?php


if (!isset ($_POST['hit'])){
    
$plays = 0;
$hitleft = 0;
$hitmid = 0;
$hitright = 0;
$hits = 0;
}


$hit = rand( 1, 3 );

if (($hit == 1) && ($_POST['hit'] == "left")) {
    $hitleft ++;
}

if (($hit == 2) && ($_POST['hit'] == "mid")) {
    $hitmid ++;
}

if (($hit == 3) && ($_POST['hit'] == "right")) {
    $hitright ++;
}


echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
    echo "<meta charset=\"utf-8\">";
    echo "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">";
    echo "<title>H&uuml;tchenspiel;</title>";
    echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">";
    echo "<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"style.css\">";
    echo "<script src=\"main.js\"></script>";
echo "</head>";
echo "<body>";
    echo "<div class=\"site\">";
        echo "<div class=\"top\">";
            echo "<h2>Das H&uuml;tchenspiel</h2>";
            echo "<p>Unter einem H&uuml;tchen versteckt sich die Zufallszahl. Klicke auf ein H&uuml;tchen und du siehst, ob du recht hast.</p>";
        echo "</div>";

        echo "<div class=\"mid\">";
            echo "<form action=\"#\" method=\"POST\">";
            echo "<button type=\"submit\" name=\"hit\" value=\"left\"><img src=\"hut1.png\"></img></button>";
            echo "<button type=\"submit\" name=\"hit\" value=\"mid\"><img src=\"hut1.png\"></img></button>";
            echo "<button type=\"submit\" name=\"hit\" value=\"right\"><img src=\"hut1.png\"></img></button>";
        echo "</div>";

        echo "<div class=\"bot\">";
            echo "<h3>Statistik</h3>";
            echo "<table border=1>";
                echo "<tr>";
                    echo "<td>Spielanzahl gesamt:</td>";
                    echo "<td>".$plays."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>Treffer auf H&uuml;tchen links:</td>";
                    echo "<td>".$hitleft."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>Treffer auf H&uuml;tchen mitte:</td>";
                    echo "<td>".$hitmid."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>Treffer auf H&uuml;tchen rechts:</td>";
                    echo "<td>".$hitright."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>Trefferquote:</td>";
                    echo "<td>".$hits."</td>";
                echo "</tr>";
            echo "</table>";
        echo "</div>";

    echo "</div>";
echo "</body>";
echo "</html>";

print_r($_POST);

?>