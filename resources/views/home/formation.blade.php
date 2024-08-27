@include('home.include.header')
<link rel="stylesheet" href="asset/css/menu.css">
<style>
    .card-text {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        -webkit-line-clamp: 3;
        line-height: 1.5em;
        max-height: 4.5em;
    }

    .read-more-content {
        display: none;
    }
</style>
<main>

    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Nos Formations</h1>
          <p class="lead text-body-secondary">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        </div>
      </div>
    </section>
    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($formation as $formations)
                    <div class="col">
                        <div class="card shadow-sm">
                            @if ($formations->image)
                            <img src="{{ asset('storage/' . $formations->image) }}" alt="Image de la formation" class="img">
                            @endif
                            <div class="card-body">
                                <p class="title" style="text-align: center;">
                                    {{ $formations->title }}</p>
                                <p class="card-text">{{ $formations->description }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ url('article/' . $formations->id) }}"
                                            class="btn btn-sm btn-outline-secondary">Voir Formation</a>
                                    </div>
                                    <small class="text-body-secondary">{{ $formations->start_date }}</small>
                                </div>
    
                            </div>
                        </div>
                    </div>
                @endforeach
            </div><br>
            {{ $formation->links() }}
        </div>
    </div>
   
  
  </main>
{{-- Correction 1 --}}



@include('home.include.footer')
