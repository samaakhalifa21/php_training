@extends('layouts.master')

@section('title','Create Course')

@section('main')
<div class="my-5 container bg-dark py-3 rounded w-50 text-center mx-auto py-3">
    <h2 class="text-white"> Create New Courses </h2>
</div>
<div class="container w-50 mx-auto my-5">
    <form action="/store" method="post">
        @csrf
        <div class="form-group my-2">
            <label for="title">Course Title</label>
             <input type ="text" class="form-control"
             name="title"id="title">
        </div>
        <div class="form-group my-2">
            <label for="price"> Course Price</label> 
            <input type ="number"class="form-control"
            name="price" id="price"> 
        </div>
        <div class="form-group my-2">
            <label for="instructor">Course Instructor</label> 
            <input type ="text"class="form-control"
            name="instructor" id="instructor">
         </div>
        <div class="form-group my-2">
            <label for="description"> Course Description</label>
             <textarea class="form-control py-4"
             name ="desc" id="desc"> </textarea>
            </div>
            <input type="submit" value="Add Course" class="btn btn-dark mt-3">
    </form>
</div>
@endsection