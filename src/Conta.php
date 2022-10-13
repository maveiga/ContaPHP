<?php

class Conta{

    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;
    private  static  $numeroDeContas =0;


    public function __construct($cpfTitular,$nomeTitular)
    {
        $this->cpfTitular= $cpfTitular;
        $this->validaNomeTtitular($nomeTitular);
        $this->nomeTitular = $nomeTitular;
        $this->saldo =0;
        self::$numeroDeContas++;

    }




    public function saca(float $valorSacar)
    {
        if($valorSacar >$this->saldo)
        {
            echo "saldo indisponível";
            return;
        }
        $this->saldo-=$valorSacar;
    }

    public function deposita(float $valorDepositar):void
    {
        if($valorDepositar < 0)
        {
            echo "valor precisa ser positivo";
            return;
        }
        $this->saldo+=$valorDepositar;
    }

    public function transfere(float $valorTransferir, Conta $contaDestino):void

    {
        if($valorTransferir >$this->saldo)
        {
            echo"Saldo indisponível";
            return;
        }
            $this->sacar($valorTransferir);
            $contaDestino->depositar($valorTransferir);
        }

    public function recuperaSaldo()
    {
        return $this->saldo;
    }

    public function recuperaCpfTitular():string
    {
        return $this->cpfTitular;
    }

    public function recuperaNomeTitular():string
    {
        return $this->nomeTitular;
    }

    private function validaNomeTtitular(string $nomeTitular)
    {
        if(strlen($nomeTitular)<5){
            echo'Nome precisa ter pelo menos 5 caractere';
            exit();
        }
    }

    public static function recuperNumeroDeContas():int

    {
        return self::$numeroDeContas;
        
}



}

