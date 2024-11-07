/**
 * @author      Kylian Di Gaetano <kylian.digaetano@divcom.ch>
 * @version     0.1
 * @since       2024.31.10
 *
 */

// Queryselector
document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');

    // Empêche l'envoi du formulaire
    form.addEventListener('submit', function (event) {
        event.preventDefault();

        // Réinitialisation des messages d'erreur
        const errorMessages = document.querySelectorAll('.error-message');
        errorMessages.forEach(msg => msg.remove());

        // Récupération des valeurs des champs du formulaire
        const nom = document.getElementById('nom').value.trim();
        const prenom = document.getElementById('prenom').value.trim();
        const adresse = document.getElementById('adresse').value.trim();
        const conducteur = document.getElementById('conducteur').checked;
        const email = document.getElementById('Email').value.trim();
        const mdp = document.getElementById('mdp').value.trim();

        // let pour la validation
        let isValid = true;

        // Vérification pour le nom (2 à 26 lettres et espaces)
        if (!nom.match(/^[a-zA-Z\s]{2,26}$/)) {
            displayError('nom', 'Veuillez entrer un nom valide (2 à 26 caractères).');
            isValid = false;
        }

        // Vérification pour le prénom (2 à 26 lettres et espaces)
        if (!prenom.match(/^[a-zA-Z\s]{2,26}$/)) {
            displayError('prenom', 'Veuillez entrer un prénom valide (2 à 26 caractères).');
            isValid = false;
        }

        // Vérification pour l'adresse (doit contenir au moins 5 caractères)
        if (adresse.length < 5) {
            displayError('adresse', 'Veuillez entrer une adresse valide (au moins 5 caractères).');
            isValid = false;
        }


        // Vérification pour l'email (doit contenir un "@")
        if (email !== '' && !email.includes('@')) {
            displayError('Email', 'L\'email n\'est pas valide !');
            isValid = false;
        }


        // Vérification du mot de passe (doit contenir au moins 6 caractères)
        if (mdp.length < 6) {
            displayError('mdp', 'Le mot de passe doit contenir au moins 6 caractères.');
            isValid = false;
        }

        // Affiche une alerte en cas d'erreur ou soumet le formulaire
        if (!isValid) {
            alert('Il y a des erreurs dans le formulaire. Veuillez les corriger avant de soumettre.');
        } else {
            form.submit(); // Envoi du formulaire si toutes les validations sont réussies
        }
    });

    // Fonction pour afficher un message d'erreur en dessous de chaque champ concerné
    function displayError(elementId, message) {
        const element = document.getElementById(elementId);
        const errorMessage = document.createElement('div');
        errorMessage.className = 'error-message';
        errorMessage.style.color = 'red';
        errorMessage.textContent = message;
        element.parentNode.insertBefore(errorMessage, element.nextSibling);
    }
});
