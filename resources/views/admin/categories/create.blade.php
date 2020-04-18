@extends('admin.app')

@section('title') {{  $pageTitle }}  @endsection

@section('content')
    <div class="app-title">
        <div>
            <h1>
                <i class="fa fa-tags"></i> {{ $pageTitle }}
            </h1>
        </div>
    </div>
    @include('admin.partials.flash')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="tile">
                <h3 class="tile-title">{{ $subTitle }}</h3>
                <form action="{{ route('admin.categories.store') }}" method="post" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="tile-body">
                        <div class="form-group">
                            <label for="name" class="control-label">Name <span class="m-1-5 text-danger"> *</span></label>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                            @error('name') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <label for="description" class="control-label">Description</label>
                            <textarea name="description" id="description" rows="10" class="form-control">{{ old('description') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="parent">Parent Category <span class="m-1-5 text-danger"> *</span></label>
                            <select name="parent_id" id="parent" class="form-control custom-select mt-15 @error('parent_id') is-invalid @enderror">
                                <option value="0">Select a parent category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}"> {{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('parent_id') {{ $message }} @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="featured" name="featured" />Featured Category
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="menu" name="menu" />Show in Menu
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Category Image</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" />
                            @error('image') {{  $message }} @enderror
                        </div>
                    </div>
                    <div class="tile-footer">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save Category</button>
                        &nbsp;&nbsp;&nbsp;
                        <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary"><i class="fa fa-fw f-lg fa-times-circle"></i>Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
