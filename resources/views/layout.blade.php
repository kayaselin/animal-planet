<!DOCTYPE html>
<html>
<head>
  <title>
    @yield('title', 'Blog')
  </title>
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>

<ul class="nav">
  <li><a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
  <li><a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a></li>
  <li><a class="{{ request()->routeIs('posts.create') ? 'active' : '' }}" href="{{ route('posts.create') }}">Create Post</a></li>
  <li><a class="{{ request()->routeIs('contact.form') ? 'active' : '' }}" href="{{ route('contact.form') }}">Contact Us</a></li>
  <li><a class="{{ request()->routeIs('animals') ? 'active' : '' }}" href="{{ route('animals') }}">Animals</a></li>
</ul>

@includeWhen($errors->any(), '_errors')

@if (session('success'))
  <div class="flash-success">
      {{ session('success') }}
  </div>
@endif

<div class="main">
	@yield('content')
</div>

</body>
</html>
