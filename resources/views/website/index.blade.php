@extends('layout_user.main')

@section('konten')
  
  <!-- ======= Blog Section ======= -->  
  
  <div id="blog" class="blog-area">
      <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Tempat Pariwisata di Sumatera Utara</h2>
              </div>
            </div>
          </div>
          <div class="row">          
            <!-- Start Left Blog -->
            @foreach($pariwisatas as $post)            
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">                  
                </div>
                <div class="blog-meta">
                <span>
                    <img src="{{$post->image}}" alt="">
                  </span>
                  <br>                  
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="{{$post->id}}" >Read More</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>{{$post->created_at}}
                  </span>                  
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="{{$post->id}}" class="btn btn-info">{{$post->nama_tempat}}</a>
                  </h4>
                  <p>
                    {{$post -> katasingkat_tempat}}
                  </p>
                </div>                
              </div>
              <!-- Start single blog -->
            </div>            
            @endforeach

            {{$pariwisatas -> links()}}           
    @endsection