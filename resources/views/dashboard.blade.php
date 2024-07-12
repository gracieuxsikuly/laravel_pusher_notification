@extends('layouts.master')
@include('layouts.inc.nav')
@section('content')
<section class="container mt-4">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-md-6">
                    <div class="form-container">
                        <h2 class="text-center bg-dark p-2 text-white">
                            Add task List</h2>
                            <div class="form-group">
                                <label class="control-label" for="title">Title</label>
                                <input type="text" class="form-control" placeholder="enter title" id="title" name="title">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="description">Description</label>
                                <textarea type="text" class="form-control" placeholder="enter description" id="description" name="description"></textarea>
                            </div>
                        <button type="submit" class="btn btn-dark btn-block">Submit</button>
                    </div>
            </div>
        </div>
    </div>
</section>
@endsection
