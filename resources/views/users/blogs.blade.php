@extends('layouts.app')
@section('contents')

<article> 
    <!-- Breadcrumb -->
    <section class="theme-breadcrumb pad-50">                
        <div class="theme-container container ">  
            <div class="row">
                <div class="col-sm-8 pull-left">
                    <div class="title-wrap">
                        <h2 class="section-title no-margin">Our  Blogs  </h2>
                        <p class="fs-16 no-margin">  </p>
                    </div>
                </div>
                <div class="col-sm-4">                        
                    <ol class="breadcrumb-menubar list-inline">
                        <li><a href="#" class="gray-clr">Home</a></li>                                   
                        <li class="active">Blog Posts</li>
                    </ol>
                </div>  
            </div>
        </div>
    </section>
    <!-- /.Breadcrumb -->

    <!-- Blog -->
    <div class="theme-container container">
        <div class="row">
            <div class="blog-wrap pad-30 clearfix">
                <section class="col-md-9 col-sm-8 pb-50">    
                    @forelse($blogs as $blog)                     
                    <article class="post-wrap pb-50">
                        <div class="post-img pb-10">
                            <a href="{{route('users.blog.details', encrypt($blog->id))}}"> <img alt="" src="{{asset('images/'.$blog->image)}}"> </a>
                        </div>
                        <div class="post-content">
                            <h6 class="title-2 fs-10"></h6>
                            <a class="title-1" href="{{route('users.blog.details', encrypt($blog->id))}}">{{$blog->title}}</a>
                            <div class="pad-10">
                            </div>
                            <p>{!! substr($blog->contents,0,200) !!}.. <span style="color:blue">        <a class="title-1" href="{{route('users.blog.details', encrypt($blog->id))}}"></a></span></p>
                        </div>
                        <div class="post-footer">
                            <span class="post-readmore">
                                <a class="font2-title1 fs-" href="{{route('users.blog.details', encrypt($blog->id))}}">Read more <span class="arrow_right fs-20"></span> </a>
                            </span>
                        </div>
                    </article>
                    @empty 
                    @endforelse

         
                </section>  

                <div class="visible-xs pad-30"></div>
                  
            </div>
        </div>
    </div>
    <!-- /.Blog -->

</article>
@endsection