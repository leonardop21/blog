@extends('template.section')
@section('title') Área administrativa @stop
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
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
					<td></td>
				</tr>
			<?php endforeach; ?>
			</table>

			{!! $posts->render() !!}

		</div>
	</div>
</div>


@endsection