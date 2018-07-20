@if (Auth::user()->is_fav($micropost->id))
    {!! Form::open(['route' => ['micropost.unfav', $micropost->id], 'method' => 'delete', 'style' => 'display: inline;']) !!}
        {!! Form::submit('Unfavorite', ['class' => "btn btn-warning btn-xs"]) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['micropost.fav', $micropost->id], 'style' => 'display: inline;']) !!}
        {!! Form::submit('Favorite', ['class' => "btn btn-default btn-xs"]) !!}
    {!! Form::close() !!}
@endif
