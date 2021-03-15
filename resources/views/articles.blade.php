@extends('layouts.master')

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
			@forelse ($articles as $article)
			<div class="content">
				<header class="align-center">
					<p>{{ $article->excerpt }}</p>
					<h2>
						<a href="{{ $article->path() }}">{{ $article->title }}</a>
					</h2>
				</header>
				<p>{{ $article->body }}</p>
			</div>
			@empty
			<section id="two" class="wrapper style2">
				<div class="inner">
					<header class="align-center">
						<h4>No relevant articles.</h4>
					</header>
				</div>
			</section>
			@endforelse
		</div>
	</div>
</section>
@endsection
