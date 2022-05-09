@extends('layout.main2')
@section('content')
<div class="card bg-light">
    <div class="card-body">
        <h2 class='text-center'>User Profile</h2>
        <h5 class="border-bottom border-dark d-inline-block text-center">Username</h3>
        <div class="">balaraja</div>
        <h5 class="border-bottom border-dark d-inline-block text-center">Email</h4>
        <div class="">muhammadbaharuddin08123@gmail.com</div>
        <h5 class="border-bottom border-dark d-inline-block text-center">Nomor WhatsApp</h4>
        <div class="">085710910867</div>
    </div>
</div>
<h1 class="text-center m-2 bg-warning p-2">Riwayat Anda</h1>
<div class="accordion accordion-flush container mt-3" id="accordionFlushExample">
    <div class="accordion-item">
      <h5 class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed p-1 btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
          Order - 1 : 27 Oktober  2023
        </button>
      </h5>
      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
      </div>
    </div>
    <div class="accordion-item">
      <h5 class="accordion-header" id="flush-headingTwo">
        <button class="accordion-button collapsed p-1 btn-light " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
          Order - 2 : 1 Juni 2023
        </button>
      </h5>
      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
      </div>
    </div>
  </div>
@stop()
