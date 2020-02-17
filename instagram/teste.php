<?php
$nome = 'Flávio';
$sobrenome = 'Félix';
$idade = '90';


echo 'Meu nome é: '.$nome.''.$sobrenome.' e tenho '.$idade.' anos';

?>

<?php
$x = 10;
$x = $x + 20;

echo "X: ".$x;

?>


<?php
$sexo = 'Feminino';

if($sexo == "masculino"){
    echo "Homem";
}else{
    echo "Mulher";
}
?>


<?php
$x = 0;
while ($x < 10){
    echo "N: ".$x."<br/>";
    $x = $x + 1;
}
?>

<?php
function multiplicar ($x, $y)
{
    $resultado = $x * $y;
    echo "Resultado: ".$resultado;
    
}    
multiplicar (2, 5);

?>

















