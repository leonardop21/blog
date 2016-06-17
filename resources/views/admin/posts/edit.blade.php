@extends('template.section')
@section('title') Área administrativa @stop
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Editar post: {{ $posts->title }}</h1>
			@if($errors->any())

			<ul class="alert">
				@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>

			@endif
			{!! Form::model($posts,['route'=>['admin.posts.update', $posts->id], 'method'=>'put']) !!}

			@include('admin.posts._form')

			<div class="form-group">
				{!! Form::submit('Save', ['class'=>'btn btn-success']) !!}
			</div>

			{!! Form::close() !!}
		</div>
	</div>
</div>


@endsection