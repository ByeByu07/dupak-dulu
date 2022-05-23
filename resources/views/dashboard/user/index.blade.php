@extends('layout.main2')
@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="card bg-warning border-0 align-items-center pb-5 pt-3">
                <div class="card-body">
                    <h2 class='text-center mb-4 alert'>User Profile</h2>
                    <h5 class="border-bottom border-dark d-inline-block text-center">Email</h4>
                    <div class="">muhammadbaharuddin08123@gmail.com</div>
                    <h5 class="border-bottom border-dark d-inline-block text-center">Nomor WhatsApp</h4>
                    <div class="">085710910867</div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="wrap-jasa my-2">
                <a href="/dupak" class="btn btn-success">Buat DUPAK</a>
                <a href="/skp" class="btn btn-success">Buat SKP</a>
            </div>
            <table class="table table-hover table-bordered text-center table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tipe</th>
                        <th scope="col">Tanggal Order</th>
                        <th scope="col">Download</th>
                        <th scope="col">Detail</th>
                    </th>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>DUPAK</td>
                    <td>12-03-20</td>
                    <td class=""><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                      </svg></a></td>
                    <td class=""><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
                      </svg></a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop
