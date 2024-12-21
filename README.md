

<h1>NightBuddy 🚗🎶</h1>

<p>Dans le cadre du cours <strong>C732</strong> (gestion), nous devions réaliser un cahier des charges et un Proof of Concept (POC). Nous avons choisi de développer <strong>NightBuddy</strong>, un site et une API pour le covoiturage lors d’événements nocturnes. L’objectif est de faciliter les déplacements vers les événements et d’encourager le covoiturage.</p>

<p>Les organisateurs d’événements peuvent intégrer cette API à leurs sites web pour inciter les participants à utiliser le covoiturage et ainsi rendre les événements plus accessibles, tout en réduisant les contraintes liées à la conduite.</p>

<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://www.ismaail.com/uploads/9a30e503-e6ce-41ef-956a-a1cbb2e578b0/jCjnyX8N3Iro9jUw45bfeNWIuzq3RW-metaT1lTbmZDMnBzcUxudWR5bUtHV1pMZ0tTbXR6Q1NqMk8zYTBnakZXbS5wbmc=--large.webp" width="400" alt="Laravel Fortify Logos">
    </a>
</p>
<p><a href="https://laravel.com/docs/11.x/fortify" target="_blank">Documentation Fortify</a></p>

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

<h2>Contributeurs</h2>
<p>Ce projet a été développé par :</p>
<ul>
    <li>Kylian Di Gaetano</li>
    <li>Alexandre Pitarch</li>
</ul>

<h2>Configuration du projet</h2>

<h3>1. Cloner le dépôt</h3>
<p>Clonez le dépôt Git depuis GitHub :</p>
<code>git clone https://github.com/PitarchAlexandre/23-25-C732-NightBuddy.git</code>

<h3>2. Installation des dépendances</h3>
<p>Accédez au répertoire du projet :</p>
<code>cd nightbuddy</code>
<p>Installez les dépendances avec Composer :</p>
<code>composer install</code>

<h3>3. Configuration de l'environnement</h3>
<p>Créez un fichier `.env` basé sur le fichier `.env.example` :</p>
<code>cp .env.example .env</code>
<p>Configurez les paramètres de votre environnement (base de données, clés API, etc.) en modifiant le fichier `.env`.</p>

<h3>4. Migration de la base de données</h3>
<p>Exécutez les migrations pour créer la base de données :</p>
<code>php artisan migrate</code>

<h3>5. Serveur de développement</h3>
<p>Démarrez le serveur de développement Laravel :</p>
<code>php artisan serve</code>
<p>Accédez à l’application via votre navigateur : <a href="http://localhost:8000">http://localhost:8000</a></p>

<hr>

<p>Ce projet a été une expérience enrichissante qui nous a permis de mieux comprendre le processus de création d’une API, de structurer un cahier des charges et de travailler en équipe avec un outil de gestion agile comme Kanban. Nous sommes satisfaits du résultat, notamment grâce à l’apprentissage de Fortify et à la création d’une API fonctionnelle.</p>


