      Padrão Singleton
OBJETIVO: Como criar uma class no padrão singleton.
É dos padrões de projetos mais utilizados na programação de php orientado a objetos.
1° O que é o Padrão Singleton ?
Ele é um padrão que você usa quando tem um objeto que não pode criar varias instâncias desse objeto. Você tem, por exemplo, um objeto que tem determinada caracteristica e você quer que toda vez que é usado use objeto no sistema, ele seja um objeto só.
Exemplo: tenho a instância da class Pessoa().
--Agora quero usar os metódos dela em váriaveis diferentes.Com o Padrão Singleton eu posso.
-No caso as variáveis são: $dados e $dados2.

	$dados = Pessoa::getInstance();
	$dados->setNome("paty");
	echo "Meu nome: ".$dados->getNome();

	$dados2 = Pessoa::getInstance();
	echo "Meu nome eh: ".$dados2->getNome();
