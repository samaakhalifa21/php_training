@extends('layouts.master')

@section('title','Course Details')
@section('main')
<div class="bg-info text-light shadow border container w-75 mx-auto py-5">
    <h2> Course Title:{{$course->title}}</h2>
    <hr>
    <p>{{$course->desc}}</p>
    <hr>
    <div class="bg-warning">
        Designed By{{$course->instructor}} At {{$course->created_at}}
        <br><strong class="bg-info"> Course Price{{$course->price}}</strong>
      </div>
      <a href="{{route('courses')}}"
      class="mt-2 mb-3 btn btn-dark"> return to all courses</a>
</div>
@endsection