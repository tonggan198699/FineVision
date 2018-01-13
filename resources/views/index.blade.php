@extends('app')


  @section('content')

<div class="container">

    <div class="panel-group" id="accordion">

        @include('partials.section1')

        @include('partials.section2')

        @include('partials.section3')

    </div>

</div>

  @endsection
