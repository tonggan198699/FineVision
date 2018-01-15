@extends('app')


  @section('content')

<div class="container">


      <form method="post" action="/storeform">
      {{ csrf_field() }}

      <div class="panel-group" id="accordion">
        @include('partials.section1')

        @include('partials.section2')

        @include('partials.section3')
      </div>

      <form>



</div>

  @endsection
