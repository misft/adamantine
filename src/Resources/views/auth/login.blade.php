@extends('adamantine::auth.layout')
@section('body')
    <div class="container-fluid bg-dark w-100" style="height: 100vh">
        <div class="row justify-content-center my-auto align-self-center align-items-center" style="height: 100vh">
            <div class="col-12 col-md-4 col-lg-3 my-auto">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="text-muted" for="">Username / Email</label>
                        <input type="text" inputmode="email" name="username" placeholder="misft@misft.com" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label class="text-muted" for="">Password</label>
                        <input type="password" inputmode="text" name="password" placeholder="******" class="form-control" id="">
                    </div>
                    <div class="form-group justify-content-center w-100">
                        <button type="submit" class="btn btn-outline-light w-100 mx-auto">
                            Login
                        </button>
                    </div>
                    <div class="form-group w-100 text-center">
                        <a href="{{url('/admin/forget')}}" class="text-decoration-none text-primary">Forget password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
