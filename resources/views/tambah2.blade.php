@extends('master2')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Nilai</h3>

	<a href="/nilaikuliah"> Kembali</a>

	<br/>
	<br/>

	<form action="/nilaikuliah/store" method="post" class="form-horizontal">
		{{ csrf_field() }}


		<div class = "form-group">
            <label for = "NRP" class = "col-sm-2 control-label">NRP</label>
            <div class = "col-sm-8">
               <input required="required" name="NRP" type = "text" class = "form-control" id = "NRP" placeholder = "Masukkan jabatan">
            </div>
        </div>
        <div class = "form-group">
            <label for = "NilaiAngka" class = "col-sm-2 control-label">Nilai Angka</label>
            <div class = "col-sm-8">
               <input required="required" name="NilaiAngka" type = "number" class = "form-control" id = "NilaiAngka" placeholder = "Masukkan umur">
            </div>
        </div>
        <div class = "form-group">
            <label for = "SKS" class = "col-sm-2 control-label">SKS</label>
            <div class = "col-sm-8">
               <input required="required" name="SKS" class = "form-control" id = "SKS" placeholder = "Masukkan alamat">
            </div>
        </div>
        <div class = "form-group">
            <div class = "col-sm-8">
                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </div>
	</form>

@endsection
