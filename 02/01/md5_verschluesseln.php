<?php 
session_start();

/* if (isset ($_POST)) {
    $eingabe = ($_POST['eingabe']);
    $laenge = strlen($eingabe);
};
 */
function move(){
    $eingabe = ($_POST['eingabe']);
    $laenge = strlen($eingabe);
    for ($i=0; $i<$laenge; $i++) {
        $zeichen = substr($eingabe, $i, 1);
        $code = ord($zeichen);
        $newcode = $code + 2;
        $newchar = chr($newcode);
        echo $newchar;
        array($newchar); 
    }
};

function cut(){

    for ($i=1; $i<=3; $i++) {
        $zeichen = substr(move(), $i, 1);
        echo "XXX: ".$zeichen;
        $code = ord($zeichen);
        echo $code;
        $char = chr($code);
        echo $char;
    }

}


$error1 = "<h1>Fehler: Es muss eine Eingabe erfolgen</h1>";
$error2 = "<h1>Fehler: Eingabe zu kurz - mindestens fünf Zeichen"."<br>"."die Eingabe hat nur $laenge Zeichen!<h1>";



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
            if (isset ($_POST['eingabe']) && empty($_POST['eingabe'])) {
                echo $error1;
                echo "<br>";
            };
            if (isset ($_POST['eingabe']) && $laenge < 5) {
                echo $error2;
                echo "<br>";
            }
            else {
                echo "Kontrolle: Zeichenanzahl: $laenge Zeichen";
                echo "<br>";
                echo "Kontrolle: Originaleingabe: $eingabe";
                echo "<br>";
                echo "Kontrolle: Eingabe verschoben Einzelzeichen: ";
                echo move();
                echo "<br>";
                echo "Kontrolle: neue Zeichenkette: ";
                echo move();

                echo "<br>";
                echo "<br>";
/*                 echo "hier".$newchar; */
                echo "<br>";
                echo "Kontrolle: Ausschnitt neue Zeichenkette: ";
                echo cut();
                                
            }
            echo "<br>";
            echo "Eingabebereich - Sicherheitsstufe 1";
            echo "<form action=\"#\" method=\"POST\">";
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