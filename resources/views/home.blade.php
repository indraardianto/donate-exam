@extends('template.back')
@section('konten')
<div class="main-panel">
  <div class="content-wrapper">
      <center>
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card bg-facebook d-flex align-items-center">
            <div class="card-body">
              <div
                class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
                <i class="mdi mdi-coin text-white icon-lg" style="font-size: 80px"></i>
                <div class="ml-3 ml-md-0 ml-xl-3">
                  @foreach ($data as $item)
                  <h1 class="text-white font-weight-bold">Rp. {{ number_format($item->total_donasi_program,0,",",".")}}</h1>
                  <p class="mt-2 text-white card-text" style="font-size: 20px">Total Donasi Masuk</p>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </center>
    <div class="row">
        @foreach ($total as $item)
          <div class="col-md-4 grid-margin stretch-card">
            <div class="card bg-twitter d-flex align-items-center">
              <div class="card-body">
                <div class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start">
                  <i class="mdi mdi-arrange-bring-forward text-white icon-lg"></i>
                  <div class="ml-md-0 ml-xl-3">
                    <h5 class="text-white font-weight-bold">{{ $item->nama_program }}</h5>
                    <p class="mt-2 text-white card-text">Total Terkumpul : Rp. {{ number_format($item->total_donasi_program,0,",",".")}}</p>
                    <p class="text-white card-text" style="margin-top:-5%">Donasi Terbanyak : Rp. {{ number_format($item->tertinggi,0,",",".")}}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
    </div>
  </div>
 
  <footer class="footer">
    <div class="card">
      <div class="card-body">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
          <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Distributed By: <a href="https://www.themewagon.com/" target="_blank">ThemeWagon</a></span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
        </div>
      </div>
    </div>
  </footer>
  <!-- partial -->
</div>
@endsection
    
  