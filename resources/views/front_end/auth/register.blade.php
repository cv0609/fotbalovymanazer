@extends('front_end.layout.main')
@section('content')
<!-- Leagues Content Section Start -->
<section class="login">
    <div class="container">
        <div class="form_rest">

            <form action="{{ route('register.post') }}" method="POST" class="mt-60">
                @csrf
                <h1 class="form_title">Pojďme vytvořit váš účet
                </h1>
                @if(Session::has('success'))
                     <span class="alert alert-success text-center">{{ Session::get('success') }}</span>
                    @endif
                <div class="mb-3">
                    <input type="text" placeholder="Křestní jméno"name="first_name" class="form-control para" id="first_name"
                        value="{{ old('first_name') }}">
                        @error('first_name')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Příjmení" name="last_name" class="form-control para" id="Last_Name"
                        value="{{ old('last_name') }}">
                        @error('last_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <div class="mb-3">
                    <input type="email" placeholder="Email" class="form-control para" id="email" name="email" value="{{ old('email') }}">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <div class="mb-3">
                    <input type="number" placeholder="Telefonní číslo" class="form-control para" id="phone_number"
                    name="phone" value="{{ old('phone') }}">
                    @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <div class="mb-3">
                    <div class="show_password">
                        <input type="password" placeholder="Heslo" class="form-control para" id="password-field"
                        name="password">
                        <i class="fas fa-eye toggle-password"></i>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>

                </div>
                <div class="mb-3">
                    <div class="show_password">
                        <input type="password" placeholder="Potvrďte heslo" class="form-control para"
                            id="confirm-password" name="password_confirmation">
                    </div>
                </div>

                <!-- <div class="g-recaptcha" data-sitekey="6LddY1MqAAAAAKlmrOJAthAVb6M3RpCXGIvs-gJa"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-69crwsttqsnj" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LddY1MqAAAAAKlmrOJAthAVb6M3RpCXGIvs-gJa&amp;co=aHR0cHM6Ly9ob2NraWRyYWZ0LmNvbTo0NDM.&amp;hl=en&amp;v=pPK749sccDmVW_9DSeTMVvh2&amp;size=normal&amp;cb=1utssnebsd9e"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div> -->


                <button type="submit" class="btn btn-primary">Zaregistrujte se nyní!</button>

            </form>
        </div>
    </div>
</section>
<!-- Leagues Content Section End -->
@endsection
