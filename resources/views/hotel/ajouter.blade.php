<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center">
    <div class="row">
        <div class="col s12">
    </div>
    <hr>
    <h1>Ajouter un Hotel</h1>
    <hr>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Formulaire d'Informations sur l'Hôtel</title>
</head>
<body>

<div class="container">
    <h2>Formulaire d'Informations sur l'Hôtel</h2>
   @if (session('status'))
      <div class="alert allert-success">
        {{session('status')}}
       </div>
 @endif

    <form action="/ajouter/traitement" method="POST" class="form-group">
        @csrf
        <div class="form-group">
            <label for="nomHotel">Nom de l'Hôtel:</label>
            <input type="text" class="form-control" id="nomHotel" placeholder="Entrez le nom de l'hôtel">
        </div>
        <div class="form-group">
            <label for="descriptionHotel">Description de l'Hôtel:</label>
            <textarea class="form-control" id="descriptionHotel" rows="3" placeholder="Entrez la description de l'hôtel"></textarea>
        </div>
        <div class="form-group">
            <label for="nomChambre">Nom de la Chambre:</label>
            <input type="text" class="form-control" id="nomChambre" placeholder="Entrez le nom de la chambre">
        </div>
        <div class="form-group">
            <label for="prix">Prix:</label>
            <input type="number" class="form-control" id="prix" placeholder="Entrez le prix">
        </div>
        <div class="form-group">
            <label for="nombreLits">Nombre de Lits:</label>
            <input type="number" class="form-control" id="nombreLits" placeholder="Entrez le nombre de lits">
        </div>
        <div class="form-group">
            <label for="maxAdultes">Max d'Adultes autorisés:</label>
            <input type="number" class="form-control" id="maxAdultes" placeholder="Entrez le nombre maximum d'adultes autorisés">
        </div>
        <div class="form-group">
            <label for="maxEnfants">Max d'Enfants autorisés:</label>
            <input type="number" class="form-control" id="maxEnfants" placeholder="Entrez le nombre maximum d'enfants autorisés">
        </div>
        <div class="form-group">
            <label for="statut">Statut:</label>
            <select class="form-control" id="statut">
                <option value="actif">Actif</option>
                <option value="inactif">Inactif</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>

        <a href="/hotel" class="btn btn-danger">Retour</a>

    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

    </div>
 
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>