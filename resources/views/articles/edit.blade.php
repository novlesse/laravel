@extends('layouts.master')

@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
@endsection

@section('content')
<!-- One -->
<section id="One" class="wrapper style3">
	<div class="inner">
		<header class="align-center">
			<p>{{ $article->excerpt }}</p>
			<h1 class="heading has-text-weight-regular is-size-3">{{ $article->title }}</h1>
		</header>
	</div>
</section>

<!-- Two -->
<div id="wrapper">
    <div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4 mt-6 mb-6">Edit Article</h1>

        <form method="POST" action="/articles/{{ $article->id }}">
            @csrf
            @method('PUT')

            <div class='field'>
                <label class="label" for="title">Title</label>

                <div class="control">
                    <input class="input" type="text" name="title" id="title" value="{{ $article->title }}" />
                </div>
            </div>

            <div class='field'>
                <label class='label' for='excerpt'>Excerpt</label>

                <div class='control'>
                    <textarea class='textarea' name='excerpt' id='excerpt'>{{ $article->excerpt }}</textarea>
                </div>
            </div>

            <div class='field'>
                <label class='label' for='body'>Body</label>

                <div class='control'>
                    <textarea class='textarea' name='body' id='body'>{{ $article->body }}</textarea>
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
