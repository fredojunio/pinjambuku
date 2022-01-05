@extends('layouts.app')
@section('title', 'Detail Buku')
@section('content')

<div class="container-fluid">
    <div class="container">
        <h1 class="mt-4">
            Detail Buku
        </h1>

        <div class="row">
            <div class="card mx-2 col-lg-4 mb-3" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset($book->img) }}" alt="Card image cap">
            </div>
            <div class="w-75">
                <h2>
                    {{ $book->judul }}
                </h2>
                <hr>
                <div class="d-flex">
                    <p class="">
                        tanggal publikasi <br>
                        bahasa <br>
                        penulis <br>
                        penerbit <br>
                        jumlah halaman <br>
                        kategori
                    </p>
                    <p class="mx-3">
                        : {{ $book->publikasi }}<br>
                        : {{ $book->bahasa }}<br>
                        : {{ $book->penulis }}<br>
                        : {{ $book->penerbit }}<br>
                        : {{ $book->halaman }}<br>
                        : {{ $book->kategori }}
                    </p>
                </div>
                <h4>
                    Deskripsi
                </h4>
                <p>
                    {{ $book->deskripsi }}
                </p>

                {{-- if belum pinjam --}}
                <a href="" class="btn btn-success">
                    Pinjam
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
