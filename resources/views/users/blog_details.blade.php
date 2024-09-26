@extends('layouts.app')
@section('contents')
<article> 
    <!-- Breadcrumb -->
    <section class="theme-breadcrumb pad-50">                
        <div class="theme-container container ">  
            <div class="row">
                <div class="col-sm-8 pull-left">
                    <div class="title-wrap">
                        <h2 class="section-title no-margin"> Blog Details</h2>
                        <p class="fs-16 no-margin"> </p>
                    </div>
                </div>
                <div class="col-sm-4">                        
                    <ol class="breadcrumb-menubar list-inline">
                        <li><a href="#" class="gray-clr">Home</a></li>                                   
                        <li class="active">Single Posts</li>
                    </ol>
                </div>  
            </div>
        </div>
    </section>
    <div class="theme-container container">
        <div class="row">
            <div class="blog-wrap  pt-80 pb-50 clearfix">
                <section class="col-md-9 col-sm-8 pb-50">                         
                    <article class="post-wrap pb-50">
                        <div class="post-img pb-10">
                            <a href="#"> <img alt="" src="{{asset('images/'.$blog->image)}}"> </a>
                        </div>
                        <div class="post-content">
                            <h6 class="title-2 fs-10">By Admin</h6>
                            <a class="title-1" href="#">{{$blog->title}}</a>
 
                            <p>{!! $blog->contents !!}</p>
                        </div>
                    </article>
                </section>  

                <div class="visible-xs pad-30"></div>

                <aside class="sidebar col-sm-4 col-md-3">
                    <div class="widget-wrap pb-50 categories">
                        <h4 class="title-1">Recent Blogs</h4>
                        <ul>
                            @forelse($blogs as $blg)
                            <li> 
                                <span class="p-4">
                                    <a href="{{route('users.blog.details', encrypt($blg->id))}}">
                                <img src="{{asset('images/'.$blg->image)}}"> {{$blog->title}} 

                                <span style="color:blue"> Read More</span>
                                
                            </a>
                        </span>
                                
                            </li>
                            @empty 
                            @endforelse
                        </ul>
                    </div>
                </aside>                   
            </div>
        </div>
    </div>
    <!-- /.Blog -->

</article>


@endsection