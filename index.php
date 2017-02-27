<?php

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bertrand Feuille | Webdéveloppeur-Webmaster</title>

    <!-- CSS -->
    <link rel="stylesheet" href="./font/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/hover.css">
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/normalized.css">
    <link rel="stylesheet" href="./css/style.css">


    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="./image/logofavicon.png" />
    <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="./image/favicon.ico" /><![endif]-->


</head>
<body>
<div class="page">
    <header>
        <div class="nom">
            <!-- Image + logo ici -->
            <img src="./image/logo2_site_cv.png" alt="logo de bertrand feuille">
            <p>Bertrand Feuille</p>
        </div>
        <div><i class="fa fa-bars responsive_burger" id="burger_menu" aria-hidden="true"></i></div>
        <nav id="header" class="navbar_header navbar navbar_default main_menu">

            <ul>
                <li></li>
                <li><a class="hvr-underline-reveal scroll" href="#accueil">Accueil</a></li>
                <li><a class="hvr-underline-reveal scroll" href="#presentation">Présentation</a></li>
                <li><a class="hvr-underline-reveal scroll" href="#competence">Compétences</a></li>
                <li><a class="hvr-underline-reveal scroll" href="#realisation">Réalisations</a></li>
                <li><a class="hvr-underline-reveal scroll" href="#formulaire">Contact</a></li>
            </ul>
        </nav>

    </header>
    <!-- Menu responsive -->
    <div class="menu_responsive">
        <nav>
            <ul>
                <li><a class="scroll" href="#accueil">Accueil</a></li>
                <li><a class="scroll" href="#presentation">Présentation</a></li>
                <li><a class="scroll" href="#competence">Compétences</a></li>
                <li><a class="scroll" href="#realisation">Réalisations</a></li>
                <li><a class="scroll" href="#formulaire">Contact</a></li>
            </ul>
        </nav>
    </div>
    <!-- Image de fond -->
    <div id="accueil" class="hero">
        <div class="filtre_hero">
            <div class="bienvenue">
                <h1>Site CV de Bertrand Feuille</h1>
                <h2><span class="span_word">Web Développeur/Webmaster</span> sur Rouen</h2>
                <p>Passionné du Web et des nouvelles technologies depuis des années, je me présente aujourd’hui à vous en tant que <span>Web développeur & Webmaster</span>. Un métier qui me permet de mettre à profit mes compétences dans les domaines du  web développement, du référencement naturel et du graphisme.</p>
                <a class="button scroll" href="#formulaire"><span>Contact</span></a>
            </div>
        </div>
    </div>
    <!-- fin image de fond -->
    <section id=presentation class="presentation_bloc">
        <div class="wrapper">
            <div class="photo"><img src="./image/logo2_site_cv.png" alt=""></div>
            <div class="presentation">
                <h3>Présentation</h3>
                <p><strong>Après une formation de webmaster m'ayant donné des compétences dans les métiers du web, j’ai choisi de compléter mon profil technique avec des compétences en programmation et web développement.</strong></p>
                <p>La formation webforce 3 m'a donnée les outils pour développer, organiser et intégrer un site web. Du php au javascript, cette formation m'a
                    permis de me former sur différents langages de programation.
                    Je perfectionne chaque jour ces compétences dans mes projets personnels.</p>
            </div>

        </div>
    </section>
    <!-- bloc compétence -->
    <section id="competence" class="competence"><h3>Compétences</h3>
        <div class="wrapper">
            <div class="competence_bloc">
                <p><a href="#">Développement</a></p>
                <p><i class="fa fa-code fa-4x"></i></p>
                <p>Utilisant les langages HTML 5, CSS3 et PHP, j'améliore également mes compétences en Javascript et jQuery ce qui me confère les connaissances nécessaires pour m’adapter aux nouvelles techniques des projets réalisés</p>
            </div>
            <div class="competence_bloc">
                <p><a href="#">Graphisme</a></p>
                <p><i class="fa fa-picture-o fa-4x"></i></p>
                <p>Utilisant Photoshop, Illustrator et In design, je réalise les maquettes et charte graphique de site web dont j'ai besoin. J’utilise ma créativité pour créer des logos, et retouches d’image.</p>
            </div>
            <div class="competence_bloc">
                <p><a href="#">Responsive Design</a></p>
                <p><i class="fa fa-mobile fa-4x"></i></p>
                <p>Le trafic web sur smartphones et tablettes n’étant plus négligeable. J’utilise mes compétences en intégration et design pour réaliser des sites qui s’adaptent à toutes les tailles de support.</p>
            </div>
            <div class="competence_bloc">
                <p><a href="#">Communication</a></p>
                <p><i class="fa  fa-comments-o fa-4x"></i></p>
                <p>Ayant une expérience en tant que Community Manager, je sais mettre en place une stratégie de communication et d’acquisition de trafic en utilisant différents leviers tels que les réseaux sociaux.</p>
            </div>
            <div class="competence_bloc">
                <p><a href="#">Référencement Naturel</a></p>
                <p><i class="fa fa-bar-chart fa-4x"></i></p>
                <p>L'objectif premier du référencement est d'accroître la visibilité et l'audience des sites à l'aide de techniques spécifiques. Grâce à ma formation de webmaster je maîtrise certaines de ces compétences pour atteindre cette objectif.</p>
            </div>
            <div class="competence_bloc">
                <p><a href="#">Webmarketing</a></p>
                <p><i class="fa fa-pie-chart fa-4x"></i></p>
                <p>Étant issue de l'univers du Marketing avant de m'insérer dans le milieu du web, je possède des compétences qui me permettent de développer une relation durable de fidélisation avec les internautes d'un site web et des médias sociaux. </p>
            </div>
        </div>
        <a class="button" href="./pdf/bertrand_feuille_cv.pdf"><span>Plus d'informations</span></a>
    </section>
    <!-- debut image background -->
    <div class="hero2">
        <div class="filtre_hero2">
        </div>
    </div>
    <!-- fin image background -->
    <section id="realisation" class="realisation">
        <div class="intro_realisation">
            <h3>Mes réalisations</h3>
        </div>
        <div class="wrapper">
            <div class="realisation_bloc ">
                <a href="http://ikedori.bertrandfeuille.fr" target=_blank><img src="./image/realisation3.jpg" alt="logo de ikedori"></a>
            </div>
            <div class="realisation_bloc">
                <a href="http://www.influenceursduweb.org/" target=_blank><img class="hvr-sweep-to-right" src="./image/realisation1.jpg" alt="logo des influenceurs du web"></a>
            </div>
            <div class="realisation_bloc">
                <a href="http://www.webmaster-formation.fr" target=_blank><img class="hvr-sweep-to-right" src="./image/realisation2.jpg" alt="logo de ikedori"></a>
            </div>
        </div>
    </section>
    <!-- debut image background -->
    <div class="hero3">
        <div class="filtre_hero2">
        </div>
    </div>
    <!-- fin image background -->
    <!-- Section contact -->
    <section id="formulaire" class="formulaire_contact">
        <h3>Me contacter</h3>
        <form action="index.php#formulaire" method="post">
            <p><input type="text" name="nom" maxlength="50" placeholder="Nom" >
                <input type="email" name="email" maxlength="50" placeholder="Adresse e-mail"></p>
            <textarea name="message"  rows="8" cols="80" placeholder="Message"></textarea>
            <?php

            require ('./php/validform.php');

            ?>
            <p><input type="submit" name="envoi"  value="Envoyer"></p>
        </form>

    </section>
    <section class="contact_me">
        <div class="wrapper_contact">
            <div class="contact_adress">
                <p><i class="fa  fa-phone fa-2x"></i></p>
                <h4>Téléphone</h4>
                <h5>06 26 49 48 49</h5>
            </div>
            <div class="contact_adress">
                <a href="./pdf/bertrand_feuille_cv.pdf"><img src="./image/logo_cv.jpg" alt=""></a>
            </div>
            <div class="contact_adress">
                <p><i class="fa  fa-envelope-o fa-2x"></i></p>
                <h4>Email</h4>
                <h5><a href="#">contact@bertrandfeuille.fr</a></h5>
            </div>
        </div>
        <div class="social_network">
            <p>
                <a href="https://twitter.com/Bertrand_Web" target=_blank><i class="fa  fa-twitter fa-2x"></i></a>
                <a href="https://www.linkedin.com/in/bertrand-feuille-6ba79aaa?authType=NAME_SEARCH&authToken=_4O6&locale=fr_FR&srchid=3901246541487256692129&srchindex=1&srchtotal=1&trk=vsrp_people_res_name&trkInfo=VSRPsearchId%3A3901246541487256692129%2CVSRPtargetId%3A390124654%2CVSRPcmpt%3Aprimary%2CVSRPnm%3Atrue%2CauthType%3ANAME_SEARCH" target=_blank><i id="linkedin" class="fa  fa-linkedin-square fa-2x"></i></a>
            </p>
        </div>
    </section>

    <footer>
        <p>Copiright 2017 - <a href="#">Mentions légales</a></p>
    </footer>
</div>

<!-- JS -->
<script type="text/javascript" src="./js/jquery-3.1.1.js"></script>
<script type="text/javascript" src="./js/master.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-57416169-1', 'auto');
    ga('send', 'pageview');

</script>

</body>
</html>
