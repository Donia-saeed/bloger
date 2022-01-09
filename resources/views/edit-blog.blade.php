@extends('layouts.master')
@section('content')



<div class="widget-area">
    <aside class="widget">
        <h4 class="widget-title">Request similar project</h4>
        <form method="POST" action="{{route('home.update',$blog->id)}}" enctype="multipart/form-data" >
            @method('PUT')
            @csrf
            <div class="form">
                <p><input type="file" name="photo" value="{{$blog->photo}}"></p>
                <p><input type="text" name="name"  value="{{$blog->name}}" placeholder="Name of New Blog *"required></p>
                <p><textarea name="body" rows="3" placeholder="Your Documentation *"required> {{$blog->body}}</textarea></p>

                <select name="catagory_id" class="form-control" >
                    <option>Select catagory</option>
                    @foreach ($catagories as $catagory)
                      <option value="{{$catagory->id}}" > {{ $catagory->name }} </option>
                    @endforeach
                 </select>

                <input type="submit" id="submit" class="clearfix btn" value="save">
            </div>
        </form>
    </aside>
</div>


@endsection
