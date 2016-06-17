
			{!! Form::open(['route'=>'admin.posts.store', 'method'=>'post']) !!}


			<div class="form-group">
				{!! Form::Label('title', 'Título') !!}
				{!! Form::Text('title', $posts->title, ['class'=>'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::Label('content', 'Conteúdo') !!}
				{!! Form::Textarea('content', $posts->content, ['class'=>'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::Label('img', 'Imagem') !!}
				{!! Form::Text('img', $posts->img, ['class'=>'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::Label('tag', 'tag',['class'=> 'control-label']) !!}
				{!! Form::Text('tag', $posts->tagList, ['class'=>'form-control']) !!}
			</div>

