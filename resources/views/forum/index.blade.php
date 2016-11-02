@extends('app')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>
                欢迎来到Laravel社区
                <a class="btn btn-primary btn-lg pull-right" href="#" role="button">发布新的贴子</a>
            </h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-9" role="main">
                @foreach($discussions as $discussion)
                        <div class="media">
                            <div class="media-left">
                                <a href="/discussions/{{ $discussion->user->id }}">
                                    <img class="media-object img-circle" alt="64x64" width="50" src="{{ $discussion->user->avatar }}">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">{{ $discussion->title }}</h4>
                                    {{ $discussion->user->name }}
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
    </div>

    @endsection