@extends('layouts.app-dashboard')

@section('content')
    <h1>User's List</h1>
    {{ json_decode($test) }}
@endsection
