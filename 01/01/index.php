<?php 
echo "<html>";
echo "<body>";
echo "<table border='1' >";


echo "<tr>";
for ($z=48; $z<=124; $z++)
    {
        echo "<td width='30px'>".$z.":</td>";
        echo "<td width='30px'><strong>".chr($z)."</strong></td>";
        switch ($z){
            case "54":
            echo "</tr>";
            case "61":
            echo "</tr>";
            case "68":
            echo "</tr>";
            case "75":
            echo "</tr>";
            case "82":
            echo "</tr>";
            case "89":
            echo "</tr>";
            case "96":
            echo "</tr>";
            case "103":
            echo "</tr>";
            case "110":
            echo "</tr>";
            case "117":
            echo "</tr>";
            case "124":
            echo "</tr>";
            break;

        }
    }

echo "</table>";
echo "</body>";
echo "</html>";
?>