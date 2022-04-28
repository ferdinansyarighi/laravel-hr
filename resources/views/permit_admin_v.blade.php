@extends('layouts.master')
@section('title','Permission')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          {{-- <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col --> --}}
          {{-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a>Home</a></li>
              <li class="breadcrumb-item active">Permit</li>
            </ol>
          </div><!-- /.col --> --}}
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">
            <div class="card">

              <div class="card-header">
                <h5 class="card-title">Permission</h5>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->

              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="form-group">
                      <label for="name_txt">Nama Lengkap</label>
                      <input type="text" class="form-control" id="name_txt" value="{{ Auth::user()->name }}" readonly>
                      <input type="text" class="form-control" id="id_txt" value="{{ Auth::user()->id }}" hidden>
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="form-group">
                      <label for="email_txt">Email</label>
                      <input type="email" class="form-control" id="email_txt" value="{{ Auth::user()->email }}" readonly>
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="form-group">
                      <label for="type_txt">Ijin</label>
                      <select class="form-control" id="type_txt">
                        <option value="cuti">Cuti</option>
                        <option value="sakit">Sakit</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="form-group">
                      <label for="date_txt">Date</label>
                      <input type="date" class="form-control" id="date_txt">
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <button class="btn btn-primary" onclick="saveData()">Submit</button>
                  </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->

            </div>
            <!-- /.card -->
          </div>
        </div>

      </div>
    </section>
    <!-- /.content -->
@endsection

@push('custom-js')
  <script src="{{ asset('assets/dist/customjs/permit.js') }}"></script>
@endpush