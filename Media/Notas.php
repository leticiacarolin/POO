<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<form action="exibiir.php" method="post">
 <input type="text" placeholder= "Nota um:" name="nota1" />
<p> <input type="text" placeholder= "Nota dois:" name="nota2" /></p>
<p> <input type="text" placeholder= "Nota três:" name="nota3" /></p>
<p> <input type="text" placeholder= "Nota quatro:" name="nota4" /></p>
 <p><input type="submit" value="Média"></p>
</form>
<?php
class Media {

private $Nota1;
private $Nota2;
private $Nota3;
private $Nota4;

public function getNota1(){
	return $this->Nota1;
}
public function setNota1($argNota1){
	 $this->Nota1 = $argNota1;
}
public function getNota2(){
	return $this->Nota2;
}
public function setNota2($argNota2){
	 $this->Nota2 = $argNota2;
}
public function getNota3(){
	return $this->Nota3;
}
public function setNota3($argNota3){
	 $this->Nota3 = $argNota3;
}
public function getNota4(){
	return $this->Nota4;
}
public function setNota4($argNota4){
	 $this->Nota4 = $argNota4;
}
public function Media(){
                $Nota1= $this-> getNota1();
				$Nota2= $this-> getNota2();
				$Nota3= $this-> getNota3();
				$Nota4= $this-> getNota4();
				
	$media = ($Nota1+$Nota2+$Nota3+$Nota4)/4;
				return $media;
            }
public function exibir(){
               $media=$this-> media();
			   if ($media>=9 && $media<=10) {
				echo"PARABÉNS, VOCÊ TIROU MB". "<br/>" ;
				}
				if ($media>=7 && $media<=8) {
				echo"BOA, VOCÊ TIROU B". "<br/>" ;
				}
				if ($media>=5 && $media<=6) {
				echo"VOCÊ TIROU R". "<br/>" ;
				}
				if ($media<5) {
				echo"TALVEZ NA PROXIMA, VOCÊ TIROU I". "<br/>" ;
				}
            }

}
?>
</body>
</html>
