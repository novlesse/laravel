@extends('layouts.master')

@section('content')
<!-- One -->
<section id="One" class="wrapper style3">
	<div class="inner">
		<header class="align-center">
            <p>{{ $article->id }}</p>
			<h2>{{ $article->title }}</h2>
		</header>
	</div>
</section>

<!-- Two -->
<section id="two" class="wrapper style2">
	<div class="inner">
		<div class="box">
			<div class="content">
				<header class="align-center">
					<p>{{ $article->excerpt }}</p>
                    <br />
				</header>
				<p>{!! $article->body !!}</p>

				<p>
				@foreach($article->tags as $tag)
					<a href="/articles?tag={{ $tag->name }}">{{ $tag->name }}</a>
				@endforeach
				</p>
			</div>
		</div>
	</div>
</section>
@endsection
