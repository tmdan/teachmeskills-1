@extends('layout')

@section('content')
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        @foreach($posts as $post)
                        <div class="col-md-6">
                            <article class="post post-grid">
                                <div class="post-thumb">
                                    <a href="#"><img src="{{asset('storage/'.$post->image)}}" alt=""></a>

                                    <a href="{{route('post.show', $post->slug)}}" class="post-thumb-overlay text-center">
                                        <div class="text-uppercase text-center">View Post</div>
                                    </a>
                                </div>
                                <div class="post-content">
                                    <header class="entry-header text-center text-uppercase">
                                        @if($post->category)
                                            <h6><a href="{{route('category.show', $post->category->slug)}}"> {{$post->getCategoryTitle()}}</a></h6>
                                        @else
                                            <h6 class="text-info">{{$post->getCategoryTitle()}}</h6>
                                        @endif

                                        <h1 class="entry-title"><a href="{{route('post.show', $post->slug)}}">{{$post->title}}</a></h1>

                                    </header>
                                    <div class="entry-content">
                                        {!! $post->description !!}
                                        <div class="social-share">
                                            <span class="social-share-title pull-left text-capitalize">By <a href="#">Rubel</a></span>
                                        </div>
                                    </div>
                                </div>

                            </article>
                        </div>
                        @endforeach
                    </div>
                   {{$posts->links()}}
                </div>
                @include('pages._sidebar')
            </div>
        </div>
    </div>
@endsection
