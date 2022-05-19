<?php

    class ContaBanco {

        #atributos

        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        #métodos de de abertura e fechamento
        public function abrirConta($t){
            $this->setTipo($t);
            $this->setStatus(true);
            if ($t == "CC") {
                $this->setSaldo(50);
            }else{
                $this->setSaldo(150);
            }

        }

        public function fecharConta(){
            if ($this->getSaldo() > 0) {
                echo "Conta com dinheiro, não posso fechá-la!";
            } elseif ($this->getSaldo() < 0) {
                echo "Conta em débito";
            }else {
                $this->setStatus(false);
                echo "<p>Conta de ". $this->getDono() . " fechada com sucesso </p>";
            }
            

        }

        public function depositar($v){
            if($this->getStatus() == true){
                $this->setSaldo($this->getSaldo() + $v);
                echo "<p>Saque de R$ $v efetuado com sucesso na conta de " . $this->getDono() ."</p>";
            }else{
                echo "Conta não esta aberta";
            }

        }


        public function sacar($valor){
           if($this->getStatus() == true){
            if ($this->getSaldo() >= $valor) {
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>Saque de R$ $valor autorizado na conta de " . $this->getDono() . "</p>";
            }else {
                echo "Valor insuficiente para sacar";
            }   
           }else{
               echo "Conta inexistente";
           }

        }

        
        public function pagarMensalidade(){
            
            if ($this->getTipo() == "CC") {
             $v = 12;
            }else{
                $v = 20;
            }

            if($this->getStatus() == true){
                if($this->getSaldo() > $v){
                    $this->setSaldo($this->getSaldo() - $v);
                    echo"<p>Mensalidade de R$ $v debitada na conta de " . $this->getDono() . "</p>";
                }else {
                    echo "Saldo insuficiente";
                }
            }else{
                echo "conta inexistente";
            }


        }



    #métodos especiais
    
    public function __construct(){
        $this->setSaldo(0);
        $this->setStatus(false);

    } 

    public function setNumConta($n){
        $this->numConta = $n;
    }

    public function getNumConta(){
        return $this->numConta;
    }

    public function setTipo($t){
        $this->tipo = $t;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setDono($d){
        $this->dono = $d;     
    }

    public function getDono(){
        return $this->dono;
    }

    public function setSaldo($s){
        $this->saldo = $s;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function setStatus($status){
        $this->status = $status;
    }

    public function getStatus(){
        return $this->status;
    }






    }

?>