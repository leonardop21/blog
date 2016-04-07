@extends('template.section')
@section('title') Últimas Notícias @stop

@section('content') 

<div class="text-center"><h1>Últimas Notícias</h1></div>

<?php foreach ($resultTitles as $resultTitle ):?>
<?php foreach ($resultContents as $resultContent ):?>
<?php foreach ($imagens as $imagem ):?>
<?php foreach ($verificalink as $link ):?>

<div class="container">
	<div class="row">
			<div class="col-md-6">
				<h3><?php echo $resultTitle; ?></h3>
				<p><img class="img-responsive" src="<?php echo $imagem; ?>" width="500" height="300"></p>
				<h5><?php echo $resultContent; ?></h5>
				<a href="<?php echo $link; ?>" target="_blank" class="btn btn-danger">Leia Mais</a>
			</div>
	<?php endforeach; ?>
	<?php endforeach; ?>
	<?php endforeach; ?>
	<?php endforeach; ?>
	</div>
</div>



 @stop

