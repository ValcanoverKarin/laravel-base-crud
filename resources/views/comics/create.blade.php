@extends('layouts.app')

@section('main_content')
    <section>
        <div class="container">
            <h1>Add New Comic</h1>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            
            <form action="{{ route('comics.store') }}" method="post">
                @csrf
                @method('POST')

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required value="{{ old('title') }}">
                </div>

                <div class="form-group">
                    <label for="image">Image url</label>
                    <input type="text" class="form-control" id="image" name="image" required value="{{ old('image') }}">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" id="description" cols="30" rows="10" value="{{ old('description') }}"></textarea>
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price" required value="{{ old('price') }}">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            
            </form>
            

        </div>
    </section>
@endsection