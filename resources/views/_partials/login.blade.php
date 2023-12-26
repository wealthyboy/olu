    <form method="POST" class="login_form" action="/login">
        @csrf
        
        <div class="text-center"> 
            <h2>Login</h2>
            <!-- <a href="/login/facebook" class="btn btn-facebook btn-round">
                <i class="fab fa-facebook-f"></i> Sign in with Facebook 
            </a> -->
        </div>
        

        <!--<p class="large">Great to have you back!</p>-->
        <p class="form-field-wrapper">
            <label for="username">Email address</label>
            <input id="email" type="email" class="input--lg form-full" name="email" value="{{ old('email') }}" required autofocus>
            @if ($errors->all() )
                @foreach($errors->all()  as $error)
                    <span class="error">
                        <strong class="text-danger">{{ $error }}</strong>
                    </span>
                @endforeach
            @endif
        </p>
        <p class="form-field-wrapper">
            <label for="password">Password</label>
            <input id="password" type="password" class="input--lg form-full" name="password" required>
        </p>
        <p class="form-field-wrapper">
            <label class="">
                <input class="" name="rememberme" id="Checkbox1" value="forever" type="checkbox">
                <span>Remember me</span>
            </label>
        </p>
        <p class="form-field-wrapper form-row">
            <button type="submit" id="login_form_button" data-loading="Loading" class="btn ml-1 btn--lg btn--primary" name="login" value="Log in">Log In</button>
        </p>
        <p class="form-field-wrapper lost_password">
            <a  class="color--primary bold"  href="/password/reset">Forget your password?</a>
        </p>

        <div class="mt-4 pt-4 text-center border-top">
            <p class="form-field-wrapper col-12">
                Dont have an account yet?  <a class="color--primary bold" href="/register">Create One</a></p>
            </p>
        </div>
    </form>