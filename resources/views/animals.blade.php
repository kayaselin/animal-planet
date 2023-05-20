@extends('layout')

@section('title', 'Animals')

@section('content')
@forelse ($aposts as $apost)
<div class="apost-item">
  <div class="apost-content">
    <h2><a href="{{ route('aposts.show2', [$apost]) }}">{{ $apost->title }}</a></h2>
    <p>{{ $apost->description }}</p>
  </div>
</div>
@empty
<h2>There are no posts yet.</h2>
@endforelse
@endsection
