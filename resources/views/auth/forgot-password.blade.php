@extends('layout.main')
@section('content')
      <div class="modal-content container mt-5 bg-light">
        <div class="modal-header justify-content-beetwen">
          <h2 class="modal-title" id="exampleModalLabel">Forgot Password</h2>
        </div>
        <div class="modal-body">
            <form action="/forgot-password" method="post">
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
                    </div>
                </div>
        </div>
        <div class="modal-footer justify-content-between p-4">
            <div class="">
                <a href="/signin" class="btn btn-primary">Back </a>
            </div>
            <div class="">
                <button type="submit" class="btn btn-primary">Send e-mail reset password </button>
            </div>
          </form>
        </div>
      </div>
@stop
