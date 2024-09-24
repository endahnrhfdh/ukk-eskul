
/* @extends('layouts.app')
@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<!--<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p>//-->

<!-- DataTales  -->
<!--<div class="card shadow mb-4">-->
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Biodata Siswa</h6>
    </div>
    <div class="card-body">
       <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Asrama</th>
                        <th>Nama Lengkap</th>
                        <th>Tempat lahir</th>
                        <th>Tanggal lahir</th>
                        <th>Jenis kelamin</th>
                        <th>Alamat</th>
                        <th>Kontak</th>
                    </tr>   
                        <tr>
                            <td>{{ 1 }}</td>
                            <td>{{ $item->asrama }}</td>
                            <td>{{ $item->nama_Lengkap }}</td>
                            <td>{{ $item->tempat_lahir }}</td>
                            <td>{{ $item->tanggal_lahir }}</td>
                            <td>{{ $item->jenis_kelamin}}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->kontak }}</td>
                        </tr>             
                </thead>
            </table>
       </div>
    </div>
<!--</div>-->

</div>
@endsection 
