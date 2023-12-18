<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Compétition</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  </head>
  <body>
  <section class="section">
    <div class="container">
      <h1 class="title">Compétition</h1>
      <p class="subtitle">Inscrivez-vous à la prochaine compétition le 1 avril 2024</p>
      <form method="post"> 
        <div class="field">
          <label class="label" for="lastname">Nom</label>
          <div class="control">
            <input class="input" type="text" name="lastname" id="lastname">
          </div>
        </div> 
        <div class="field">
          <label class="label" for="firstname">Prénom</label>
            <div class="control">
              <input class="input" type="text" name="firstname" id="firstname">
            </div>
        </div> 
        <div class="field">
          <label class="label" for="street">Rue</label>
            <div class="control">
              <input class="input" type="text" name="street" id="street">
            </div>
        </div> 
        <div class="field">
          <label class="label" for="number">Numéro</label>
            <div class="control">
              <input class="input" type="text" name="number" id="number">
            </div>
        </div> 
        <div class="field">
          <label class="label" for="complement">Complément d’adresse</label>
          <div class="control">
            <input class="input" type="text" name="complement" id="complement" >
          </div>
        </div> 
        <div class="field">
          <label class="label" for="locality">Localité</label>
            <div class="control">
              <input class="input" type="text" name="locality" id="locality">
            </div>
        </div> 
        <div class="field">
          <label class="label" for="npa">NPA</label>
            <div class="control">
              <input class="input" type="text" name="npa" id="npa">
            </div>
        </div> 
        <div class="field">
          <label class="label" for="email">Email</label>
            <div class="control">
              <input class="input" type="email" name="email" id="email">
            </div>
        </div>
        <div class="field">
          <label class="label" for="birthday">Date de naissance</label>
          <div class="control">
            <input class="input" type="date" name="birthday" id="birthday">
          </div>
        </div> 
        <div class="field">
          <label class="label" for="mass">Poids (masse) kg</label>
          <div class="control" >
            <input class="input" type="number" name="mass" id="mass">
          </div>
        </div> 
        <div class="field">
          <label class="label" for="nationality">Nationalité</label>
          <div class="control">
            <input class="input" type="text" name="nationality" id="nationality">
          </div>
        </div> 
        <div class="field">
          <div class="control">
            <button class="button is-link">Envoyer</button>
          </div>
        </div>
      </form> 
    </div>
  </section>
  </body>
</html>
