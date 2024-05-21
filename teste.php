<?php
define("INFERIOR",1);
define("SUPERIOR",100);

$numero = rand(INFERIOR, SUPERIOR);
echo "Meu numero da sorte: <br>";
echo $numero."<br>";
?>
<?php
$x = 5; //Ambito global

function meuTeste () {
    echo "<p>A variavel x dentro da função é: $x</p><br>";
    }
    //Ambito local
         meuTeste ();
    echo "<p>A variavel x dentro da função é: $x</p><br>";
   
?>

<?php
$x = 5;
$y = 10;
function numero(){
    global $x, $y;
    $y= $x + $y;
    }
numero();
echo $y;
?>

<?php
//ambito estatico
function teste(){
        static $x = 0;
        echo $x;
        $x++;
    }
echo "<br>";
echo "<br>";
teste();
echo "<br>";
teste();
echo "<br>";
teste();

?>
<?php
echo "<br>Geovane da Costa";
print "<br>Geovane da Costa<br><br>";
?>
<?php
$x = 5;
var_dump($x);
echo "<br>";
?>
<?php
$x = 'Minha string';
$y = "Minha string 2!";
var_dump($x);
echo "<br>";
var_dump($y);
echo "<br>";
?>
<?php
$x = 3.14;
var_dump($x);
echo "<br>";
?>
<?php
$x = true;
var_dump($x);
echo "<br>";
?>
<?php
$cars =array("BMW","BYD","AUDI");
var_dump($cars);
echo "<br>";
?>
<?php
echo"<br>";
echo strlen("Olá Mundo")
?>
<?php
echo "<br>";
echo str_word_count("Olá Mundo")
?>
<?php
echo"<br>";
echo strpos("Novo bravo mundo", "  Iron Maiden");
?>
<?php
$x = "Ola Mundo";
echo strtoupper($x);
?>
<?php
echo "<br>";
$x="Novo Teste";
echo strtolower($x);
?>
<?php
echo "<br>";
$x="Meu Teste";
echo str_replace("Teste", "Arquivo", $x);
?>
<?php
echo"<br>";
$x="Meu Teste";
echo strrev($x);
?>
<?php
echo"<br>";
$x=" Meu Teste";
echo trim($x);
?>
<?php
echo"<br>";
echo"<input value='" . $x ."'>";
echo"<br>";
echo "<input value='" . trim($x) . "'>";
?>
<?php
echo"<br>";
$x="Meu";
$y="Teste";
$z=$x . $y;
echo $z;	
?>
<?php
echo"<br>";
$a="Udson ";
$b="Diego ";
$c="Vieira ";
$d="da Costa";
$x=$a . $b . $c . $d;
echo"<br>";
echo $x;

?>
