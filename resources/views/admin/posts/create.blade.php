@extends('template.section')
@section('title') Área administrativa @stop
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Criar novo Post</h1>
			@if($errors->any())

			<ul class="alert">
				@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>

			@endif
			{!! Form::open(['route'=>'admin.store', 'method'=>'post']) !!}

			<div class="form-group">
				{!! Form::Label('title', 'Título') !!}
				{!! Form::Text('title', null, ['class'=>'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::Label('content', 'Conteúdo') !!}
				{!! Form::Textarea('content', null, ['class'=>'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::Label('img', 'Imagem') !!}
				{!! Form::Text('img', null, ['class'=>'form-control']) !!}
			</div>


			<div class="form-group">
				{!! Form::submit('Criar Post', ['class'=>'btn btn-success']) !!}
			</div>

			{!! Form::close() !!}
		</div>
	</div>
</div>


@endsection