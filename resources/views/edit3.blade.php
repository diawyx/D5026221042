@extends('master2')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Data Mouse</h3>

	<a href="/mouse"> Kembali</a>

	<br/>
	<br/>

	@foreach($mouse as $m)
	<form action="/mouse/update" method="post" class="form-horizontal">
		{{ csrf_field() }}
		<input type="hidden" name="kodemouse" value="{{ $m->kodemouse }}"> <br/>
		<div class = "form-group">
            <label for = "merkmouse" class = "col-sm-2 control-label">Merk Mouse</label>
            <div class = "col-sm-8">
               <input required="required" name="merkmouse" type = "text" class = "form-control" id = "merkmouse" value="{{ $m->merkmouse }}">
            </div>
        </div>
        <div class = "form-group">
            <label for = "stockmouse" class = "col-sm-2 control-label">Stok Mouse</label>
            <div class = "col-sm-8">
               <input required="required" name="stockmouse" type = "number" class = "form-control" id = "stockmouse" value="{{ $m->stockmouse }}">
            </div>
        </div>
        <div class = "form-group">
            <label for = "tersedia" class = "col-sm-2 control-label">Tersedia</label>
            <div class = "col-sm-8">
               <input required="required" name="tersedia" type = "number" class = "form-control" id = "tersedia" value="{{ $m->tersedia }}">
            </div>
        </div>
        <div class = "form-group">
            <div class = "col-sm-8">
                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </div>
	</form>
	@endforeach


@endsection
