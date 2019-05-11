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
                    <th>Id Petugas</th>
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
                  <form action="{{route('petugas.destroy', $p->id_petugas)}}" method="post">
				            {{csrf_field()}}
				            {{ method_field('DELETE') }}
			
				            <a class="btn btn-sm btn-warning href=" href="{{route('petugas.edit', $p->id_petugas)}}">Edit</a>
				|           <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are You Sure Want To Delete This Data?')">Hapus</button>
				          </form>
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
