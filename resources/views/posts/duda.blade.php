@extends('template.section')
@section('title') Zoando o Betoneira Plus +++ @stop

@section('content') 
<div class="text-center"><h1> Zoando o Duda</h1></div>
<div class="container">
	<div class="row">
	<?php foreach ($dudas as $key => $duda): ?>
			<div class="col-md-6">
				<h3><?php echo $duda['title']; ?></h3>
				<p>
					<?php echo $duda['content']; ?>
				<a href="<?php echo $duda['img']; ?>" target="_blank">
					<img class="img-responsive" src="<?php echo $duda['img']; ?>" width="350" height="300">
				</a>
				</p>
			</div>
	<?php endforeach; ?>
	</div>
</div>
 @stop
