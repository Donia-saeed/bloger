@extends('layouts.master')
@section('content')



<div class="widget-area">
    <aside class="widget">
        <h4 class="widget-title">Request similar project</h4>
        <form class="wpcf7"id="contactform"   method="post" action="{{route('home.store')}}"  enctype="multipart/form-data">
            @csrf
            <div class="form">
                <p><input type="file" name="photo" required></p>
                <p><input type="text" name="name" placeholder="Name of New Blog *"required></p>
                <p><textarea name="body" rows="3" placeholder="Your Documentation *"required></textarea></p>

                <select name="catagory_id" class="form-control" >
                    <option>Select catagory</option>
                    @foreach ($catagories as $catagory)
                      <option value="{{$catagory->id}}" > {{ $catagory->name }} </option>
                    @endforeach
                 </select>

                <input type="submit" id="submit" class="clearfix btn" value="Send">
            </div>
        </form>
    </aside>
</div>


@endsection
