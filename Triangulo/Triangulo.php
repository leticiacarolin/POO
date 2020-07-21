<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

<form action="exibir.php" method="post">
 <input type="text" placeholder= "base:" name="base" />
<p> <input type="text" placeholder= "altura:" name="altura" /></p>

 <p><input type="submit" value="Calcular"></p>
</form>

<?php

class Triangulo {
private $Base;
private $Altura;

public function getBase(){
	return $this->base;
}
public function setBase($argBase){
	 $this->base = $argBase;
}
public function getAltura(){
	return $this->altura;
}
public function setAltura($argAltura){
	 $this->altura = $argAltura;
}
public function area(){
                $base= $this-> getBase();
				$altura= $this-> getAltura();
				
				$area = ($base*$altura)/2;
				return $area;
            }
public function exibir(){
                
				echo"Base: ". $this-> getBase(). "<br/>". "Altura: ". $this-> getAltura(). "<br/>". "<br/>". "Área: ". $this-> area();
				
				
            }

}
?>
</body>
</html>
