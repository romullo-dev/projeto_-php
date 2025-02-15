<?php

//DADOS DO CLIENTE

$cliente= array(
    array('nome' => 'Maria','Sobrenome'=> 'Lopes'),
    array('nome'=> 'Romulo','Sobrenome'=> 'França'),
);

//ACESSO DIRETO

//CLIENTE 0
print $nome = $cliente[0]['nome'];
print "<br>";

print $Sobrenome = $cliente[0]['Sobrenome'];

//ACESSO FOREACH

foreach ($cliente as $campo => $valor) {
    print "<BR> Nome: " . $valor['Nome'] . " Sobrenome: " . $valor['Sobrenome'];
}

?>