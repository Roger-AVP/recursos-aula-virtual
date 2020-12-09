@extends('template.app')

@section('title', 'Form')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Form</h1>
    <p class="mb-4"></p>

    <div class="row">
        <div class="col-xl-8 col-lg-8">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div>
                <div class="card-body">
                    <div class="p-5">
                        <form action="/action_page.php">
                            <div class="form-group">
                                <label for="email">Email address:</label>
                                <input type="email" class="form-control" placeholder="Enter email" id="email">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" placeholder="Enter password" id="pwd">
                            </div>
                            <div class="form-group form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox"> Remember me
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
