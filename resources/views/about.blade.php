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

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2726.337715983682!2d19.66695091560606!3d46.896076279144005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4743da7a6c479e1d%3A0xc8292b3f6dc69e7f!2sJohn%20von%20Neumann%20University%20GAMF%20Faculty%20of%20Engineering%20and%20Computer%20Science!5e0!3m2!1str!2shu!4v1684704897055!5m2!1str!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
@endsection
