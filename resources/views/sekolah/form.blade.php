@extends('layouts.dasnav')
@section('content')

<div class="panel col-7 formku " style="position : absolute ; margin-top : 120px; width: 500px;" >
    <form method="POST" action="{{ url('sekolah/' . @$sekolah->id) }}">
                    {{ csrf_field() }}
                    {{ @$sekolah ? method_field('PATCH') : '' }}
        <!-- <div class="form-group ">
            <label for="">Id Sekolah</label>
            <input type="text" class="form-control" id="disabledInput" name="id"  placeholder="Enter Id sekolah" value="{{ old('id', @$sekolah->id) }} ">
        </div> -->
         <div class="form-group">
            <label for="">Id nss</label>
            <input type="text" class="form-control" id="" name="nss"  placeholder="Enter nss" value="{{ old('nss', @$sekolah->nss) }}">
        </div>
         <div class="form-group">
            <label for="">nama sekolah</label>
            <input type="text" class="form-control" id="" name="nama"  placeholder="Enter nama sekolah" value="{{ old('nama', @$sekolah->nama) }}">
        </div>
         <div class="form-group">
            <label for="">alamat</label>
            <input type="text" class="form-control" id="" name="alamat" placeholder="Enter aslamat sekolah" value="{{ old('alamat', @$sekolah->alamat) }}">
        </div>
         <div class="form-group">
            <label for="">Id desa</label>
            <input type="text" class="form-control" id="" name="desa_id" placeholder="Enter Id desa" value="{{ old('desa_id', @$sekolah->desa_id) }}">
        </div>
         <div class="form-group">
            <label for="">Rt</label>
            <input type="text" class="form-control" id="" name="rt" placeholder="Enter rt " value="{{ old('rt', @$sekolah->rt) }}">
        </div>
         <div class="form-group">
            <label for="">Rw</label>
            <input type="text" class="form-control" id="" name="rw" placeholder="Enter rw" value="{{ old('rw', @$sekolah->rw) }}">
        </div>
         <div class="form-group">
            <label for="">no telp</label>
            <input type="text" class="form-control" id="" name="no_telp" placeholder="Enter no telp" value="{{ old('no_telp', @$sekolah->no_telp) }}">
        </div>
        <div class="form-group">
            <label for="">no fax</label>
            <input type="text" class="form-control" id="" name="no_fax" placeholder="Enter no fax" value="{{ old('no_fax', @$sekolah->id) }}">
        </div>
        <div class="form-group">
            <label for="">lat long</label>
            <input type="text" class="form-control" id="" name="lat_long" placeholder="Enter lat long" value="{{ old('lat_long', @$sekolah->no_fax) }}">
        </div>
        <div class="form-group">
            <label for="">image</label>
            <input type="text" class="form-control" id="" name="image" placeholder="Enter email" value="{{ old('image', @$sekolah->id) }}">
        </div>
        <div class="form-group">
            <label for="">email</label>
            <input type="text" class="form-control" id="" name="email" placeholder="Enter email" value="{{ old('email', @$sekolah->email) }}">
        </div>
        <div class="form-group">
            <label for="">website</label>
            <input type="text" class="form-control" id="" name="website" placeholder="Enter website " value="{{ old('website', @$sekolah->website) }}">
        </div>
        <div class="form-group">
            <label for="">kepala sekolah Sekolah</label>
            <input type="text" class="form-control" id="" name="kepala_sekolah"  placeholder="Enter no telp" value="{{ old('kepala_sekolah', @$sekolah->kepala_sekolah) }}">
        </div>
    
       
        
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
@endsection