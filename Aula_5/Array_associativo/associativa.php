<?php

// DADOS DO CLIENTE
$cliente = array(
    array('Nome' => 'Maria', 'Sobrenome' => 'Lopes'),
    array('Nome' => 'Romulo', 'Sobrenome' => 'França'),
);

// ACESSO DIRETO
// CLIENTE 0
print $nome = $cliente[0]['Nome'];
print "<br>";

print $Sobrenome = $cliente[0]['Sobrenome'];

// ACESSO FOREACH
foreach ($cliente as $campo => $valor) {
    print "<BR> Nome: " . $valor['Nome'] . " Sobrenome: " . $valor['Sobrenome'];
}

?>
