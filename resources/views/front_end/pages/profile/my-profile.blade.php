@extends('front_end.layout.main')
@section('content')
<!-- Leagues Content Section Start -->
<section class="my-profile">
    <div class="container">
        <div class="mmy-profile-inner">
            @include('front_end.pages.profile.profile-sidebar')
            <div class="col-sec">
                <div class="user-content-update">
                    <div class="">
                        <div class="tab-content tab-content-1 active">
                            <div class="user-content-box">
                                <form action="{{ route('profile.update') }}" method="POST" class="mt-60 ">
                                    @csrf
                                    <div class="row">
                                        <div class="mb-3 col-sm-6">
                                            <input type="text" placeholder="Prénom" class="form-control para" id="name"
                                                required="required" autocomplete="off"  name="first_name" value="{{ Auth::user()->first_name }}">
                                        </div>
                                        <div class="mb-3 col-sm-6">
                                            <input type="text" placeholder="Příjmení" class="form-control para"
                                                id="last-name" required="required" autocomplete="off" name="last_name" value="{{ Auth::user()->last_name }}">
                                        </div>
                                        <div class="mb-3 col-sm-6">
                                            <input type="email" placeholder="E-mail" class="form-control para"
                                                id="email" required="required" name="email" autocomplete="off" value="{{ Auth::user()->email  }}">
                                        </div>
                                        <div class="mb-3 col-sm-6">
                                            <input type="text" placeholder="Telefon" class="form-control para"
                                                id="Phone" required="required" name="phone" autocomplete="off" value="{{ Auth::user()->phone  }}">
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary">Aktualizovat</button>

                                    <!-- <div class="reset-password">
                                        <a href="#">Obnovit heslo</a>
                                    </div> -->

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Leagues Content Section End -->
@endsection
