@extends('layouts.app')

@section('main_content')
    <section>
        <div class="container">
            <h1>Lista fumetti</h1>

            <div class="row">
                @foreach($comics as $comic)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ $comic->image }}" alt="Card image cap">
                        <div class="card-body">
                            <h1>{{ $comic->title }}</h1>
                            <a href="{{ route('comics.show', [
                                'comic' => $comic['id']
                            ]) }}" class="btn btn-primary">View Details</a>

                            <div>
                                <a href="{{ route('comics.edit', [
                                    'comic' => $comic->id
                                ]) }}" class="btn btn-secondary">Modify Item</a>
                            </div>

                            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="post">
                                @csrf
                                @method('DELETE')

                                <input class="btn btn-danger" type="submit" value="Delete">    
                            </form>
                        </div>
                      </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection