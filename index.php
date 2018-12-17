<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 04/12/2018
 * Time: 11:25
 */

// Premiere ligne
$i = 1;

while ($i < 6) {
    echo $i;
    $i++;
}


//Deuxieme ligne
echo"<br><br>";

$i = 1;

    do {

     echo $i;
     $i++;

 } while ($i < 6);

echo"<br><br>";
//Troisieme ligne
 for ($i = 0; $i < 10; $i++ ) {

    echo $i;

}


echo"<br><br>";
//Quatrieme ligne

$colors = array("red", "green", "blue", "yellow");

    forEach ($colors as $toto) {
    echo $toto;
    }


