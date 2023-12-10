@extends('master2')
@section('title', 'Database Pegawai')

@section('judul_halaman')
    <hr>
	<h3>Mouse</h3>

    <p>Cari mouse :</p>
	<form action="/mouse/cari" method="GET">
		<input class="form form-control" type="text" name="cari" placeholder="Cari Mouse" value="{{ old('cari') }}">
		<input type="submit" value="CARI" class="btn btn-primary">
	</form>

    <br>
	<a href="/mouse/tambah3"> + Tambah Data Nilai</a>

	<br>

    @endsection

    @section('konten')
	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Mouse</th>
			<th>Merk Mouse</th>
			<th>Stok Mouse</th>
			<th>Tersedia</th>
            <th>Opsi</th>

		</tr>
		@foreach($mouse as $m)
		<tr>
			<td>{{ $m->kodemouse }}</td>
			<td>{{ $m->merkmouse }}</td>
			<td>{{ $m->stockmouse }}</td>
			<td>
                @if ($m->tersedia >0)
                    Ya
                @else
                    Tidak

             @endif
            </td>
            <td>
                <a href="/mouse/view3/{{ $m->kodemouse }}" class="btn btn-success">View</a>
				<a href="/mouse/edit3/{{ $m->kodemouse }}" class="btn btn-warning">Edit</a>

				<a href="/mouse/hapus/{{ $m->kodemouse }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


    @endsection



