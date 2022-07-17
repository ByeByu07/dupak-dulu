@extends('layout.main2')
@section('content')
@foreach ($user as $user)
<div class="row mt-3">

    @error('inputPassword')
        <div class="alert alert-danger" role="alert">
            Password anda salah
        </div>
    @enderror

    @error('inputPassword2')
        <div class="alert alert-danger" role="alert">
            Masukkan Password yang sama
        </div>
    @enderror

    @if(session()->has('success'))
        <div class="alert alert-success mt-3" role="alert">
            Password Berhasil diubah
        </div>
    @endif

    <div class="col-md-4">
        <div class="card p-2">
            <header class="">
                <h2 class="text-center"> <img  src="https://img.icons8.com/windows/32/000000/password.png"/>&nbsp;Password</h2>
            </header>
            <section>
                <div class="row">
                    <label for="inputPassword" class="col-12 col-form-label">Password</label>
                    <div class="col-12">
                      <input type="password" class="form-control" id="inputPassword" value={{$user->password}} readonly>
                    </div>
                </div>
                <div class="row">
                    <form action="/setting/checkpass" method="post">
                        @csrf
                        <label for="inputPassword" class="col-12 col-form-label">Masukkan password lama</label>
                        <div class="col-12">
                            <input type="password" class="form-control" id="inputPassword" name="inputPassword">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-danger mt-3">Ganti Password</button>
                </form>
            </section>
        </div>

        @if(session()->has('message'))
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Password</h5>
                </div>
                <div class="modal-body">
                  <form action="/setting/chg-pass" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="inputPassword" class="col-form-label">Password</label>
                        <div>
                            <input type="password" class="form-control" id="inputPassword" name="inputPassword2">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="col-form-label">Password Confirmation</label>
                        <div>
                            <input type="password" class="form-control" id="inputPassword_c" name="inputPassword_c2">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" onclick="animation()" class="btn btn-primary">Save changes</button>
                </div>
            </form>
            </div>
        </div>
        @endif

</div>
   <div class="col-md-8">
    <div class="card p-2">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore enim nemo accusamus natus incidunt debitis iure dicta unde quae cumque impedit, nulla pariatur! Distinctio dolorem, voluptas autem quos excepturi dicta quia esse, exercitationem impedit iusto iure. Sit doloribus laborum quidem incidunt id hic itaque quae soluta sint, fugiat a exercitationem numquam, nesciunt ipsa ad sapiente laboriosam nisi ipsum accusantium dicta, tempora illo optio rerum! Consequuntur doloremque ab veniam illum, repudiandae repellendus libero ex, laudantium est similique iusto esse quasi debitis quaerat mollitia. Illum modi, quia molestias veniam voluptatibus aliquid, dolor sed saepe nisi rerum facere quos odit consectetur earum quod?
      </div>
    </div>
</div>
@endforeach
<script>
    function animation(){
      
                    Swal.fire(
        'Success!',
        'Password has been changes',
        'success'
        )   
      
         }
 </script>
@stop
