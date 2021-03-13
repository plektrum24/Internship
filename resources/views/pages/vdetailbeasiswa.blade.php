@extends('layouts.main')

@section('title', 'Beasiswa')


@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Beasiswa</h1>
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
                <h3 class="card-title">Informasi Detail Beasiswa</h3>
              </div>
              <div class="container">
                <div class="row align-items-start">
                  <div class="col my-3">
                    <img src="{{ asset('landing/assets/img/more-service-2.png') }}" class="img-fluid">
                  </div>
                  <div class="col my-3">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">
                            <i class="fas fa-landmark"></i>
                            Informasi Detail Beasiswa
                          </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <dl class="row">
                            <dt class="col-sm-4">Nama Beasiswa</dt>
                            <dd class="col-sm-8">: {{ $beasiswa->name }}</dd>
                            <dt class="col-sm-4">Jenis Beasiswa</dt>
                            <dd class="col-sm-8">: {{ $beasiswa->jenis }}</dd>
                            <dt class="col-sm-4">Kampus/Instansi</dt>
                            <dd class="col-sm-8">: {{ $beasiswa->kampus }}</dd>
                            <dt class="col-sm-4">Jurusan</dt>
                            <dd class="col-sm-8">: {{ $beasiswa->jurusan }}</dd>
                            <dt class="col-sm-4">Batas Pendaftaran</dt>
                            <dd class="col-sm-8">: {{ $beasiswa->batas_pendaftaran }}</dd>
                          </dl>
                          <a href="{{ $beasiswa->link }}" class="btn btn-primary">Daftar
                            Sekarang</a>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                    <!-- ./col -->
                  </div>
                </div>
              </div>
            </div>


            {{--  <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Beasiswa</th>
                      <th>Jenis Beasiswa</th>
                      <th>Kampus</th>
                      <th>Jurusan</th>
                      <th>Batas Pendaftaran</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <tr>
                        <th scope="row">{{ $beasiswa->id }}</th>
            <td name="name">{{ $beasiswa->name }}</td>
            <td name="jenis">{{ $beasiswa->jenis }}</td>
            <td name="kampus">{{ $beasiswa->kampus }}</td>
            <td name="jurusan">{{ $beasiswa->jurusan }}</td>
            <td name="batas_pendaftaran">{{ $beasiswa->batas_pendaftaran }}</td>
            <td>
              <a href="" class="badge badge-success">Daftar</a>
            </td>
            </tr>
            </tr>
            </tbody>
            </table> --}}
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
