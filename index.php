<?php
class Pessoa {

	private $nome;
	private $idade;

	//Criação do metodo publico que retorna para gente.
	public static function getInstance() {

		static $instance = null;
		if($instance === null) {
			$instance = new Pessoa();
		}
		return $instance;
	}

	public function setNome($n) {
		$this->nome = $n;
	}
	public function getNome() {
		return $this->nome;
	}

	public function setIdade($i) {
		$this->idade = $i;
	}
	public function getIdade() {
		return $this->idade;
	}
}

$cara = Pessoa::getInstance();
$cara->setNome("Patricia Gomes");

$cara2 = Pessoa::getInstance();
$cara2->setIdade(20);

echo "Minha idade: ".$cara->getIdade();