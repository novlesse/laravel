@extends('layouts.master')

@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
@endsection

@section('content')
<!-- One -->
<section id="One" class="wrapper style3">
	<div class="inner">
		<header class="align-center">
			<p>Sed amet nulla</p>
			<h2>Articles</h2>
		</header>
	</div>
</section>

<!-- Two -->
<div id="wrapper">
    <div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4 mt-6 mb-6">New Article</h1>

        <form method="POST" action="/articles">
            @csrf
            <div class='field'>
                <label class="label" for="title">Title</label>

                <div class="control">
                    <input class="input {{ $errors->has('title') ? 'is-danger' : '' }}" type="text" name="title" id="title" />

                    @if($errors->has('title'))
                        <p class="help is-danger">{{ $errors->first('title') }}</p>
                    @endif
                </div>
            </div>

            <div class='field'>
                <label class='label' for='excerpt'>Excerpt</label>

                <div class='control'>
                    <textarea class='textarea' name='excerpt' id='excerpt'></textarea>

                </div>
            </div>

            <div class='field'>
                <label class='label' for='body'>Body</label>

                <div class='control'>
                    <textarea class='textarea' name='body' id='body'></textarea>
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
