@extends ("layout.master")

@section("content")
@section("headercontent")
Data Warga
@endsection
<div class="container">
    <div class="row">
        <div class="">
        <table class="table table-responsive">
            <div>
            <a href="/warga/create" class="btn btn-success mb-3">Tambah Data</a>
            </div>
            <thead>
                DATA WARGA
            </thead>
            <tbody>
                <tr class="table-active">
                <tr>
                <th>Nama</th>
                <th>NIK</th>
                <th>No.KK</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            @foreach ($warga as $warga) 
                </tr>
                <td>{{$warga->nama}}</td>
                <td>{{$warga->nik}}</td>
                <td>{{$warga->no_kk}}</td>
                <td>{{$warga->jenis_kelamin}}</td>
                <td>{{$warga->alamat}}</td>
                <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="/warga/{{$warga->id}}/edit" class="btn btn-primary mb-3">Edit</a>
                <form class="mb"action="/warga/{{$warga->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" value="delete" class="btn btn-danger sm-7">Delete</button> 
                </form>  
                </td>
                </div>
                <tr> 
                @endforeach
            </tr>
            </tbody>
            </table>    
        </div>
    </div>
</div>

@endsection



