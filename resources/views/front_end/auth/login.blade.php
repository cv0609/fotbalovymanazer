@extends('front_end.layout.main')
@section('content')
  <!-- Leagues Content Section Start -->
  <section class="login">
        <div class="container">
            <div class="form_rest">
              
                <form action="{{ route('login.post') }}" method="POST" class="mt-60">
                    @csrf
                    <h1 class="form_title">Přihlaste se</h1>
                    @if(Session::has('error'))
                        <span class="alert alert-danger">{{ Session::get('error') }}</span>
                    @endif
                    <div class="mb-3">
                        <input type="email" placeholder="Email" name="email" class="form-control para" id="email">
                        @error('email')
                     <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <div class="show_password">
                            <input type="password" placeholder="Heslo" name="password" class="form-control para"
                                id="password-field" name="password">
                            <i class="fas fa-eye"></i>
                            @error('password')
                         <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>

                    </div>

                    <!-- <div class="g-recaptcha" data-sitekey="6LddY1MqAAAAAKlmrOJAthAVb6M3RpCXGIvs-gJa">
                        <div style="width: 304px; height: 78px;">
                            <div><iframe title="reCAPTCHA" width="304" height="78" role="presentation"
                                    name="a-ew5rqrug3i6s" frameborder="0" scrolling="no"
                                    sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                                    src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LddY1MqAAAAAKlmrOJAthAVb6M3RpCXGIvs-gJa&amp;co=aHR0cHM6Ly9ob2NraWRyYWZ0LmNvbTo0NDM.&amp;hl=en&amp;v=pPK749sccDmVW_9DSeTMVvh2&amp;size=normal&amp;cb=6prdkh3yajy6"></iframe>
                            </div><textarea id="g-recaptcha-response" name="g-recaptcha-response"
                                class="g-recaptcha-response"
                                style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                        </div><iframe style="display: none;"></iframe>
                    </div> -->


                    <button type="submit" class="btn btn-primary">Přihlaste se</button>

                </form>
            </div>
        </div>
    </section>
    <!-- Leagues Content Section End -->
@endsection