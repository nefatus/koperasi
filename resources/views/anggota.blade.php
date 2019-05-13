@extends('master')
@section('content')

<!-- DataTables Example -->
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Anggota</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Id Anggota</th>
                    <th>Id Petugas</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telp</th>
                    <th>TTL</th>
                    <th>Jenis Kelamin</th>
                    <th>Action</th>
                  </tr>
                  @foreach($anggota as $a)
                  <tr>
                  <td>{{$a->id_anggota}}</td>
                  <td>{{$a->Petugas_id_petugas}}</td>                 
                  <td>{{$a->nama}}</td>
                  <td>{{$a->alamat}}</td>
                  <td>{{$a->telp}}</td>
                  <td>{{$a->ttl}}</td>
                  <td>{{$a->jeniskelamin}}</td>
                  <td>
                  <form action="{{route('anggota.destroy', $a->id_anggota)}}" method="post">
				            {{csrf_field()}}
				            {{ method_field('DELETE') }}
			
				            <a class="btn btn-sm btn-warning href=" href="{{route('anggota.edit', $a->id_anggota)}}">Edit</a>
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
