@extends('common.master')

@section('title', ('Login'))

@section('script')
    <link rel="shortcut icon" href="/images/fav_icon.png" type="image/x-icon">
    <!-- Bulma Version 0.9.0-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
@endsection

@section('content')
    <section class="hero is-primary is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-centered">
                    <div class="column is-5-tablet is-4-desktop is-3-widescreen">
                        <div class="card">
                            @if(session()->has('error'))
                                <div class="has-text-danger">
                                    {{ session()->get('error') }}
                                </div>
                            @endif
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}" class="box">
                                    @csrf
                                    <div class="field">
                                        <label for="email" class="label">Email</label>
                                        <div class="control has-icons-left">
                                            <input type="email" name="email" placeholder="yourname@example.com"
                                                   class="input @error('email') is-danger @enderror"
                                                   value="{{ old('email') }}" required autocomplete="email">
                                            <span class="icon is-small is-left">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                            @error('email')
                                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label for="password" class="label">Password</label>
                                        <div class="control has-icons-left">
                                            <input type="password" name="password" placeholder="*******"
                                                   class="input @error('password') is-danger @enderror" required>
                                            <span class="icon is-small is-left">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                            @error('password')
                                            <p class="help is-danger">{{ $errors->first('password') }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label for="remember" class="checkbox">
                                            <input type="checkbox"
                                                   name="remember" {{ old('remember') ? 'checked' : '' }}>
                                            Remember me
                                        </label>
                                    </div>
                                    <div class="field">
                                        <button type="submit" class="button is-success">Login</button>
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                Forgot Your Password?
                                            </a>
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection