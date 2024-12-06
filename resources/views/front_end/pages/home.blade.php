@extends('front_end.layout.main')
@section('content')
<!-- banner section -->
<section class="banner">
    <div class="banner-container">
        <div class="banner_wrapper">
            <div class="banner_left">
                <div class="banner_content">
                    <h2 class="banner_heading">Hrát Fantasy Fotbal</h2>
                    <p class="banner_desc">
                        Vyzkoušejte nejnovější fantasy fotbalovou platformu ještě dnes
                    </p>
                    <div class="banner_btns">
                        <a href="{{ route('leagues') }}" class="btn banner_login">Hrát hned</a>
                        <!-- <a href="signup" class="btn banner_singUp">Zaregistrujte se</a> -->
                    </div>
                </div>
            </div>
            <div class="banner_right"></div>
        </div>
    </div>
</section>
<!--welcome section -->
<section class="welcome">
    <div class="welcome_wrapper">
        <div class="welcome_content">
            <h3 class="welcome_heading">
                Vítejte na Fotbalový Manažer – Vašem domově české fantasy
                fotbalové zábavy!
            </h3>
            <p class="welcome_desc">
                Ponořte se do světa fantasy fotbalu a vytvořte si svůj vlastní tým
                plný hvězd. Soutěžte s přáteli i hráči z celé České republiky,
                strategicky vybírejte své hráče a získejte body na základě jejich
                výkonů v reálných zápasech. Naše platforma nabízí snadno
                použitelný systém, aktuální statistiky a spoustu výzev, které vás
                udrží ve hře. Ať už jste začátečník, nebo zkušený stratég, fantasy
                fotbal na Fotbalový Manažer je tu pro vás. Staňte se součástí
                nejrychleji rostoucí české fantasy komunity ještě dnes!
            </p>
        </div>
    </div>
</section>
<!-- singup section -->
<section class="singup">
    <div class="singup-container">
        <div class="singup_wrapper">
            <div class="singup_left"></div>
            <div class="singup_right">
                <div class="singup_content">
                    <div class="singup_tobar">
                        <form class="singup_form">
                            <h3 class="singup_heading">
                                Přihlaste se k odběru našeho newsletteru a zůstaňte v obraze se špičkovou predikcí
                            </h3>
                            <div class="singup_email">
                                <input type="email" id="email" name="email" placeholder="Zadejte svůj email"
                                    class="singup_input" required>
                                <input type="submit" value="Předložit" class="submit_btn">
                            </div>
                        </form>
                    </div>
                    <div class="singup_btm">
                        <p>“Přihlaste se k odběru novinek Fotbalový Manažer!</p>
                        <p>
                            Získejte exkluzivní tipy, aktuální statistiky, a speciální
                            nabídky přímo do vaší schránky. Buďte první, kdo se dozví o
                            nových funkcích a připravovaných soutěžích ve světě českého
                            fantasy fotbalu.
                        </p>
                        <p>
                            📧 Přihlaste se nyní a staňte se součástí naší rostoucí
                            komunity!”
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- why choose section -->
<section class="choose">
    <div class="choose_wrapper">
        <div class="container">
            <h3 class="choose_heading">Proč si vybrat nás?</h3>
            <div class="choose_inner">
                <div class="choose_sec">
                    <h4 class="choose_title">Data v reálném čase</h4>
                    <p class="choose_desc">
                        Získejte výhodu díky aktuálním statistikám a přehledům hráčů.
                        S real-time aktualizacemi máte všechny informace, které
                        potřebujete pro úspěch ve fantasy fotbalu, vždy po ruce.
                    </p>
                </div>
                <div class="choose_sec">
                    <h4 class="choose_title">Český Fantasy Fotbal</h4>
                    <p class="choose_desc">
                        Fotbalový Manažer přináší špičkový zážitek z fantasy fotbalu.
                        Užijte si moderní design, snadnou správu týmu a možnost
                        soutěžit s fanoušky z celé republiky. Vaše strategie a
                        dovednosti rozhodnou o vítězství.
                    </p>
                </div>
                <div class="choose_sec">
                    <h4 class="choose_title">Silná komunita fanoušků</h4>
                    <p class="choose_desc">
                        Spojujeme nadšence fantasy fotbalu z celé ČR. Soutěžte,
                        sdílejte strategie a užijte si přátelskou rivalitu. Staňte se
                        součástí rostoucí české fantasy fotbalové komunity!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- our leagues -->
<section class="leagues">
    <div class="leagues-container">
        <div class="leagues_wrapper">
            <div class="leagues_left"></div>
            <div class="leagues_right">
                <div class="leagues_content">
                    <h3 class="leagues_heading">Naše ligy</h3>
                    <div class="leagues_inner">
                        <div class="leagues_sec">
                            <h4 class="leagues_title">Soukromé ligy</h4>
                            <p class="leagues_desc">
                                Vytvořte si vlastní ligu pro přátele, rodinu nebo kolegy.
                                Vy jste správce a nastavujete pravidla, formát i pozvánky.
                                Ideální pro uzavřené skupiny, kde soutěžíte jen mezi
                                sebou.
                            </p>
                        </div>
                        <div class="leagues_sec">
                            <h4 class="leagues_title">Veřejné ligy</h4>
                            <p class="leagues_desc">
                                Připojte se k otevřeným ligám, kde hrajete proti ostatním
                                hráčům z celé platformy. Perfektní pro ty, kteří chtějí
                                výzvu a soupeření s novými lidmi.
                            </p>
                        </div>
                        <div class="leagues_sec">
                            <h4 class="leagues_title">Head-to-Head ligy</h4>
                            <p class="leagues_desc">
                                Každý týden se utkáváte přímo proti jinému manažerovi v
                                lize. Získáváte body za výhry, remízy nebo prohry. Skvělý
                                formát pro intenzivní a strategické soutěžení.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
