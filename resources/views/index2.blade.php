@extends('master2')
@section('title', 'Database Pegawai')

@section('judul_halaman')
    <hr>
	<h3>Nilai Kuliah</h3>

    <p>Cari Nilai :</p>
	<form action="/nilaikuliah/cari" method="GET">
		<input class="form form-control" type="text" name="cari" placeholder="Cari Nilai" value="{{ old('cari') }}">
		<input type="submit" value="CARI" class="btn btn-primary">
	</form>

    <br>
	<a href="/nilaikuliah/tambah"> + Tambah Data Nilai</a>

	<br>

    @endsection

    @section('konten')
	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>NilaiAngka</th>
			<th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>

		</tr>
		@foreach($nilaikuliah as $n)
		<tr>
			<td>{{ $n->ID }}</td>
			<td>{{ $n->NRP }}</td>
			<td>{{ $n->NilaiAngka }}</td>
			<td>{{ $n->SKS }}</td>
            <td>
                @if ($n->NilaiAngka <=40)
                    D
                @elseif ($n->NilaiAngka > 40 && $n->NilaiAngka <= 60)
                    C
                @elseif ($n->NilaiAngka > 60 && $n->NilaiAngka <=80)
                    B
                @else
                    A

             @endif
            </td>
            <td>{{$n->SKS * $n->NilaiAngka}}</td>
		</tr>
		@endforeach
	</table>


    @endsection



