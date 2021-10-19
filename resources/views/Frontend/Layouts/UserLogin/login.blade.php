
@extends('Frontend.Layouts.master')
@section('body')
    <section id="offer-details">
        <div class="login-main-layer">
                <div class="row">
                    <div class="col-md-4 m-auto">
                        <form action="#">
                            <h5>Startech Login</h5>
                            <input type="text" class="form-control" placeholder="Email">
                            <input type="text" class="form-control mt-1" placeholder="Password">
                            <button class="btn btn-block mt-1 btn btn1" type="submit">Login</button>
                            <div class="fpswd">
                                <div>
                                    <p><input type="checkbox" checked> Remember</p>
                                </div>
                                <div>
                                    <p class="mt-3"><a href="#">Forgot password?</a></p>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-primary btn2" type="submit"><i class="fab fa-facebook"></i> Login with facebook</button>
                            </div>
                            <div>
                                <button class="btn btn-primary btn3 my-2" type="submit"><i class="fab fa-google"></i> Login with google</button>
                            </div>	
                        </form>
                        <p class="text-center my-3">Don't have an account? <a href="{{ url('/userRegister') }}"> Sign Up</a></p>
                    </div>
                </div>
        </div>
    </section>
@endsection