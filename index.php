<?php

$confirm_submit="";

if (isset($_POST['submit'])) {
    $destinataire="trainoir@gmail.com";
    $objet="Contact CV";
    $message = $_POST['user_message'];
    $expediteur = filter_var(htmlspecialchars(trim($_POST['user_mail'])), FILTER_VALIDATE_EMAIL);
    if(mail($destinataire, $objet, $message, $expediteur)){
        $confirm_submit="Votre message a bien été envoyé !";
    }
    else{
        $confirm_submit="Une erreur s'est produite, réessayez plus tard.";
    }
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CV Morgan Trainoir</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/base-min.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/grids-min.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/grids-responsive-min.css">
    <link rel = "stylesheet" type = "text/css" href = "style.css">

</head>
<body>

<!--HEADER-->

<section class="header">
    <h1>Morgan Trainoir</h1>
    <p>CV Développeur Web en Formation</p>
    <a class="button" href="/siteCv/cv.pdf" download="/siteCv/cv.pdf">Télécharger CV</a>
</section>
<nav>
    <ul>
        <li>
            <a href="#about-me" title="go to a propos">À MON PROPOS</a>
        </li>
        <li>
            <a href="#cv" title="go to cv">CV</a>
        </li>
        <li>
            <a href="#contact" title="go to contact">CONTACT</a>
        </li>

    </ul>
</nav>

<section id="about-me" class="about-me">
    <h2 class="">À mon propos</h2>
    <div class="pure-g">
        <div class="pure-u-1 pure-u-md-1-2"><img src="avatar.jpg" alt="avatar"  style="width:235px; height:235px;"></div>
        <div class="pure-u-1 pure-u-md-1-2">
            <p>Salut à tous, je suis Morgan j'ai 25 ans et je suis actuellement en reconversion.<br><br>
                En effet, je suis actuellement dans une formation intensive de 7 mois, qui me prépare au passage du Titre Professionnel "Développeur web/web mobile" (reconnu par l'Etat) de niveau bac+2 au mois d'Avril 2020.<br>
                A ce stade de ma formation, j'ai pu appréhender les bases de php, sql, javascript, html et css ainsi que celles de la POO afin de "m'attaquer" à Symfony.<br>
                Je travaille sur plusieurs projets en simultanés, certains en solo d'autres en groupes où nous pratiquons des méthodologies agiles telles Lego 4 Scrum, daily review, Kanban, etc...<br><br>
                Je maintiens à jour mes connaissances et mes pratiques, en effectuant de manière régulière une veille, tant sur les outils et technologies que sur les tendans et les risques de sécurité</p>
        </div>
</section>

<section id="cv" class="competences">
    <h2>Compétences et Langages</h2>
    <div class="pure-g">
        <div class="pure-u-1 pure-u-md-1-2">

            <ul>
                <li class="list-title">Langages</li>
                <li>PHP</li>
                <li>SQL</li>
                <li>HTML</li>
                <li>CSS</li>
                <li>JAVASCRIPT</li>
            </ul>
        </div>
        <div class="pure-u-1 pure-u-md-1-2">
            <ul>
                <li class="list-title">Compétences</li>
                <li>Programmation Orientée Objet</li>
                <li>Symfony</li>
                <li>Méthodologies Agiles</li>
                <li>Wordpress</li>
                <li>Anglais Technique Courant</li>
            </ul>
        </div>
    </div>
</section>

<section class="formations">
    <h2>Formations</h2>
    <div>
        <p>Développeur Web, Utoplab, La Ciotat (2019/2020)
            <ul>
                <li>Maquetter une application</li><br>
                <li>Réaliser une interface utilisateur web statique et adaptable</li><br>
                <li>Développer une interface utilisateur web dynamique</li><br>
                <li>Réaliser une interface utilisateur avec une soulution de gestion de contenu</li><br>
                <li>Créer une base de données</li><br>
                <li>Développer les composants d'accès aux données</li><br>
                <li>Développer la partie back-end d'une application web ou web mobile</li><br>
                <li>Elaborer et mettre en oeuvre des composants dans une application de gestion de contenus ou e-commerce</li>
            </ul>
        </p>
    </div>
    <div>
        <p>Licence 1 Math info, Université de St Charles, Marseille (2017/2018)
            <ul>
                <li>Introduction à l'informatique et à la programmation</li><br>
                <li>Algèbre et analyse</li><br>
                <li>Physique</li><br>
                <li>Anglais</li><br>
            </ul>
        </p>
    </div>
</section>
<section class="exp">
    <h2>Autres expériences et hobbies</h2>
    <div>
        <p>Employé libre-service, Carrefour City, La Ciotat (2014/2018)
            <ul>
                <li>Travail en équipe</li>
                <li>Relationnel client</li>
                <li>Rigueur</li>
                <li>Gestion des stocks</li>
            </ul>
        </p>
    </div>
    <div>
        <p>Loisirs
        <ul>
            <li>Sports: Football, Tennis, Basketball, VTT</li>
            <li>Jeux vidéos</li>
            <li>Cinéma</li>
            <li>Musique</li>
        </ul></p>
    </div>
</section>

<section id="contact" class="contact">
    <h2>Contactez-moi</h2>
    <div class="pure-g contact-container">
        <div class="pure-u-1 pure-u-md-1-3">
            <p>
                Besoin de renseignements ? <br><br>
                Pour tous renseignements sur mon profil ou pour me rencontrer.<br>
                N'hésitez pas a me contacter
            </p>
            <form action="index.php#contact" method="post">
                <input type="text" id="name" name="user_name" placeholder="Nom">
                <input type="email" id="mail" name="user_mail" placeholder="email">
                <textarea id="msg" name="user_message" placeholder="Message"></textarea>
                <span><?php echo $confirm_submit; ?></span>
                <input type="submit" name="submit" value="Envoyer">
            </form>
        </div>
        <div class="pure-u-1 pure-u-md-1-3" style="text-align: center">
        <p>
            Mes coordonées <br> <br>
            <strong>Tel:</strong> <a href="tel:+33760124309">07 60 12 43 09</a> <br><br>
            <strong>Mail:</strong> <a href="mailto:trainoir@gmail.com"> trainoir@gmail.com</a> <br><br>
            <strong>Github:</strong> <a href="https://github.com/MorganTrainoir">Mon Github</a> <br><br>
            <strong>Linkedin:</strong> <a href="https://www.linkedin.com/in/morgan-trainoir-592778199/">Mon profil Linkedin</a>

        </p>
        </div>
        <div class="pure-u-1 pure-u-md-1-3" style="text-align: center">
        <p>
            Zone de travail <br> <br>
            Disponible dans la région Marseillaise pour prise de rendez-vous.
            Je suis aussi disponible pour du travail à distance.
        </p>
    </div>

</section>
</body>
</html>