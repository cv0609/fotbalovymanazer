@extends('front_end.layout.main')
@section('content')
<section class="contact section">
            <div class="container">
                <div class="contact_wrapper">
                    <h1 class="sec_heading">Kontaktujte nás
                    </h1>
                    <div class="contact_inner">
                        <div class="contact_right">
                            <div class="contact_rightImg"></div>
                        </div>
                        <div class="contact_left">
                            <h3 class="sec_title">Kontaktní formulář</h3>
                            <div class="form_rest">
                                <form action="{{ route('contact.save') }}" method="POST" class="mt-60">
                                    @csrf
 
                                    <div class="mb-3">
                                        <input type="text" placeholder="Křestní jméno" name="full_name"
                                            class="form-control para" id="first_name" value="{{ old('full_name') }}">
                                    <p class="text-danger d-none" id="nameError"></p>

                                    </div>
                                    <!-- <div class="mb-3">
                                        <input type="text" placeholder="Příjmení" name="lname" class="form-control para"
                                            id="Last_Name" value>
                                    </div> -->
                                    <div class="mb-3">
                                        <input type="email" placeholder="Email" class="form-control para" id="email"
                                            name="email" value="{{ old('email') }}">
                                            <p class="text-danger d-none" id="emailError"></p>

                                    </div>
                                    <div class="mb-3">
                                        <input type="text" placeholder="Telefonní číslo" class="form-control para"
                                            id="phone_number" name="phone" value>

                                    </div>
                                    <div class="mb-3">
                                        <div class="show_password">
                                            <input type="password" placeholder="Heslo" class="form-control para"
                                                id="password-field" name="password">
                                            <i class="fas fa-eye toggle-password"></i>
                                        </div>

                                    </div>
                                    <div class="mb-3">
                                        <div class="show_password">
                                            <input type="password" placeholder="Potvrďte heslo"
                                                class="form-control para" id="confirm-password"
                                                name="password_confirmation">
                                        </div>
                                    </div>
                                    <!-- <div class="g-recaptcha" data-sitekey="6LddY1MqAAAAAKlmrOJAthAVb6M3RpCXGIvs-gJa">
                                        <div style="width: 304px; height: 78px;">
                                            <div><iframe title="reCAPTCHA" width="304" height="78" role="presentation"
                                                    name="a-69crwsttqsnj" frameborder="0" scrolling="no"
                                                    sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                                                    src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LddY1MqAAAAAKlmrOJAthAVb6M3RpCXGIvs-gJa&amp;co=aHR0cHM6Ly9ob2NraWRyYWZ0LmNvbTo0NDM.&amp;hl=en&amp;v=pPK749sccDmVW_9DSeTMVvh2&amp;size=normal&amp;cb=1utssnebsd9e"></iframe>
                                            </div><textarea id="g-recaptcha-response" name="g-recaptcha-response"
                                                class="g-recaptcha-response"
                                                style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                        </div><iframe style="display: none;"></iframe>
                                    </div> -->
                                    <div class="mb-3">
                                        <div class="Submit-btn">
                                           <button class="btn">Předložit</button>
                                        </div>
                                    </div>

                                   
                                </form>
                            </div>
                        </div>
                      
                    </div>
                    <div class="contact_content">
                        <h3 class="sec_title">E-mailová podpora</h3>
                        <p class="sec_desc">Pokud preferujete přímý kontakt e-mailem, můžete nám napsat na:
                            📧 <a class="sec_email"
                                href="mailto:info@fotbalovymanazer.com">info@fotbalovymanazer.com</a></p>
                        <h3 class="sec_title">Co očekávat?</h3>
                        <ul class="sec_list">
                            <li class="sec_item">Odpovídáme obvykle do <strong>24–48 hodin.</strong></li>
                            <li class="sec_item">Připravte si podrobnosti, které nám pomohou vaši žádost co nejrychleji
                                vyřešit (například popis problému nebo odkaz na konkrétní stránku).
                            </li>
                            <li class="sec_item">Vaše zpětná vazba je pro nás cenná a pomáhá nám neustále zlepšovat naši
                                platformu.</li>
                        </ul>
                        <p class="sec_desc">Děkujeme, že jste součástí komunity Fotbalový Manažer!</p>
                    </div>
                </div>
            </div>
        </section>
@endsection