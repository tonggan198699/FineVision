@extends('app')

<div class="container">
  <table class="table">
    <thead>
     <tr>
       <th>ID</th>
       <th>Firstname</th>
       <th>Surname</th>
       <th>Email</th>
       <th>Telephone</th>
       <th>Gender</th>
       <th>Date of Birth</th>
       <th>Comments</th>
     </tr>
   </thead>

  <tbody>
  @foreach($information as $info)
    <tr>
      @if($info->id)
      <td><h3>{{$info->id}}</h3></td>
      @endif

      @if($info->firstname)
      <td><h3>{{$info->firstname}}</h3></td>
      @endif

      @if($info->lastname)
      <td><h3>{{$info->lastname}}</h3></td>
      @endif

      @if($info->email)
      <td><h3>{{$info->email}}</h3></td>
      @endif

      @if($info->telephone)
      <td><h3>{{$info->telephone}}</h3></td>
      @endif

      @if($info->gender == "m")
      <td><h3>Male</h3></td>
      @else
      <td><h3>Female</h3></td>
      @endif

      @if($info->dob)
      <td><h3>Date of Birth: {{$info->dob}}</h3></td>
      @endif

      @if($info->comments)
      <td><h3>Comments: {{$info->comments}}</h3></td>
      @endif
    </tr>
  @endforeach
  <tbody>
</table>


  <a href="/" class="btn btn-primary">Home</a>

</div>
