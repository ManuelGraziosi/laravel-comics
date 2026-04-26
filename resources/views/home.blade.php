@extends("layouts.master")

@section("contenuto")
    <section class="bg-dark text-white py-5">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-md-6">
                    <h1 class="display-4 fw-bold text-uppercase">
                        Welcome to BooleanComics
                    </h1>

                    <p class="lead my-4">
                        Esplora eroi, villain, serie leggendarie e le ultime uscite dal mondo DC.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="text-uppercase fw-bold mb-4">
                Explore the DC Universe
            </h2>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase fw-bold">
                                Comics
                            </h5>

                            <p class="card-text">
                                Scopri le serie più iconiche e le nuove uscite disponibili.
                            </p>

                            <a href="{{ route('comics') }}"
                               class="btn btn-outline-primary">
                                Vai ai comics
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase fw-bold">
                                Comics
                            </h5>

                            <p class="card-text">
                                Scopri le serie più iconiche e le nuove uscite disponibili.
                            </p>

                            <a href="{{ route('comics') }}"
                               class="btn btn-outline-primary">
                                Vai ai comics
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="bg-primary text-white py-5">
        <div class="container text-center">
            <h2 class="text-uppercase fw-bold">
                New stories every week
            </h2>

            <p class="lead my-3">
                Rimani aggiornato sulle ultime serie, eventi speciali e nuove avventure DC.
            </p>
        </div>
    </section>
@endsection