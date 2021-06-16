@extends('layouts.app')

@section('main_content')
    <section>
        <div class="container">
            <h1>Modifica fumetto</h1>

            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

           
            <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="post">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required value="{{ $comic->title }}">
                </div>

                <div class="form-group">
                    <label for="image">Image url</label>
                    <input type="text" class="form-control" id="image" name="image" required value="{{ $comic->image }}">
                    <img style="max-height: 350px" src="{{$comic->image}}" alt="{{$comic->title}}">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" id="description" cols="30" rows="10" value="{{ $comic->description }}"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price" required value="{{ $comic->price }}">
                </div>

                <button type="submit" class="btn btn-primary">Modify</button>
            
            </form>
           
        </div>
    </section>
@endsection