@extends('master2')

@section('konten')
    <h2 class="text-center">Informasi Mouse</h2><br>

    @foreach($mouse as $m)
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="col-sm-7">
                    <div class="card-group" style="height: 400px">
                        <div class="card bg-secondary">
                          <div class="card-body text-center">
                            {{-- konten card 1 --}}
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body d-flex flex-column justify-content-center">
                              <p class="card-text">Kode Mouse: {{ $m->kodemouse }}</p>
                              <p class="card-text">Merk Mouse: {{ $m->merkmouse }}</p>
                              <p class="card-text">Stok Mouse: {{ $m->stockmouse }}</p>
                              <p class="card-text">Tersedia: @if ($m->tersedia >0)
                                Ya
                            @else
                                Tidak

                         @endif
                        </p>
                              <br>
                              <br>
                              <div class="text-center">
                                  <a href="/mouse" class="btn btn-primary">OK</a>
                              </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
