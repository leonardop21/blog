@extends('template.section')
@section('title') Área administrativa @stop
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
		<br><br>
		<a href="{{ route('admin.posts.create') }}" class="btn btn-success">
			Criar novo post
		</a>
		<br><br>
			<table class="table">
				<tr>
					<th>ID</th>
					<th>TÍTULO</th>
					<th>AÇÃO</th>
				</tr>

				<?php foreach ($posts as $key => $post): ?>

				<tr>
					<td><?php echo $post['id']; ?></td>
					<td><?php echo $post['title']; ?></td>
					<td>
					<a href="{{ route('admin.posts.edit', ['id'=> $post->id]) }}" class="btn btn-default">Editar</a>
					<!-- <a href="{{ route('admin.posts.delete', ['id'=> $post->id]) }}" class="btn btn-danger">Deletar</a> -->

					</td>
				</tr>
			<?php endforeach; ?>
			</table>

			{!! $posts->render() !!}

		</div>
	</div>
</div>


@endsection