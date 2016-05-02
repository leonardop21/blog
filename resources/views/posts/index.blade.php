@extends('template.section')
@section('title') Post Leonardo @stop
@section('content')

	@foreach($posts as $post)

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h1>{{$post->title}}</h1>
			<p>{{$post->author}}</p>
			<p>{{$post->content}}</p>
			<p>{{$post->created_at}}</p>
			<p>{{$post->updated_at}}</p>
			<hr></hr>
		</div>
	</div>
</div>
@endforeach
@stop