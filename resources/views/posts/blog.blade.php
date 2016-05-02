@extends('template.section')
@section('title') Últimas Notícias @stop
@section('content') 

<div class="text-center"><h1>Últimas Notícias</h1></div>
<div class="container">
	<div class="row">
	<?php foreach ($blogs as $blog): ?>
			<div class="col-md-6">
				<h3><?php echo $blog['title']; ?></h3>
				<p><img class="img-responsive" src="<?php echo $blog['img']; ?>" width="350" height="300"></p>
				<h5><?php echo $blog['content']; ?></h5>
				<a href="<?php echo $blog['link']; ?>" target="_blank" class="btn btn-danger">Leia Mais</a>
			</div>
	<?php endforeach; ?>
	
	</div>
</div>
 @stop
