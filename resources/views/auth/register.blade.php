@include('layouts.header')

<div class="bg-img registration-bg">
    <div class="content">
        <header>Registration</header>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="field">
                <span class="fa fa-user"></span>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
            </div>

            <div class="field">
                <span class="fa fa-envelope"></span>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
            </div>

            <div class="field space">
                <span class="fa fa-lock"></span>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                <span class="show">SHOW</span>
            </div>

            <div class="field space">
                <span class="fa fa-lock"></span>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                <span class="show">SHOW</span>
            </div>

            <div class="field">
                <input type="submit" value="REGISTER">
            </div>
        </form>
        <div class="login">
            Already have an account?
            <a href="{{ route('login') }}">Login Now</a>
        </div>
    </div>
</div>

<script>
    // Add the JavaScript code for password visibility toggle if needed
</script>

</div>


