@extends('app')
 
@section('content')
    <h2>User Keys</h2>
 
    @if ( !$userkeys->count() )
        You have no keys
    @else
        <p>You have keys</p>
    @endif
 

@endsection