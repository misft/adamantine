@extends('adamantine::auth.layout')
@section('body')
    <div class="container-fluid bg-dark w-100" style="height: 100vh">
        <div class="row justify-content-center my-auto align-self-center align-items-center" style="height: 100vh">
            <div class="col-12 col-md-4 col-lg-3 my-auto">
                <form action="">
                    <div class="form-group">
                        <label class="text-muted" for="">E-mail</label>
                        <input type="text" name="username" placeholder="misft@misft.com" class="form-control" id="">
                    </div>
                    <div class="form-group justify-content-center w-100">
                        <button type="submit" class="btn btn-light shadow-sm my-2 w-100 mx-auto">
                            Submit
                        </button>
                        <a href="{{url('/admin/login')}}" class="btn btn-outline-light text- my-2 w-100 mx-auto">
                            Back to Login
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
