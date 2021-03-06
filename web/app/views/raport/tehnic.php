<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeMo</title>
    <link rel="icon" href="/public/images/logo.png">
    <link rel="stylesheet" href="/public/css/raport.css">
    <link rel="stylesheet" href="/public/css/vizitator/profil.css">
    <script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "HowTo", 
  "name": "Detention Monitoring Tool",
  "description": "Util la inchisoare",
  "step": [{
    "@type": "HowToStep",
    "text": "Login as Visitator",
    "url": "http://demo14.herokuapp.com/startPages/LoginPage?"
  },{
    "@type": "HowToStep",
    "text": "Login as Admin",
    "url": "http://demo14.herokuapp.com/startPages/LoginPageAdmin?"
  }]    
}
</script>
</head>

<body class="pagina">
    <div class="bar">
        <button class="back" onclick="history.go(-1);"> &lt; BACK </button>
        <!-- <a href="../StartPage/html/p1.html" class="back"> &lt; BACK </a> -->
        <div class="rezultatTitlu">
            <p>RAPORT TEHNIC</p>
        </div>
    </div>

    <div class="head">
        Scholarly HTML Tehnic
    </div>

    <div class="autori">
        <div class="space"></div>

        <div>
            <h3><b>Proiect realizat de:</b></h3>

            <a href="https://github.com/Fecheta/ProiectTW_DeMo.git">
                <ul>
                    <li>Timon Roxana-Mihaela</li>
                    <li>Andrei Eduard</li>
                    <li>Fechetă Virgil-Vicențiu</li>
                </ul>
            </a>
        </div>
    </div>

    <div class="sectiune">
        <div class="titlu">
            <h1> 1. INTRODUCERE </h1>
        </div>

        <div class="subpunct">
            <h2> 1.1 Enuntul </h2>
            <p>
                Sa se dezvolte o <b> aplicatie Web </b> pentru <b> gestiunea vizitelor </b>
                de care beneficiaza persoanele condamnate la executarea unei pedepse
                intr-un penitenciar sau intr-o casa de corectie.
            </p>
        </div>

        <div class="subpunct">
            <h2> 1.2 Scopul Aplicatiei </h2>
            <p>
                <b> Aplicatia Detention Monitoring Tool </b> , are ca scop principal <b> fluidizarea
                fluxului de vizite </b> ce pot avea loc in cadrul unui <b> centru de detentie </b>  si
                ofera o solutie mai organizata de aface acest lucru.
                <br>
                Aplicatia ofera rudelor detinutilor <b> posibilitatea de a inregistra programari </b>
                pentru <b> vizite ce vor fi procesate </b> de personalul penitenciarului, personalul
                are posibilitatea de a <b> aproba sau de a respinge anumite vizite </b> iar vizitatorii
                au posibilitatea de  <b> vizualiza un istoric al vizitelor </b> facute  si eventual sa
                modifice o vizita programata daca mai este posibil.
            </p>
        </div>

        <div class="titlu">
            <h1> 2. DESCRIEREA GENERALA </h1>
        </div>

        <div class="subpunct">
            <h2> 2.1 Structura aplicatiei</h2>
            <img src="/../../public/images/UML.png" alt="UML">
            <p>
                <b> Diagrama USE-CASE de mai sus ilustreaza modelul de functionare
                    al aplicatiei DeMo dezvolatate.</b>
                Actorii principali sunt: <b> Vizitatorul </b> sau <b> Administratorul</b>.
                Odata cu accesare link-ului catre aplicatie, li se va afisa <b>pagina principala</b>, de unde vor
                putea sa se <b>inregistreze</b> sau <b>sa se logheze</b>. In functie de rolul fiecarui (admin sau
                vizitator)
                interfata aplicatiei se va prezenta diferit si anume:
                <b>Vizitatorul va avea la dispozitie pagini pentru a realiza urmatoarele actiuni:</b>
                sa-si schimbe contul (pag. Home) sa programeze o vizita (pag. Programare Vizita),
                sa caute un detinut (pagina CautaDetinut), sa vada istoricul propriilor vizite (pag. Istoric Vizite),
                sa genereze statistici (pag. Statistici).
                <b>Administratorul va avea deasemenea la dispozitie functionalitatile:</b> sa-si schimbe contul si sa
                revina
                la pagina principala (pag. Home), sa vada istoricul vizitelor realizate (pag. Istoric Vizite),
                sa tina evidenta programarilor (pag. Evidenta Programari) , sa vizualizeze detinuti (pag. Vizualizare
                Detinuti),
                sa genereze statistici (pag. Statistici).
            </p>
        </div>

        <div class="subpunct">
            <h2> 2.2 Baza de date</h2>
            <img src="/../../public/images/DATABASE.png" alt="DATABASE">
            <p>
                <b>Baza de date contine urmatoarele tabele : </b>
                <br>
                - <b> Detinuti </b>  (salvam informatii cu privire la detinutii ce pot fi vizitati)
                </br>
                <br>
                - <b>  User </b> (folosita atat pentru inregistrarea a utilizatorilor cat si a vizitatorilor)
                </br>
                <br>
                - <b>  Programari </b> (avem informatii cu privire la programarile realizare)
                </br>
                <br>
                - <b> ContVizitator </b> (avem infomatii strict despre vizitatori)
                </br>
                <br>
                - <b>  Relatie </b> (folosita pentru inregistrarea relatiilor intre detinuti si vizitatori)
                </br>
                <br>
                - <b> ContAdministrator </b> (pentru retinerea informatiilor despre conturile administratorilor)
                </br>
                <br>
                - <b> Vizite </b> ( retinem informatii cu privire la vizitele realizate )
                </br>

            </p>
        </div>

        <div class="subpunct">
            <h2> 2.2 Modul de functionare </h2>
            <p>  
                <b>Dupa logarea ca vizitator ai urmatoarele optiuni:</b>
                <br>
                - sa iti faci o programare pentru vizitarea unui detinut;
                <br>
                - sa verifici programarile facute de tine in trecut;
                <br>
                - sa cauti informatii despre un detinut.
                <img src="/../../public/images/Screenshot (241).png" alt="DATABASE">
                <br><br>
                <b> Dupa logarea ca admin ai urmatoarele optiuni: </b>
                <br>
                - sa verifici istoricul vizitelor efectuate deja;
                <br>
                - sa vizualizezi ce programari sunt facute;
                <br>
                - sa vizualizezi informatii despre toti detinutii;
                <br>
                - sa vizualizezi date despre contul tau.
                <br><br>
                <img src="/../../public/images/Screenshot (243).png" alt="DATABASE">
                Daca doresti sa iti creezi un cont, ai optiunea "REGISTER", unde
                iti poti crea un cont, dupa care vei fi redirectionat pe pagina
                de login pentru a te loga.
                <img src="/../../public/images/Screenshot (242).png" alt="DATABASE">

            </p>
        </div>

        <div class="titlu">
            <h1> 3. INTERFATA GRAFICA </h1>
        </div>

        <div class="subpunct">
            <h2> 3.1 Paginile de start </h2>
            <p>
                Pentru interfata grafica a proiectului am folosit HTML5.
                Astfel utilizatorul aplicatiei are la dispozitie urmatoarele functionalitati :
                <br><br>
                - <b>pagina principala Home </b> cu butoane de Login, SignUp si Login as Administrator;
                <br>
                -  <b> pagina de Login </b> in care utilizatorul va avea de completat campuri
                care fac referire la datele personale ce urmeaza sa fie inregistrate
                pentru obtinerea unui cont
                si parola aferenta contului,
                dupa care va putea sa acceseze butonul de login, pentru logarea efectiva
                <br>
                - <b> pagina de SignUp </b> contine campuri de tip text, in care utilizatorul trebuie sa-si
                introduca datele personale pentru a obtine un cont pentru aplicatia pe care am dezvoltat-o
                <br>
                -  <b> pagina de Login as Administrator </b> este exclusiv pentru administratorul penitenciarului
                care va trebui sa introduca in campurile prezente email-ul care i-a fost atribuit, respectiv parola;
                <br>
            </p>
        </div>

        <div class="subpunct">
            <h2> 3.2 Paginile Administratorului </h2>
            <p>
                Paginile corespunzatoare contului de administrator ,
                pe care acesta le poate accesa din bara de navigatie:
                <br><br>
                - <b> Home </b>
                <br>
                - <b> Istoric Vizite </b> ( unde administratorul poate vedea intr-un
                tabel vizitele realizate pana la momentul actual),
                <br>
                - <b> Programari </b> ( administratorul are la dispozitie un tabel in care
                se stocheaza informatiile referitoare la vizitele viitoare)
                <br>
                - <b> Vizualizare detinuti </b> ( o pagina cu profilul detinutilor ),
                <br>
                -  <b> Detalii cont </b> ( o pagina ce contine informatiile personale ale administratorului).
            </p>
        </div>

        <div class="subpunct">
            <h2> 3.3 Paginile Vizitatorului </h2>
            <p>
                Paginile corespunzatoare vizitatorului sunt urmatoarele:
                <br><br>
                - <b> adauga vizita </b> ( unde vizitatorul trebuie sa completeze campurile cu
                referire la datele personale si la datele intalnirii (ora, data), respectiv grad
                de rudenie cu detinutul cu care vizitatorul doreste sa programeze o intalnire,
                <br>
                - <b> pagina Cauta Detinut </b> unde vizitatorul cauta in baza de date a penitenciarului,
                un anumit detinut ( completand campurile : nume, prenume, cnp si cod unic detinut ),
                <br>
                -  <b> pagina Istoric vizite </b> ( in care prin intermediul mai multor tabele,
                vizitatorul poate vedea vizitele deja programate),
                <br>
                -  <b> pagina Home </b> ( vizitatorul poate adauga o vizita),
                <br>
                -  <b> pagina Despre </b> (vizitatorul va putea citi functionalitatile aplicatiei DeMo)
            </p>
        </div>

        <div class="subpunct">
            <h2> 3.4 Tehnologii utilizate </h2>
            <p>
                Tehnologiile utilizate pentru realizarea aplicatiei sunt:
                <br><br>
                <b>Limbaje de programare precum </b> : JavaScript, CSS, HTML5, PHP.
                <br>
                <b>Tehnica de programare Ajax </b>pentru crearea unei aplicatii interactive.
                Aceasta are ca scop cresterea interactivitatii, vitezei si usurintei in utlizare a aplicatiei.
                Ajax nu este o tehnologie in sine . Termenul este folosit pentru
                definirea aplicatiilor web ce folosesc un ansamblu de tehnologii:
                <br>
                <b>HTML</b> pentru structura semantica a informatiilor;
                <br>
                <b>CSS</b> pentru prezentarea informatiilor;
                <br>
                <b>JavaScript</b> pentru interactivitate, pentru procesarea
                informatiilor prezentate.
                <br>
                <b>Model-view-controller</b> este un model arhitectural utilizat
                in ingineria software. Succesul modelului se datoreaza <b>izolarii
                    logicii de business </b> fata de <b>considerentele interfetei cu utlizatorul</b>,
                rezultand o aplicatie unde aspectul vizual si nivelele inferioare
                ale regulilor de business sunt <b> mai usor de modificat</b>, fara a afecta alte nivele.

                <br>


            </p>
        </div>





        <div class="titlu">
            <h1> BIBLIOGRAFIE</h1>
        </div>

        <div class="subpunct">
            <a href="https://www.w3schools.com/css/default.asp">
                <p> W3 Schools </p>
            </a>
            <a href="https://stackoverflow.com/">
                <p> Stack Overflow </p>
            </a>
            <a href="https://developer.mozilla.org/en-US/docs/Web/CSS">
                <p> MDN Web Docs </p>
            </a>
        </div>
    </div>

</body>

</html>