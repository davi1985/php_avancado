<?php 
// getters and setters
class Post
{
	private $title;
	private $date;
	private $body;
	private $comments;

	public function getTitle()
	{
		return $this->title;
	}

	public function setTitle($title)
	{
		if(gettype($title) == 'string') {
			$this->title = $title;
		}
	}

	public function getDate()
	{
		return $this->date;
	}

	public function setDate($date)
	{
		$this->date = $date;
	}

	public function getBody()
	{
		return $this->body;
	}

	public function setBoby($text)
	{
		$this->body = $text;
	}

	public function getComments()
	{
		return $this->comments;
	}

	public function setComments($comments)
	{
		$this->comments = $comments;
	}

}

$post = new Post();
$bodyText = "Donec gravida fermentum mauris. Nulla ac convallis ante, vel convallis nisi. Aliquam nec hendrerit purus. Etiam vitae leo a mauris tristique dictum. Integer tristique, nulla at consectetur elementum, mi libero vulputate ex, vel imperdiet leo lorem vitae mauris. Morbi sit amet posuere libero. Integer ut enim nisi. Sed suscipit nibh sed venenatis tristique. Ut gravida tortor nec libero tempus mollis. Quisque sit amet urna et justo facilisis interdum et ut metus. Sed odio quam, vestibulum id magna rhoncus, vulputate placerat arcu. Fusce consectetur lacus sem, ac rutrum tellus sollicitudin quis. Nunc fringilla mi mi, a accumsan ipsum laoreet bibendum.

In sodales et arcu ac ultricies. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas dictum tristique sem ac suscipit. Pellentesque ut purus tellus. Vivamus eleifend faucibus dolor, nec faucibus leo pellentesque non. Sed tincidunt felis justo, quis pharetra dolor tincidunt ac. Nullam ut quam vel dolor congue pulvinar. Donec cursus condimentum metus.

Aenean quis nulla risus. Nullam et fermentum ante. Nullam elit ante, tincidunt in volutpat sed, condimentum ac ante. Cras fermentum nibh a libero pulvinar, quis suscipit sem ultrices. Nulla vulputate eu enim at fringilla. Curabitur quis ipsum aliquam, ultricies dui et, vehicula ipsum. Vestibulum in lectus consequat, consectetur nisl a, dignissim massa. Fusce aliquam placerat nibh, at efficitur ante. Donec convallis, arcu eu vehicula rhoncus, dolor nunc sagittis nisl, sed hendrerit tellus ante ut ex. Duis velit dolor, vulputate sed euismod eu, dictum eu libero. Ut consequat aliquam mauris.";

$commentsArray = [
	"Excelente Aula.",
	"POO é massa mano.",
	"O Bonieky é demais :)",
	"Vou praticar mais..."
];
$now = date('d/m/Y');

$post->setTitle('Learning PHP POO');
$post->setBoby($bodyText);
$post->setDate($now);
$post->setComments($commentsArray);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>POST BLOG</title>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
	<div class="container">
		<p>BLOG</p>
		<hr>
	</div>
	<div class="container">
		<h3>
			<?php echo $post->getTitle(); ?>

		</h3>

		<p>
			<?php
				$bodyContent = preg_split('[\n]', $post->getBody()); 
				foreach ($bodyContent as $key => $value) {
				 	echo "<p>{$value}</p>";
				 } 
			?>
		</p>

		<small>
			Criado em: <?php echo $post->getDate(); ?>	
		</small>
		<hr>
	</div>	

	<div class="container">
		<p>Comentários: </p>
		<?php 
			foreach ($post->getComments() as $key => $value):?>
				<span class="card">
					<i style="padding: 50px;" ><?php echo $value; ?></i>
				</span><br/>
		<?php endforeach; ?>
	</div>

	<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
