<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> Africa Auto Connect</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-6">
            <img src="{{ asset('assets/images/refonte.png') }}" alt="login" class="login-card-img">
            <p class="login-card-invitation">Rejoignez  Africa Auto Connect!</p>
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="{{ asset('assets/images/refonte.png') }}" alt="aca" class="logo">
                <span class="brand-message" style="
                color: red;
                font-weight: bold;
                margin-left: 9px;"><span style="color:black;">AFRICA </span> AUTO CONNECT </span>
              </div>
              <marquee behavior="scroll" direction="right" width="100%">
                <p class="" style="
                color: black;
                font-weight: bold;
                margin-left: 9px; text-transform: uppercase;">Entrer votre code d'authentification pour se connecter</p>
              </marquee>
              <form method="POST" action="{{ url('two-factor-challenge') }}">
                @csrf
                <div class="form-group mb-4">
                  <input name="code"  type="text" class="form-control">
                  <input name="submit" id="submit" class="btn btn-block login-btn mb-4" type="submit" value="Envoyer">
                </div>
              </form>
              <p>Enter your recovery code </p>
              <form method="POST" action="{{ url('two-factor-challenge') }}">
                @csrf
                <div class="form-group mb-4">
                  <input name="recovery_code"  type="text" class="form-control">
                  <input name="submit" id="submit" class="btn btn-block login-btn mb-4" type="submit" value="Envoyer">
                </div>
              </form>
              @if(session('status'))
              <div class="alert alert-success mt-3">
                  {{ session('status') }}
              </div>
              @endif
              <a href="{{ route('password.request') }}" class="forgot-password-link">Mot de passe oublié?</a>
              <nav class="login-card-footer-nav">
                <a href="#!">Conditions d'utilisation.</a>
                <a href="#!">Politique de confidentialité</a>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script>
    // Ajout d'un script JavaScript pour déclencher l'animation une lettre à la fois
    document.addEventListener('DOMContentLoaded', function() {
      const loginDescription = document.querySelector('.login-card-description');

      // Fonction pour ajouter les classes nécessaires pour l'animation
      function startTypingAnimation() {
        loginDescription.classList.add('is-typing');
        loginDescription.classList.remove('stop-animation');
      }

      // Fonction pour suspendre l'animation
      function stopTypingAnimation() {
        loginDescription.classList.remove('is-typing');
        loginDescription.classList.add('stop-animation');
      }

      // Déclenchement initial de l'animation
      startTypingAnimation();

      // Ajout d'un délai pour déclencher l'animation à nouveau toutes les 3 secondes
      setInterval(function() {
        startTypingAnimation();
      }, 3000);

      // Ajout d'un script JavaScript pour détecter le focus sur les champs de saisie
      const inputFields = document.querySelectorAll('input');

      inputFields.forEach(function(input) {
        input.addEventListener('focus', stopTypingAnimation);
        input.addEventListener('blur', startTypingAnimation);
      });
    });
  </script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


  </body>

</html>

<!-- Exemple de bouton de déconnexion -->
<!-- <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Déconnexion</button>
</form> -->