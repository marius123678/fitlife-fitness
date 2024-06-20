document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
  
    var formData = new FormData(this);
  
    fetch('process_login.php', { // Assurez-vous que le nom du fichier PHP correspond à celui spécifié ici
      method: 'POST',
      body: formData
    })
   .then(response => response.json())
   .then(data => {
      if (data.success) {
        alert('Connexion réussie');
        this.reset(); // Réinitialise le formulaire
      } else {
        alert('Erreur lors de la connexion');
      }
    })
   .catch(error => console.error('Erreur:', error));
  });
  