@extends('layouts.app')

@section('main_content')
    <section>
        <div class="container">
            <h1>dettagli fumetto</h1>

            <div class="row">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ $comic->image }}" alt="Card image cap">
                        <div class="card-body">
                            <h3>Title: {{ $comic->title }}</h3>
                            @if($comic->description)
                                <p class="card-text">Description: {{ $comic->description }}</p>
                            @endif
                            <p class="card-text">Price: ${{ $comic->price }}</p>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
@endsection