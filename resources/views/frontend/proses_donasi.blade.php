@extends('template.front')
@section('konten')
<section class="section db p120">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tagline-message page-title text-center">
                    <h3>Donasi</h3>
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
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>Masukkan Nominal Donasi</h3>
                    </div>
                    <form class="big-contact-form" action="{{route('donasi.simpan')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$program['id']}}">
                        <input type="text" class="form-control"  value="{{$program['nama_program']}}" readonly>
                        <input type="text" class="form-control {{ $errors->first('nama') ? "is-invalid":""}}"  name="nama" value="{{ old('nama')}}" placeholder="Masukkan nama..">
                        @error('nama')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                            @enderror
                        <input type="email" class="form-control {{ $errors->first('email') ? "is-invalid":""}}"name="email" placeholder="Masukkan email..">
                        @error('email')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                        <input type="text" class="form-control {{ $errors->first('nominal') ? "is-invalid":""}}" name="nominal" placeholder="Masukkan nominal..">
                        @error('nominal')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                        <textarea class="form-control {{ $errors->first('komentar') ? "is-invalid":""}}" name="komentar" placeholder="Berikan doa terbaik anda.."></textarea>
                        @error('komentar')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                        <center>
                            <button type="submit" class="btn btn-primary">Lanjut Pembayaran</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection