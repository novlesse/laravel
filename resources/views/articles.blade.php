@extends('layout')

@section('content')
<!-- One -->
<section id="One" class="wrapper style3">
	<div class="inner">
		<header class="align-center">
			<p>Eleifend vitae urna</p>
			<h2>Articles</h2>
		</header>
	</div>
</section>

<!-- Two -->
<section id="two" class="wrapper style2">
	<div class="inner">
		<div class="box">
			@foreach ($articles as $article)
			<div class="content">
				<header class="align-center">
					<p>{{ $article->excerpt }}</p>
					<h2>
						<a href="/articles/{{ $article->id }}">{{ $article->title }}</a>
					</h2>
				</header>
				<p>{{ $article->body }}</p>
			</div>
			@endforeach
		</div>
	</div>
</section>
@endsection
