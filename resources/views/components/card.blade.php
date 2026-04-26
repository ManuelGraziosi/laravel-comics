<div>
    <!-- Well begun is half done. - Aristotle -->
    <div class="card h-100 border-0 bg-dark text-white">

        <img src="{{ $thumb }}"
             class="card-img-top"
             alt="{{ $title }}"
             style="height: 280px; object-fit: cover;">

        <div class="card-body d-flex flex-column">
            <span class="badge bg-primary align-self-start mb-2 text-uppercase">
                {{ $type }}
            </span>

            <h5 class="card-title text-uppercase fw-bold">
                {{ $title }}
            </h5>

            <p class="card-text text-secondary mb-1">
                {{ $series }}
            </p>

            <p class="fw-bold mb-3">
                {{ $price }}
            </p>

            <a href="#"
               class="btn btn-primary mt-auto text-uppercase fw-bold">
                Dettagli
            </a>
        </div>

    </div>
</div>