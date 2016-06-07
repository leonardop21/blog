@extends('template.section')
@section('title') Área administrativa @stop
@section('content')

<div class="container">
	<h1>Blog Admin</h1>
</div>

<table>
	<tr>
		<th>ID</th>
		<th>TÍTULO</th>
		<th>ACÃO</th>
	</tr>

	@foreach($posts as $post)

	<tr>
		<td>{{ $posts->id }}</td>
		<td>{{ $posts->title }}</td>
		<td></td>
	</tr>
	@endforeach

</table>


@endsection