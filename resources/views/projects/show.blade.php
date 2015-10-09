@extends('app')
 
@section('content')
    This is my /resources/views/projects/show.blade.php file!
    <ul>
        <li>{{ $project->name }}</li>
        <li>{{ $project->slug}}</li>
        <li>{{ $project->updated_at }}</li>
    </ul>
@endsection