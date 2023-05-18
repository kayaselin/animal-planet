@extends('layout')

@section('title', 'About us')

@section('content')
<h1>About Us</h1>
<p>You can find information about our company from the videos below.</p>


<div id="panel-9-11-0-0" class="so-panel widget widget_sow-editor panel-first-child" data-index="27" >

        <iframe width="500" height="350" src="https://www.youtube.com/embed/93U4fvaIYCU?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


            <video controls>
  <source src="{{ asset('videos/video.mp4') }}" type="video/mp4">
  
</video>
</div>
        <h1>Location</h1>
<iframe src=”https://goo.gl/maps/QL2v25NmmGRCft1k7” width=”600” height=”450” frameborder=”0” style=”border:0;” allowfullscreen=”" aria-hidden="false" tabindex="0"></iframe>

@endsection
