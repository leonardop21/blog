@extends('template.section')
@section('title') Últimas Notícias @stop
@section('content') 
<div class="text-center"><h1>Últimas Notícias</h1></div>
<div class="container">
	<div class="row">
	@foreach($blogs as $blog)
			<div class="col-md-6">
				<h3>{{ $blog->title }}</h3>
				<p><a href="{{ $blog->img }}" target="_blank">
					<img class="img-responsive" src="{{ $blog->img }}" width="350" height="300"></p>
				</a>
				<h5>{{ $blog->content }}</h5>
				<a href="{{ $blog->link }}" target="_blank" class="btn btn-danger">Leia Mais</a>
			</div>
		@endforeach
	</div>
</div>
 @stop
