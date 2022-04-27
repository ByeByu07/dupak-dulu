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


          <div class="p-5 mb-4 bg-warning rounded-3">
            <div class="container-fluid py-5">
              <h1 class="display-5 fw-bold">DupakDulu, Yuk!</h1>
              <p class="col-md-8 fs-4">Jasa Tulis SKP-DUPAK-BAPAK</p>
              <p><strong class=''>DupakDulu</strong>  Berpengalaman Dalam Pembuatan SKP-DUPAK</p>
            </div>
          </div>

          <div class="row align-items-md-stretch">
            <div class="col-md-12 card border-0 text-center">
              <img src="jumbotron.png" class="card-img-top w-50 mx-auto">
              <div class="h-100 p-4 card-body accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed btn-warning rounded px-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"  aria-expanded="false" aria-controls="collapseOne">
                          Masa Pesanan
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <h3> Kami akan mengirim 1 x 24 jam  setelah anda menyelesaikan pembayaran.</h3>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header " id="headingTwo">
                        <button class="accordion-button collapsed btn-warning rounded px-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Biaya pembuatan
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <h3><strong>50RB</strong>/semester</h3>
                        </div>
                      </div>
                    </div>
              </div>
            </div>
            {{-- <div class="col-md-6 card border-0 text-center">
                <img src="jumbotron.png" class="card-img-top w-50 mx-auto" width="200">
                <div class="h-100 p-4 mt-5 card-body">
                    <h3>Revisi Tanpa Batas</h3>
                    <h3>1 x 24 Jam</h3>
                    <h3>PDF EXCEL WORD</h3>
                </div>
            </div> --}}
          </div>


      </main>

<div class="row p-5">
    <div class="col-lg-12">
        <p style="font-size: 5em" class="text-center  d-flex justify-content-center">
            Layanan Kami
        </p>
    </div>
</div>
<div class="row ">
    <div class="col-lg-6 col-md-6">
      <div class="card border-0">
        <div class="card-body">
          <h5 class="card-title">DUPAK </h5>
          <p class="card-text">Daftar yang memuat prestasi kerja yang dicapai oleh calon atau pejabat fungsional yang diajukan dalam bentuk angka kredit dalam kurun waktu tertentu sesuai dengan ketentuan masing-masing peraturan jabatan fungsional dan angka kreditnya</p>
          <a href="#" class="btn btn-primary">Buat DUPAK</a>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-6">
      <div class="card border-0">
        <div class="card-body">
          <h5 class="card-title">SKP </h5>
          <p class="card-text"> Rencana dan target kinerja yang harus dicapai oleh pegawai dalam kurun waktu penilaian yang bersifat nyata dan dapat diukur serta disepakati pegawai dan atasannya</p>
          <a href="#" class="btn btn-primary">Buat SKP</a>
        </div>
      </div>
    </div>
    {{-- <div class="col-lg-4 col-md-6">
        <div class="card border-0">
          <div class="card-body">
            <h5 class="card-title">BAPAK </h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#p" id='p' class="btn btn-dark">Segera Datang . . .</a>
          </div>
        </div>
      </div>
    <div class="col-lg-4 col-md-6">
      <div class="card border-0">
        <div class="card-body">
          <h5 class="card-title">DUPAK </h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Buat DUPAK</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="card border-0">
        <div class="card-body">
          <h5 class="card-title">SKP </h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Buat SKP</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card border-0">
          <div class="card-body">
            <h5 class="card-title">BAPAK </h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Buat SKP</a>
          </div>
        </div>
      </div> --}}
  </div>
@stop
