@extends('template.section')
@section('title') @stop
@section('content') 
<?php 
date_default_timezone_set("America/Sao_Paulo");
$date = date('d/m/Y');
$hour = date('H:i'); ?>
<div class="body">
	<div class="container">
		<div class="col-md-12">

		<?php if ($hour >= 08 AND $hour >= 8 and $hour <= 16): ?>

			<div class="text-center">
				<h1>Olá, Leonan.</h1>
				<h3>Hoje é dia <?= $date ?> agora são <?= $hour ?> sabe o que isso significa?</h3>
			</div>


<div class="fundo">
  <div class="caneca">
    <div class="braco-caneca"></div>
    <div class="base-caneca"></div>
    <div class="corpo-caneca">
      <div class="cafe"></div>
      <div class="escorre"></div>
    </div>
  </div>
  <div class="base-vaso">
    <div class="base-cacto"></div>
  </div>
</div>
<div class="text-center">
	<h1>É HORA DO CAFÉ</h1>
</div>

<?php else: ?> 
<div class="text-center">
	<h1>Olá, Leonan.</h1>
	<h3>Hoje é dia <?= $date ?> agora são <?= $hour ?> sabe o que isso significa?</h3>
<div class="fundo">
  <div class="controle">
    <div class="detalhe-1">
      <div class="botoes-1"></div>
      <div class="botoes-2"></div>
    </div>
    <div class="select"></div>
    <div class="start"></div>
    <div class="detalhe-2">
      <div class="area-botao-1"></div>
      <div class="area-botao-2"></div>
    </div>
  </div>
</div>
	<h1>NÃO ESTÁ NA HORA DO CAFÉ. VOLTE MAIS TARDE!</h1>
</div>
<?php endif; ?>
		</div>
	</div>
</div>

@stop