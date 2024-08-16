<?php
$counterFile = 'counter.txt';

// Verifica se o arquivo de contagem existe, se não, cria com o valor inicial 0
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, '0');
}

// Lê o valor atual do contador
$currentCount = file_get_contents($counterFile);

// Incrementa o contador
$currentCount++;

// Salva o novo valor no arquivo
file_put_contents($counterFile, $currentCount);

// Retorna o valor atualizado
echo $currentCount;
?>
