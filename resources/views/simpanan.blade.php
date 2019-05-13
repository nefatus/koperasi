@extends('master')
@section('content')

<!-- DataTables Example -->
<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Simpanan </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Id Anggota</th>
                    <th>Nama</th>
                    <th>TTL</th>
                    <th>Nama Simpanan</th>
                    <th>Besar Simpanan</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                  </tr>
                  @foreach($simpanan as $s)
                  <tr>
                  <td>{{$s->Anggota_id_anggota}}</td>                
                  <td>{{$s->nama_anggota}}</td>
                  <td>{{$s->ttl}}</td>
                  <td>{{$s->nama_simpanan}}</td>
                  <td>{{$s->besar_simpanan}}</td>
                  <td>{{$s->keterangan}}</td>
                  <td>
                  <form action="{{route('simpanan.destroy', $s->Anggota_id_anggota)}}" method="post">
				            {{csrf_field()}}
				            {{ method_field('DELETE') }}
			
				            <a class="btn btn-sm btn-warning href=" href="{{route('simpanan.edit', $s->Anggota_id_anggota)}}">Edit</a>
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
