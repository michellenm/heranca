<<?php
// aspas simples = imprime oq exatamente  esta escrito
// aspas duplas = imprime oq esta escrito e faz as concatenações

require_once "Funcionario.php";
class Gerente extends Funcionario{
  public $usuario;
  public $senha;

  public function calculaBonificacao(){
  return $this->salario *0.6 + 100;

  }

}

 ?>
