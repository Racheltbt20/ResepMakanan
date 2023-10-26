@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <!-- Content Row -->
    <div class="card shadow">
        <div class="card-header">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">{{ __('Edit Recipe') }}</h1>
                <a href="{{ route('admin.recipes.index') }}" class="btn btn-success btn-sm shadow-sm">{{ __('Go Back') }}</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.recipes.update', $recipe->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="title">{{ __('Title') }}</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $recipe->title) }}" />
                </div>
                <div class="form-group">
                    <label for="prep">{{ __('Prep') }}</label>
                    <input type="text" class="form-control" id="prep" placeholder="{{ __('Prep') }}" name="prep" value="{{ old('prep', $recipe->prep) }}" />
                </div>
                <div class="form-group">
                    <label for="cook">{{ __('Cook') }}</label>
                    <input type="text" class="form-control" id="cook" placeholder="{{ __('Cook') }}" name="cook" value="{{ old('cook', $recipe->cook) }}" />
                </div>
                <div class="form-group">
                    <label for="level">{{ __('Level') }}</label>
                    <select name="level" id="level" class="form-control" required>
                        <option {{ $recipe->level == 'For Beginner' ? 'selected' : '' }} value="For Beginner">For Beginner</option>
                        <option {{ $recipe->level == 'For Intermediate' ? 'selected' : '' }} value="For Intermediate">For Intermediate</option>
                        <option {{ $recipe->level == 'For Expert' ? 'selected' : '' }} value="For Expert">For Expert</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
            </form>
        </div>
    </div>

    <!-- Display Galleries -->
    <div class="card shadow mt-4">
        <div class="card-header">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">{{ __('Gallery') }}</h1>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recipe->galleries as $gallery)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ Storage::url($gallery->path) }}" alt="Gallery Image" width="100">
                            </td>
                            <td>
                                <a href="{{ route('admin.recipes.galleries.edit', [$recipe, $gallery]) }}" class="btn btn-info btn-sm">
                                    <i class="fa fa-pencil-alt"></i> Edit
                                </a>
                                <form class="d-inline" action="{{ route('admin.recipes.galleries.destroy', [$recipe, $gallery]) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Form to Add New Gallery Image -->
    <div class="card shadow mt-4">
        <div class="card-header">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">{{ __('Add New Gallery Image') }}</h1>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.recipes.galleries.store', $recipe) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="path">{{ __('Image Path') }}</label>
                    <input type="file" class="form-control" id="path" name="path" />
                </div>
                <button type="submit" class="btn btn-success">{{ __('Save Gallery Image') }}</button>
            </form>
        </div>
    </div>


    <!-- Display Todos -->
    <div class="card shadow mt-4">
        <div class="card-header">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">{{ __('Todos') }}</h1>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Todo</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recipe->todos as $todo)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $todo->todo }}</td>
                            <td>
                                <a href="{{ route('admin.recipes.todos.edit', [$recipe, $todo]) }}" class="btn btn-info btn-sm">
                                    <i class="fa fa-pencil-alt"></i> Edit
                                </a>
                                <form class="d-inline" action="{{ route('admin.recipes.todos.destroy', [$recipe, $todo]) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Form to Add New Todo -->
    <div class="card shadow mt-4">
        <div class="card-header">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">{{ __('Add New Todo') }}</h1>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.recipes.todos.store', $recipe) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="todo">{{ __('Todo') }}</label>
                    <input type="text" class="form-control" id="todo" placeholder="{{ __('Enter todo') }}" name="todo" value="{{ old('todo') }}" />
                </div>
                <button type="submit" class="btn btn-success">{{ __('Save Todo') }}</button>
            </form>
        </div>
    </div>

    <!--Display Ingredient-->
    <div class="card shadow mt-4">
        <div class="card-header">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">{{ __('Title') }}</h1>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recipe->ingredients as $ingredient)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $ingredient->title }}</td>
                            <td>
                                <a href="{{ route('admin.recipes.ingredients.edit', [$recipe, $ingredient]) }}" class="btn btn-info btn-sm">
                                    <i class="fa fa-pencil-alt"></i> Edit
                                </a>
                                <form class="d-inline" action="{{ route('admin.recipes.ingredients.destroy', [$recipe, $ingredient]) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Form to Add New Ingredient -->
    <div class="card shadow mt-4">
        <div class="card-header">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">{{ __('Add New Ingredient') }}</h1>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.recipes.ingredients.store', $recipe) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">{{ __('Title') }}</label>
                    <input type="text" class="form-control" id="title" placeholder="{{ __('Enter title') }}" name="title" value="{{ old('title') }}" />
                </div>
                <button type="submit" class="btn btn-success">{{ __('Save Title') }}</button>
            </form>
        </div>
    </div>
    @endsection

    @push('style-alt')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @endpush

    @push('script-alt')
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $('.select-multiple').select2();
    </script>
    @endpush