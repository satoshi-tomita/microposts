@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->name }}</h3>
                </div>
                <div class="pane-body">
                    <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->email, 500) }}" alt="">
                </div>
            </div>
            @include('micropost_favorite.fav_button', ['user' => $user])
        </aside>
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                <li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><a href="{{ route('users.show', ['id' => $user-id]) }}">TimeLine <span class="badge">{{ $count_microposts }}</span></a></li>
                <li role="presentation" class="{{ Request::is('users/*/favorites') ? 'active' : '' }}"><a href="{{ route('users.favorites', ['id' => $user-id]) }}">Favorites <span class="badge">{{ $count_favorites }}</span></a></li>
            </ul>
            @include('users.favorites', ['favorites' => $favorites])
        </div>
    </div>
@endsection