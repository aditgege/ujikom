@extends('layouts.app')
@section('content')
<body>
<main role="main">
  <section class="jumbotron text-center">
    <div class="container" style="padding: none;">
      <h2 class="jumbotron-heading">Portal Sekolah </h2>
      <p class="lead text-muted">berisi data data sekolah yang tersedia di beberapa daerahh di provinsi yang ada di negara indonesia.</p>
      <p>
        <h3><a href="#" class="btn btn-primary my-2">SELAMAT DATANG</a></h3>
      </p>
    </div>
  </section>
  <div class="album my-5 py-5 bg-light" style="margin-top: 40px;">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="panel mb-4 box-shadow">
            <img class="panel-img-top" src="{{ asset('thumnail.jpg') }} " alt="panel image cap">
            <div class="panel-body">
              <p class="panel-text"><h2>SMKN 4 BANDUNG</h2></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="{{ url('sekolah/detail') }} "><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                  
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel mb-4 box-shadow">
           <img class="panel-img-top" src="{{ asset('thumnail.jpg') }}" alt="panel image cap">
            <div class="panel-body">
              <p class="panel-text"><h2>SMKN 11 BANDUNG</h2></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>

                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel mb-4 box-shadow">
           <img class="panel-img-top" src="{{ asset('thumnail.jpg') }}" alt="panel image cap">
            <div class="panel-body">
              <p class="panel-text"><h2>SMKN 13 BANDUNG</h2></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel mb-4 box-shadow">
           <img class="panel-img-top" src="{{ asset('thumnail.jpg') }}" alt="panel image cap">
            <div class="panel-body">
              <p class="panel-text"><h2>SMKN 7 BANDUNG</h2></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
         
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel mb-4 box-shadow">
           <img class="panel-img-top" src="{{ asset('thumnail.jpg') }}" alt="panel image cap">
            <div class="panel-body">
              <p class="panel-text"><h2>SMKN 1 GARUT</h2></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
        
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel mb-4 box-shadow">
           <img class="panel-img-top" src="{{ asset('thumnail.jpg') }}" alt="panel image cap">
            <div class="panel-body">
              <p class="panel-text"><h2>SMKN 11 BANDUNG</h2></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>

                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel mb-4 box-shadow">
           <img class="panel-img-top" src="{{ asset('thumnail.jpg') }}" alt="panel image cap">
            <div class="panel-body">
              <p class="panel-text"><h2>SMKN 8 BANDUNG</h2></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
             
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel mb-4 box-shadow">
           <img class="panel-img-top" src="{{ asset('thumnail.jpg') }}" alt="panel image cap">
            <div class="panel-body">
              <p class="panel-text"><h2>SMKN 15 BANDUNG</h2></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
         
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel mb-4 box-shadow">
           <img class="panel-img-top" src="{{ asset('thumnail.jpg') }}" alt="panel image cap">
            <div class="panel-body">
              <p class="panel-text"><h2>SMKN 9 BANDUNG</h2></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
               
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  @endsection