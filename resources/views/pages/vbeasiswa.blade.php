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
                <h3 class="card-title">Daftar Beasiswa yang tersedia saat ini.</h3>

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
                  @foreach ($beasiswa as $bs)
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $bs->name }}
                    <a href="/dbeasiswa/{{ $bs->id }}" class="badge bg-primary rounded-pill">Detail</a>
                  </li>
                  @endforeach
                </ul>



                {{-- <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Beasiswa</th>
                      {{-- <th>Jenis Beasiswa</th>
                      <th>Kampus</th>
                      <th>Jurusan</th>
                      <th>Batas Pendaftaran</th> --}}
                {{-- <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      @foreach ($beasiswa as $bs)
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $bs->name }}</td> --}}
                {{-- <td>{{ $bs->jenis }}</td>
                <td>{{ $bs->kampus }}</td>
                <td>{{ $bs->jurusan }}</td>
                <td>{{ $bs->batas_pendaftaran }}</td> --}}
                {{-- <td>
                        <a href="{{ route('dbeasiswa') }}" class="badge badge-success">Detail</a>
                </td>
                </tr>
                @endforeach
                </tr>
                </tbody>
                </table> --}}
              </div>
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
