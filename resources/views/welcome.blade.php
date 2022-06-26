@extends('layout.main')
@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&display=swap');
    body{
        font-family: 'Nunito Sans', sans-serif;
    }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <main>
        @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif(session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Password harus sama</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="row mt-5">
            <div class="col-12  d-flex justify-content-center">
                <header class="mt-5 text-center jumbo-text">
                    <h1>DupakDulu, Yuk!</h1>
                    <p>Jasa Tulis SKP-DUPAK</p>
                </header>
            </div>
        </div>

          {{-- <div class="p-5  bg-warning rounded-3  height-2">
            <div class="container-fluid py-5">
              <h1 class="display-5 fw-bold">DupakDulu, Yuk!</h1>
              <p class="col-md-8 fs-4">Jasa Tulis SKP-DUPAK-BAPAK</p>
              <p><strong class=''>DupakDulu</strong>  Berpengalaman Dalam Pembuatan SKP-DUPAK</p>
            </div>
          </div>

          <div class="row align-items-md-stretch">
            <div class="col-md-12 card border-0 text-center">
                <div class="row mt-5">
                    <div class="col-lg-4 my-5">
                        <img src="home1.png" class="card-img-top" height="194" width="350">
                    </div>
                    <div class="col-lg-4 my-5 align-items-center d-flex justify-content-center rounded">
                        <div class="card  border-0">
                            <div class="card-body bg-warning rounded">
                                <h4>Bingung bikin DUPAK dimana?. Ya jelas...., di <strong><span class="border-light border-bottom text-white">DupakDulu</span></strong> kan?</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 my-2">
                        <img src="home2.png" class="card-img-top">
                    </div>
                </div>
            </div>
          </div> --}}


      </main>
<div class="row p-5 margin-wel-ku  height-1 gap-6">
    <div class="col-lg-8 text-center d-flex align-items-center pl-4 justify-content-center ">
        <div class="bg-warning p-3 ">
            <span class="logo-ku logo border-bottom border-white text-white">DupakDulu</span>
        </div>
    </div>
    <div class="col-lg-4 text-center d-flex align-items-center justify-content-center">
            <h2>Website yang menyediakan jasa bagi siapapun terutama pegawai negeri fungsionalitas yang membutuhkan jasa tulis SKP-DUPAK.</h2>
    </div>
</div>
<div class="row p-5 margin-wel-ku">
    <div class="col-lg-12">
        <p style="font-size: 5em" class="text-center  d-flex justify-content-center">
            Layanan Kami
        </p>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 shad-me">
      <div class="card border-0">
        <div class="card-body item-welcome">
          <h5 class="card-title">DUPAK </h5>
          <p class="card-text">Daftar yang memuat prestasi kerja yang dicapai oleh calon atau pejabat fungsional yang diajukan dalam bentuk angka kredit dalam kurun waktu tertentu sesuai dengan ketentuan masing-masing peraturan jabatan fungsional dan angka kreditnya</p>
          <a href="/dupak" class="btn btn-primary width-100">Buat DUPAK</a>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 shad-me">
      <div class="card border-0">
        <div class="card-body item-welcome">
          <h5 class="card-title">SKP </h5>
          <p class="card-text"> Rencana dan target kinerja yang harus dicapai oleh pegawai dalam kurun waktu penilaian yang bersifat nyata dan dapat diukur serta disepakati pegawai dan atasannya</p>
          <a href="/skp" class="btn btn-primary width-100">Buat SKP</a>
        </div>
      </div>
    </div>
</div>

@stop
