<?php


class Conta {
    
    private $cpfTitular;
    private $saldo;
    
    // ....
  
    
    function exibirSaldoSituacao() {
        
        if($this->getSaldo()>0){
            $str =  "Positivo";
        } else if($this->getSaldo() < 0 ){
            $str =  "Negativo";
        } else{
            $str = "Zerado";
        }
        
        return $str;
    }
    
    
    function __clone(){
        echo "Um objeto da classe Conta foi clonado.<br>";
    }
    
    
    function __toString() {
        $str = "Exibindo objeto da classe Conta: <br>";
        $str.= "CPF: ". $this->getCpfTitular(). "<br>";
        $str.= "Saldo: ". $this->getSaldo().    "<br>";
        
        return($str);        
    }
    
    
    function __construct($cpfTitular=null, $saldo=0) {
        $this->cpfTitular = $cpfTitular;
        $this->saldo = $saldo;
        
        echo "Um objeto da classe Conta foi criado.<br>";
    }

    
    function __destruct() {        
        echo "Um objeto da classe Conta foi destruído. <br>";
    }
    
    
        
    
    function getCpfTitular() {
        return $this->cpfTitular;
    }

    function getSaldo() {
        return $this->saldo;
    }

    function setCpfTitular($cpfTitular) {
        $this->cpfTitular = $cpfTitular;
    }

    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }


    
    
}

//exemplo de heranca
class ContaConjunta extends Conta{
    // ...
}
