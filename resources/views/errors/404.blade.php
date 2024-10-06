@extends('layouts.app')
@section('contents')

      <!-- Content Wrapper -->
      <article class="about-page"> 
        <!-- Breadcrumb -->
        <section class="theme-breadcrumb pad-50">                
            <div class="theme-container container ">  
                <div class="row">
                    <div class="col-sm-8 pull-left">
                        <div class="title-wrap">
                            <h2 class="section-title no-margin"> error</h2>
                            <p class="fs-16 no-margin">  </p>
                        </div>
                    </div>
                    <div class="col-sm-4">                        
                        <ol class="breadcrumb-menubar list-inline">
                            <li><a href="{{route('users.index')}}" class="gray-clr">Home</a></li>                                   
                            {{-- <li class="active">404</li> --}}
                        </ol>
                    </div>  
                </div>
            </div>
        </section>
        <!-- /.Breadcrumb -->

        <!-- 404 -->
        <section class="pt-50 pb-120 error-wrap">                    
            <div class="theme-container container text-center">               
                <p class="s">Error Occured!!!</p>
                <p class="fs-20">Seems something went wrong with your request</p>
                <h3 class="no-margin pt-10"> <a href="{{route('users.index')}}" class="title-1"> <i class="arrow_left fs-20"></i> go back to home </a> </h3>
            </div>
        </section>
        <!-- /.404 -->

    </article>
@endsection