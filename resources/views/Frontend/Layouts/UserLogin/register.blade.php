@extends('Frontend.Layouts.master')
@section('body')
<section id="register">
    <div class="container-fluid">
        <div class="register-main-layer">
            <div class="row">
                <div class="col-md-4 m-auto">
                    <form action="#">
                        <h5>Infinity</h5>
                        <div class="form-group">
                            <label for="name">Full name</label>
                        <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                        <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Create password</label>
                        <input type="password" class="form-control" id="password">
                        </div>
                        <div class="form-group">
                            <label for="password">Re-enter password</label>
                        <input type="password" class="form-control" id="password">
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                        <select name="Gender" class="form-control">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                        </select>
                        </div>
                        <input type="checkbox" checked><span> I'm agree with <a href="termsandcondition.html" style="color: red; text-decoration: none;">Terms and Conditions.</a></span>
                        <br>
                        <button class="btn btn-primary w-100 m-0 btn-block mt-3" type="submit">Register</button>
                    </form>
                    <p class="text-center">Have an account? <a href="{{ url('/userLogin') }}" style="color: blue; text-decoration: none;"> Login</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection