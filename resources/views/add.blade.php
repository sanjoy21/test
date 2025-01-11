@extends('layout')

@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>To Do</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">To Do</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">

                            @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                            <div class="card-header">
                                <h3 class="card-title">Add To Do</h3>
                            </div>

                            <div class="card-body">
                                <form  action="{{ route('store') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" name="title" class="form-control"
                                                placeholder="Enter Title">
                                            </div>
                                            @error('title')
                                  <p class="text-danger">{{ $message }}</p>
                              @enderror
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" name="description"
                                                rows="3" placeholder="Enter Description"></textarea>
                                            </div>
                                            @error('description')
                                  <p class="text-danger">{{ $message }}</p>
                              @enderror
                                        </div>

                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </section>

    </div>
@endsection
