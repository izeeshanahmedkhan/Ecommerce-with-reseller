@extends('admin.layouts.master')
@section('content')
    <input type="hidden" value="{{$activePage = 'categoryCreate', $title = 'Create Category - Nafia Garments'}}">
    <div class="main-content">
        <div class="breadcrumb">
            <h1>Categories</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="card-title mb-3">Create New Category</div>
                        <form class="forms-sample" method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">
                            @csrf()
                            <div class="row">
                                <div class="col-md-3 form-group mb-3">
                                    <label for="selectCategory">Select Parent category</label>
                                    <select class="form-control" id="selectCategory" name="parent_id">
                                        <option selected disabled> Select Category </option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->title  }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3 form-group mb-3">
                                    <label>New Category</label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Enter New Category" value="{{ old('title') }}" aria-label="title">
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-3 form-group mb-3">
                                    <label>Icon Class (Font Awesome)</label>
                                    <input type="text" name="icon" class="form-control @error('icon') is-invalid @enderror" placeholder="Enter New Icon" value="{{ old('icon') }}" aria-label="icon">
                                    @error('icon')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-3 form-group mb-3">
                                    <label for="image">Image</label>
                                    <input type="file"  name="image" class="form-control form-control @error('image') is-invalid @enderror" id="image" value="{{ old('image') }}" autocomplete="image" autofocus/>
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" style="margin-left:25%">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- end of main-content -->
    </div>
@endsection

@section('page_css')
    <link rel="stylesheet" href="{{asset('admin/css/plugins/toastr.css')}}" />
@endsection
@section('page_script')
    <script src="{{ asset('admin/js/plugins/toastr.min.js') }}"></script>
{{--    <script src="{{asset('admin/js/scripts/toastr.script.min.js')}}"></script>--}}
@endsection
