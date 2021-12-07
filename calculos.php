<?php
session_start();
$numero1 = filter_input(INPUT_POST, "n1", FILTER_VALIDATE_INT); //validando informações se são so tipo int
$numero2 = filter_input(INPUT_POST, "n2", FILTER_VALIDATE_INT);
$op = $_POST['operacao'] ?? " "; //caso não tenha valor em operacao é incluido o valor ""

class Calculadora{ //processando os dados
	public $total = 0;

	public function somar($n1, $n2){
		$this->total = $n1 + $n2;
	}
	public function subtrair($n1, $n2){
		$this->total = $n1 - $n2;
	}
	public function dividir($n1, $n2){
		$this->total = $n1 / $n2;
	}
	public function multiplicar($n1, $n2){
		$this->total = $n1 * $n2;
	}
	public function limpar(){
		$this->total = 0;
	}
}

$calc = new Calculadora; //verificando o tipo de operacao
if ($op == "somar") {
	$calc->somar($numero1, $numero2);
}
if ($op == "subtrair") {
	$calc->subtrair($numero1, $numero2);
}
if ($op == "dividir") {
	$calc->dividir($numero1, $numero2);
}
if ($op == "multiplicar"){
	$calc->multiplicar($numero1, $numero2);
}

//caso total seja TRUE, retornará o valor para index.php
if ($calc->total) {
	$expiracao = time() + (84600 * 30);
	setcookie($calc->total, $expiracao);
	header("Location: index.php");
	$_SESSION["total"] = $calc->total;
	exit();
}
?>