@extends('layout.index')
@section('content')<div class="card">
  <div class="card-header d-flex justify-content-between align-items-center">
    <div>
        <h3 class="card-title mb-0">Bordered Table</h3>
        <button type="button" class="btn btn-primary btn-sm">
          <a href="{{ route('add') }}" class="btn btn-primary btn-sm">Tambah data</a>
        </button>
    </div>
    {{-- serch --}}
    <div class="search-bar ml-auto">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" class="form-control" placeholder="Search" title="Enter search keyword">
            <button type="submit" class="btn btn-outline-secondary" title="Search"><i class="bi bi-search"></i></button>
        </form>
    </div>
    {{-- end serchm  --}}
</div>


    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
            <tr class="text-center">
                <th style="width: 10px">No</th>
                <th>Nama</th>
                <th>No telpon</th>
                <th>Deskripsi</th>
                <th>Bukti</th>
                <th style="width: 120px">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach ($pengaduan as $row) 
            <tr class="text-center">
                <td>{{$no++}}</td>
                <td>{{$row->nama}}</td>
                <td>{{$row->tlp}}</td>
                <td>{{$row->deskripsi}}</td>
                <td>{{$row->bukti}}</td>
                <td>
                    <div class="d-flex">
                        <a href="" class="btn btn-primary btn-sm"> <i class="fas fa-edit"></i>Edit</a>
                        <a href="" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i>Hapus</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
      </div>
      
    <!-- /.card-body -->
    <div class="card-footer clearfix">
      <ul class="pagination pagination-sm m-0 float-right">
        <li class="page-item"><a class="page-link" href="#">«</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">»</a></li>
      </ul>
    </div>
  </div>
@endsection
