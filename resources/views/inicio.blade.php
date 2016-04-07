@extends('template.section')
@section('title') Bem-Vindo ao blog do Léo @stop
@section('content')
<?php 
date_default_timezone_set("America/Sao_Paulo");
$date = date('d/m/Y');
$hour = date('H:i');
 ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="text-center">
				<img class="img-leo" src="{{asset('/img/blog-leo.png')}}">
				<h4>
					<?php 
					if ($hour >= 0 AND $hour < 12) {
						echo "Olá, caro visitante. Bem-Vindo ao blog do Léo. Hoje é $date agora são exatamente $hour tenha um bom dia";
						}
					elseif ($hour >= 12 AND $hour < 18) {
						"Olá, caro visitante. Bem-Vindo ao blog do Léo. Hoje é $date agora são exatamente $hour tenha uma boa tarde";
							}
					else {
						echo "Olá, caro visitante. Bem-Vindo ao blog do Léo. Hoje é $date agora são exatamente $hour tenha uma boa noite";
						}
					?>
				</h4>
			</div>
		</div>
	</div>
</div>
@stop