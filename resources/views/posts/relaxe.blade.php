@extends('template.section')
@section('title') Apenas Relaxe... @stop
@section('content')

<div class="container">
		<?php foreach($relaxes as $relaxe): ?>
	<div class="col-md-4">
			<h1><?php echo $relaxe['title']; ?></h1>
			<p>Por: <?php echo $relaxe['author']; ?></p>
			<p><?php echo $relaxe['content']; ?></p>
			<a href="<?php echo $relaxe['link']; ?>" target="_blank"><img src="<?php echo $relaxe['img'];?>"></a>
	</div>
<?php endforeach; ?>
</div>

@stop


