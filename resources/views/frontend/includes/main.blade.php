 @extends('frontend.master')
 @section('title')
 Aisha Akter Moon
 @endsection
 @section('content')
 <header class="masthead" style="background-image: url(<?php echo $main->bc_img ?>)">
            <div class="container">
                <div class="masthead-subheading">
                    <p class="fs-5">HELLO, MY NAME IS </p>
                    <strong>{{$main->sub_title}}</strong>
                </div>
                <div class="masthead-heading text-uppercase">{{$main->title}}</div>
                <div>
                    <p>I’m a Front End Web developer who is passionate about making error-free websites with 100% client satisfaction. I love to solve real-world problems. I am strategic, and goal-oriented, and always work with an end goal in mind.</p>
                </div>
                <a class="btn btn-xl pinkish text-white text-uppercase" href="{{url($main->resume)}}">Resume</a>
            </div>
        </header>
        @endsection
