@extends('app')

<div class="container">
  @foreach($information as $info)
      @if($info->firstname)
      <h3>First Name: {{$info->firstname}}</h3>
      @else
      <h3>First Name: N.A</h3>
      @endif

      @if($info->lastname)
      <h3>Surname: {{$info->lastname}}</h3>
      @else
      <h3>Surname: N.A</h3>
      @endif

      @if($info->email)
      <h3>Email: {{$info->email}}</h3>
      @else
      <h3>Email: N.A</h3>
      @endif

      @if($info->telephone)
      <h3>Telephone: {{$info->telephone}}</h3>
      @else
      <h3>Telephone: N.A</h3>
      @endif

      @if($info->gender == "m")
      <h3>Male</h3>
      @elseif ($info->gender == "f")
      <h3>Female</h3>
      @else
      <h3>Gender: N.A</h3>
      @endif

      @if($info->dob)
      <h3>Date of Birth: {{$info->dob}}</h3>
      @else
      <h3>Date of Birth: N.A</h3>
      @endif

      @if($info->comments)
      <h3>Comments: {{$info->comments}}</h3>
      @else
      <h3>Comments: N.A</h3>
      @endif
  @endforeach

  <a href="/" class="btn btn-primary">Home</a>

</div>
