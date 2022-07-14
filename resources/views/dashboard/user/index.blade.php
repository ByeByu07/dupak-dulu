@extends('layout.main2')
@section('content')
@foreach ($user as $user)
<section class="mt-3 shad-me border-radius-15">
    <header class="mb-3 d-flex justify-content-between">
        <h1>Profile Section</h1>
        <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">
            {{-- <img src="https://img.icons8.com/external-becris-lineal-becris/32/000000/external-edit-mintab-for-ios-becris-lineal-becris.png"/> --}}
            Ubah</a>
    </header>
<div class="row">
    <div class="col-3">
        @if(!$user->avatar){
            <img src="https://thumbs.dreamstime.com/z/no-user-profile-picture-24185395.jpg" alt="" class="img-fluid  border-radius-30">
        }@else{
            <img src="{{$user->avatar}}" alt="" class="img-fluid  border-radius-30">
        }@endif
    </div>
    <div class="col-8">
        <table>
            <tbody>
                {{-- <tr>
                    <th>Nama</th>
                    <td>&nbsp;:&nbsp;&nbsp;   </td>
                    <td>{{$user->username}}</td>
                </tr> --}}
                <tr>
                    <th>Email</th>
                    <td>&nbsp;:&nbsp;&nbsp; </td>
                    <td>{{$user->email}}</td>
                </tr>
                <tr>
                    <th>No WhatsApp</th>
                    <td>&nbsp;:&nbsp;&nbsp;  </td>
                    <td>{{$user->wa}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</section>
@endforeach
<!-- Button trigger modal -->
  <!-- Modal -->
  <div class="modal fade" id="edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/dashboard/{{auth()->user()->id}}" method="post">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="email" class="form-label">Email</label>
                            <div class="input-group">
                                <span class="input-group-text" id="email">@</span>
                                <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email"  aria-describedby="email" value="{{$user->email}}">
                            </div>
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label for="wa" class="form-label">No WhatsApp</label>
                            <div class="input-group">
                                <span class="input-group-text" id="wa">@</span>
                                <input class="form-control" type="wa" name="wa" id="wa"  aria-describedby="wa" value="{{$user->wa}}">
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Ubah</button>
        </div>
             </form>
      </div>
    </div>
</div>
@stop
