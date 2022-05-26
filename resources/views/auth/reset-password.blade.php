@extends('layout.main')
@section('content')
<div class="modal-content container mt-5 bg-light">
    <div class="modal-header justify-content-beetwen">
      <h2 class="modal-title" id="exampleModalLabel">Reset Password</h2>
    </div>
    <div class="modal-body">
        <form action="/reset-pass" method="post">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="mb-3 col-lg-12">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group">
                            <span class="input-group-text" id="email">@</span>
                            <input class="form-control" type="email" name="email" id="email"  aria-describedby="email">
                        </div>
                    </div>
                    <input type="hidden" name="token" value="{{$token}}">
                    <div class="mb-3 col-lg-6">
                        <label for="password" class="form-label">Password*</label>
                        <div class="input-group">
                            <span class="input-group-text" id="password">@</span>
                            <input class="form-control  @error('password') is-invalid @enderror" type="password" name="password" id="password"  aria-describedby="password">
                        </div>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="password_confirmation" class="form-label">Confirmation Password*</label>
                        <div class="input-group">
                            <span class="input-group-text" id="password_confirmation">@</span>
                            <input class="form-control  @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" id="password_confirmation"  aria-describedby="password_confirmation">
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="modal-footer justify-content-between p-4">
        <div class="">
            <a href="/signin" class="btn btn-primary">Back to Login</a>
        </div>
        <div class="">
            <button type="submit" class="btn btn-primary px-5">Reset</button>
        </div>
      </form>
    </div>
  </div>
@stop
