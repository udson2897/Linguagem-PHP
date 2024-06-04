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
<?php
echo"<br>";
$octeto = 172;
$mascara = 248;
$valor = $octeto & $mascara;
echo"<br> Aplicando a operação AND entre a máscara e octeto com valor $valor";
echo"<br>";
?>
<?php
echo"<br>";
$valor=16;
if ($valor==15){
	echo"<br> Valor é 15";
}
elseif  ($valor>= 10){
	echo "Valor é maior ou igual a 10";
} 
else {
	echo"Valor é menor que 10";
	
}
?>
<?php
echo"<br>";
$v="Fabio";
$nome= $v . " dos Reis";
echo $nome;
?>
<?php
echo"<br>";
$valor= 10;
if ($valor=== "10") {
	echo "valor é string";
	
}
else {
	echo "valor não é string ";
}
echo "<br><br>";
echo "Agora, fazendo cast no valor atribuído a variável: <br>";
$valor = (string) 10;
if ($valor ==="10") {
	echo "Valor não é string";
} 
else {
	echo "Valor não é string";
}
echo"<br>";
?>
<?php
echo"<br>";
$a = 10;
$b = 20;
echo ($a == 10) && ($b == 20);
echo "<br>";
if (($a == 10) && ($b == 20)) {
	echo "Ambos os valores estão corretos <br>";
}	
if (($a == 20) && ($b == 20)){
	echo "Um dos valores está correto <br>";
}	
if (($a == 10) && ($b == 10)){
	echo "Um dos valores está correto <br>";
}
echo"<br>";	
?>
<?php
echo"<br>";
$a= 3+5 * 4;
$b= (3+5) * 4;
echo " O resultado do cálculo é $a";
echo"<br>";
echo " O resultado do cálculo é $b";
?>
<?php
echo"<br>";
$a= 10;
$b= 9;
$c= 5;
$resultado = ($a+$b+$c)/3;
echo "<br> A média é : $resultado";

?>
<?php
echo"<br>";
$a= 10;
$b= 9;
$c= 5;
$resultado = ($a+$b+$c)/3;
if ($resultado  >=7) {
	echo " Aluno aprovado <br>";
}	
 else {
	echo " Aluno reprovado <br>";
}
?>
<?php
echo"<br>";
$a= 5;
$b= 5;
$c= 5;
$d= 5;
$resultado = ($a+$b+$c+$d)/4;
	echo "<br>"; 
	$mensagem='';
if ($resultado >=7 && $resultado!=10) {
	$mensagem= " Aluno foi aprovado<br>";
}	
 elseif ($resultado==0) {
	 $mensagem= " Estude mais, você não acertou nada! <br>";
 }
	elseif ($resultado==10) {
		$mensagem= " Parabéns ! Aprovado com nota máxima! <br>";
	}
elseif ($resultado <=7) {
	$mensagem= " O aluno foi reprovado ! <br>";
	echo "Sua nota foi: $resultado . $mensagem"; 
}
else
?>
<?php
echo"<br>";
$num= 20;

if ($num >= 20 && $num != 0) {
	echo "O número é menor que 20";
}
elseif  ($num <= 20 ) {
	echo "O número é maior que 20";
}
elseif  ($num ==20) {
	echo "O número é igual a 20";
}

else
echo"<br>";
?>
<?php
echo"<br>";
echo"<br>";
$num= 10;

if ($num >=16  && $num <= 65) {
	echo "O aluno pode tomar a medicação!";
}
elseif ($num <10 ) {
	echo" O aluno está proíbido de usar o medicamento";
}	
elseif ($num > 65 ) {
	echo" O aluno pode tomar a medicação mas com restrições";
}
elseif ($num >10 && $num <=15) {
	echo "O aluno deve procurar um médico!";
}
else

?>
<?php
echo"<br>";		
$a= 5;			// inteiro
$b= 3.14;		// float
$c= "hoje";		// string
$d= true;		// booleano
$e= null;		// null

//Conversão para string , float ,string, booleano, null. Para alterar o tipo de conversão basta trocar a variável que está dentro do parêntese 
$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

// Mostrar ao usuário
echo"<br>";	
var_dump ($a);echo"<br>";
var_dump ($b);echo"<br>";
var_dump ($c);echo"<br>";
var_dump ($d);echo"<br>";
var_dump ($e);echo"<br>";
echo"<br>";	

?>
<?php
echo"<br>";	
$a = array ("Volvo", "BMW", "Toyota"); // array indexado
$b = array ("Peter">="30", "João" >="40", "Carlos">="50"); //array associativo

$a= (object) $a;
$b= (object) $b;
echo"<br>";
var_dump ($a);echo"<br>";
var_dump ($b);echo"<br>";

?>
<?php
echo"<br>";
echo (pi());
echo"<br>";
echo (min(0, 20, 130, -10. -230));
echo"<br>";
echo (max(0, 25, -230, 100, -530));
echo"<br>";
echo (sqrt(64))."<br>"; // sqrt = raiz quadrada
echo (sqrt(4))."<br>"; // sqrt = raiz quadrada
echo (round(0.60))."<br>"; // arrendondar um número
echo (rand()). "<br>"; // gera números aleatórios 
echo (rand(10, 50)). "<br>"; // gera números aleatórios 
?>
