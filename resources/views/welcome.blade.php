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


          <div class="p-5  bg-warning rounded-3">
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
          </div>


      </main>
<div class="row p-5 ">
    <div class="col-lg-12">
        <p style="font-size: 5em" class="text-center  d-flex justify-content-center">
            Layanan Kami
        </p>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 ">
      <div class="card border-0">
        <div class="card-body ">
          <h5 class="card-title">DUPAK </h5>
          <p class="card-text">Daftar yang memuat prestasi kerja yang dicapai oleh calon atau pejabat fungsional yang diajukan dalam bentuk angka kredit dalam kurun waktu tertentu sesuai dengan ketentuan masing-masing peraturan jabatan fungsional dan angka kreditnya</p>
          <a href="/dupak" class="btn btn-primary">Buat DUPAK</a>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 ">
      <div class="card border-0">
        <div class="card-body ">
          <h5 class="card-title">SKP </h5>
          <p class="card-text"> Rencana dan target kinerja yang harus dicapai oleh pegawai dalam kurun waktu penilaian yang bersifat nyata dan dapat diukur serta disepakati pegawai dan atasannya</p>
          <a href="/skp" class="btn btn-primary">Buat SKP</a>
        </div>
      </div>
    </div>
</div>

@stop
