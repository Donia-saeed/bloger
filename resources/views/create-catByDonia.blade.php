@extends('layouts.master')
@section('content')



<div class="widget-area">
    <aside class="widget">
        <h4 class="widget-title">add catagories</h4>
        <form class="wpcf7" method="post"  id="contactform" action="{{route('catagory.store')}}">
            @csrf
            <div class="form">
                <p><input type="text" name="name" placeholder="Name ofcatagory *"></p>
                <input type="submit" id="submit" class="clearfix btn" value="Save">
            </div>
        </form>
    </aside>
</div>


@endsection
