@extends('layout')

@section('content')
    <section class="h-100 h-custom" style="background-color: #8fc4b7;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card rounded-3">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Login </h3>

                            <form class="px-md-2 " method="POST" action="/login">
                                @csrf
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1q">Email</label>
                                    <input type="email" id="form3Example1q" name="email" class="form-control" />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1q">Password</label>
                                    <input type="password" id="form3Example1q" name="password" class="form-control" />
                                </div>
                                <button type="submit" class="btn btn-success btn-lg mb-1">Sing Up</button>
                                <div>
                                    <p class="mb-0">Don't have an account? <a href="{{ asset('register') }}""
                                            class="text-black-50 fw-bold">Sign Up</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
