document.addEventListener('DOMContentLoaded', function () {

    const formulaire = document.getElementById("formulaire");
  
    const inputs = formulaire.querySelectorAll('input, textarea');
  
  
    formulaire.addEventListener('submit', function (e) {
  
      e.preventDefault();
  
  
      const filtreAlpha = /^[A-Za-z]+$/;
  
      const filtreNum = /^[0-9]+$/;
  
      const filtreMail = /^[a-z0-9.-]+@[a-z0-9.-]+\.[a-z0-9]+$/;
  
      let valide = true;
  
  
      inputs.forEach(input => {
  
        switch (input.id) {
  
          case 'nom':
  
          case 'prenom':
  
            if (!filtreAlpha.test(input.value)) {
  
              valide = false;
  
              alert(`Entrez votre ${input.id}.`);
  
            }
  
            break;
  
          case 'email':
  
            if (!filtreMail.test(input.value)) {
  
              valide = false;
  
              alert('Entrez un email valide.');
  
            }
  
            break;
  
          case 'telephone':
  
            if (!filtreNum.test(input.value)) {
  
              valide = false;
  
              alert('Entrez votre numéro de téléphone.');
  
            }
  
            break;
  
          case 'demande':
  
            if (!input.value.trim()) {
  
              valide = false;
  
              alert('Ecrivez votre question.');
  
            }
  
            break;
  
          default:
  
            break;
  
        }
  
      });
  
  
      if (valide) {
  
        // Formulaire valide, vous pouvez maintenant envoyer les données au serveur
  
        console.log('Formulaire valide');
  
      }
  
    });
  
  });