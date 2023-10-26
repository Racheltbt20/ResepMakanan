@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{{ __('create recipe') }}</h1>
                    <a href="{{ route('admin.recipes.index') }}" class="btn btn-success btn-sm shadow-sm">{{ __('Go Back') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.recipes.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">{{ __('title') }}</label>
                        <input type="text" class="form-control" id="title" placeholder="{{ __('Title') }}" name="title" value="{{ old('title') }}" />
                    </div>
                    <div class="form-group">
                        <label for="prep">{{ __('prep') }}</label>
                        <input type="text" class="form-control" id="prep" placeholder="{{ __('Prep') }}" name="prep" value="{{ old('prep') }}" />
                    </div>
                    <div class="form-group">
                        <label for="cook">{{ __('cook') }}</label>
                        <input type="text" class="form-control" id="Cook" placeholder="{{ __('Cook') }}" name="cook" value="{{ old('cook') }}" />
                    </div>
                    <div class="form-group">
                        <label for="level">{{ __('level') }}</label>
                        <select name="level" id="level" class="form-control" required>
                            <option value="For Beginner">For Beginner</option>
                            <option value="For Intermediate">For Intermediate</option>
                            <option value="For Expert">For Expert</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
@endsection

@push('style-alt')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('script-alt')
<script
        src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
        crossorigin="anonymous"
    >
    </script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
      $('.select-multiple').select2();
</script>
@endpush