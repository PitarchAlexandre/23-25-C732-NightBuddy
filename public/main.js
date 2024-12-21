/**
 * @author      Kylian Di Gaetano <kylian.digaetano@divcom.ch>
 * @version     0.3
 * @since       2024.31.10
 *
 */

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
        const email = document.getElementById('Email').value.trim();
        const mdp = document.getElementById('mdp').value.trim();
        const mdpCheck = document.getElementById('mdpCheck').value.trim();

        // Variable pour vérifier la validité du formulaire
        let isValid = true;

        // Vérification du nom (champ requis)
        if (nom === '') {
            displayError('nom', 'Le nom est obligatoire.');
            isValid = false;
        }

        // Vérification de l'email (champ requis)
        if (email === '') {
            displayError('Email', 'L\'email est obligatoire.');
            isValid = false;
        }

        // Vérification du mot de passe (champ requis)
        if (mdp === '') {
            displayError('mdp', 'Le mot de passe est obligatoire.');
            isValid = false;
        }

        // Vérification de la confirmation du mot de passe (champ requis et doit correspondre)
        if (mdpCheck === '') {
            displayError('mdpCheck', 'La confirmation du mot de passe est obligatoire.');
            isValid = false;
        } else if (mdp !== mdpCheck) {
            displayError('mdpCheck', 'Les mots de passe ne correspondent pas.');
            isValid = false;
        }

        // Affiche une alerte en cas d'erreur ou soumet le formulaire
        if (!isValid) {
            alert('Il y a des erreurs dans le formulaire. Veuillez les corriger avant de soumettre.');
        } else {
            form.submit(); // Envoi du formulaire si toutes les validations sont réussies
        }
    });

    // Fonction pour afficher un message d'erreur sous le champ concerné
    function displayError(elementId, message) {
        const element = document.getElementById(elementId);
        const errorMessage = document.createElement('div');
        errorMessage.className = 'error-message';
        errorMessage.style.color = 'red';
        errorMessage.textContent = message;
        element.parentNode.insertBefore(errorMessage, element.nextSibling);
    }
});
