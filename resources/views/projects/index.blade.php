@extends('app')
 
@section('title')
    <h2>Project Index</h2>
@endsection

@section('content')
    @if ( !$projects->count() )
        You have no projects
    @else
        <ul>
            @foreach( $projects as $project )
                <li><a href="{{ route('projects.show', $project->slug) }}">{{ $project->name }}</a></li>
            @endforeach
        </ul>
    @endif
@endsection