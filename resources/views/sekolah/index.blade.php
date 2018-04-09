@extends('layouts.dasnav')
@section('content')

		
	<div class="container" style="margin-left: 190px; margin-top: 150px; position: absolute; padding: 30px;" >
		<div>
			<a href="{{ url('sekolah/create') }}"><button type="button" class="btn btn-primary" style="margin-bottom: 20px; margin-left:957px;">Tambah Sekolah</button></a>
		</div>
    @foreach (\App\sekolah::all() as $sekolah)
      <div class="row">
        <div class="col-md-4">
          <div class="panel mb-4 box-shadow">
              <img class="panel-img-top" src="{{ asset('thumnail2.jpg') }}" alt="panel image cap">
            <div class="panel-body">
              <p class="panel-text"><h2>{{ $sekolah->nama }}</h2></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="{{ url('sekolah/'. $sekolah->id ) }} ">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  </a>
                  <a href="{{ url('sekolah/' . $sekolah->id . '/edit') }}">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </a>
                  <a  href="{{ url('sekolah/' . $sekolah->id) }}"><button type="button" class="btn btn-sm btn-outline-secondary" class="delet">Delete</button>
                  </a>


                   
                </div>
              </div>
            </div>
          </div>
        </div>
    @endforeach
       <!--  <div class="col-md-4">
          <div class="panel mb-4 box-shadow">
            <img class="panel-img-top" src="{{ asset('thumnail2.jpg') }}" alt="panel image cap">
            <div class="panel-body">
              <p class="panel-text"><h2>SMKN 11 BANDUNG</h2></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="{{ url('detail') }} "><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                  <a href="{{ url('edit') }}"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                   <a href=""><button type="button" class="btn btn-sm btn-outline-secondary" >Delete</button></a>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel mb-4 box-shadow">
            <img class="panel-img-top" src="{{ asset('thumnail2.jpg') }}" alt="panel image cap">
            <div class="panel-body">
              <p class="panel-text"><h2>SMKN 13 BANDUNG</h2></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <a href="{{ url('detail') }} "><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                  <a href="{{ url('edit') }}"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                   <a href=""><button type="button" class="btn btn-sm btn-outline-secondary" >Delete</button></a>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel mb-4 box-shadow">
            <img class="panel-img-top" src="{{ asset('thumnail2.jpg') }}" alt="panel image cap">
            <div class="panel-body">
              <p class="panel-text"><h2>SMKN 7 BANDUNG</h2></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="{{ url('detail') }} "><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                  <a href="{{ url('edit') }}"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                   <a href=""><button type="button" class="btn btn-sm btn-outline-secondary" >Delete</button></a>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel mb-4 box-shadow">
            <img class="panel-img-top" src="{{ asset('thumnail2.jpg') }}" alt="panel image cap">
            <div class="panel-body">
              <p class="panel-text"><h2>SMKN 1 GARUT</h2></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="{{ url('detail') }} "><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                  <a href="{{ url('edit') }}"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                   <a href=""><button type="button" class="btn btn-sm btn-outline-secondary" >Delete</button></a>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel mb-4 box-shadow">
            <img class="panel-img-top" src="{{ asset('thumnail2.jpg') }}" alt="panel image cap">
            <div class="panel-body">
              <p class="panel-text"><h2>SMKN 11 BANDUNG</h2></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="{{ url('detail') }} "><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                  <a href="{{ url('edit') }}"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                   <a href=""><button type="button" class="btn btn-sm btn-outline-secondary">Delete</button></a>
                </div>
                
              </div>
            </div>
          </div>
        </div> -->
      </div>
</div>
@endsection
@push('js')
<script type="text/javascript">
    $('.delet').click(function (e) {
        e.preventDefault();

        var tr = $(this).parent().parent();

        var url = $(this).attr('href');

        $('#modalRemove').modal('show');

        $('#modalRemove .btn-confirm').click(function () {
            $.ajax({
                url: url,
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    _method: 'DELETE',
                }
            }).done(function (response) {
                if (response) {
                    tr.slideUp();
                    $('#modalRemove').modal('hide');
                }
            });
        });
    });
</script>
@endpush