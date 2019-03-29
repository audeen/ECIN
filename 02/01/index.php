<?php 
session_start();

$error1 = "<h1>Fehler: Es muss eine Eingabe erfolgen</h1>";
$error2 = "<h1>Fehler: Eingabe zu kurz - mindestens fünf Zeichen"."<br>"."die Eingabe hat nur 3 Zeichen!";

echo "<!doctype html>";
echo "<head>"; 
    echo "<meta charset=\"utf-8\">";
    echo "<link rel=\"stylesheet\" href=\"style.css\">";
echo "</head>"; 
echo "<body>";
echo "<div class='menu'>";

echo "Kontrollanzeige - Session_id: "."<br>" .session_id();
echo "<br>";
$sitzung = session_id();
echo "Kontrollanzeige - Variable mit Session_id: "."<br>".$sitzung;
echo "<br>";
print_r ($_SESSION);
echo "<br>";
print_r ($_POST);
echo "<br>";
echo "<button>".session_destroy()."</button>";

echo "</div>";    
echo "<div class='site'>";

    echo "<div class='main'>";

        echo "<div class='io'>";
            echo "Eingabebereich - Sicherheitsstufe 1";
            echo "<form action=\"md5_verschluesseln.php\" method=\"POST\">";
            echo "<input type=\"text\" name=\"eingabe\">";
            echo "<br>";
            echo "<input type=\"submit\" value=\"absenden\">";
            echo "</form>";
            echo "</div>";


echo "</div>";    
    
echo "</div>";
    
echo "</body>"; 
echo "</html>";
?>