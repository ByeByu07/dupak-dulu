@extends('layout.main2')
@section('content')
<section class="mt-3 shad-me border-radius-15">
    <header class="mb-3 d-flex justify-content-between">
        <h1>Profile Section</h1>
        <button class="btn btn-info"><img src="https://img.icons8.com/external-becris-lineal-becris/32/000000/external-edit-mintab-for-ios-becris-lineal-becris.png"/></button>
    </header>
<div class="row">
    <div class="col-3">
        <img src="storage/profileImg/test.jpeg" alt="" class="img-fluid  border-radius-30">
    </div>
    <div class="col-8">
        @foreach ($user as $user)
        <table>
            <tbody>
                <tr>
                    <th>Nama</th>
                    <td>&nbsp;:&nbsp;&nbsp;   </td>
                    <td>{{$user->username}}</td>
                </tr>
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
        @endforeach
    </div>
</div>
</section>
@stop
