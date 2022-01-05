@extends('layouts.app')
@section('title', 'Detail Buku')
@section('content')

<div class="container-fluid">
    <div class="container">
        <h1 class="mt-4">
            Detail Buku
        </h1>

        <div class="row">
            <div class="card mx-2 col-lg-4" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/books/buku.jpg') }}" alt="Card image cap">
            </div>
            <div class="w-75">
                <h2>
                    Ini judul buku yang panjang
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
                        : <br>
                        : <br>
                        : <br>
                        : <br>
                        : <br>
                        :
                    </p>
                </div>
                <h4>
                    Deskripsi
                </h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, sequi deserunt debitis molestias
                    non minus voluptatibus expedita architecto optio. Hic facilis possimus suscipit inventore minima
                    aliquid tempora, ratione veritatis debitis!
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
