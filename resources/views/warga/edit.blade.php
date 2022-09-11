@extends ("layout.master")

@section("content")
@section("headercontent")
Edit Data
@endsection
<div class="container">
    <div class="mb-3 ml-5 col-sm-7">
    <a href="/warga" class="btn btn-success mb-3">Data Warga</a>
    </div>
    <form action="/warga/{{$warga->id}}" method="post">
        @method('put')
        @csrf
        <div class="mb-3 ml-5  ml-5 col-sm-7  ">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" aria-describedby="nama" value="{{$warga->nama}}">
        </div>
        <div class="mb-3 ml-5 col-sm-7">
            <label for="exampleInputEmail1" class="form-label">NIK</label>
            <input type="text" name="nik" class="form-control" id="nik" aria-describedby="nik" value="{{$warga->nik}}">
        </div>
        <div class="mb-3 ml-5 col-sm-7">
            <label for="exampleInputEmail1" class="form-label">No.KK</label>
            <input type="text" name="no_kk" class="form-control" id="no_kk" aria-describedby="no_kk" value="{{$warga->no_kk}}">
        </div>
        <div class="mb-3 ml-5 col-sm-7">
        <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
        <select class="form-select" name="jenis_kelamin"aria-label="Default select example">
            <option selected>Pilih Jenis Kelamin</option>
            <option value="pria" @if($warga->jenis_kelamin == "pria") selected @endif>Pria</option>
            <option value="wanita"@if($warga->jenis_kelamin == "wanita") selected @endif>Wanita</option>
        </select>
        </div>
     
        <div class="mb-3 ml-5 col-sm-7">
            <label for="exampleInputEmail1" class="form-label">Alamat</label>
            <textarea class="form-control"name="alamat" value="{{$warga->alamat}}" ></textarea>
        </div>
        <div class="mt-3 ml-5 col-sm-7">
        <button type="submit" name="submit" value="save" class="btn btn-primary">Submit</button>
        </div>
        </form>           
    </div>
    
@endsection