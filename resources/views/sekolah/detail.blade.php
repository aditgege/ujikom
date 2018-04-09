@extends('layouts.app')
@section('content')

<div class="col-11 mx-5 px-3" style="display: inline-flex; margin-left: 100px; margin-top: 50px; padding:  ">
  <div class="panel " >
    <div>
      <div class="jumbotron jumbotron-fluid" style="padding: 60px;">
        <div class="containerku">
          <h1 class="display-4">{{ $sekolah->nama }}</h1>
          <p class="lead"> ini sub keterangan sekolah yang bernama sesuai dengan yang diatas</p>
        </div>
      </div>
    </div>
  </div>
  <div class="panel col-5 mx-5" style="padding: 0px; margin-left: 30px; width: 300px;" >
    <ul class="list-group list-group-flush ">
      <li class="list-group-item active">Detail Sekolah :</li>
      <li class="list-group-item">Kepala sekolah :  <b>{{ $sekolah->kepala_sekolah }}</b></li>
      <li class="list-group-item">alamat: <b>{{ $sekolah->alamat }}</b></li>
      <li class="list-group-item">No telp: <b>{{ $sekolah->no_telp }}</b></li>
      <li class="list-group-item">E-mail:  <b>{{$sekolah->email }}</b></li>
      <li class="list-group-item">No. Fax: <b>{{ $sekolah->no_fax }}</b></li>
      <li class="list-group-item">Website: <b>{{ $sekolah->website }}</b></li>
      <li class="list-group-item list-group-item-warning" > data sewaktu waktu dapat berubah </li>
    </ul>
  </div>
</div>
<div class="col-11 mx-5 px-3" style="margin-left: 85px;">
    <div class="col-md-11 mx-1 px-4" >
  <div id="accordion px-5">
    <div class="panel ">
      <div class="panel-header" id="headingOne">
        <h3 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Fasilitas
        </button>
        </h3>
      </div>
      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="panel-body">

            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Jenis</th>
                  <th scope="col">Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>LAB TI</td>
                  <td>Ruangan</td>
                  <td>BAIK</td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>LAB TI</td>
                  <td>Ruangan</td>
                  <td>BAIK</td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>LAB TI</td>
                  <td>Ruangan</td>
                  <td>BAIK</td>
                </tr>
              </tbody>
            </table>
      
        </div>
      </div>
    </div>
    <div class="panel">
      <div class="panel-header" id="headingTwo">
        <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        estrakulikuler
        </button>
        </h5>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
        <div class="panel-body">
         <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Jenis</th>
                  <th scope="col">Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>LAB TI</td>
                  <td>Ruangan</td>
                  <td>BAIK</td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>LAB TI</td>
                  <td>Ruangan</td>
                  <td>BAIK</td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>LAB TI</td>
                  <td>Ruangan</td>
                  <td>BAIK</td>
                </tr>
              </tbody>
            </table>
      
        </div>
      </div>
    </div>
    <div class="panel">
      <div class="panel-header" id="headingThree">
        <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Prestasi
        </button>
        </h5>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
        <div class="panel-body">
          <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Jenis</th>
                  <th scope="col">Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>LAB TI</td>
                  <td>Ruangan</td>
                  <td>BAIK</td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>LAB TI</td>
                  <td>Ruangan</td>
                  <td>BAIK</td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>LAB TI</td>
                  <td>Ruangan</td>
                  <td>BAIK</td>
                </tr>
              </tbody>
            </table>
      
        </div>
      </div>
    </div>
  </div>
</div>
</div>

@endsection