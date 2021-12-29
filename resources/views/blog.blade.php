
@extends('layouts.master')
@section('content')
<div id="content" class="site-content">
    <div id="primary" class="content-area column two-thirds single-portfolio">
        <main id="main" class="site-main">

        <article class="portfolio hentry">
        <header class="entry-header">
        <div class="entry-thumbnail">
        <img width="800" height="533" src="{{ URL::asset("img/{$blog->photo}") }}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="p"/>
        </div>
        <h1 class="entry-title">{{$blog->name}}</h1>
        <a class='portfoliotype' href="{{url('#')}}">{{$blog->Catagory->name}}</a>
        </header>
        <div class="entry-content">
            <p>
                {!!$blog->body!!}
            </p>


        </div>
        <form  method="POST" action="{{route('home.destroy', $blog->id)}}">
            {{-- action is the event of submit  will excute the route when method is destroy --}}
     @method('DELETE')
       @csrf
        {{-- للحماية من اى هجمات  --}}

    <input  type="submit"  class="btn btn-primary"  value="delete">
        </form>
        <br>
        <form  action="{{route('home.edit', $blog->id)}}">
            {{-- action is the event of submit  will excute the route when method is edit --}}
       @csrf
    <input  type="submit"   class="btn btn-primary"  value="edit">
        </form>
        <br>
        </article>


        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->


</div>
<!-- #content -->
</div>
<!-- .container -->
<footer id="colophon" class="site-footer">
<div class="container">
<div class="site-info">
    <h1 style="font-family: 'Herr Von Muellerhoff';color: #ccc;font-weight:300;text-align: center;margin-bottom:0;margin-top:0;line-height:1.4;font-size: 46px;">Moschino</h1>
    <a target="blank" href="https://www.wowthemes.net/">&copy; Moschino - Free HTML Template by WowThemes.net</a>
</div>
</div>
@endsection
