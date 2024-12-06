@extends('front_end.layout.main')
@section('content')
   <!--about section -->
   <section class="personalData section">
            <div class="container">
                <div class="personalData_wrapper">
                    <div class="personalData_content sec_content">
                        <h2 class="sec_heading">Osobní údaje</h2>
                        <p class="sec_desc">Vaše osobní údaje jsou pro nás prioritou. Zavazujeme se k jejich ochraně a k
                            transparentnosti v tom, jak s nimi nakládáme. Tato Zásady ochrany osobních údajů uživatelů
                            vysvětlují, jak shromažďujeme, používáme, uchováváme a chráníme vaše údaje. Důrazně také
                            prohlašujeme, že vaše údaje nikdy neprodáváme ani nepronajímáme třetím stranám</p>
                        <h3 class="sec_title">1. Shromažďování osobních údajů</h3>
                        <p class="sec_desc">Shromažďujeme pouze údaje, které jsou nezbytné pro poskytování našich
                            služeb. Může se jednat o:</p>
                        <ul class="sec_list">
                            <li class="sec_item"><strong>Údaje poskytnuté přímo uživatelem:</strong>Například při
                                registraci (jméno, e-mailová adresa, uživatelské jméno).
                            </li>
                            <li class="sec_item"><strong>Automaticky shromažďované údaje:</strong>Technické informace,
                                jako je IP adresa, typ zařízení, a chování na naší platformě (např. navštívené stránky).
                            </li>
                            <li class="sec_item"><strong>Údaje z externích zdrojů: </strong> Pokud se zaregistrujete
                                prostřednictvím služeb třetích stran (např. Google nebo Facebook), můžeme obdržet
                                omezené údaje v souladu s jejich zásadami ochrany osobních údajů.</li>

                        </ul>
                        <h3 class="sec_title">2. Jak údaje používáme?</h3>
                        <p class="sec_desc">Vaše údaje zpracováváme pouze za účely, které jsou jasně definované a
                            oprávněné:</p>
                        <ul class="sec_list">
                            <li class="sec_item">Správa uživatelských účtů a poskytování našich služeb.
                            </li>
                            <li class="sec_item">Personalizace vašeho zážitku na platformě.
                            </li>
                            <li class="sec_item">Komunikace s vámi, včetně odpovědí na vaše dotazy.
                            </li>
                            <li class="sec_item">Analýza používání platformy za účelem její optimalizace.
                            </li>
                            <li class="sec_item">Dodržování právních povinností a ochrana našich práv.
                            </li>
                        </ul>
                        <h3 class="sec_title">3. Zásady sdílení údajů</h3>
                        <p class="sec_desc">Vaše osobní údaje sdílíme pouze za těchto okolností:</p>
                        <ul class="sec_list">
                            <li class="sec_item"><strong>S poskytovateli služeb:</strong> Spolupracujeme s důvěryhodnými
                                partnery, kteří nám pomáhají provozovat platformu (např. poskytovatelé hostingu,
                                analytických nástrojů). Tito partneři mohou zpracovávat údaje naším jménem, ale nesmí je
                                použít pro své vlastní účely.
                            </li>
                            <li class="sec_item"><strong>Z právních důvodů:</strong> Pokud je to vyžadováno zákonem,
                                můžeme vaše údaje sdílet s regulačními nebo vládními orgány.
                            </li>
                            <li class="sec_item">
                                <strong>V anonymizované podobě:</strong>Údaje, které vás nelze identifikovat (např.
                                souhrnné statistiky), mohou být použity pro analýzy a výzkum.
                            </li>
                        </ul>
                        <p class="sub_title">Vaše údaje nikdy neprodáváme ani nepronajímáme třetím stranám.</p>
                        <h3 class="sec_title">4. Uchovávání údajů</h3>
                        <p class="sec_desc">Vaše údaje uchováváme pouze po dobu, která je nezbytně nutná k naplnění
                            účelů uvedených v těchto zásadách:</p>
                        <ul class="sec_list">
                            <li class="sec_item">Pokud ukončíte svůj účet, odstraníme vaše údaje, s výjimkou těch, které
                                musíme uchovat z právních důvodů.</li>
                            <li class="sec_item">Automaticky shromažďovaná data (např. cookies) mohou být uchována
                                kratší dobu podle příslušných nastavení.</li>
                        </ul>
                        <h3 class="sec_title">5. Jak chráníme vaše údaje?</h3>
                        <ul class="sec-list">
                            <li class="sec_item">Používáme standardní bezpečnostní opatření, jako je šifrování (např.
                                SSL), aby byla vaše data chráněna během přenosu.
                            </li>
                            <li class="sec_item">Ukládáme údaje na zabezpečených serverech s omezeným přístupem.
                            </li>
                            <li class="sec_item">Pravidelně testujeme naše systémy, abychom zajistili jejich ochranu
                                před neoprávněným přístupem nebo únikem dat.
                            </li>
                        </ul>
                        <h3 class="sec_title">6. Vaše práva</h3>
                        <p class="sec_desc">Jako uživatel máte následující práva v souvislosti s vašimi údaji:</p>
                        <ul class="sec_list">
                            <li class="sec_item">
                                <strong>Přístup: </strong>Požádat o přehled osobních údajů, které o vás zpracováváme.
                            </li>
                            <li class="sec_item">
                                <strong>Oprava: </strong>Požádat o opravu nepřesných nebo neúplných údajů.
                            </li>
                            <li class="sec_item">
                                <strong>Vymazání:</strong> Požádat o odstranění svých údajů, pokud již nejsou potřebné.
                            </li>
                            <li class="sec_item">
                                <strong>Omezení zpracování:</strong> Žádat omezení zpracování vašich údajů.
                            </li>
                            <li class="sec_item">
                                <strong>Přenesení údajů:</strong> Obdržet kopii svých údajů ve strukturovaném formátu.
                            </li>
                            <li class="sec_item">
                                <strong>Odvolání souhlasu:</strong> Odvolat souhlas se zpracováním údajů, pokud byl
                                souhlas udělen.
                            </li>
                        </ul>
                        <p class="sec_desc">Chcete-li uplatnit svá práva, kontaktujte nás na:</p>
                        <a href="mailto:info@fotbalovymanazer.com" class="sec_email">📧 info@fotbalovymanazer.com</a>
                        <h3 class="sec_title">7. Cookies a podobné technologie
                        </h3>
                        <p class="sec_desc">Naše platforma používá cookies k:</p>
                        <ul class="sec_list">
                            <li class="sec_item">Zlepšení uživatelského zážitku.</li>
                            <li class="sec_item">Sledování výkonu a analytiky.</li>
                            <li class="sec_item">Zapamatování vašich preferencí</li>
                        </ul>
                        <p class="sec_desc">Můžete změnit nastavení cookies přímo ve svém prohlížeči. Vezměte však na
                            vědomí, že deaktivace cookies může omezit funkčnost platformy.</p>
                        <h3 class="sec_title">8. Odkazy na jiné weby</h3>
                        <p class="sec_desc">Naše platforma může obsahovat odkazy na webové stránky třetích stran. Nemáme
                            kontrolu nad jejich zásadami ochrany osobních údajů a neneseme za ně odpovědnost.
                            Doporučujeme vám přečíst si jejich podmínky a zásady před poskytnutím svých údajů.
                        </p>
                        <h3 class="sec_title">9. Změny zásad ochrany osobních údajů</h3>
                        <p class="sec_desc">Tyto zásady můžeme čas od času aktualizovat. Pokud dojde ke změnám,
                            informujeme vás prostřednictvím oznámení na naší platformě nebo e-mailem. Datum poslední
                            aktualizace naleznete na začátku této stránky.</p>
                        <h3 class="sec_title">Kontaktujte nás</h3>
                        <p class="sec_desc">Máte-li jakékoli otázky ohledně těchto zásad nebo zpracování vašich osobních
                            údajů, kontaktujte nás na:</p>
                        <a href="mailto:info@fotbalovymanazer.com" class="sec_email">📧 info@fotbalovymanazer.com</a>
                        <p class="sec_desc">Děkujeme, že důvěřujete platformě Fotbalový Manažer. Vaše soukromí je pro
                            nás závazkem!</p>
                    </div>
                </div>
            </div>
        </section>
@endsection