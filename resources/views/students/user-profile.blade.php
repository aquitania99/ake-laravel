@extends('layouts.app-dashboard')

@section('page-header')
    @parent
    @stop
@section('content')
<h1>
    {{$profile->native_language}}
</h1>
@endsection
