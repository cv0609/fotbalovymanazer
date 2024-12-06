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
                                <input type="text" placeholder="Jméno a příjmení:" name="full_name"
                                    class="form-control para" id="full_name" value="{{ old('full_name') }}">
                                <p class="text-danger d-none" id="nameError"></p>

                            </div>
                            <!-- <div class="mb-3">
                                        <input type="text" placeholder="Příjmení" name="lname" class="form-control para"
                                            id="Last_Name" value>
                                    </div> -->
                            <div class="mb-3">
                                <input type="email" placeholder="E-mailová adresa:" class="form-control para" id="email"
                                    name="email" id="email" value="{{ old('email') }}">
                                <p class="text-danger d-none" id="emailError"></p>

                            </div>

                            <div class="mb-3">
                                <input type="text" placeholder="Předmět zprávy:" class="form-control para"
                                     id="subject" name="subject" value="{{ old('subject') }}">
                                    <p class="text-danger d-none" id="subjectError"></p>


                            </div>
                            <div class="mb-3">
                                <textarea placeholder="Vaše zpráva:" id="message" class="your-message" name="message">{{ old('message') }}</textarea>
                                <p class="text-danger d-none" id="messageError"></p>

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
                                    <button type="button" id="contact-btn" class="btn">Předložit</button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>

            </div>
            <div class="contact_content">
                <h3 class="sec_title">E-mailová podpora</h3>
                <p class="sec_desc">Pokud preferujete přímý kontakt e-mailem, můžete nám napsat na:
                    📧 <a class="sec_email" href="mailto:info@fotbalovymanazer.com">info@fotbalovymanazer.com</a></p>
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
@section('custom-script')

<script>
    $(document).ready(function () {
        var response = 'You have to complete the CAPTCHA.';
        @if($errors->has('g-recaptcha-response'))
            $('#captchaModal').modal('show');
            $('#cap-message').text(response);
        @endif


        $('#contact-btn').on('click', function() {
            var valid = true;

            $('.text-danger').addClass('d-none').css('font-size','15px');

            if ($('#full_name').val().trim() === '') {
                $('#nameError').removeClass('d-none').text('Full name field is required.');
                valid = false;
            }

            var email = $('#email').val().trim();
            
            if($('#email').val().trim() === ''){
                $('#emailError').removeClass('d-none').text('Email field is required.');
                valid = false;
            }

            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if ($('#email').val().trim() != '' && !emailPattern.test(email)) {
                $('#emailError').removeClass('d-none').text('Please enter a valid email address.');
                valid = false;
            }

            if ($('#subject').val().trim() === '') {
                $('#subjectError').removeClass('d-none').text('Subject field is required.');
                valid = false;
            }

            if ($('#message').val().trim() === '') {
                $('#messageError').removeClass('d-none').text('Message field is required.');
                valid = false;
            }

            if (!$('#agree').is(':checked')) {
                $('#agreeError').removeClass('d-none').text('You must agree to the terms.');
                valid = false;
            }

            if (valid) {
                $('#contactForm').submit();
            }
        });





    });
</script>


@endsection 