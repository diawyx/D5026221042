@extends('master2')
@section('title', 'Database Pegawai')

@section('judul_halaman')
    <hr>
	<h3>Pilih Kategori</h3>
	<br>

    @endsection
    @section('konten')

    <form action="/hasilcombo" method="post">
        @csrf
        <select class="form-control" name="index4" id="index4">
            @foreach($kategori as $id => $nama)
                <option value="{{ $id }}">{{ $nama }}</option>
            @endforeach
        </select>
    <br/>
        <input class="btn btn-primary" type="submit" value="KIRIM">
    </form>

    @if(isset($selectedOptionId))
        <h2>Anda Telah Memilih Kategori dengan ID = {{ $selectedOptionId }}</h2>
        <br/>
    @endif
@endsection



