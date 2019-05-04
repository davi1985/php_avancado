<?php
// Url amigavel | Módulo rewrite
// Caminhho no LAMPP - /opt/lampp/etc/httpd.conf
// RewriteEngine On -> start rewrite engine
// RewriteCond %{REQUEST_FILENAME} !-f -> ignora pastas
// RewriteCond %{REQUEST_FILENAME} !-d -> ignora arquivos
// RewriteRule ^(.*)$ index.php?post=$1 [L] -> expressão regular para urls

print_r($_GET); // retorno da variavel globlal $_GET
