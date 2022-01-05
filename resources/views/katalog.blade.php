@extends('layouts.app')
@section('title', 'Katalog Buku')
@section('content')

<div class="container-fluid">
    <div class="container">
        <h1 class="mt-4">
            Katalog Buku
        </h1>
        <p>
            Katalog buku perpustakaan, klik buku yang dituju untuk melihat tampilan yang lebih detail
        </p>
        <div class="py-3">
            {{-- katalog --}}
            <div class="row">

                <div class="card mx-2 col-lg-4" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/books/buku.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>

                <div class="card mx-2 col-lg-4" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/books/buku.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>

                <div class="card mx-2 col-lg-4" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/books/buku.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>

                <div class="card mx-2 col-lg-4" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/books/buku.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>

                <div class="card mx-2 col-lg-4" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/books/buku.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>

                <div class="card mx-2 col-lg-4" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/books/buku.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
