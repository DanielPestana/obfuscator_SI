<?php
require 'src/Obfuscator.php';

$sData = <<<'DATA'
    echo 'Este aqui é um outro teste para ver se realmente esta funcionando.';
DATA;

$sObfusationData = new Obfuscator($sData, 'Class/Code NAME');
file_put_contents('another_test.php', '<?php ' . "\r\n" . $sObfusationData);