@extends('template.section')
@section('title') Animal @stop
@section('content')

<?php 

date_default_timezone_get("America/Sao_Paulo");
$date = date('d/m/Y H:i')


?>

<?php
function limitarTexto($texto, $limite){
    $texto = substr($texto, 0, strrpos(substr($texto, 0, $limite), ' ')) . '...';
    return $texto;
}
 
// String a ser limitada
$string = 'Como limitar caracteres sem cortar as palavras com PHP';
 
// Mostrando a string limitada em 25 caracteres.
 ?>


<section class="container">
	<div class="row">
	<?php foreach ($animals as $animal):?>

		<div class="col-md-4">
			<h1><?php echo $animal['title']; ?></h1>
		<figure>
			<a href="<?php echo $animal['photo']; ?>" target="_blank">
				<img src="<?php echo $animal['photo']; ?>" width="300" height="200">
			</a>
		</figure>
		<p>
			<?php echo(limitarTexto($animal['content'], $limite = 100));  ?>

		</p>
		</div>

		<?php endforeach; ?>
	</div>
</section>

@stop
