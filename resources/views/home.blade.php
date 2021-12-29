
@extends('layouts.master')
@section('content')
		<div id="content" class="site-content">
			<div id="primary" class="content-area column full">
				<main id="main" class="site-main">
				<div class="grid portfoliogrid">
{{-- blog#  will be loop to make list of it --}}
         @foreach ( $blogs as $blog )
					<article class="hentry">
					<header class="entry-header">
					<div class="entry-thumbnail">
						<a href="{{url('blog/'. $blog->id)}}"><img src="{{ URL::asset("img/{$blog->photo}") }}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="p"/></a>
					</div>
					<h2 class="entry-title"><a href="{{url('blog/'. $blog->id)}}" rel="bookmark">{{$blog->name}}</a></h2>

					<a class="entry-title" >{{$blog->Catagory->name}}</a>


                    <div class="date">
                        <span class="day">{{ $blog->created_at->format('d') }}</span>
                        <span class="month">{{ $blog->created_at->format('M') }}</span>
                    </div>

					</header>
					</article>
                    @endforeach






				</div>
				<!-- .grid -->

				<nav class="pagination">
				<span class="page-numbers current">1</span>
				<a class="page-numbers" href="#">2</a>
				<a class="next page-numbers" href="#">Next »</a>
				</nav>
				<br/>

				</main>
				<!-- #main -->
			</div>
			<!-- #primary -->
		</div>
		<!-- #content -->
	</div>
	<!-- .container -->

    @endsection
