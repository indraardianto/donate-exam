@extends('template.front')
@section('konten')
<section class="section db p120">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tagline-message page-title text-center">
                    <h3>Detail Donasi</h3>
                    <ul class="breadcrumb">
                        <li><a href="javascript:void(0)">Edulogy</a></li>
                        <li class="active">{{ $program['nama_program']}}</li>
                    </ul>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->

<section class="section gb nopadtop">
    <div class="container">
        <div class="boxed boxedp4">
            <div class="row">
                <div class="col-md-8">
                    <div class="content blog-list">
                        <div class="blog-wrapper clearfix">
                            <div class="blog-media">
                                <img src="{{asset('vendor')}}/upload/blog_01.jpg" alt="" class="img-responsive img-rounded">
                            </div>
                            <div class="blog-desc-big">
                                <p class="lead">{{ $program['nama_program']}}</p>
                                <p> {{ $program['deskripsi']}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="content boxed-comment clearfix">
                                <h3 class="small-title">{{ $komentar->count()}} Comments</h3>
                                <div class="comments-list">
                                    @foreach ($komentar as $item)
                                    <div class="media">
                                        <p class="pull-right"><small>{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</small></p>
                                        <a class="media-left" href="#">
                                            <img src="{{asset('vendor')}}/upload/people_12.jpeg" alt="" class="img-circle">
                                        </a>
                                        <div class="media-body">
                                            <small style="color:#01bacf">{{$item->email}}</small>
                                            <h4 class="media-heading user_name">{{$item->nama}}
                                               
                                            </h4>
                                            <p>{{$item->komentar}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    @endforeach
                                </div>
                            </div><!-- end content -->
                        
                        </div>
                    </div>

                </div>
                <div class="sidebar col-md-4">
                    <div class="widget clearfix">
                        <h3 class="widget-title mt-4">Donasi Lainnya</h3>
                        <div class="post-widget">
                            @foreach ($data as $item)
                            <div class="media">
                                <img src="{{asset('vendor')}}/upload/blog_small_01.jpg" alt="" class="img-responsive alignleft img-rounded">
                                <div class="media-body">
                                    <h5 class="mt-0"><a href="{{route('donasi.detail',$item->nama_program)}}">{{$item->nama_program}}</a></h5>
                                    <div class="blog-meta">
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
  
</section>
@endsection