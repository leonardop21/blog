@extends('template.section')
@section('title') Zoando o Betoneira Plus +++ @stop
@section('content')
<div class="text-center"><h1> Zoando o Duda</h1></div>
<div class="container">
	<div class="row">
	<?php foreach ($dudas as $key => $duda): ?>
			<div class="col-md-4">
				<h3><?php echo $duda['title']; ?></h3>
				<p>
					<?php echo $duda['content']; ?>
				<a href="<?php echo $duda['img']; ?>" target="_blank">
					<img class="duda img-responsive" src="<?php echo $duda['img']; ?>">
				</a>
				</p>
			</div>
	<?php endforeach; ?>
	</div>
</div>
<style type="text/css">
.duda {width: 300px; height:350px; align-items: right;}
</style>
 @stop
