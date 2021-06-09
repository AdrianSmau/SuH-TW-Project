<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raport SRS Scholarly HTML</title>
</head>

<body>
    <article>
        <header>
            <h1>SuperHeroes Web Game - SRS / Scholarly HTML Report</h1>
        </header>
        <div role="contentinfo">
            <section role="doc-introduction">
                <h2>1. Introduction</h2>
                <section>
                    <h3>1.1 Purpose</h3>
                    <p>Acest document a fost creat pentru a descrie site-ul jocului educativ SuperHeroes Web Game , din cadrul materiei Tehnologii Web . Momentan , aceasta nu este versiunea finala a produsului (nici a raportului) , fiind implementata doar
                        partea de <br>front-end a aplicatiei.
                    </p>
                </section>
                <section>
                    <h3>1.2 Document Conventions</h3>
                    <p>Formatul acestui document este <a href="https://w3c.github.io/scholarly-html/">Scholarly
                            HTML</a>, construit conform specificatiilor precizate in macheta <a href="https://github.com/rick4470/IEEE-SRS-Tempate">IEEE System Requirements Specification
                            Template</a> .
                    </p>
                </section>
                <section>
                    <h3>1.3 Intended Audience and Reading Suggestions </h3>
                    <p>Audienta-tinta a aplicatiei noastre este alcatuita , in principal , din adolescenti , cu precadere cei care inclina spre o imbogatire a culturii generale a superoilor, dar si din fani inraiti ai jocurilor de acest tip.</p>
                    <p>Cat despre audienta-tinta a documentului , aceasta poate varia intre profesorii coordonatori ai materiei Tehnologii Web , intre video-game developeri , dar si intre web-designeri. Raportul contine o descriere generala a aplicatiei
                        , urmata de descrierea interfetelor externe ale aplicatiei , precum si constrangerile acestora . Apoi , va fi enumerat fiecare proiectant al acestei aplicatii , precum si propria contributie la implementarea proprietatilor aplicatiei.
                        Spre final , se vor adauga specificatiile nonfunctionale , precum si cele strict specifice acestui proiect. Daca sunteti un web-designer , probabil va veti indrepta atentia catre sectiunea 4 , unde fiecare am stabilit si implementat
                        arhitectura aplicatiei , precum si structura fiecarui element descris de noi . De asemenea , daca sunteti interesat mai mult de interfata aplicatiei, puteti sa va indreptati catre sectiunea 3 , unde vi se ofera , in detaliu , aspecte
                        si imagini despre partea care interactioneaza cu "ochii" utilizatorului . In viziunea unui game-developer , poate v-ati indrepta atentia spre sectiunea imediat urmatoare , cea in care se descrie cum functioneaza aplicatia si din
                        ce este alcatuita , precum si scenariul , miza si conditia de castig a jocului.
                    </p>
                </section>
                <section>
                    <h3>1.4 Product Scope</h3>
                    <p>Scopul acestei aplicatii este de a oferi o experienta placuta si distractiva tuturor utilizatorilor , atat pentru cei care vor sa-si imbunatateasca cunostiintele despre supereroi ( sau raufacatori? ) , cat si pentru cei doresc sa-si
                        dezvolte simtul competitiei , ajungand cat mai sus in clasament. O pozitie buna in acest clasament poate sa-ti inspire calitatile sociale , deoarece universul superoilor este foarte popular in randul adolescentilor, fiind temelia
                        multor strategii de marketing din intreaga lume . Deoarece ne dorim o competitie acerba intre utilizatori , am creeat mai multe nivele de dificultate si criterii de departajare , astfel incat doar cei care isi vor da silinta vor
                        obtine acea "pozitie buna" din clasament. </p>
                </section>
                <section role="doc-bibliography">
                    <h3>1.5 References</h3>
                    <p>Pentru a construi aplicatia noastra , am folosit indrumarea catorva informatii din urmatoarea lista de pagini WEB : </p>
                    <ul>
                        <li><a href="https://css-tricks.com">https://css-tricks.com</a></li>
                        <li><a href="https://stackoverflow.com">https://stackoverflow.com</a></li>
                        <li><a href="https://www.w3schools.com">https://www.w3schools.com</a></li>
                        <li><a href="https://codepen.io">https://codepen.io</a></li>
                        <li><a href="https://developer.mozilla.org/en-US">https://developer.mozilla.org/en-US</a></li>
                        <li><a href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css</a>
                        </li>
                        <li><a href="https://www.youtube.com">https://www.youtube.com</a></li>
                        <li><a href="https://devdrive.io">https://devdrive.io</a></li>
                        <li><a href="http://specifishity.com">http://specifishity.com</a></li>
                        <li><a href="https://www.fontspace.com">https://www.fontspace.com</a></li>
                        <li>Google Image Search , for every picture in the project.</li>
                    </ul>
                </section>
            </section>
            <section>
                <h2>
                    2. Overall Description
                </h2>
                <section>
                    <h3>
                        2.1 Product perspective
                    </h3>
                    <p>
                        SuperHeroes Web Game este un produs nou, un joc web educativ – cu scenariu, miza si conditii de victorie/infrangere destinat in principal adolescentilor.
                    </p>
                    <figure typeof="sa:image">
                        <img src="raport/diagrams/diagarama.png" style="width: 650px;">
                        <figcaption>Fig. 1 - Application Diagram</figcaption>
                    </figure>
                    <figure typeof="sa:image">
                        <img src="raport/diagrams/UseCase.jpg" style="width: 650px;">
                        <figcaption>Fig. 2 - UseCase Diagram</figcaption>
                    </figure>
                    <figure typeof="sa:image">
                        <img src="raport/diagrams/UML INITIAL.jpg" style="width: 650px;">
                        <figcaption>Fig. 3 - UML Simple Diagram</figcaption>
                    </figure>
                </section>
                <section>
                    <h3>
                        2.2 Product functions
                    </h3>
                    <ul>
                        <li>
                            Register
                        </li>
                        <li>
                            Login
                        </li>
                        <li>
                            Change account setings
                        </li>
                        <li>
                            Change game setings
                        </li>
                        <li>
                            Play game
                        </li>
                        <li>
                            Change dificulty
                        </li>
                        <li>
                            See the leaderboard
                        </li>
                    </ul>
                </section>
                <section>
                    <h3>
                        2.3 User Classes and Characteristics
                    </h3>
                    <p>
                        SuperHeroes Web Game este un joc educativ destinat adolescentilor si copiilor, chiar si adultilor care vor sa invete lucruri noi despre eroii din Marvel si DC.
                    </p>
                </section>
                <section>
                    <h3>
                        2.4 Operating Environment
                    </h3>
                    <p>
                        Site-ul este functional pe toate sistemele de operare de tip Windows, Linux sau MacOS, atat pe telefoane sau tabletele cu Android cat si IOS.
                    </p>
                </section>
                <section>
                    <h3>
                        2.5 Design and Implementation Constraints
                    </h3>
                    <p>
                        Nu avem limitari in contextul actual (poate doar baza de date).
                    </p>
                </section>
                <section>
                    <h3>
                        2.6 User Documentation
                    </h3>
                    <p> Instruirea utilizatorului se va face sectiunea de Game , unde va avea acces la un ghid de utilizare , la un filmulet cu cateva functionalitati ale jocului , precum si acces la acest raport.</p>
                </section>
                <section>
                    <h3>
                        2.7 Assumptions and Dependencies
                    </h3>
                    <p>
                        Toate pozele,fonturile si scripturile folosite sunt locale,serverul fiind hostat de catre Heroku.<br> Font extern folosit : <a href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">Font
                            awesome</a> <br>
                    </p>
                </section>
            </section>
            <section role="presentation">
                <h2>
                    3. External Interface Requirements
                </h2>
                <h3>
                    3.1 User Interfaces
                </h3>
                <p> In cele ce urmeaza, voi prezenta fiecare interfata a aplicatiei cu utilizatorul! </p>
                <h4> 3.1.1 Index page </h4>
                <p>
                    HeaderBar-ul paginii index este unul responsive. Cu ajutorul Media Queries, atunci cand latimea ferestrei scade sub un anumit numar de pixeli, Header-ul se minimizeaza iar, cu un click, sunt disponibile toate functionalitatile! <br> SlideShow-ul este de asemenea responsive, dand automat next odata la un interval prestabilit. Atunci cand se executa un hover asupra sa, rulajul pozelor se opreste si intervalul se reseteaza, si un mesaj apare pe fiecare dintre slide-uri!
                    <br> Utilizatorul poate da manual scroll printre poze, daca doreste, fie pe baza sagetilor, fie pe baza punctelor din antetul sectiunii, care reprezinta fiecare slide in parte!<br> Sectiunea de Game nu poate fi inca completata din
                    cauza ca pagina nu este in starea finala, dar acest fapt va fi mentionat si in alte sectiuni ale raportului!
                </p>
                <figure typeof="sa:image">
                    <img src="raport/index/1.JPG" style="width: 650px;">
                    <figcaption>Fig. 1 - HeaderBar and Home Slideshow</figcaption>
                </figure>
                <figure typeof="sa:image">
                    <img src="raport/index/2.JPG" style="width: 650px;">
                    <figcaption>Fig. 2 - HeaderBar minimized</figcaption>
                </figure>
                <figure typeof="sa:image">
                    <img src="raport/index/3.JPG" style="width: 650px;">
                    <figcaption>Fig. 3 - HeaderBar minimized and actioned</figcaption>
                </figure>
                <figure typeof="sa:image">
                    <img src="raport/index/4.JPG" style="width: 650px;">
                    <figcaption>Fig. 4 - Hovered Home Slideshow</figcaption>
                </figure>
                <p> Sectiunea About explica succint motivatia si originea datelor care vor sta la baza aplicatiei. Unele informatii despre Marvel si DC ofera context jocului educativ, iar baza de date cu supereroi este punctul pivot al jocului!<br> A fost
                    adaugat si un link catre un videoclip de pe YouTube menit sa informeze utilizatorii despre universul Marvel si universul DC!
                </p>
                <figure typeof="sa:image">
                    <img src="raport/index/5.JPG" style="width: 650px;">
                    <figcaption>Fig. 5 - About Section</figcaption>
                </figure>
                <p>
                    In imaginea de mai jos sunt prezentate ultimele 3 aspecte ale paginii de Index : antetul (care ofera Copyright catre Marvel si DC), butonul "Back-To-Top", care, atunci cand este actionat, redirecteaza utilizatorul catre inceputul paginii HTML!<br> Sectiunea de Contact, care ofera informatii despre creatorii acestei aplicatii, precum si unele date ale lor! <br> Butonul de Back-To-Top este responsive, aparand doar dupa ce utilziatorul a actionat "scroll" paginii pe plan vertical
                    mai mult de 100vh (deci, cand operatia de back to top are sens)!
                </p>
                <figure typeof="sa:image">
                    <img src="raport/index/6.JPG" style="width: 650px;">
                    <figcaption>Fig. 6 - Contact Section, Back to Top button and Footer</figcaption>
                </figure>
                <h4> 3.1.2 Login page </h4>
                <p>
                    Pagina de logare reprezinta interfata de logare a utilizatorului pe platforma, cu scopul de a accesa functionalitatile aplicatiei. Procesul de logare presupune faptul ca utilizatorul are deja un cont facut, inregistrat in baza de date! <br> Pe langa field-urile Username si Password (de tip text, respectiv password), mai exista butonul Keep me Signed In, care retine contul in browser pentru urmatoarele logari, butonul I forgot my Password, care va asigura schimbarea parolei,
                    si butonul de Sign Up Here, care va redirecta userul catre pagina de register!<br> In final, butonul de Submit, care va incerca logarea cu datele furnizate in field-uri!
                </p>
                <figure typeof="sa:image">
                    <img src="raport/login/1.JPG" style="width: 650px;">
                    <figcaption>Fig. 1 - Login Page</figcaption>
                </figure>
                <h4> 3.1.3 Register Page </h4>
                <p>
                    Pagina de Register reprezinta pagina in care se poate crea un nou cont in baza de date a aplicatiei. Se cere furnizarea de catre utilizator a unui username, a unei parole (care va trebui confirmata), o adresa de e-mail, precum si un nume si un prenume!
                    <br> Pentru a continua, va trebui sa se bifeze casuta care valideaza faptul ca utilizatorul este de acord cu Termenii si Conditiile aplicatiei noastre!
                </p>
                <figure typeof="sa:image">
                    <img src="raport/register/1.JPG" style="width: 650px;">
                    <figcaption>Fig. 1 - Register Page</figcaption>
                </figure>
                <h4> 3.1.4 Main Menu </h4>
                <p>
                    Pagina Main Menu este pagina imediat urmatoare dupa logarea in aplicatie sau crearea unui cont nou de utilizator!
                    <br> Deasupra butoanelor se afla un gif, care itereaza prin logo-urile mai multor supereroi, in scop estetic!
                </p>
                <figure typeof="sa:image">
                    <img src="raport/mainmenu/1.JPG" style="width: 650px;">
                    <figcaption>Fig. 1 - Main Menu Page</figcaption>
                </figure>
                <p>
                    Butonul de Play va redirectiona utilizatorul catre pagina Game Map, care reprezinta "harta" nivelelor, progresul in raport cu acestea, scorul total etc...<br> Butonul de Solo Adventures este gandit precum un "mediu de invatare", in
                    care utilizator poate exersa cunostintele sale pentru a fi pregatit pentru jocul in sine!<br> Meniul Settings ofera unele functionalitati, precum schimbarea limbii (meniu dropdown), a modului de afisare a Quiz-ului (Dark mode / Light
                    mode), precum si volumul muzicii de fundal (slider)!
                    <br> Butonul Leaderboard va afisa statutul tuturor jucatorilor in raport cu scorul (si timpul) in care au executat nivelele din Game Map! <br> Butonul din stanga jos, Accout Settings, afiseaza informatii despre contul logat curent,
                    si ofera optiunea de a schimba parola curenta, daca se doreste acest lucru!
                </p>
                <figure typeof="sa:image">
                    <img src="raport/mainmenu/2.JPG" style="width: 650px;">
                    <figcaption>Fig. 2 - Settings Pop-up</figcaption>
                </figure>
                <figure typeof="sa:image">
                    <img src="raport/mainmenu/3.JPG" style="width: 650px;">
                    <figcaption>Fig. 3 - Account Settings Pop-up</figcaption>
                </figure>
                <h4> 3.1.5 Game Map </h4>
                <p>
                    Pagina de Game Map reprezinta harta jocului, in care utilizatorul isi poate alege nivelul pe care doreste sa il joace! In josul paginii se afla butonul de Back, care duce utilizatorul in pagina de Main Menu, precum si Scorul si Progress Bar-ul, care indica
                    progresul utilizatorului in raport cu nivelele!
                </p>
                <figure typeof="sa:image">
                    <img src="raport/gamemap/1.JPG" style="width: 650px;">
                    <figcaption>Fig. 1 - Game Map Page</figcaption>
                </figure>
                <p>
                    Atunci cand se actioneaza hover peste titlul unui Stage, utilizatorului i se arata scorul, timpul si statutul nivelului (complet/incomplet/deblocat). De asemenea, imaginile fiecarui stage sunt reprezentative pentru statutul fiecarui nivel (nivelele deblocate
                    au ca imagine o stea, cele complete au un semn de "bifat", iar cele blocate au un lacat).<br>
                </p>
                <figure typeof="sa:image">
                    <img src="raport/gamemap/2.JPG" style="width: 650px;">
                    <figcaption>Fig. 2 - Stages Tooltip</figcaption>
                </figure>
                <p>
                    Atunci cand se selecteaza un nivel complet sau deblocat, un Pop-up cu optiuneade dificultate a stage-ului va aparea. Un meniu dropdown permite utilizatorului sa selecteze dificultatea (easy, medium, hard). Apoi, un buton de "Play" stilizat permite inceperea
                    nivelului!
                </p>
                <figure typeof="sa:image">
                    <img src="raport/gamemap/3.JPG" style="width: 650px;">
                    <figcaption>Fig. 3 - Stage difficulty Pop-up</figcaption>
                </figure>
                <h4> 3.1.6 Sample Quiz </h4>
                <p>
                    Pentru a exemplifica cum va arata (in linii mari) un Quiz, am creat un prototip, cu 4 intrebari. In dreapta sus este disponibil numarul de vieti ramas, in stanga sus progresul in cadrul Quiz-ului curent.
                    <br> Fiecare intrebare are 4 optiuni, dintre care doar una corecta. Daca utilziatorul alege corect, optiunea va fi marcata cu verde si se va trece la urmatoarea intrebare. Daca se greseste, optiunea va fi marcata cu rosu, iar din vietile
                    ramase se va scadea una.<br> Quiz-ul ia sfarsit atunci cand fie intrebarile sunt terminate cu succes, fie cand numarul de vieti devine 0. Scorul (calculat in spate) se retine doar daca nivelul a fost terminat cu minim o viata ramasa!<br> Ordinea in care apar intrebarile este random!
                </p>
                <figure typeof="sa:image">
                    <img src="raport/quiz/1.JPG" style="width: 650px;">
                    <figcaption>Fig. 1 - Quiz Sample</figcaption>
                </figure>
                <figure typeof="sa:image">
                    <img src="raport/quiz/2.JPG" style="width: 650px;">
                    <figcaption>Fig. 2 - Quiz Sample Correct Option</figcaption>
                </figure>
                <figure typeof="sa:image">
                    <img src="raport/quiz/3.JPG" style="width: 650px;">
                    <figcaption>Fig. 3 - Quiz Sample Wrong Option</figcaption>
                </figure>
                <h4> 3.1.7 Mentions </h4>
                <p>
                    Fiecarei pagini ii este adaugat un Pre-Loader. Pana cand toate elementele sunt incarcate cu succes, un gif ruleaza in "prim-plan". Apoi, acesta dispare cu un efect de "fade" si apare pagina propriu-zisa!
                </p>
                <h3>
                    3.2 Hardware Interfaces
                </h3>
                <h4>
                    3.2.1 Browser Interaction
                </h4>
                <p>
                    Interactiunea cu diferitele tipuri de browser este aceeasi in fiecare caz. Versiunea cea mai stabila este Google Chrome (browser-ul folosit de noi pentru debug), insa continutul ar trebui sa fie afisat in aceeasi maniera pentru fiecare tip de browser!<br> Unele inconsistente pot aparea la font-ul textului (fiind in format .ttf), ori in cazul favicon-ului!
                </p>
                <figure typeof="sa:image">
                    <img src="raport/browsers/1.JPG" style="width: 650px;">
                    <figcaption>Fig. 1 - Game Map Page on Microsoft Edge</figcaption>
                </figure>
                <figure typeof="sa:image">
                    <img src="raport/browsers/2.JPG" style="width: 650px;">
                    <figcaption>Fig. 2 - Game Map Page on Google Chrome</figcaption>
                </figure>
                <figure typeof="sa:image">
                    <img src="raport/browsers/3.JPG" style="width: 650px;">
                    <figcaption>Fig. 3 - Game Map Page on Mozilla Firefox</figcaption>
                </figure>
                <h4>
                    3.2.2 Devices Interaction
                </h4>
                <p>
                    Atunci cand am proiectat paginile, cu ajutorul optiunilor "Inspect Element" din browserul Chrome, am incercat pe cat posibil sa implementam elementele in asa fel incat sa se vada bine pe orice tip de device (fie smartphone, tableta, laptop, 4K)!<br> Iata cateva exemple, pentru pagina de Index, pe unele tipuri de display!
                </p>
                <figure typeof="sa:image">
                    <img src="raport/displays/1.JPG" style="width: 650px;">
                    <figcaption>Fig. 1 - Index Page on Mobile</figcaption>
                </figure>
                <figure typeof="sa:image">
                    <img src="raport/displays/2.JPG" style="width: 650px;">
                    <figcaption>Fig. 2 - Index Page on Tablet</figcaption>
                </figure>
                <figure typeof="sa:image">
                    <img src="raport/displays/3.JPG" style="width: 650px;">
                    <figcaption>Fig. 3 - Index Page on Laptop</figcaption>
                </figure>
                <figure typeof="sa:image">
                    <img src="raport/displays/4.JPG" style="width: 650px;">
                    <figcaption>Fig. 4 - Index Page on 4K</figcaption>
                </figure>
                <h3>
                    3.3 Software Interfaces
                </h3>
                <p>
                    Pentru implementarea Back-End a proiectului nostru , ne-am folosit de platforma Heroku ca host al aplicatiei noastre. Astfel , in baza de date SQL oferita
                    de ei , am creeat 4 tabele : unul pentru a retine informatiile tuturor jucatorilor/adminilor care se inregistreaza pe aplicatia noastra , unul pentru a retine progresul pe parcurs a persoanelor mentionate anterior(punctaj final , timpul in care a rezolvat un nivel etc.) ,
                    unul pentru a stoca toate intrebarile de pe fiecare stage al jocului ( intrebari construite pe baza unor date din tabele in format CSV , disponibile la adresa <a href="https://www.kaggle.com/fivethirtyeight/fivethirtyeight-comic-characters-dataset?select=marvel-wikia-data.csv">aceasta</a> ) , iar in final unul pentru cazurile cand un utilizator si-a uitat parola
                    si vrea sa si-o schimbe , acesta primeste pe mail-ul sau un link catre un formular unde-si poate schimba parola , formular ce are generat un token ce are o perioada de timp . Dupa expirarea acestei perioade de timp , utilizatorul nu va mai putea folosi acel link pentru a-si putea schimba parola . Astfel stocam in acest tabel acel token si data lui de expirare precum si email-ul utilizatorului "uituc".
                </p>
                <p>
                    La nivel arhitectural , aplicatia respecta criteriile unui software design pattern de tip MVC.
                    Astfel , fiecare actiune a utilizatorului aplicatiei este procesata de un controller specific acelei actiuni , care invoca operatiile modelului care este asignat prelucrarii datelor de acel tip , obtinand un rezultat care ulterior este actualizat si afisat utilizatorului printr-un view.
                </p>
                <p>
                    Leaderboard-ul aplicatiei va fi disponibil si ca flux RSS , avand un buton special care va genera RSS-ul specific leaderboard-ului actual. Am folosit paradigma AJAX pentru afisarea si prelucrarea leaderboard-ului , in maniera atat sincrona( preluare initiala a intrebarilor din baza de date ) , cat si asincrona ( atunci cand se modifica scorul unui utilizatorul si se schimba ordinea in clasament ).
                </p>
                <h3>
                    3.4 Communications Interfaces
                </h3>
                <p>
                    Pentru a accesa si a utiliza datele, am folosit request-uri HTTP(GET si POST) via stilului arhitectural API REST , astfel : de fiecare data cand am avut de prelucrat o informatie introdusa de utilizator , controllerul respectiv trimite informatia la modelul corespunzator prin apeluri $_POST ale datelor introduse.
                    Eventualele mesaje ce ar trebui afisate in caz de erori sau in caz de succes , sunt preluate prin apeluri $_GET si gestionate astfel incat sa fie afisate in view-ul corespunzator. Mai multe detalii vor fi in sectiunea System Features , unde fiecare am prezentat in detaliu implementarile si gestionarile fiecarei parti din aplicatie .
                </p>
            </section>
            <section role="doc-introduction">
                <h2>4. System Features</h2>
                <section>
                    <h3>4.0 MVC Architecture</h3>
                    <p>
                        Proiectul nostru respecta bazele arhitecturii MVC. Astfel fiecare actiune a utilizatorului aplicatiei este trimisa la un controller ( a carui interfata se gaseste in clasa Controller ). Aici , fiecare subclasa a controllerului , in functie de ce vrem sa se intample la actiunea respectiva , avem un model care preia si gestioneaza acea actiune, generand un rezultat , care este afisat utilizatorului prin view-ul corespunzator. Astfel , fiecare model care genereaza rezultatul si fiecare view care afiseaza acest rezultat sunt pereche intr-o subclasa a clasei Controller. Fiecare controller va fi prezentat in sectiunile urmatoare , in functie de cine l-a implementat si cum l-a implementat.
                    </p>
                </section>
                <section>

                    <h3>4.1 Mosor Andrei's Contributions</h3>
                    <h4>4.1.1 Main Page</h4>
                    <h5>Front-End</h5>
                    <dl>
                        <dt>LOGIN button</dt>
                        <dd>Am facut butonul de LOGIN , dandu-i o forma usor ovala si o culoare rosie, specifica Marvel. La hoverul acestui buton , culoarea se va schimba in albastru , iar la apasarea acestuia , vom fi redirectionati catre pagina LOGIN aferenta
                            .
                        </dd>
                        <dt>REGISTER button</dt>
                        <dd>Am facut butonul de REGISTER , dandu-i o forma usor ovala si o culoare albastra, specifica DC. La hoverul acestui buton , culoarea se va schimba in rosu , in contrast cu butonul de LOGIN , iar la apasarea acestuia , vom fi redirectionati
                            catre pagina REGISTER aferenta .</dd>
                        <dt>ABOUT section</dt>
                        <dd>La sectiunea ABOUT am povestit putin despre cele doua universe ale superoilor si am atasat un video cu o disputa dintre doi fani infocati ale celor doua universe. De asemenea , am adaugat cateva informatii despre internationalizare
                            si accesibilitate. </dd>
                        <dt>CONTACT section</dt>
                        <dd>In cadrul sectiunii CONTACT , am atasat cateva informatii despre mine si colegii mei , informatii pe care le-am aliniat corespunzator cu ajutorul unui flex.</dd>
                    </dl>


                    <h4>4.1.2 Login Page</h4>
                    <h5>Front-End</h5>
                    <p>Am implementat un LOGIN FORM cu urmatoarele componente :</p>
                    <ul>
                        <li>Un logo AVENGERS</li>
                        <li>Un titlu : SIGN IN</li>
                        <li>Campul pentru Username</li>
                        <li>Campul pentru Password</li>
                        <li>O optiune pentru a fi redirectionat catre o pagina in caz de parola a fost uitata</li>
                        <li>Un buton LOGIN pentru a fi redirectionat la joc si a retine informatiile completate</li>
                        <li>O optiune pentru a fi redirectinat catre pagina de register.</li>
                    </ul>
                    <h5>Back-End</h5>
                    <p>Am implementat logica controller-ului pentru pagina LOGIN astfel :
                    <p>
                    <ol>
                        <li>Fiind in view-ul cu formularul LOGIN , vom trimite prin $_POST toate informatiile catre modelul User.</li>
                        <li>Acest model User are o functie login care returneaza un mesaj de eroare in caz ca logarea a esuat sau va trimite utilizatorul la pagina meniului. </li>
                        <li>Primind numele si parola introduse de utilizator prin apasarea butonului LOGIN,functia de login verifica daca cele doua campuri sunt goale , returnand un mesaj de eroare in caz pozitiv .</li>
                        <li>Altfel , va cauta in baza de date contul cu username-ul introdus , si daca nu il va gasi , va returna un mesaj de eroare. Altfel , se va verifica parola acelui cont si daca nu va coincide , va returna un mesaj de eroare corespunzator. </li>
                        <li>Daca parola va coincide atunci utilizatorul va fi trimis la pagina meniului principal , initializand o sesiune cu informatiile contului acestuia.</li>
                        <li>Apasand butonul 'SIGN-UP HERE' vom fi redirectionati catre view-ul paginii register.</li>
                        <li>Apasand butonul 'I FORGOT MY PASSSWORD' vom fi redirectionati catre view-ul paginii PasswordReset , unde putem introduce un email pentru a primi un link spre un formular unde vom putea schimba parola.</li>
                    </ol>


                    <h4>4.1.3 Register Page</h4>
                    <h5>Front-End</h5>
                    <p>Am implementat un REGISTER FORM cu urmatoarele componente :</p>
                    <ul>
                        <li>Un logo AVENGERS</li>
                        <li>Un titlu : SIGN UP</li>
                        <li>Campul pentru FIRST-NAME</li>
                        <li>Campul pentru LAST-NAME</li>
                        <li>Campul pentru MAIL</li>
                        <li>Campul pentru USERNAME</li>
                        <li>Campul pentru PASSWORD , cu caracterele ascunse</li>
                        <li>Campul pentru CONFIRM PASSWORD, cu caracterele ascunse</li>
                        <li>Un buton REGISTER pentru a fi redirectionat la joc si a retine informatiile completate.</li>
                    </ul>
                    <h5>Back-End</h5>
                    <p>Am implementat logica controller-ului pentru pagina LOGIN astfel :
                    <p>
                    <ol>
                        <li>Fiind in view-ul cu formularul LOGIN , vom trimite prin $_POST toate informatiile catre modelul User.</li>
                        <li>Acest model User are o functie register care returneaza un mesaj de eroare in caz ca inregistrarea a esuat sau va trimite utilizatorul la pagina de logare. </li>
                        <li>Primind numele,prenumele,username-ul,mail-ul si parola introduse de utilizator prin apasarea butonului REGISTER,functia de register verifica daca aceste campurile sunt goale , returnand un mesaj de eroare in caz pozitiv .</li>
                        <li>Daca username-ul trimis de utilizator contine altceva pe langa litere sau cifre, se va semnala o eroare.</li>
                        <li>Daca parolele din formular nu coincid , se va semnala un mesaj de eroare</li>
                        <li>Daca exista deja un utilizator cu mail-ul introdus , se va semnala un mesaj de eroare. De asemenea si daca exista un utilizator cu username-ul introdus. </li>
                        <li>Daca niciun mesaj de eroare nu a fost semnalat , atunci se va insera in baza de date un cont cu valorile introduse si se va redirecta utilizatorul catre pagina de login</li>
                    </ol>
                    <h4>4.1.4 Main Menu Page</h4>
                    <h5>Front-End</h5>
                    <p>Pop-up windows for :</p>
                    <dl>
                        <dt>Account Settings</dt>
                        <dd>Dupa ce colegul meu Rares a facut functionalitatea butonului , am implementat fereastra pop-up ce va contine informatii despre username,mail, first-name si last-name , optiunea de a fi redirectionat catre ChangePassword precum si optiunea de a da logout. Toate acestea aliniate cu un flex .</dd>
                        <dt>User Settings</dt>
                        <dd>In aceeasi maniera , avand functionalitatea butonului implementata , am implementat fereastra ce va contine optiunea pentru modificarea limbii in care vor fi afisate intrebarile.</dd>

                    </dl>
                    <h4>4.1.5 Admin Page</h4>
                    <h5>Front-End</h5>
                    <p>Am implementat un ADMIN FORM cu urmatoarele componente :</p>
                    <ul>
                        <li>Un logo AVENGERS</li>
                        <li>Un titlu : WELCOME MASTER ADMIN</li>
                        <li>Un camp pentru a introduce username-ul playerului pe care vrem sa-l dam afara</li>
                        <li>Butonul Kick</li>
                        <li>Un camp pentru a introduce username-ul playerului pe care vrem sa-l promovam ca Admin</li>
                        <li>Butonul Promote</li>
                        <li>Campul pentru introducerea id-ului intrebarii pe care vrem sa o schimbam</li>
                        <li>Campul pentru noua intrebare</li>
                        <li>Campul pentru varianta A</li>
                        <li>Campul pentru varianta B</li>
                        <li>Campul pentru varianta C</li>
                        <li>Campul pentru varianta D</li>
                        <li>Campul pentru raspunsul corect</li>
                        <li>Un buton SUBMIT-CHANGES pentru a fi redirectionat la pagina meniului principal si a face update la intrebare in baza de date.</li>
                    </ul>
                    <h5>Back-End</h5>
                    <p>Am implementat logica unui ADMIN FORM astfel :</p>
                    <ol>
                        <li>Fiind in view-ul formularului ADMIN , vom trimite prin $_POST toate informatiile catre modelul Admin.</li>
                        <li>Acest model are 3 functii ( in functie de cazul in care dorim sa dam afara un jucator , sa promovam ca Admin un jucator , sau sa schimbam continutul unei intrebari</li>
                        <li>Fiecare functie va genera o eroare in functie de dupa cum urmeaza, sau va executa operatia dorita,in functie de butonul apasat.</li>
                        <li>Daca am apasat oricare dintre cele trei butoane de submit fara a completa campul(campurile) butonului respectiv , vom fi semnalati cu o eroare.</li>
                        <li>Daca am introdus un username al unui cont inexistent in baza de date , sau daca am introdus propriul username in campul pentru kick, vom fi semnalati cu o eroare.</li>
                        <li>Daca am introdus un username al unui cont inexistent in baza de date , sau daca am introdus un username al carui cont este deja Admin in campul pentru promote, vom fi semnalati cu o eroare.</li>
                        <li>Daca am introdus id-ul unei intrebari inexistente in baza de date vom fi semnalati cu o eroare. </li>
                    </ol>

                    <h4>4.1.6 PasswordReset Page</h4>
                    <h5>Front-End</h5>
                    <p>Am implementat un FORM cu urmatoarele componente :</p>
                    <ul>
                        <li>Un logo AVENGERS</li>
                        <li>Un titlu : RESET YOUR PASSSWORD</li>
                        <li>Campul pentru MAIL</li>
                        <li>Un buton RECEIVE NEW PASSWORD BY EMAIL pentru a primi un email cu un link catre un formular pentru schimbarea parolei.</li>
                    </ul>
                    <h5>Back-End</h5>
                    <p>Impreuna cu colegul Adrian Smau , am implementat trimiterea mail-ului astfel :</p>
                    <ol>
                        <li>Fiind in view-ul paginii PasswordReset, vom trimite prin $_POST toate informatiile catre modelul SendConfirmationMail.</li>
                        <li>Astfel daca utilizatorul nu exista in baza de date , se va semnala un mesaj de eroare si se va redirecta utilizatorul la pagina de login. </li>
                        <li>Pentru fiecare utilizator care introduce un mail valid , se creeaza in baza de date o celula cu mail-ul acestuia, un selector unic generat aleatoriu , un token unic generat aleatoriu , precum si data de expirare a acestuia.</li>
                        <li>Astfel, utilizatorul poate folosi acel link cat timp nu a expirat tokenul. La expirarea tokenului se va sterge celula din baza de date, precum si inainte de a se face inserarea acesteia , in caz de utilizatorul a mai cerut alte link-uri catre formularul de cerere a schimbarii parolei.</li>
                        <li>Apoi , pentru a putea trimite un mail ne vom folosi de un obiect PHPMailer, al carui host va fi platforma GMAIL , cu un cont creeat de noi. </li>
                        <li>Dupa ce am setat parametrii from , to , si message ( unde am inclus un mesaj cu url-ul view-ului ChangePassword cu selectorul si tokenul ca parametri ) , apelam functia send si trimitem mail-ul.</li>
                        <li>Daca trimiterea a esuat , ne va fi aratat un mesaj de eroare. Altfel ne va fi aratat un mesaj cu succes si posibilitatea de a inchide fereastra actuala pentru a va verifica mail-ul.</li>
                    </ol>

                    <h4>4.1.7 ChangePassword Page</h4>
                    <h5>Front-End</h5>
                    <p>Am implementat un ChangePassword FORM cu urmatoarele componente :</p>
                    <ul>
                        <li>Un logo AVENGERS</li>
                        <li>Un titlu : CHANGE PASSWORD</li>
                        <li>Campul pentru selector(ascuns)</li>
                        <li>Campul pentru validator(ascuns)</li>
                        <li>Campul pentru PASSWORD</li>
                        <li>Campul pentru CONFIRM NEW PASSWORD</li>
                        <li>Campul pentru PASSWORD , cu caracterele ascunse</li>
                        <li>Un buton CHANGE PASSSWORD pentru a fi redirectionat la pagina de login si a retine informatiile completate.</li>
                    </ul>
                    <h5>Back-End</h5>
                    <p>Am implementat logica ChangePassword astfel :</p>
                    <ol>
                        <li>Fiind in view-ul formularului ChangePassword , vom trimite prin $_POST toate informatiile catre modelul User.</li>
                        <li>Acest model are o functie de changePassword , care va semnala un mesaj in caz de eroare , sau va modifica parola si va redirectiona utilizatorul catre pagina de login. </li>
                        <li>Daca selectorul si validatorul sunt invalide , se va semnala un mesaj de eroare.</li>
                        <li>Daca parolele introduse nu coincid , se va semnala un mesaj de eroare.</li>
                        <li>Daca nu exista selectorul unic in baza de date , se va semmnala o eroare.</li>
                        <li>Altfel , se cauta utilizatorul in baza de date si se updateaza parola</li>
                    </ol>

                </section>
                <section>
                    <h3>4.2 Gramescu Rares-George's Contributions</h3>
                    <h4>Aspecte generale</h4>
                    <ol>
                        <li>
                        Am adaugat toate butoanele de back in paginile de Register, Login, Admin Page si Solo Adventures.
                        </li>
                        <li>
                        Am stilizat si modificat butoanele de Logout si Change password.
                        </li>
                        <li>
                        Pe langa cele mentionate mai jos, i-am ajutat pe colegii mei atunci cand s-au ivit probleme la partea de MVC.                        
                        </li>

                    </ol>

                    <h4>
                        4.2.1 Index page
                    </h4>
                    <ol>
                        <li>
                            Butonul de minimizare pentru ecranele telefoanelor sau tabletelor : Am folosit fa fa-bars pentru buton si javascript pentru functionalitatea acestuia si @media pentru a verifica numarul de pixeli al ecranului.
                        </li>
                    </ol>
                    <h4>
                        4.2.2 Main menu
                    </h4>
                    <ol>
                        <li>
                            Butoanele de Account setings, Setings, Play, Leaderboard si Solo Adventures : Am folosit un flex pentru asezarea butoanelor si @media pentru a scala pagina in functie de device-ul folosit. Fiecare buton (in afara de account setings pe care l-am facut
                            doar sa scaleze cand se da hover pe el) inainte de a se da hover pe el este in culoarea Marvel, iar cand se da hover este albastru DC.
                        </li>
                        <li>
                            Asezarea si modificarea GIF-ului : Am folosit un tool pentru modificarea GIF-ului.
                        </li>
                    </ol>
                    <h4>
                        4.2.3 Quiz page
                    </h4>
                    <ol>
                        <li>
                            Prototipul paginii : Am creat pagina si am facut aranjarea fiecarui element: scorul(care nu apare, fiind tinut in spate, acesta a fost inlocuit cu numarul de vieti), intrebarile, bara care arata progresul intrebarilor.
                            <br> Quiz-ul interactiv a fost creat folosind un script construit de mine, care la trecerea de la o intrebare la alta umple bara de progres din ce in ce mai mult.<br> Pentru fiecare raspuns gresit/corect se modifica scorul
                            jucatorului, raspunsul fiind colorat in rosu/verde.
                        </li>
                    </ol>
                    <h4>
                        4.2.4 Solo Adventures
                    </h4>
                    <h5> Front-End </h5>
                    <ol>
                        <li>
                        Pagina de Solo Adventures a fost implementata asemantor ca pagina de Quiz, diferentele sunt ca avem un scor care creste pe masura ce userul raspunde corect la intrebare.
                        </li>
                        <li>
                        Aceasta a fost gandita ca un mediu de invatare pentru utilizatori.
                        </li>
                    </ol>
                    <h5> Back-End </h5>
                    <ol>
                        <li>
                        Toata implementarea acestei pagini pe partea de back-end a fost facuta de catre mine.
                        </li>
                        <li>
                        In controller-ul paginii de Solo Adventures, se preiau informatiile de la pagina de meniu folosindu-ne cum ar fi: limba .
                        </li>
                        <li>
                        Prin JavaScript, se preiau cele trimise din controller in view si se folosesc mai departe. In 'soloAdventures.js' se intializeaza scorul. 
                        </li>
                        <li>
                         Bazat pe limba sesiunii, am preluat intrebarile in format JSON. Printr-un apel XMLHttpRequest sincron (pentru a nu se termina inaintea initializarii jocului), se iau intrebarile print metoda GET aplicata modelului 'GetTraining'.
                        </li>
                        <li>
                        Mediul de invatare ia sfarsit atunci cand utilizatorul raspunde la toate cele 49 de intrebari.
                        </li>
                    </ol>
                    <h4>
                        4.2.5 Baza de date cu intrebari
                    </h4>
                    <h5> Back-End </h5>
                    <ol>
                        <li>
                            Pe baza CSV-ului oferit am preluat informatiile si am inceput sa creez intrebarile quiz-ului.
                        </li>
                        <li>
                            CSV-ul a fost parsat si am verificat daca numele unui supererou se afla in acel rand. Verificarea a fost facuta astfel incat sa nu fie create mai multe inserturi in baza de date daca se gaseste numele supereroului. Acest caz exceptional se intampla in momentul in care numele supereroului se afla si in pagina acestuia de wikipedia (alta coloana care se afla in CSV).
                        </li>
                        <li>
                            Intrebarile au fost create in maniera in care toate datele sunt luate din CSV exmeplu: culoarea parului, numar de aparitii, anul in care a aparut prima data eroul sau ce tip de erou este.
                        </li>
                        <li>
                            Am adaugat si intrebari care nu sunt bazate pe datele din CSV pentru a face jocul mai interesant cu cunostinte minimale despre supereroi cum ar fi: culoarea pielii lui Hulk.
                        </li>
                        <li>
                            Tabelul creat contine campuri precum question, Idquestion( pentru a putea fi schimbata intrebarea in cazul in care acest lucru se doreste), question, answera,answerb,answerc,answerd cat si campul correct care reprezinta a cata varianta de raspuns este cea corecta. Campul correct a fost implementat in special pentru a usura munca preluarii raspunsului corect astfel in Quiz cat si in Solo Adventures sa fie trasnmise toate datele corect.
                        </li>

                        <li>
                            Pentru intrebarile in alte limbi, CSV-ul a fost reparsat astfel s-au mai creat 2 tabele: intabariFr si intrebariDe care sa contina intrebarile in limba germana cat si in limba franceza cu tot cu caracterele speciale ale acestora.
                        </li>
                        <li>
                            Raspunsurile la intrebari sunt preluate asemenea din CSV.
                        </li>
                        </ol>
                    <h4>
                        4.2.5 Internationalizare
                    </h4>
                    <h5> Back-End </h5>
                    <ol>

                        <li>
                        In creeare internationalizarii am primit si ajutorul lui Adrian, astfel am preluat limba din pop-ul de setari, creand o sesiune care sa retina limba pe parcursul paginilor.
                        </li>
                        <li>
                        Caracterele speciale din limba franceza si germana sunt incluse si ele.
                        </li>
                        <li>
                        Limba poate fi schimbata atata timp cat suntem logati. Limba default este engleza, care nu poate fi schimbata pe pagina de Home, Login, Register sau Change password (chiar daca suntem logati cand schimbam parola din Account Settings).
                        </li>
                        <li>
                        Intrebarile au fost si ele translate in limbile germana si franceza pentru a avea o sesiune a jocului cat mai corecta. (limba sa fie in germana si quiz-ul sa fie in engleza).
                        </li>
                        <li>
                        Internationalizarea a fost facuta pe baza unei functii asemanatoare gettext care ne cauta prin cuvintele din limba franceza si germana acestea aflandu-se intr-un array.
                        </li>
                        <li>
                        Traducerea se realizeaza atat pentru cuvintele din butoane cat si pentru placeholderele din Admin Page sau pop-urile de eroare.
                        </li>
                        <li>
                        Au fost traduse inclusiv cuvintele de dificultate a quiz-ului cat si restul textului din toate paginile site-ului (Leaderboard, Gamemap etc..).
                        </li>
                    </ol>
                </section>
                <section>
                    <h3>4.3 Smau Adrian-Constantin's Contributions</h3>
                    <h4>Aspecte generale</h4>
                    <ol>
                        <li>
                            Pe langa cele mentionate mai jos, i-am ajutat pe colegii mei atunci cand s-au ivit probleme (in legatura cu limbajul PHP, cu paradigma AJAX sau cu modul in care comunica componentele intre ele). Intelegand bine ce presupune arhitectura MVC, am depus multa munca la ghidarea colegilor mei si la restructurarea proiectului conform acestui standard (initial, codul era scris integral in maniera 'spaghetti code' - un anti-pattern care nu era tocmai eficient).<br>
                            Astfel, am impus o logica a operatiilor conform MVC (Controllers - Core - Models - Views) si un mod de routing al header-ului pe baza pe un tutorial de youtube.<br>
                            Am optimizat unele lucruri facute de colegii mei - apeluri POST/GET inutile, operatii de care modelele sunt responsabile facute in view, "impotmoliri" la unele probleme etc.
                        </li>
                        <li>
                            Sablonul folosit pentru crearea sectiunii de Solo Adventures a fost adaptat dupa modul in care am gandit si scris nivelele de joc.(Mai multe detalii in sectiunea aferenta)
                        </li>
                        <li>
                            M-am ocupat de metode de consolidare a securitatii aplicatiei (de exeplu, daca utilizatorul nu e logat, el va fi redirectat la 'home' indiferent de ce pagina acceseaza, in afara de login, register si password-forgotten).
                        </li>
                        <li>
                            Alaturi de colegul meu Andrei Mosor, am implementat sistemul de trimitere a mail-urilor de confirmare pentru schimbarea parolei. Mailul se trimite de pe un cont dedicat site-ului, la care ne conectam prin SMTP. Acest lucru a fost posibil cu ajutorul librariei PHPMailer.
                        </li>
                        <li>
                            L-am ajutat pe colegul meu Rares Gramescu la implementarea internationalizarii prin ideea de a crea un array in variabila superglobala '$GLOBALS' cu traducerea fiecarui cuvant.
                        </li>
                        <li>
                            Implementarea unui sablon de pop-up folosit in mai multe locuri pentru a valida/invalida anumite lucruri (mesaje de eroare / confirmare).
                        </li>
                        <li>
                            Am adaugat preloader-ul la toate paginile aplicatiei.
                        </li>
                    </ol>
                    <h4>4.3.1 Index Page</h4>
                    <ol>
                        <li>
                            Arhitectura Header-ului atunci cand nu este minimizat. Am implementat scroll smooth, iar fiecare link din sectiunea de link-uri duce catre o sectiune a paginii!<br> Efectele de hover sunt inspirate dintr-un proiect de pe codepen,
                            insa insusite si retusate. Am optat pentru display: flex pentru tot header-ul pentru a pastra simetria!<br> In sectiunea de navigare, am mai aplicat inca un flex, pentru a le aseza "evenly". Butoanele de Login si Register sunt
                            stilizate doar cu un efect de hover!
                        </li>
                        <li>
                            Sectiunea de Home, ce contine slideshow-ul, a fost facuta cu ajutorul unui script inspirat de pe codepen. In schimb, am adaugat efectul de hover asupra slide-urilor (care blureaza imaginile si arata un text).<br> Slideshow-ul
                            isi reseteaza intervalul atunci cand slide-urile sunt schimbate manual sau cand se actioneaza efectul de hover asupra lor!
                        </li>
                        <li>
                            Butonul Back-To-Top, care executa un scroll pana la inceputul paginii atunci cand se depaseste un anumit nivel (de 100vh vertical), atunci cand butonul devine vizibil. Cod insusit de la un tutorial, insa stilizat si adaptat paginii!
                        </li>
                        <li>
                            Unele modificari (minime) la sectiunea de Contact, pentru ca sectiunea sa scaleze mai bine pe diverse device-uri, precum si aranjarea footer-ului.
                        </li>
                    </ol>
                    <h4>4.3.2 Login Page si Register Page</h4>
                    <ol>
                        <li>
                            La munca colegului meu Andrei Mosor am adaugat unele optimizari pentru o mai buna scalare a paginii (efecte de zoom-out si -moz-transition pentru a se vedea bine pe browser-ul Mozilla)!
                        </li>
                        <li>
                            Alaturi de ce a facut Andrei Mosor pe partea de back-end, am ajutat la refactorizarea codului conform MVC, precum si la verificarea codului si la unele aspecte care necesitau atentie (care sa afiseze diferite mesaje, sa verifice anumite informatii etc.).
                        </li>
                    </ol>
                    <h4>4.3.3 Main Menu Page</h4>
                    <ol>
                        <li>
                            Arhitectura initiala a paginii, aranjarea elementelor in pagina, imaginea de fundal si Logo-ul, munca continuata de colegii mei.
                        </li>
                    </ol>
                    <h4>4.3.4 Game Map Page</h4>
                    <h5> Front-End </h5>
                    <ol>
                        <li>
                            Intreaga pagina a fost facuta de catre mine. Pentru div-ul cu nivele, am atribuit imaginile printr-un script - in concordanta cu clasa stage-ului (unlocked / locked / completed), se schimba atat imaginea, cat si tooltip-ul atunci cand este actionat un
                            hover peste titlul nivelului! In functie de limba, am ales dinamic setter-ul pentru tooltips. Pentru Stage-urile deja completate, se poate vedea timpul si scorul obtinute. Am folosit display : flex pentru a pastra o simetrie.
                            <br> Aceste functionalitati au fost facute printr-un script original, prin care preiau clasele aferente si le schimb fie sursa imaginii, fie innerText-ul.<br> Imaginile sunt luate de pe un site de clipart.
                        </li>
                        <li>
                            Progress Bar-ul este legat de sectiunea de scor. In functie de progresul user-ului printre cele 7 nivele, se va afisa progresul si bara de progress in procent (x%). <br> Script-ul este creat de mine, insa design-ul barei de progress este inspirat de pe un proiect codepen, eu avand grija la umplerea sa corespunzatoare
                            si a elementelor estetice.
                        </li>
                        <li>
                            La actionarea imaginilor nivelelor, am adaugat un efect de grow, iar la actionarea click-ului am creat un script care, daca nivelul este unlocked sau completed, deschide un Pop-up care permite selectarea dificultatii printr-un meniu dropdown si are optiunea
                            de Play, pentru a incepe nivelul cu o anumita dificultate selectata! Bazat pe dificultatea selectata, in stage-ul selectat se va modifica multiplyer-ul de scor si numarul de vieti (detalii la capitolul aferent).<br> Stilizarea butonului de Play este inspirata de pe un proiect codepen, insa este personalizata cu dimensiunile potrivite si
                            culorile potrivite.<br> Arhitectura Pop-up-ului este preluata din pagina de Main Menu si adaptata de catre mine, dupa munca colegilor mei!
                        </li>
                        <li>
                            La actionarea unui hover peste titlurile nivelelor, va aparea un tooltip (implementat de catre mine printr-un script) care arata, pentru diferitele feluri de nivel, Scorul, Timpul si Statutul (dupa caz).
                        </li>
                        <li>
                            Au fost luate masuri pentru scalarea corespunzatoare a elementelor prin introducerea unor Media Queries.
                        </li>
                        <li>
                            In final, butonul de Back va redirectiona utilizatorul inapoi spre Main Menu.
                        </li>
                    </ol>
                    <h5> Back-End </h5>
                    <ol>
                        <li>
                            Toata implementarea acestei pagini pe partea de back-end a fost facuta de catre mine.
                        </li>
                        <li>
                            In controller, se preiau id-ul userului curent din tabela score (avand 2 tabele, unul users, altul score, in care id-urile variaza, si avand nevoie de acces la tabelul de score pentru a inregistra scorul userului, va trebui sa fac rost de id-ul userului curent pe baza username-ului - care e unic, deci garantat nu vor aparea situatii neprevazute). Se mai preia si username-ul utilizatorului si progresul acestuia (o coloana din tabelul 'score', care arata cate stage-uri completate are user ul curent din totalul de 7 pentru a initializa corespunzator bara de progress), precum si limba aferenta sesiunii.<br>
                            Aceste informatii se trimit in view, unde, dinamic, este construita pagina (numele utilizatorului curent apare in mesajul de 'welcome', sunt setate status-urile stage-urilor - locked, unlocked, completed, si altele ce urmeaza sa fie explicate).
                        </li>
                        <li>
                            Procurarea/formatarea datelor mentionate mai sus a fost facuta cu ajutorul unor modele - id-ul userului curent a fost facut cu ajutorul modelului 'GetScoreTableId', iar progresul a fost procurat cu ajutorul 'GetProgress'!
                        </li>
                        <li>
                            In view, am preluat datele trimise din controller pentru a le folosi. Intai, setez mesajul de 'welcome' si statusul stage-urilor pe baza progresului. Apoi, initializez imaginile aferente stage-ului cu ajutorul unui script.<br>
                            Bazat pe limba sesiunii, initializez dinamic tooltip-urile facand apeluri la modelul 'AddScore' pentru a prelua timpul si scorul unui anumit stage (apelurile sunt in maniera AJAX, cu ajutorul metodei GET si a clasei XMLHttpRequest, insa apelul nu este asincron, ci sincron - daca ar fi asincron, exista riscul sa nu se aplice schimbarile si sa se ruleze scriptul inainte sa se poate da fetch la datele necesare).
                        </li>
                        <li>
                            Se seteaza, mai apoi, caseta de progres si bara de progress pe baza variabilei din coontroller.
                        </li>
                        <li>
                            In final, se seteaza, pentru stage-urile complete sau unlocked, posibilitatea de a le accesa si de a fi intampinat cu un pop-ul care permite selectarea dificultatii si actionarea butonului play.
                        </li>
                        <li>
                            In cazul in care userul alege sa joace un stage, a fost implementat un "hidden-form" - un form ascuns, care nu poate fi vazut, care transmite spre jocul in sine indexul stage-ului, dificultatea aleasa si limba sesiunii.
                        </li>
                        <li>
                            Toate acestea se fac folosind JavaScript si PHP.
                        </li>
                    </ol>
                    <h4>4.3.5 Quiz - Main Game</h4>
                    <p>
                        Intreaga functionalitate de Back-End a fost conceputa de catre mine. Aceasta a fost adoptata si de catre colegul meu Rares Gramescu, care s-a ocupat de partea de 'solo adventures'.<br>
                        Intrebarile, atat in engleza, cat si in franceza si germana au fost importate de catre Rares din fisierele csv mentionate in cerinta proiectului si puse intr-o baza de date.
                    </p>
                    <h5>Front-End</h5>
                    <p>
                        La munca lui Rares Gramescu am stilziat unele elemente din Quiz si am adaugat conceptul de "vieti", avand doar 3 vieti disponibile, scorul calculandu-se in fundal si aparand la final daca este cazul. Daca, insa, jucatorul ramane fara vieti, scorul nu
                        mai este calculat deoarece nivelul nu a fost trecut cu succes.
                    </p>
                    <h5>Back-End</h5>
                    <ol>
                        <li>
                            Intreaga logica din spatele jocului si a modului de a inregistra scorul / timpul in baza de date a fost conceputa de catre mine.
                        </li>
                        <li>
                            In controller-ul paginii de game, se preiau informatiile primite prin POST de la pagina gamemap (din "hidden-form") - indicele stage-ului ales, dificultatea si limba. Se obtine, de asemenea, id-ul utilizatorului curent intr-o maniera identica cu cea din gamemap - cu ajutorul unui model - pentru a face schimbari in baza de date acolo unde e cazul.
                        </li>
                        <li>
                            Prin JavaScript, se preiau cele trimise din controller in view si se folosesc mai departe. In scriptul 'game.js', intai, se seteaza numarul de vieti si multiplyer-ul.<br>
                            Acestea sunt alese astfel : EASY - 3 vieti - multiplyer x1 ; MEDIUM - 2 vieti - multiplyer x3 ; HARD - 1 viata - multiplyer x5.
                        </li>
                        <li>
                            Urmeaza acum procurarea intrebarilor in format JSON din baza de date aferenta limbii sesiunii. Printr-un apel XMLHttpRequest sincron (pentru a nu se termina inaintea initializarii jocului), se iau intrebarile print metoda GET aplicata modelului 'GetStageData'.
                        </li>
                        <li>
                            Se initializeaza intrebarile si efectele vizuale - nr de vieti, progresul etc. - si se porneste timer-ul pentru cronometrarea timpului de executie a stage-ului.
                        </li>
                        <li>
                            Jocul ia sfarsit fie cand nu mai sunt intrebari (deci stage-ul este trecut), fie cand user-ul ramane fara vieti. Daca utilizatorul nu trece nivelul, este notificat printr-un pop-ul de timpul de executie si este redirectat catre gamemap.
                        </li>
                        <li>
                            Daca, insa, acesta termina cu succes jocul, i se calculeaza timpul de executie si scorul pe baza vietilor ramase si a multiplyer-ului si, printr-un apel AJAX - asincron - cu ajutorul XMLHttpRequest - scorul sau este introdus in baza de date 'score', care este legata de leaderboard pentru a afisa scorurile tuturor user-ilor.<br>
                            Daca stage-ul nu este deja completat, acesta este marcat drept completat si i se marcheaza scorul si timp-ul aferent stage-ului completat. I se incrementeaza si progresul total. Daca, insa, este deja completat, i se schimba datele din tabel doar daca:
                            <ol>
                                <li>
                                    Are scorul mai mare decat cel deja inregistrat in baza de date. Se inregistreza si scorul, si timpul.
                                </li>
                                <li>
                                    Daca scorul este la fel, insa timpul de executie este mai mic decat cel anterior, se modifica timpul.
                                </li>
                            </ol>
                        </li>
                        <li>
                            In cele din urma, user-ul este de asemenea redirectat catre gamemap, unde poate instant sa vada urmatorul stage cum este deblocat (daca este cazul), sau, in tooltip, statisticile unui stage cum s-au schimbat! Sau, evident, nicio schimbare, daca nu este cazul.
                        </li>
                    </ol>
                    <h4>4.3.6 Leaderboard</h4>
                    <p>
                        Pagina a fost conceputa doar de catre mine.
                    </p>
                    <h5>Front-End</h5>
                    <ol>
                        <li>
                            Pagina este structurata in header, main section si footer - header-ul are titlul, main section-ul are scorurile in sine afisate, pentru toti utilizatorii, si footer are data ultimei modificari - adica ultimul refresh al paginii.
                        </li>
                        <li>
                            Scorul utilizatorului curent este afisat cu auriu pentru a fi highlighted, iar scorul celorlalti este mov.
                        </li>
                        <li>
                            Pentru Google Chrome, am implementat un scroll bar custom, insa pentru celelalte browsere acesta este cel default.
                        </li>
                        <li>
                            In footer, se afla un buton de "back" pentru a ajunge inapoi in MainMenu, iar in dreapta se afla un buton pentru generarea unui flux RSS pe baza leaderboard-ului.
                        </li>
                    </ol>
                    <h5>Back-End</h5>
                    <ol>
                        <li>
                            In controller, am preluat informatiile despre toti utilizatorii (ordonate dupa scor, timp si ultima data de modificare) cu ajutorul modelului GetLeaderboardInfo si am propagat array-ul obtinut catre view-ul leaderboard-ului.
                        </li>
                        <li>
                            In view, se parseaza array-ul primit pentru a afisa corespunzatorul scorul si timpul total al fiecarui utilizator, locul in clasament, numele si data ultimei modificari la scor.
                        </li>
                        <li>
                            De asemenea, la actionarea butonului de RSS, se genereaza un cod XML care descrie un feed RSS cu datele fiecaruia dintre utilizatori, asemenea leaderboard-ului. Generarea acestuia este dinamica, si este adaptata dupa un tutorial de pe youtube. 
                        </li>
                    </ol>
                </section>
            </section>
            <section>
                <h2>5. Other Nonfunctional Requirements</h2>
                <h3>5.5 Business Rules</h3>
                <p>
                    In implementarea partii de Front-End, am avut in vedere factori pe care va trebui sa ii includem in aplicatia noastra, precum accesibilitatea si internationalizarea.<br> Modul in care ne-am structurat codul ne permite compatibilitatea
                    cu programe care vin in ajutorul celor cu probleme de vedere! Am setat corespunzator semanticile elementelor paginilor noastre, astfel incat programele software de tip screen readers sa le poata parcurge cu succes.
                    <br> Vom implementa, totodata, diverse limbi in functionalitatile aplicatiei noastre, astfel incat utilizatori din diverse zone geografice sa se poata bucura de continutul jocului nostru!
                </p>
            </section>
            <section role="doc-appendix">
                <h2>Appendix C : To Be Determined List</h2>
                <p>Aplicatia se afla in stadiul ei final! Se mai pot aduce numeroase optimizari si imbunatatiri!</p>
            </section>
        </div>
    </article>
</body>

</html>