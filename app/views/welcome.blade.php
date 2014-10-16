@extends ('_master')


@section('title')
   Welcome
@stop

@section ('content')

@if(isset($name))
    <h1>Hello {{{ $name! }}}</h1>   
@endif

<h1> Welcome to foobooks!</h1>
@stop