@extends('layouts.main')

@section('title', 'Magang')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Magang</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"></h3>
      </div>

      <div class="card-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Magang yang tersedia saat ini.</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="height: 300px;">
                <ul class="list-group">
                  @foreach ($magang as $mg)
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $mg->name }}
                    <a href="/dmagang/{{ $mg->id }}" class="badge bg-primary rounded-pill">Detail</a>
                  </li>
                  @endforeach
                </ul>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>




        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
