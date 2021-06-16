@extends('layouts.app')

@section('main_content')
    <section>
        <div class="container">
            <h1>lista fumetti</h1>

            <div class="row">

                @foreach($comics as $comic)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ $comic->image }}" alt="Card image cap">
                        <div class="card-body">
                            <h1>{{ $comic->title }}</h1>
                            @if($comic->description)
                                <p class="card-text">{{ $comic->description }}</p>
                            @endif
                            <p class="card-text">Price: ${{ $comic->price }}</p>
                            <a href="{{ route('comics.show', [
                                'comic' => $comic['id']
                            ]) }}" class="btn btn-primary">View Details</a>
                        </div>
                      </div>
                </div>
                @endforeach
            </div>
        </div>

    </section>
@endsection