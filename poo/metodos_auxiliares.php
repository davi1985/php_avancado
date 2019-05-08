<?php 
// Metodos auxiliares - funções privadas que só funcionam dentro da classe, com o objetivo de retornal algum dado interno da própria classe.
// ATENÇÃO - Propriedades da classe não precisam do $ dentro da classe
class Post
{
    private $title;
    private $date;
    private $body;
    private $comments;
    private $quantityComments;

    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($t)
    {
        if (is_string($t)) {
            $this->title = $t;
        }
    }
    public function addComments($msg)
    {
        $this->comments[] = $msg;
        $this->countComments();
    }
    public function getQuantityComments()
    {
        return $this->quantityComments;
    }
    // Método auxiliar
    private function countComments()
    {
        $this->quantityComments = count($this->comments);
    }

}

$post = new Post();
$post->addComments("Teste 1");
$post->addComments("Teste 2");
$post->addComments("Teste 3");
$post->addComments("Teste 4");

echo "<pre>";
print_r($post);
echo "Quantidade de comentários: ".$post->getQuantityComments();
?>
