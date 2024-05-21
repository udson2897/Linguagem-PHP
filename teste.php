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

<?php
echo"<br>";
$x="Meu Teste";
echo substr($x, 6);
?>
<?php
//<--*Caracteres de escape*-->
//\'	Single Quote	
//\"	Double Quote	
//\$	PHP variables	
//\n	New Line	
//\r	Carriage Return	
//\t	Tab	
//\f	Form Feed	
//\ooo	Octal value	
//\xhh	Hex value
?>
<?php
echo"<br>";
$x="Somos os chamados \"Vikings\" do norte"; 
echo $x;
?>
<?php
echo"<br>";
$a=5;
$b=5.34;
$c="253";
$d=1.9e411;
var_dump($a);
echo"<br>";
var_dump($b);
echo"<br>";
var_dump($c);
echo"<br>";
var_dump($d);
echo"<br>";
?>
<?php
echo"<br>";
//verifique se a variável é úm número inteiro
$x=5985;
var_dump(is_int($x));
echo"<br>";
//verificar novamente
$x=3.14;
var_dump(is_int($x));
echo"<br>";
$x=10.123;
var_dump(is_float($x));
echo"<br>";
$x=1.9e411;
var_dump(is_infinite($x));
echo"<br>";
?>
<?php
echo"<br>";
$a=25.232;
$b=5489;
$c="Meu Teste";
$d=12.5e896;
var_dump(is_string($a));
echo"<br>";
var_dump(is_string($b));
echo"<br>";
var_dump(is_string($c));
echo"<br>";
var_dump(is_string($d));
echo"<br>";
?>
<?php
echo"<br>";
$x=120.45075;
$int_cast=(int)$x;
echo $int_cast;
echo"<br>";
echo"<br>";
?>