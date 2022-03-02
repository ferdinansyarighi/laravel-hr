@extends('layouts.master')
@section('title','Invitation Builder')
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
              <li class="breadcrumb-item active">Dashboard</li>
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
                <h5 class="card-title">Profil Undangan</h5>
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
                      <label for="url_list">URL</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="url_desc">pro.aurorashine.id/</span>
                        </div>
                        <input type="text" class="form-control" list="url_data" id="url_list" value="{{ Auth::user()->url }}" onchange="setSession()">
                        <datalist id="url_data">
                          <option value="venni-ferdi">
                          <option value="jihan-zakaria">
                          <option value="venniferdi">
                        </datalist>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="form-group">
                      <label for="name_txt">Nama Lengkap</label>
                      <input type="text" class="form-control" id="name_txt" value="{{ Auth::user()->name }}" readonly>
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
                      <label for="pass_txt">Password</label>
                      <input type="password" class="form-control" id="pass_txt" value="*******" readonly>
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="form-group">
                      <label for="nohp_txt">Nomor HP</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="nohp_desc">+62</span>
                        </div>
                        <input type="text" class="form-control" id="nohp_txt" value="{{ Auth::user()->phone_num }}" readonly>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->

              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-text">MASA AKTIF</span>
                      <h5 class="description-header">$35,210.43 Hari</h5>
                    </div>
                  </div>
        
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-text">RSVP</span>
                      <h5 class="description-header">$10,390.90 Orang</h5>
                    </div>
                  </div>
        
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-text">KEHADIRAN</span>
                      <h5 class="description-header">$24,813.53 Orang</h5>
                    </div>
                  </div>
        
                  <div class="col-sm-3 col-6">
                    <div class="description-block">
                      <span class="description-text">UCAPAN</span>
                      <h5 class="description-header">1200 Ucapan</h5>
                    </div>
                  </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->

            </div>
            <!-- /.card -->
          </div>
        </div>

      </div>
    </section>
    <!-- /.content -->
@endsection

@push('custom-js')
  <script src="{{ asset('assets/dist/customjs/profile.js') }}"></script>
@endpush