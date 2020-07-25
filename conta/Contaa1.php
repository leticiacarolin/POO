<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<p>Conta 1.</p>
<form action="mostra.php" method="post">
 <input type="text" placeholder= "saque:" name="saque" />
<p><input type="submit" value="Sacar"></p>

<input type="text" placeholder= "deposito:" name="depo" />
<p><input type="submit" value="Depositar"></p>
<INPUT type="reset"  name="b2" value="finalizar">
<p> <p>

<?php

class Contaa1 {

private $conta1 = 200;
private $saqu;
private $depo;


public function getConta1(){
	return $this->conta1;
}
public function setConta1($conta1){
	 $this->conta1 = $conta1;
}
public function getSaqu(){
	return $this->saqu;
}
public function setSaqu($argSaqu){
	 $this->saqu = $argSaqu;
}
public function getDepo(){
	return $this->depo;
}
public function setDepo($argDepo){
	 $this->depo = $argDepo;
}

public function saque(){
				$cont1= $this-> getConta1();
				$saqueee= $this-> getSaqu();
				$saque=$cont1;
				
				
				if ($saqueee > $cont1) {  
            
            echo "Saldo Insuficiente da conta 1";
        
        }  
        else
        {
            
            $saque = ($cont1 - $saqueee);
           
			 echo "Saldo atual da conta 1: R$".$saque. "</br>";
        }
		return $saque;
	}
	public function deposito(){
				$cont1= $this-> getConta1();
				$depo= $this-> getDepo();
				$d=$cont1;
				
				$d = ($cont1 + $depo);
           
			 echo "Saldo atual da conta 1: R$".$d. "</br>";
        
		return $d;
	}
            
public function imprimir(){
               $saque=$this-> saque();
			   
			 
			  
            }

}

?>
</body>
</html>
