@extends('master')

@section('title', 'Page Title')
@section('content')
    <p>This is my body content and variable {{ $val }}.</p>
@endsection

@section('test')
  @parent
  <h3>Un autre test</h3>
  @endsection
