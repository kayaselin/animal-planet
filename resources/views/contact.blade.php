@extends('layout')

@section('title', 'Contact Us')

@section('content')
<h1>Contact Us</h1>

<form method="POST" action="{{ route('posts.store') }}">
  @csrf
  <label>Name</label>
  <input type="text" name="name">

  <label>E-mail</label>
  <input type="text" name="e-mail">

  <label>Title</label>
  <input type="text" name="title">

  <label>Description</label>
  <textarea name="description"></textarea>

  <button type="submit">Submit</button>
</form>
@endsection
