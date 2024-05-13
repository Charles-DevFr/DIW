document.addEventListener('DOMContentLoaded', function () {
    const formulaire = document.getElementById("formulaire");
  
    formulaire.addEventListener('submit', function (e) {
    {
  
        e.preventDefault();
  
    filtrealpha = new RegExp(/^[A-Za-z]+$/)
    filtrenum = new RegExp(/^(0|\+33 )[1-9]([-. ]?[0-9]{2} ){3}([-. ]?[0-9]{2})$/)
    filtremail = new RegExp(/^[a-z0-9.-]+@[a-z0-9.-]+.[a-z0-9]+$/)
    filtredate = new RegExp(/^[0-9]+-[0-9]+-[0-9]+$/)
    var valide = true
    var nomprenom = document.getElementById("nom+prenom").value
    var email = document.getElementById("email").value
    var telephone = document.getElementById("telephone").value
    var adresse = document.getElementById("adresse").value
    var accepte = document.getElementById("bouton").value
  
        resultat = filtrealpha.test(nomprenom)
           if (resultat == false)
            {
                valide = false
                alert (" Entrez votre nom. ")
            }
        
        resultat = filtremail.test(email)
            if (resultat == false)
            {
                valide = false
                alert (" Entrez un email valide. ")
            }
  
        resultat = filtrenum.test(telephone)
            if (resultat == false)
            {
                valide = false
                alert (" Entrez votre numéro de téléphone. ")
            }
  
        resultat = filtrealpha.test(adresse)
           if (resultat == false)
            {
                valide = false
                alert (" Ecrivez votre adresse. ")
            }
        }
    })
  })
  