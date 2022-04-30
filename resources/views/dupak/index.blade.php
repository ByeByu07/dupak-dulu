@extends('layout.main')
@section('content')
    <div class="container mt-5 bg-light p-3 rounded">
        <h1 class="text-center mb-5">Form Dupak</h1>
        <div class="row mb-3">
            <div class="col-lg-8">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="col-lg-4">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="email">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-4">
                    <label for="tempat-lahir" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat-lahir" id="tempat-lahir">
            </div>
            <div class="col-lg-4">
                <label for="tanggal-lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal-lahir" id="tanggal-lahir">
            </div>
            <div class="col-lg-4">
                 <label for="jk" class="form-label">Jenis Kelamin</label>
                 <select name="jk" id="jk" class="form-control">
                     <option value=""></option>
                    <option value="pria">Pria</option>
                    <option value="wanita">Wanita</option>
                    <option value="lain">Lainnya</option>
                </select>
             </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-12">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" class="form-control" name="nip" id="nip">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-12">
                    <label for="no-karpeg" class="form-label">Nomer Karpeg</label>
                    <input type="text" class="form-control" name="no-karpeg" id="no-karpeg">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-8">
                    <label for="pendidikan" class="form-label">Pendidikan</label>
                    <input type="text" class="form-control" name="pendidikan" id="pendidikan" placeholder="Pendidikan sesuai yang tertera pada di SK">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-3 mb-2">
                <label for="pangkat" class="form-label">Pangkat</label>
                <div class=""><span class="badge text-white" style="background-color: #023047">Contoh : Pembina</span></div>
                <select name="pangkat" id="pangkat" class="form-select form-control">
                    <option value=""></option>
                    <option value="juru-muda">Juru Muda</option>
                    <option value="juru-muda-tingkat-1">Juru Muda Tingkat 1</option>
                    <option value="juru">Juru</option>
                    <option value="juru-tingkat-1">Juru Tingkat 1</option>
                    <option value="pengatur-muda">Pengatur Muda</option>
                    <option value="pengatur-muda-tingkat-1">Pengatur Muda Tingkat 1</option>
                    <option value="pengatur">Pengatur</option>
                    <option value="pengatur-tingkat-1">Pengatur Tingkat 1</option>
                    <option value="penata-muda">Penata Muda</option>
                    <option value="penata-muda-tingkat-1">Penata Muda Tingkat 1</option>
                    <option value="penata">Penata</option>
                    <option value="penata-tingkat-1">Penata Tingkat 1</option>
                    <option value="pembina">Pembina</option>
                    <option value="pembina-tingkat-1">Pembina Tingkat 1</option>
                    <option value="pembina-utama-muda">Pembina Utama Muda</option>
                    <option value="pembina-utama-madya">Pembina Utama Madya</option>
                    <option value="pembina-utama">Pembina Utama</option>
                </select>
                {{-- <input type="text" class="form-control" name="pangkat" id="pangkat"> --}}
            </div>
            <div class="col-lg-3 mb-2">
                <label for="golongan" class="form-label">Golongan</label>
                <div class=""><span class="badge text-white" style="background-color: #023047">Contoh : IV</span></div>
                <select name="golongan" id="golongan" class="form-select form-control">
                    <option value=""></option>
                    <option value="1">I</option>
                    <option value="2">II</option>
                    <option value="3">III</option>
                    <option value="4">IV</option>
                </select>
                {{-- <input type="text" class="form-control" name="tanggal-lahir" id="tanggal-lahir"> --}}
            </div>
            <div class="col-lg-3 mb-2">
                <label for="ruang" class="form-label">Ruang</label>
                <div class=""><span class="badge text-white" style="background-color: #023047">Contoh : a </span></div>
                <select name="ruang" id="ruang" class="form-select form-control">
                    <option value=""></option>
                    <option value="a">a</option>
                    <option value="b">b</option>
                    <option value="c">c</option>
                    <option value="d">d</option>
                    <option value="e">e</option>
                </select>
                {{-- <input type="text" class="form-control" name="tanggal-lahir" id="tanggal-lahir"> --}}
            </div>
            <div class="col-lg-3 mb-2">
                <label for="tamat-pangkat" class="form-label">TMT</label>
                <div class=""><span class="badge text-white" style="background-color: #023047">Contoh : 1 Oktober 2021</span></div>
                <input type="date" class="form-control" name="tamat-pangkat" id="tamat-pangkat">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-8 mb-2">
                <label for="jabatan" class="form-label">Jabatan Fungsional </label>
                <div class=""><span class="badge text-white" style="background-color: #023047">Contoh : Perawat Ahli Madya</span></div>
                <select name="jabatan" id="jabatan" class="form-control form-select">
                    <option value=""></option>
                    <option value="ahli-utama">Ahli Utama</option>
                    <option value="ahli-madya">Ahli Madya</option>
                    <option value="ahli-muda">Ahli Muda</option>
                    <option value="ahli-pertama">Ahli Pertama</option>
                    <option value="penyelia">Penyelia</option>
                    <option value="pelaksana-lanjutan">Pelaksan Lanjutan</option>
                    <option value="pelaksana">Pelaksana</option>
                    <option value="pelaksana-pemula">Pelaksana Pemula</option>
                </select>
                {{-- <input type="text" class="form-control" name="tempat-lahir" id="tempat-lahir"> --}}
            </div>
            <div class="col-lg-4 mb-2">
                <label for="tamat-jabatan" class="form-label">TMT</label>
                <div class=""><span class="badge text-white" style="background-color: #023047">Contoh : 1 Oktober 2021</span></div>
                <input type="date" class="form-control" name="tamat-jabatan" id="tamat-jabatan">
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-lg-4 mb-2">
                <label for="sk-pangkat-terakhir" class="form-label">SK Pangkat Terakhir</label>
                <input class='form-control form-control-file' type="file" name="sk-pangkat-terakhir" id="sk-pangkat-terakhir">
            </div>
            <div class="col-lg-4 mb-2">
                <label for="sk-pak-terakhir" class="form-label">SK PAK Terakhir</label>
                <input class='form-control form-control-file' type="file" name="sk-pak-terakhir" id="sk-pak-terakhir">
            </div>
            <div class="col-lg-4 mb-2">
                <label for="skp-terakhir" class="form-label">SKP Terakhir</label>
                <input class='form-control form-control-file' type="file" name="skp-terakhir" id="skp-terakhir">
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-lg-12">
                <label for="pesan-tambahan" class="form-label">Pesan ( Opsional )</label>
                <textarea class="form-control" name="pesan-tambahan" id="pesan-tambahan" cols="100" rows="8"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <label for="periode-pak" class="form-label">Order Periode PAK / Semester</label>
                <select name="periode-pak" id="periode-pak" class="form-control">
                    @for ($i = 1; $i<=8;$i++)
                        <option value='{{$i}}'>{{$i}}</option>
                    @endfor
                </select>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-lg-8 total mb-5">
               <h1 class="text-center total-pak"></h1>
            </div>
            <div class="col-lg-4">
                <button class="btn btn-primary w-100 py-2">Bayar</button>
            </div>
        </div>
    </div>
    <script>
        $('#periode-pak').on('change', function () {
            // const total = `Rp. ${($(this).val())*50}.000,00.-`;
            // $('.total-pak').html('halo');
            $('.total-pak').html('<p>hal</p>htmlString');
        });
    </script>
@stop
