@extends ('layouts.master')

@section ('content')
    <div class="container">
        <h2>Pantry</h2>
        <div class="well">
            <div class="row">
                <div class="col-md-6">
                    <p>Available ingredients:</p>
                    <ul>
                        @foreach ($ingredients as $ingredient)
                            <li>
                                {{ $ingredient->name }}
                                <a class="text-danger" href="{{ route('admin.pantry.delete', [$ingredient->id]) }}">Delete</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-6">
                    <form action="{{ route('admin.pantry') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Ingredient Name:</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <button class="btn btn-primary">Save Ingredient</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection