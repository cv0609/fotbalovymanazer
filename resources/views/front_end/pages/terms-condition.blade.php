@extends('front_end.layout.main')
@section('content')
    <!--about section -->
    <section class="about section">
        <div class="container">
          <div class="about_wrapper">
            <div class="sec_content">
              <h2 class="about_heading sec_heading">Podmínky</h2>
              <p class="sec_desc">
                Naše cesta začala u obyčejné vášně – fotbalu. Vaše soukromí je
                pro nás důležité. Tato Zásady ochrany osobních údajů vysvětlují,
                jak shromažďujeme, používáme, uchováváme a chráníme vaše osobní
                údaje, když používáte naši platformu Fotbalový Manažer.
                Používáním našich služeb souhlasíte s postupy popsanými v těchto
                zásadách.
              </p>
              <h3 class="sec_title">1. Jaké údaje shromažďujeme?</h3>
              <p class="sec_desc">
                Při používání naší platformy můžeme shromažďovat následující
                typy osobních údajů:
              </p>
              <p class="sub_title">A. Údaje, které nám poskytnete přímo:</p>
              <ul class="sec_list">
                <li class="sec_item">
                  <strong>Při registraci:</strong> Jméno, e-mailová adresa a
                  uživatelské jméno.
                </li>
                <li class="sec_item">
                  <strong>Při kontaktu s námi:</strong> Zprávy, které nám
                  zašlete prostřednictvím formulářů nebo e-mailu.
                </li>
              </ul>
              <p class="sub_title">B. Údaje shromažďované automaticky:</p>
              <ul class="sec_list">
                <li class="sec_item">
                  <strong>Technické informace:</strong>IP adresa, typ zařízení,
                  operační systém a typ prohlížeče.
                </li>
                <li class="sec_item">
                  <strong>Protokolové informace:</strong> Data a časy přístupů,
                  stránky, které jste navštívili, a akce, které jste na
                  platformě provedli.
                </li>
                <li class="sec_item">
                  <strong>Cookies:</strong>Malé soubory ukládané ve vašem
                  prohlížeči, které nám pomáhají zlepšovat funkčnost platformy.
                </li>
              </ul>
              <p class="sub_title">C. Údaje od třetích stran:</p>
              <p class="sec_desc">
                Pokud se zaregistrujete pomocí služeb třetích stran (např.
                Google nebo Facebook), můžeme obdržet základní informace z
                těchto účtů, v souladu s jejich zásadami ochrany osobních údajů.
              </p>
              <h3 class="sec_title">2. Jak údaje používáme?</h3>
              <p class="sec_desc">Vaše údaje zpracováváme pouze za účelem:</p>
              <ul class="sec_list">
                <li class="sec_item">
                  Poskytování a zlepšování našich služeb.
                </li>
                <li class="sec_item">
                  Správy vašeho účtu a personalizace uživatelského zážitku
                </li>
                <li class="sec_item">
                  Komunikace s vámi (např. odpovědi na dotazy, zasílání novinek
                  nebo aktualizací platformy).
                </li>
                <li class="sec_item">
                  Analýzy a monitorování používání platformy k optimalizaci
                  našich služeb.
                </li>
                <li class="sec_item">
                  Dodržování právních povinností a ochrany našich práv.
                </li>
              </ul>
              <h3 class="sec_title">3. Sdílení vašich údajů</h3>
              <p class="sec_desc">
                Vaše údaje nikdy neprodáváme třetím stranám. Údaje můžeme sdílet
                pouze:
              </p>
              <ul class="sec_list">
                <li class="sec_item">
                  <strong>S poskytovateli služeb:</strong> Třetí strany, které
                  nám pomáhají provozovat platformu (např. hosting, analytika).
                </li>
                <li class="sec_item">
                  <strong>Z právních důvodů:</strong> Pokud to vyžadují zákony
                  České republiky nebo pokud je to nezbytné k ochraně našich
                  práv.
                </li>
                <li class="sec_item">
                  <strong>V anonymizované podobě: </strong>Pro statistické nebo
                  výzkumné účely.
                </li>
              </ul>
              <h3 class="sec_title">4. Jak chráníme vaše údaje?</h3>
              <ul class="sec_list">
                <li class="sec_item">
                  Používáme šifrování dat (např. SSL) k ochraně přenosu dat mezi
                  vaším zařízením a našimi servery.
                </li>
                <li class="sec_item">
                  Údaje ukládáme na zabezpečených serverech s omezeným
                  přístupem.
                </li>
                <li class="sec_item">
                  Pravidelně aktualizujeme naše systémy a procesy, aby byly v
                  souladu s aktuálními standardy ochrany dat.
                </li>
              </ul>
              <h3 class="sec_item">5. Vaše práva</h3>
              <p class="sec_desc">
                Jako uživatel máte následující práva v souvislosti s vašimi
                osobními údaji:
              </p>
              <ul class="sec_item">
                <li class="sec_item">
                  <strong>Přístup:</strong>Máte právo požádat o kopii svých
                  osobních údajů.
                </li>
                <li class="sec_item">
                  <strong>Oprava:</strong> Pokud jsou vaše údaje nepřesné nebo
                  neúplné, můžete požádat o jejich opravu.
                </li>
                <li class="sec_item">
                  <strong>Vymazání:</strong> Můžete nás požádat o odstranění
                  svých údajů, pokud již nejsou nezbytné pro účely, pro které
                  byly shromážděny.
                </li>
                <li class="sec_item">
                  <strong>Omezení zpracování:</strong> Máte právo omezit, jak
                  zpracováváme vaše údaje.
                </li>
                <li class="sec_item">
                  <strong>Přenesení údajů:</strong> Na požádání vám poskytneme
                  vaše údaje ve strukturovaném, strojově čitelném formátu.
                </li>
                <li class="sec_item">
                  <strong>Odvolání souhlasu:</strong>Pokud jste souhlasili se
                  zpracováním vašich údajů, můžete tento souhlas kdykoliv
                  odvolat.
                </li>
              </ul>

              <p class="sec_desc">
                Chcete-li uplatnit svá práva, kontaktujte nás na
                <a href="mailto:info@fotbalovymanazer.com." class="sec_email"
                  >info@fotbalovymanazer.com.</a
                >
              </p>
              <h3 class="sec_title">6. Používání cookies</h3>
              <p class="sec_desc">Naše platforma používá cookies k:</p>
              <ul class="sec_list">
                <li class="sec_item">Zapamatování vašich preferencí.</li>
                <li class="sec_item">Zlepšení uživatelského zážitku.</li>
                <li class="sec_item">Analýze návštěvnosti a výkonu webu.</li>
              </ul>
              <p class="sec_desc">
                Můžete upravit nastavení cookies přímo ve svém prohlížeči.
                Některé funkce webu však mohou být omezeny, pokud cookies
                zakážete.
              </p>
              <h3 class="sec_title">7. Odkazy na jiné weby</h3>
              <p class="sec_desc">
                Naše platforma může obsahovat odkazy na externí weby. Nemáme
                kontrolu nad obsahem ani zásadami ochrany osobních údajů těchto
                webů a neneseme za ně odpovědnost.
              </p>
              <h3 class="sec_title">8. Změny zásad ochrany osobních údajů</h3>
              <p class="sec_desc">
                Tyto zásady můžeme čas od času aktualizovat. Pokud dojde ke
                změnám, informujeme vás prostřednictvím oznámení na naší
                platformě nebo e-mailem. Datum poslední aktualizace naleznete na
                začátku této stránky.
              </p>
              <h3 class="sec_title">Kontaktujte nás</h3>
              <p class="sec_desc">
                Máte-li jakékoli otázky ohledně těchto zásad nebo zpracování
                vašich údajů, kontaktujte nás na:
              </p>
              <a href="mailto:info@fotbalovymanazer.com" class="sec_email"
                >📧 info@fotbalovymanazer.com</a
              >
              <p class="sec_desc">
                Děkujeme, že důvěřujete platformě Fotbalový Manažer!
              </p>
            </div>
          </div>
        </div>
      </section>
@endsection