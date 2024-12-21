<p align="center">
    <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
    <a href="https://laravel.com](https://laravel.com/docs/11.x/fortify" target="_blank">
    <img src="https://media2.dev.to/dynamic/image/width=1000,height=420,fit=cover,gravity=auto,format=auto/https%3A%2F%2Fi.imgur.com%2Fx8IMrry.png"    width="600" alt="Image Imgur">
    </a>
</p>

<h1>NightBuddy 🚗🎶</h1>

<p>Dans le cadre du cours <strong>C732</strong> (gestion), nous devions réaliser un cahier des charges et un Proof of Concept (POC). Nous avons choisi de développer <strong>NightBuddy</strong>, un site et une API pour le covoiturage lors d’événements nocturnes. L’objectif est de faciliter les déplacements vers les événements et d’encourager le covoiturage.</p>

<p>Les organisateurs d’événements peuvent intégrer cette API à leurs sites web pour inciter les participants à utiliser le covoiturage et ainsi rendre les événements plus accessibles, tout en réduisant les contraintes liées à la conduite.</p>

<hr>

<h2>Objectifs</h2>

<ul>
    <li><strong>Faciliter les déplacements nocturnes</strong>: Gestion du covoiturage pour les événements. Coordination simplifiée entre participants.</li>
    <li><strong>API pour les organisateurs</strong>: Créer, gérer et partager des événements via une API. Solution réutilisable pour différents types d’événements.</li>
    <li><strong>Thèmes musicaux personnalisables</strong>: Les organisateurs peuvent configurer les thèmes musicaux selon leurs préférences.</li>
</ul>

<hr>

<h2>Fonctionnalités principales</h2>

<ul>
    <li><strong>Création et gestion d’événements</strong>: Ajouter/modifier des événements avec nom, lieu, date et thèmes musicaux.</li>
    <li><strong>Covoiturage</strong>: Conducteurs - Proposer des trajets. Participants - Réserver une place en fonction des disponibilités.</li>
    <li><strong>Gestion des utilisateurs</strong>: Inscription, connexion et profils.</li>
    <li><strong>Invitations</strong>: Envoyer et suivre les réponses des invités.</li>
</ul>

<hr>

<h2>Technologies utilisées</h2>

<ul>
    <li><strong>Framework</strong>: Laravel 10</li>
    <li><strong>Authentification</strong>: Laravel Fortify</li>
    <li><strong>Base de données</strong>: MySQL</li>
    <li><strong>Organisation</strong>: Kanban via Microsoft Teams</li>
</ul>

<hr>

<h2>Ce que nous avons appris</h2>

<ul>
    <li><strong>Laravel et Fortify</strong>: Nous avons découvert Laravel en parallèle du projet, grâce au cours C132.API. Fortify nous a permis de simplifier l’authentification.</li>
    <li><strong>Organisation avec Kanban</strong>: Manquant de connaissances initiales, nous avons utilisé un Kanban dans Microsoft Teams pour gérer les tâches au fil de l’avancement. Cela nous a permis d’avancer étape par étape et d’ajouter des tâches au fur et à mesure.</li>
    <li><strong>API et approche</strong>: Nous aurions dû séparer les contrôleurs API et web, mais nous avons dû regrouper les deux à cause du manque de temps. Nous avons également envisagé d’utiliser Sanctum pour sécuriser les API, mais cela n’a pas pu être mis en place faute de temps et en raison des coûts associés à l’API de Google Maps.</li>
</ul>

<hr>

<h2>Fonctionnalités manquées (pour le futur)</h2>

<ul>
    <li><strong>Intégration Google Maps</strong>: Nous avons voulu intégrer Google Maps pour la gestion des lieux et itinéraires de covoiturage, mais avons été freinés par les coûts. Nous avons cherché des alternatives gratuites, mais cela n’a pas été conclu en raison du manque de temps.</li>
</ul>

<hr>

<p>Ce projet a été une expérience enrichissante qui nous a permis de mieux comprendre le processus de création d’une API, de structurer un cahier des charges et de travailler en équipe avec un outil de gestion agile comme Kanban. Nous sommes satisfaits du résultat, notamment grâce à l’apprentissage de Fortify et à la création d’une API fonctionnelle.</p>
