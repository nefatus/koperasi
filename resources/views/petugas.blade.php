@extends('master')
@section('content')

<!-- DataTables Example -->
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Id Anggota</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telp</th>
                    <th>TTL</th>
                    <th>Username</th>
                    <th>Jenis Kelamin</th>
                    <th>Action</th>
                  </tr>
                  @foreach($petugas as $p)
                  <tr>
                  <td>{{$p->id_petugas}}</td>
                  <td>{{$p->nama}}</td>
                  <td>{{$p->alamat}}</td>
                  <td>{{$p->telp}}</td>
                  <td>{{$p->ttl}}</td>
                  <td>{{$p->username}}</td>
                  <td>{{$p->jeniskelamin}}</td>
                  <td>
                      <a href="/petugas/edit/{{$p->id_petugas}}"> Edit | </a>
                      <a href="/petugas/hapus/{{$p->id_petugas}}"> Hapus </a>
                  </tr>
                  @endforeach
                </thead>
              
              

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  @endsection
