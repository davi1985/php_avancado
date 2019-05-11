<?php
//namespace -
require 'Sobre1.php';
require 'Sobre2.php';

$sobre = new \application\v2\About();
echo 'Versão da Classe em uso: '.$sobre->getVersion();
