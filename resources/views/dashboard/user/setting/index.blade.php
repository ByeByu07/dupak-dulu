@extends('layout.main2')
@section('content')
@foreach ($user as $user)
<div class="row mt-3">
    @if(session()->has('message')){
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
    }@endif
    <div class="col-md-4">
        <div class="card p-2">
            <header class="">
                <h2 class="text-center"> <img  src="https://img.icons8.com/windows/32/000000/password.png"/>&nbsp;Password</h2>
            </header>
            <section>
                <div class="row">
                    <label for="inputPassword" class="col-12 col-form-label">Password</label>
                    <div class="col-12">
                      <input type="password" class="form-control" id="inputPassword" value="{{$user->password}}" readonly>
                    </div>
                </div>
                <div class="row">
                    <form action="/dashboard/checkpass" method="post">
                        @csrf
                        <label for="inputPassword" class="col-12 col-form-label">Masukkan password lama</label>
                        <div class="col-12">
                            <input type="password" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-danger mt-3">Ganti Password</button>
                </form>
            </section>
        </div>
    </div>
   <div class="col-md-8">
    <div class="card p-2">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore enim nemo accusamus natus incidunt debitis iure dicta unde quae cumque impedit, nulla pariatur! Distinctio dolorem, voluptas autem quos excepturi dicta quia esse, exercitationem impedit iusto iure. Sit doloribus laborum quidem incidunt id hic itaque quae soluta sint, fugiat a exercitationem numquam, nesciunt ipsa ad sapiente laboriosam nisi ipsum accusantium dicta, tempora illo optio rerum! Consequuntur doloremque ab veniam illum, repudiandae repellendus libero ex, laudantium est similique iusto esse quasi debitis quaerat mollitia. Illum modi, quia molestias veniam voluptatibus aliquid, dolor sed saepe nisi rerum facere quos odit consectetur earum quod?
      </div>
    </div>
</div>
{{-- modal --}}
<div class="modal fade" id="modalOldPass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ganti Password</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/dashboard/chgpass" method="post">
                @csrf
                <div class="row">
                    <label for="inputPassword" class="col-12 col-form-label">Masukkan password baru</label>
                    <div class="col-12">
                      <input type="password" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="row">
                    <label for="inputPassword" class="col-12 col-form-label">Konfirmasi password baru</label>
                    <div class="col-12">
                      <input type="password" class="form-control" id="inputPassword">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
</div>
@endforeach
@stop
