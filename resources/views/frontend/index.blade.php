@extends('template.front')
@section('konten')

<section class="section db p120">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tagline-message page-title text-center">
                    <h3>Donasi Tersedia</h3>
                    <ul class="breadcrumb">
                        <li><a href="javascript:void(0)">Edulogy</a></li>
                        <li class="active">Donasi</li>
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
                <div class="col-md-12">
                    <div class="row blog-grid">
                        @foreach ($total as $item)
                                <div class="col-md-4" style="margin-top: 4%">
                                    <div class="image-wrap entry">
                                        <div class="magnifier">
                                            <a href="blog-single.html" title=""><i class="flaticon-add"></i></a>
                                        </div>
                                    </div>
                                    <div class="course-details">
                                        <span class="badge badge-primary" style="background-color: #01bacf">{{$item->kategori}}</span>
                                        {{-- <small></small> --}}
                                        <h4>
                                           
                                            <a href="{{route('donasi.detail',$item->nama_program)}}" title="">{{$item->nama_program}}</a>
                                        </h4>
                                        <p>{{$item->deskripsi}}</p>
                                        <br>
                                        <small style="color:rgb(27, 27, 27)"><b>Dibutuhkan : Rp {{number_format($item->total_target,0,",",".")}}</b></small>
                                        <br>
                                        <small style="color:#82b440">Terkumpul : Rp {{'Rp. '.number_format($item->total_donasi_program,0,",",".")}}</b></small>
                                    </div>
                                    <div class="course-footer clearfix">
                                        <center>
                                        <a href="{{route('donasi.proses',$item->nama_program)}}" class="btn btn-default">Donasi</a>
                                    </center>
                                    </div>
                                </div>
                        @endforeach
                    </div><!-- end row -->
                    <hr class="invis">
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end boxed -->
    </div><!-- end container -->
</section>
@endsection