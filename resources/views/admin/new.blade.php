@extends ('layouts.master')

@section ('content')
    <div class="container">
        <h2>New Recipe</h2>
        <div class="well">
            <form action="{{ route('admin.new') }}" method="post">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="form-group col-md-8">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Recipe Name...">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="bundle">Bundle</label>
                        <select name="bundle" id="bundle" class="form-control">
                            <option value="0">Select a bundle...</option>
                        </select>
                    </div>
                </div>
                
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="description">Description:</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="prep_time">Prep Time:</label>
                        <input type="text" class="form-control" name="prep_time" id="prep_time" placeholder="eg, 10 mins...">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="cook_time">Cook Time:</label>
                        <input type="text" class="form-control" name="cook_time" id="cook_time" placeholder="eg, 30 mins...">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="ingredients">Ingredients:</label>
                        <select id="ingredients" class="form-control">
                            @foreach ($ingredients as $ingredient)
                                <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-12">
                        <button class="btn btn-primary">Add Ingredient</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h4>Ingredients, Measurements, & Quantities</h4>

                        <!--
                            Todo
                            Add ingredients and ability to add measurements and quantities here.
                            Using VueJS to accomplish this.
                         -->
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="method">Method:</label>
                        <textarea name="method" id="method" cols="30" rows="20" class="form-control"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-primary" type="submit">Save</button>
                        <button class="btn" type="reset">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection