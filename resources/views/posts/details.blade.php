@extends('layout')

@section('content')
<!--<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Read Post</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('post_list') }}" class="label label-primary pull-right"> Back</a>
        </div> 
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title:</strong>
            {{ $post->title }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Content:</strong>
            {{ $post->content }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Published On:</strong>
            {{ $post->created }}
        </div>
    </div>
</div> -->

<div class="details container is-fluid">
<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        {{ $post->title }}
      </h1>
      <h2 class="subtitle">
        Published at: {{ $post->created_at}}    
            </h2>
    </div>
  </div>
</section>
    <figure class="image is-4by3">
@if($post->photos->toArray() == null)
                              <img src="/images/serveimage.gif">
                              @else
                <img src="/images/{{$post->photos->toArray()[0]['img_dir']}}">
                @endif
    </figure>
    <article class="message">
        <div class="message-body">
            <pre>{{ $post->content }}<pre>
        </div>
    </article>


    <!-- About editor section  (For later development)-->
    <div class ='editor'>
        <article class="media">
  <figure class="media-left">
    <p class="image is-64x64">
      <img src="http://bulma.io/images/placeholders/128x128.png">
    </p>
  </figure>
  <div class="media-content">
    <div class="content">
      <p>
        <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
        <br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
      </p>
    </div>
    <nav class="level is-mobile">
      <div class="level-left">
        <a class="level-item">
          <span class="icon is-small"><i class="fa fa-reply"></i></span>
        </a>
        <a class="level-item">
          <span class="icon is-small"><i class="fa fa-retweet"></i></span>
        </a>
        <a class="level-item">
          <span class="icon is-small"><i class="fa fa-heart"></i></span>
        </a>
      </div>
    </nav>
  </div>
  <div class="media-right">
    <button class="delete"></button>
  </div>
</article>
    </div>


</div>
@endsection
