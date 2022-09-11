@extends ("layout.master")

@section("content")
@section("headercontent")
Tambah Warga
@endsection
<div class="container">
    <div class="mb-3 ml-5 col-sm-7">
    <a href="/warga" class="btn btn-success mb-3">Data Warga</a>
    </div>
    <form action="/warga/store" method="post">
        @csrf
        <div class="mb-3 ml-5  ml-5 col-sm-7  ">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" aria-describedby="nama">
        </div>
        <div class="mb-3 ml-5 col-sm-7">
            <label for="exampleInputEmail1" class="form-label">NIK</label>
            <input type="text" name="nik" class="form-control" id="nik" aria-describedby="nik">
        </div>
        <div class="mb-3 ml-5 col-sm-7">
            <label for="exampleInputEmail1" class="form-label">No.KK</label>
            <input type="text" name="no_kk" class="form-control" id="no_kk" aria-describedby="no_kk">
        </div>
        <div class="mb-3 ml-5 col-sm-7">
        <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
        <select class="form-select" name="jenis_kelamin"aria-label="Default select example">
            <option selected>Pilih Jenis Kelamin</option>
            <option value="1">Pria</option>
            <option value="2">Wanita</option>
        </select>
        </div>
     
        <div class="mb-3 ml-5 col-sm-7">
            <label for="exampleInputEmail1" class="form-label">Alamat</label>
            <textarea class="form-control"name="alamat" ></textarea>
        </div>
        <div class="mt-3 ml-5 col-sm-7">
        <button type="submit" name="submit" value="save" class="btn btn-primary">Submit</button>
        </div>
        </form>           
    </div>
    


<!-- <form action="/warga/store" method="post">
@csrf  
  <input type="text" name="name" placeholder="Nama"><br><br>
  <input type="text" name="nik" placeholder="NIK"><br><br>
  <input type="text" name="no_kk" placeholder="No.KK"><br><br>
  <select name="jenis_kelamin">
            <option selected>Pilih Jenis Kelamin</option>
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
        </select><br>
        <textarea name="alamat" rows="10"></textarea> <br>
  <input type="submit" name="submit" value="Save">
</form> -->

@endsection