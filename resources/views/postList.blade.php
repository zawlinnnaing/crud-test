@extends('layout')
@section('stylesheets')
@endsection
@section('content')

@foreach( $posts as $post)
<div class="card">
  <div class="card-image">
    <figure class="image is-128x96">
	@if($post->photos->toArray() == null)
             <img src="images/serveimage.gif">
     @else
              <img src="images/{{$post->photos->toArray()[0]['img_dir']}}">
     @endif
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-content">
        <p class="title is-4">{{$post->title}}</p>
      </div>
    </div>

    <div class="content">
      <p style="width: 250px;
			white-space: nowrap;
    		overflow: hidden;
     		text-overflow: ellipsis;">
     			{{$post->content}}
     		</p>
     	<a href=""> See more</a>
      <small>{{$post->created_at}}</small>
    </div>
    </div>
  </div>

@endforeach

<div class="pageinate_links" style="display: inline; text-align: center;">
@for($i=1 ; $i <= $pageCount; $i++)
<a href="postList?page={{$i}}" style="margin: auto;">{{$i}}</a>
@endfor
</div>
{{ $posts->links()}}

@endsection