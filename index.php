<!DOCTYPE html>
<html>
<body>
	<?php




$txt1 = "Aprendendo PHP";
$txt2 = "https://w3Schools.com<br>";
echo "<h2>" . $txt1 . "</h2>";
echo "Aprenda PHP usando o site " . $txt2 . "<br>";




# DESAFIO I
print "<h3>Desafio I!</h3>";
echo nl2br("Nome: Márcio Fernando Maia \n Escola: Professor de Tecnologia na escola Célio Rodrigues Alves<br><br>");





// DESAFIO II
print "<h3>Desafio II!</h3>";
$name = "<b>Márcio Fernando Maia</b>";
$age = "<b>34</b>";
$school = "<b>professor de Tecnologia da Informação na escola, Célio Rodrigues Alves.</b><br>";
echo nl2br ("O professor: ".$name." tem a idade de ".$age." anos, e é: ".$school);



// DESAFIO III
print "<h3>Desafio III!</h3>";
print "01) ";
$v1 = 11;
$v2 = 11;
$v3 = 11;
$total = $v1 + $v2 + $v3;
echo "O resultado da some é: " . $total . "<br>";


print "02) Não fazer a segunda questão";
//fluxo de dados simples usando o ternáro com operador de comparação
/*

(NÃO FAÇA ESTA SEGUNDA QUESTÃO) – Preciso explicar o que é o operador ternário
Link para explicação (PHP | Operador Ternário – Acervo Lima)
*/

//$b = 10;
//$c = 50;
//echo ($b<=$c? "b é maior que c":"C é menor que B");

// DESAFIO IV
print "<h3>Desafio IV!</h3>";
for($i=0;$i<11;$i++){
	//echo $i;
	echo "O valor da tabuáda é: <b>$i</b> ";
}





/*
$professor = "Marcio Fernando Maia";
$n1 = 10;
$n2 = 10;
$n3 = 10;
$media = ($n1 + $n2 + $n3) / 3;





echo "<h2>" . $professor . "</h2>";
echo "<h4> Tira sempre " . $media  . "<h4>";
echo "Teste para o for<br>";
*/








//Desafio IV 


/* 6) Faça um algoritmo de uma tabuada 1 ao 10, usando o laço de repetição for
for($i=0;$i<10;$i++){
	echo $i++;
}*/

//7) Faça um programa em PHP que defina uma variável com o peso e a altura de uma pessoa. Calcule e mostre o IMC.  Veja um exemplo no meu site no endereço (IMC (imcdomaia.netlify.app)











	?>
</body>
</html>

