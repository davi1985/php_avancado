<?php
/*
Interfaces de objetos permitem a criação de códigos que especificam quais métodos uma classe deve implementar, sem definir como esses métodos serão tratados.

Interfaces são definidas da mesma forma que classes, mas com a palavra-chave interface substituindo class e com nenhum dos métodos tendo seu conteúdo definido.

Todos os métodos declarados em uma interface devem ser públicos, essa é a natureza de uma interface.

Para implementar uma interface, o operador implements é utilizado. Todos os métodos na interface devem ser implementados na classe; não fazê-lo resultará em um erro fatal. Classes podem implementar mais de uma interface se assim for desejado, separando cada interface com uma vírgula.
*/

interface Animal
{
    public function andar();
}
class Cachorro implements Animal
{
    public function andar()
    {
        echo 'Estou andando';
    }
}
$cachorro = new Cachorro;
$cachorro->andar();
