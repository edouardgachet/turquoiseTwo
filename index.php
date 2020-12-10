<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <noscript> <META HTTP-EQUIV="Refresh" CONTENT="0;URL=test.html"> </noscript>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>lunchbox-clubturquoise</title>
</head>
<style>
    /**************** font ****************/

@import url('https://fonts.googleapis.com/css2?family=Marcellus&display=swap');

/**************** style ****************/

*{
  font-family: 'Marcellus', serif;
}

body{
  background-image: url("img/burj.jpg") !important;
  background-repeat: no-repeat;
  background-attachment: fixed;
}

.container{
  background: #ffffff;
  padding: 30px 50px 0 50px;
  margin-bottom: 80px;
  margin-top: 75px
}

.title_section_salade:hover{
  cursor: pointer;
}

.title_section_sandwich:hover{
  cursor: pointer;
}

.title_section_dessert:hover{
  cursor: pointer;
}

.hideContent{
  display: none;
}

.showContent{
  display: block;
}

.form-control[readonly]{
    background-color: transparent;
    font-family: 'Marcellus', serif;
    color: #555;
}

.form-control[readonly]:hover{
  background-color: transparent;
  font-family: 'Marcellus', serif;
  color: #555;
  cursor: pointer;
}

.en{
  display: none;
}

.description-samdwichs{
  padding-left: 15px 0 15px; 
  margin-top: 0; 
  display: none;
  box-shadow: -10px 10px #656565;
  transition-duration: 0.4s;
}  

.showDescription{
  display: block;
  transition-duration: 0.4s;
}

.transformArrow{
  transform: rotateX(180deg);
}

@media screen and (max-width: 640px){
  .container{
  background: #ffffff;
  padding: 15px 5px 0 5px;
  margin-bottom: 40px;
  margin-top: 20px
}
}
</style>
<body>

    <div class="container">
      <div class="row">
        <div class="col s5 m5 l4">
          <img src="img/logo.jpg" alt="france-flag" style="width: 100%">
        </div>
        <div class="col s4 m6 l7">
        </div>
        <div class="col s3 m1 l1">
          <img id="langFr" src="img/france-flag-icon-32.png" alt="france-flag" width="32" height="21">
          <img id="langEn" src="img/united-kingdom-flag-icon-32.png" alt="angleterre-flag" width="32" height="21">
        </div>
      </div>
      <h4 class="sent-notification"></h4>
      <div class="row">
        <div class="col s12 m6">
        <p class="fr">Chers clients,
        <br>
        Afin de vous faciliter l’organisation de vos excursions, nos équipes ont mis en place cette application.
        <br><br>
        (Tous les aliments sans produits laitiers, chou-fleur et brocoli)

        (Veuillez noter que tous les plats à emporter doivent avoir une petite bouteille d'eau, des serviettes et des couverts jetables)
        </p>
        <p class="en">Dear clients,
        <br>
        To make it easier for you to organize your excursions, our teams have set up this application
        <br><br>
        (All food with NO dairy, cauliflower and broccoli)

        (Pls note all takeaways need to have small water bottle, napkins and disposable cutlery)
        </p>
        </div>
        <div class="col s12 m6">
          <div class="card darken-1">
            <div class="card-content black-text">
              <!--<span class="card-title">Card Title</span>-->
              <p class="fr"> Les demandes de paniers repas doivent être validées la veille avant 18H00. <br><br>Aucune demande pour le jour même ou pour une date à venir ne sera prise en compte.</p>
              <p class="en">The requests for lunchbox must be validated the day before before 6:00 p.m. <br><br>No request for the same day or for a future date will be taken into account.</p>
            </div>
          </div>
        </div>
      </div>
      <form class="form-example myForm">
          <div class="row">
            <div class="col m6 s12">
              <div class="row" style="margin-bottom: 0">
                <div class="input-field  col s12 m10">
                    <input type="text" class="form-control" id="name" required>
                    <label class="fr" for="first_name">Votre nom*</label>
                    <label class="en" for="first_name">Your name*</label>
                </div>
                </div>
                <div class="row" style="margin-bottom: 0">
                    <div class="input-field col s12 m10">
                        <input type="number" class="form-control" id="room" min="0" required>
                        <label class="fr" for="first_name">Numéro de chambre*</label>
                        <label class="en" for="first_name">Number room*</label>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 0">
                    <div class="input-field col s12 m10">
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                        <label class="fr">Email*</label>
                        <label class="en" for="first_name">Email*</label>
                    </div>
                </div>
            </div>
            <div class="col m6 s12 ">
              <div class="row ">
                  <div class="input-field col s12">
                    <textarea class="materialize-textarea fr" id="commentaire"></textarea>
                    <label class="fr" for="icon_prefix2">Commentaire</label>
                    <textarea class="materialize-textarea en" id="comment"></textarea>
                    <label class="en" for="icon_prefix2">Comment</label>
                  </div>
                  <div class="input-field col s12">
                    <input type="time" id="timepicker" class="timepicker" value="10:00">
                    <span class="fr" class="helper-text" data-error="wrong" data-success="right">Indiquez l'heure à laquelle vous viendrez récupérer votre lunchbox. L'heure par défaut est 10h.</span>
                    <span class="en" class="helper-text" data-error="wrong" data-success="right">Indicate the time at which you will collect your lunchbox. The default time is 10 a.m.</span>
                  </div>
              </div>
            </div>
          </div>
          <div class="row title_section_salade" style="margin-bottom: 0; position: relative">
            <h1 class="col s12 fr" style="font-size: 25px;">Salades à choisir</h1>
            <h1 class="col s12 en" style="font-size: 25px;">Salads to Choose</h1>
            <i class="material-icons arrow_description" style="position: absolute; top: 45px; left: 92%">arrow_drop_down</i>
          </div>
          <div class="divider"></div>

          <div class="row container_section_salade hideContent" style="margin-bottom; margin-top: 20px">
            <div class="col s12 m12">
              <div class="input-field col s9 m4" style="padding-left: 0; position: relative;" onclick="showDescriptionSamdwichs(this)">
                  <i class="material-icons arrow_description" style="position: absolute; top: 9px; left: 90%;">arrow_drop_down</i>
                  <input class="form-control fr" value="Salade César au poulet" id="samdwichs13"  readonly></input>
                  <input class="form-control en" value="Chicken Caesar Salad" id="samdwichs13" readonly></input>
                </div>
                <div class="input-field col s3 m2">
                  <input oninput="test3(this, 1)" type="number" class="samdwichsNumber form-control" min="0" max="9" id="samdwichsNumber13" placeholder="0"/>
                </div>
                <div class="input-field col s12 m6" style="padding: 0">
                  <input type="text" class="form-control"  id="commentairesSamdwichs13" placeholder="commentaire / comment" disabled></input>
                </div>
                <div style="margin-top: 0;" class="input-field col s12 description-samdwichs" id="description-samdwichs13">
                  <p>Composition : <i class="en">Baby gem | Caesar dressing (S,G)</i><i class="fr">Laitue | Vinaigrette César (S,G)</i></p>
              </div>

              <div class="input-field col s9 m4" style="padding-left: 0; position: relative;" onclick="showDescriptionSamdwichs(this)">
                  <i class="material-icons arrow_description" style="position: absolute; top: 9px; left: 90%;">arrow_drop_down</i>
                  <input class="form-control fr" value="Salade fermière" id="samdwichs14"  readonly></input>
                  <input class="form-control en" value="Farmer’s Salad" id="samdwichs14" readonly></input>
                </div>
                <div class="input-field col s3 m2">
                  <input oninput="test3(this, 1)" type="number" class="samdwichsNumber form-control" min="0" max="9" id="samdwichsNumber14" placeholder="0"/>
                </div>
                <div class="input-field col s12 m6" style="padding: 0">
                  <input type="text" class="form-control"  id="commentairesSamdwichs14" placeholder="commentaire / comment" disabled></input>
                </div>
                <div style="margin-top: 0;" class="input-field col s12 description-samdwichs" id="description-samdwichs14">
                  <p>Composition : <i class="en">Lettuce | cucumber | onion | olives | oregano (V)</i><i class="fr">Laitue | concombre | oignon | olives | origan (V)</i></p>
              </div>

              <div class="input-field col s9 m4" style="padding-left: 0; position: relative;" onclick="showDescriptionSamdwichs(this)">
                  <i class="material-icons arrow_description" style="position: absolute; top: 9px; left: 90%;">arrow_drop_down</i>
                  <input class="form-control fr" value="Salade de quinoa" id="samdwichs15"  readonly></input>
                  <input class="form-control en" value="Quinoa Salad" id="samdwichs15" readonly></input>
                </div>
                <div class="input-field col s3 m2">
                  <input oninput="test3(this, 1)" type="number" class="samdwichsNumber form-control" min="0" max="9" id="samdwichsNumber15" placeholder="0"/>
                </div>
                <div class="input-field col s12 m6" style="padding: 0">
                  <input type="text" class="form-control"  id="commentairesSamdwichs15" placeholder="commentaire / comment" disabled></input>
                </div>
                <div style="margin-top: 0;" class="input-field col s12 description-samdwichs" id="description-samdwichs15">
                  <p>Composition : <i class="en">Avocado | pumpkin and chia seed | honey yuzu dressing (V)</i><i class="fr">Avocat | graines de chia et graines de courge | vinaigrette au miel et au yuzu (V)</i></p>
              </div>

              <div class="input-field col s9 m4" style="padding-left: 0; position: relative;" onclick="showDescriptionSamdwichs(this)">
                  <i class="material-icons arrow_description" style="position: absolute; top: 9px; left: 90%;">arrow_drop_down</i>
                  <input class="form-control fr" value="Saumon à la vapeur" id="samdwichs16"  readonly></input>
                  <input class="form-control en" value="Steamed Salmon" id="samdwichs16" readonly></input>
                </div>
                <div class="input-field col s3 m2">
                  <input oninput="test3(this, 1)" type="number" class="samdwichsNumber form-control" min="0" max="9" id="samdwichsNumber16" placeholder="0"/>
                </div>
                <div class="input-field col s12 m6" style="padding: 0">
                  <input type="text" class="form-control"  id="commentairesSamdwichs16" placeholder="commentaire / comment" disabled></input>
                </div>
                <div style="margin-top: 0;" class="input-field col s12 description-samdwichs" id="description-samdwichs16">
                  <p>Composition : <i class="en">Cherry tomatoes| Asparagus | Artichoke (S,N)</i><i class="fr">Tomates cerises | Asperges | Artichaut (S,N)</i></p>
              </div>

              <div class="input-field col s9 m4" style="padding-left: 0; position: relative;" onclick="showDescriptionSamdwichs(this)">
                  <i class="material-icons arrow_description" style="position: absolute; top: 9px; left: 90%;">arrow_drop_down</i>
                  <input class="form-control fr" value="Trio de salade de lentilles" id="samdwichs17"  readonly></input>
                  <input class="form-control en" value="Trio of Lentil salad" id="samdwichs17" readonly></input>
                </div>
                <div class="input-field col s3 m2">
                  <input oninput="test3(this, 1)" type="number" class="samdwichsNumber form-control" min="0" max="9" id="samdwichsNumber17" placeholder="0"/>
                </div>
                <div class="input-field col s12 m6" style="padding: 0">
                  <input type="text" class="form-control"  id="commentairesSamdwichs17" placeholder="commentaire / comment" disabled></input>
                </div>
                <div style="margin-top: 0;" class="input-field col s12 description-samdwichs" id="description-samdwichs17">
                  <p>Composition : <i class="en">Cherry tomato | coriander | cucumber | Asian dressing (V)</i><i class="fr">Tomate cerise | coriandre | concombre | vinaigrette asiatique (V)</i></p>
              </div>

              <div class="input-field col s9 m4" style="padding-left: 0; position: relative;" onclick="showDescriptionSamdwichs(this)">
                  <i class="material-icons arrow_description" style="position: absolute; top: 9px; left: 90%;">arrow_drop_down</i>
                  <input class="form-control fr" value="Thon Niçoise" id="samdwichs18"  readonly></input>
                  <input class="form-control en" value="Tuna Niçoise" id="samdwichs18" readonly></input>
                </div>
                <div class="input-field col s3 m2">
                  <input oninput="test3(this, 1)" type="number" class="samdwichsNumber form-control" min="0" max="9" id="samdwichsNumber18" placeholder="0"/>
                </div>
                <div class="input-field col s12 m6" style="padding: 0">
                  <input type="text" class="form-control"  id="commentairesSamdwichs18" placeholder="commentaire / comment" disabled></input>
                </div>
                <div style="margin-top: 0;" class="input-field col s12 description-samdwichs" id="description-samdwichs18">
                  <p>Composition : <i class="en">Beans | Potatoes | shallots | baby gem | Eggs (S,E)</i><i class="fr">Haricots | Pommes de terre | échalotes | jeunes pousses de laitue | Œufs (S,E)</i></p>
              </div>

              <div class="input-field col s9 m4" style="padding-left: 0; position: relative;" onclick="showDescriptionSamdwichs(this)">
                  <i class="material-icons arrow_description" style="position: absolute; top: 9px; left: 90%;">arrow_drop_down</i>
                  <input class="form-control fr" value="Salade de pommes de terre grelots" id="samdwichs19"  readonly></input>
                  <input class="form-control en" value="Baby Potato Salad" id="samdwichs19" readonly></input>
                </div>
                <div class="input-field col s3 m2">
                  <input oninput="test3(this, 1)" type="number" class="samdwichsNumber form-control" min="0" max="9" id="samdwichsNumber19" placeholder="0"/>
                </div>
                <div class="input-field col s12 m6" style="padding: 0">
                  <input type="text" class="form-control"  id="commentairesSamdwichs19" placeholder="commentaire / comment" disabled></input>
                </div>
                <div style="margin-top: 0;" class="input-field col s12 description-samdwichs" id="description-samdwichs19">
                  <p>Composition : <i class="en">Dijon Mustard | French beans | baby greens (V)</i><i class="fr">Moutarde de Dijon | Haricots Français | jeunes pousses (V)</i></p>
              </div>

              <div class="input-field col s9 m4" style="padding-left: 0; position: relative;" onclick="showDescriptionSamdwichs(this)">
                  <i class="material-icons arrow_description" style="position: absolute; top: 9px; left: 90%;">arrow_drop_down</i>
                  <input class="form-control fr" value="Saumon fumé" id="samdwichs20"  readonly></input>
                  <input class="form-control en" value="Smoked Salmon" id="samdwichs20" readonly></input>
                </div>
                <div class="input-field col s3 m2">
                  <input oninput="test3(this, 1)" type="number" class="samdwichsNumber form-control" min="0" max="9" id="samdwichsNumber20" placeholder="0"/>
                </div>
                <div class="input-field col s12 m6" style="padding: 0">
                  <input type="text" class="form-control"  id="commentairesSamdwichs20" placeholder="commentaire / comment" disabled></input>
                </div>
                <div style="margin-top: 0;" class="input-field col s12 description-samdwichs" id="description-samdwichs20">
                  <p>Composition : <i class="en">Mixed lettuce | pickled onion | gherkin (S)</i><i class="fr">Laitue mélangée | oignon mariné | cornichon aigre-doux (S)</i></p>
              </div>
            </div>
          </div>

          <div class="row title_section_sandwich" style="margin-bottom: 0; position: relative">
            <h2 class="col s12 fr" style="font-size: 25px;">Sandwichs | Wraps</h2>
            <h2 class="col s12 en" style="font-size: 25px;">Sandwiches | Wraps</h2>
            <i class="material-icons arrow_description" style="position: absolute; top: 45px; left: 92%">arrow_drop_down</i>
          </div>
          <div class="divider"></div>

          <div class="row container_section_sandwich hideContent" style="margin-bottom: 0; margin-top: 20px">
            <div class="col s12 m12">
              <div class="form-row">
                <div class="input-field col s9 m4" style="padding-left: 0; position: relative;" onclick="showDescriptionSamdwichs(this)">
                  <i class="material-icons arrow_description" style="position: absolute; top: 9px; left: 90%;">arrow_drop_down</i>
                  <input class="form-control fr" value="Panini au saumon fumé" id="samdwichs1"  placeholder="test" readonly></input>
                  <input class="form-control en" value="Smoked Salmon Panini" id="samdwichs1" " readonly></input>
                </div>
                <div class="input-field col s3 m2">
                  <input oninput="test3(this, 1)" type="number" class="samdwichsNumber form-control" min="0" max="10" id="samdwichsNumber1" placeholder="0"> 
                </div>
                <div class="input-field col s12 m6" style="padding: 0">
                  <input type="text" class="form-control"  id="commentairesSamdwichs1" placeholder="commentaire / comment" disabled></input>
                </div>
                <div style="margin-top: 0;" class="input-field col s12 description-samdwichs" id="description-samdwichs1">
                  <p>Composition : <i class="en">Baby green | caperberry | Dijon mustard (S,G,M)</i><i class="fr">Bébé vert | câpres | Moutarde de Dijon (S,G,M)</i></p>
                </div>

                <div class="input-field col s9 m4" style="padding-left: 0; position: relative;" onclick="showDescriptionSamdwichs(this)">
                  <i class="material-icons arrow_description" style="position: absolute; top: 9px; left: 90%;">arrow_drop_down</i>
                  <input class="form-control fr" value="Focaccia à la dinde fumée" id="samdwichs2" readonly></input>
                  <input class="form-control en" value="Smoked Turkey Focaccia" id="samdwichs2"  readonly></input>
                </div>
                <div class="input-field col s3 m2">
                  <input oninput="test3(this, 1)" type="number" class="samdwichsNumber form-control" min="0" max="9" id="samdwichsNumber2" placeholder="0"/>
                </div>
                <div class="input-field col s12 m6" style="padding: 0">
                  <input type="text" class="form-control"  id="commentairesSamdwichs2" placeholder="commentaire / comment" disabled></input>
                </div>
                <div style="margin-top: 0;" class="input-field col s12 description-samdwichs" id="description-samdwichs2">
                  <p>Composition : <i class="en">Lettuce | sun dried tomato | honey mustard (G.M)</i><i class="fr">Laitue | tomate séchée au soleil | moutarde au miel (G.M)</i></p>
                </div>
                <div class="input-field col s9 m4" style="padding-left: 0; position: relative;" onclick="showDescriptionSamdwichs(this)">
                  <i class="material-icons arrow_description" style="position: absolute; top: 9px; left: 90%;">arrow_drop_down</i>
                  <input class="form-control fr" value="Poulet tikka ciabatta" id="samdwichs3" readonly></input>
                  <input class="form-control en" value="Chicken tikka ciabatta" id="samdwichs3" readonly></input>
                </div>
                <div class="input-field col s3 m2">
                  <input oninput="test3(this, 1)" type="number" class="samdwichsNumber form-control" min="0" max="9" id="samdwichsNumber3" placeholder="0"/>
                </div>
                <div class="input-field col s12 m6" style="padding: 0">
                  <input type="text" class="form-control"  id="commentairesSamdwichs3" placeholder="commentaire / comment" disabled></input>
                </div>
                <div style="margin-top: 0;" class="input-field col s12 description-samdwichs" id="description-samdwichs3">
                  <p>Composition : <i class="en">Mint sauce | crispy vegetable | baby onion (G)</i><i class="fr">Sauce à la menthe | légumes croustillants | petits oignons (G)</i></p>
                </div>

                <div class="input-field col s9 m4" style="padding-left: 0; position: relative;" onclick="showDescriptionSamdwichs(this)">
                  <i class="material-icons arrow_description" style="position: absolute; top: 9px; left: 90%;">arrow_drop_down</i>
                  <input class="form-control fr" value="Club sandwich au poulet" id="samdwichs4" readonly></input>
                  <input class="form-control en" value="Chicken club sandwich" id="samdwichs4" readonly></input>
                </div>
                <div class="input-field col s3 m2">
                  <input oninput="test3(this, 1)" type="number" class="samdwichsNumber form-control" min="0" max="9" id="samdwichsNumber4" placeholder="0"/>
                </div>
                <div class="input-field col s12 m6" style="padding: 0">
                  <input type="text" class="form-control"  id="commentairesSamdwichs4" placeholder="commentaire / comment" disabled></input>
                </div>
                <div style="margin-top: 0;" class="input-field col s12 description-samdwichs" id="description-samdwichs4">
                  <p>Composition : <i class="en">Toasted brown bread | fried egg | baby gem | Tomato (E,G)</i><i class="fr">Pain brun grillé | oeuf au plat | jeunes pousses de laitue | Tomate (E,G)</i></p>
                </div>

                <div class="input-field col s9 m4" style="padding-left: 0; position: relative;" onclick="showDescriptionSamdwichs(this)">
                  <i class="material-icons arrow_description" style="position: absolute; top: 9px; left: 90%;">arrow_drop_down</i>
                  <input class="form-control fr" value="Panini au bœuf rôti" id="samdwichs5"  readonly></input>
                  <input class="form-control en" value="Roast Beef Panini" id="samdwichs5"  readonly></input>
                </div>
                <div class="input-field col s3 m2">
                  <input oninput="test3(this, 1)" type="number" class="samdwichsNumber form-control" min="0" max="9" id="samdwichsNumber5" placeholder="0"/>
                </div>
                <div class="input-field col s12 m6" style="padding: 0">
                  <input type="text" class="form-control"  id="commentairesSamdwichs5" placeholder="commentaire / comment" disabled></input>
                </div>
                <div style="margin-top: 0;" class="input-field col s12 description-samdwichs" id="description-samdwichs5">
                  <p>Composition : <i class="en">Gherkin | olive tapenade | rocket leave (G)</i><i class="fr">Gherkin | tapenade d'olive | feuille de roquette (G)</i></p>
                </div>

                <div class="input-field col s9 m4" style="padding-left: 0; position: relative;" onclick="showDescriptionSamdwichs(this)">
                  <i class="material-icons arrow_description" style="position: absolute; top: 9px; left: 90%;">arrow_drop_down</i>
                  <input class="form-control fr" value="Wrap au quinoa et à l'avocat" id="samdwichs6" readonly></input>
                  <input class="form-control en" value="Quinoa and Avocado wrap" id="samdwichs6" readonly></input>
                </div>
                <div class="input-field col s3 m2">
                  <input oninput="test3(this, 1)" type="number" class="samdwichsNumber form-control" min="0" max="9" id="samdwichsNumber6" placeholder="0">
                </div>
                <div class="input-field col s12 m6" style="padding: 0">
                  <input type="text" class="form-control"  id="commentairesSamdwichs6" placeholder="commentaire / comment" disabled></input>
                </div>
                <div style="margin-top: 0;" class="input-field col s12 description-samdwichs" id="description-samdwichs6">
                  <p>Composition : <i class="en">Baby gem | tomato| gherkin | mayo (V,E,G)</i><i class="fr">Laitue | tomate | cornichon aigre-doux | mayo (V,E,G)</i></p>
                </div>

                <div class="input-field col s9 m4" style="padding-left: 0; position: relative;" onclick="showDescriptionSamdwichs(this)">
                  <i class="material-icons arrow_description" style="position: absolute; top: 9px; left: 90%;">arrow_drop_down</i>
                  <input class="form-control fr" value="Wrap aux légumes grillés" id="samdwichs7" readonly></input>
                  <input class="form-control en" value="Grilled vegetable wrap" id="samdwichs7" readonly></input>
                </div>
                <div class="input-field col s3 m2">
                  <input oninput="test3(this, 1)" type="number" class="samdwichsNumber form-control" min="0" max="9" id="samdwichsNumber7" placeholder="0"/>
                </div>
                <div class="input-field col s12 m6" style="padding: 0">
                  <input type="text" class="form-control"  id="commentairesSamdwichs7" placeholder="commentaire / comment" disabled></input>
                </div>
                <div style="margin-top: 0;" class="input-field col s12 description-samdwichs" id="description-samdwichs7">
                  <p>Composition : <i class="en">Pesto grilled vegetable | romaine lettuce (N,G)</i><i class="fr">Pesto légumes grillés | laitue romaine (N,G)</i></p>
                </div>

                <div class="input-field col s9 m4" style="padding-left: 0; position: relative;" onclick="showDescriptionSamdwichs(this)">
                  <i class="material-icons arrow_description" style="position: absolute; top: 9px; left: 90%;">arrow_drop_down</i>
                  <input class="form-control fr" value="Wrap au thon et au concombre" id="samdwichs8"  readonly></input>
                  <input class="form-control en" value="Tuna cucumber Wrap" id="samdwichs8"  readonly></input>
                </div>
                <div class="input-field col s3 m2">
                  <input oninput="test3(this, 1)" type="number" class="samdwichsNumber form-control" min="0" max="9" id="samdwichsNumber8" placeholder="0"/>
                </div>
                <div class="input-field col s12 m6" style="padding: 0">
                  <input type="text" class="form-control"  id="commentairesSamdwichs8" placeholder="commentaire / comment" disabled></input>
                </div>
                <div style="margin-top: 0;" class="input-field col s12 description-samdwichs" id="description-samdwichs8">
                  <p>Composition : <i class="en">Yellow fin tuna | Peppers | cucumber (S)</i><i class="fr">Thon jaune | Poivrons | concombres) (S)</i></p>
                </div>
              </div>
            </div>
          </div>

          <div class="row title_section_dessert" style="margin-bottom: 0; position: relative">
            <h2 class="col s12 fr" style="font-size: 25px;">Desserts à choisir</h2>
            <h2 class="col s12 en" style="font-size: 25px;">Desserts to choose</h2>
            <i class="material-icons arrow_dessert" style="position: absolute; top: 45px; left: 92%">arrow_drop_down</i>
          </div>
          <div class="divider"></div>

          <div class="row container_section_dessert hideContent" style="margin-bottom; margin-top: 20px">
            <div class="col s12 m12">
              <div class="input-field col s9 m4" style="padding-left: 0; position: relative;">
                  <input class="form-control fr" value="Brownie" id="samdwichs21"  readonly></input>
                  <input class="form-control en" value="Brownie" id="samdwichs21" readonly></input>
                </div>
                <div class="input-field col s3 m2">
                  <input oninput="test3(this, 1)" type="number" class="samdwichsNumber form-control" min="0" max="9" id="samdwichsNumber21" placeholder="0"/>
                </div>
                <div class="input-field col s12 m6" style="padding: 0">
                  <input type="text" class="form-control"  id="commentairesSamdwichs21" placeholder="commentaire / comment" disabled></input>
                </div>

                <div class="input-field col s9 m4" style="padding-left: 0; position: relative;">
                  <input class="form-control fr" value="Barre granola" id="samdwichs22"  readonly></input>
                  <input class="form-control en" value="Granola bar" id="samdwichs22" readonly></input>
                </div>
                <div class="input-field col s3 m2">
                  <input oninput="test3(this, 1)" type="number" class="samdwichsNumber form-control" min="0" max="9" id="samdwichsNumber22" placeholder="0"/>
                </div>
                <div class="input-field col s12 m6" style="padding: 0">
                  <input type="text" class="form-control"  id="commentairesSamdwichs22" placeholder="commentaire / comment" disabled></input>
                </div>

                <div class="input-field col s9 m4" style="padding-left: 0; position: relative;">
                  <input class="form-control fr" value="Carrot cake" id="samdwichs23"  readonly></input>
                  <input class="form-control en" value="Carrot cake" id="samdwichs23" readonly></input>
                </div>
                <div class="input-field col s3 m2">
                  <input oninput="test3(this, 1)" type="number" class="samdwichsNumber form-control" min="0" max="9" id="samdwichsNumber23" placeholder="0"/>
                </div>
                <div class="input-field col s12 m6" style="padding: 0">
                  <input type="text" class="form-control"  id="commentairesSamdwichs23" placeholder="commentaire / comment" disabled></input>
                </div>

                <div class="input-field col s9 m4" style="padding-left: 0; position: relative;">
                  <input class="form-control fr" value="Cookie aux pépites de chocolat" id="samdwichs24"  readonly></input>
                  <input class="form-control en" value="Chocolate chip Cookie" id="samdwichs24" readonly></input>
                </div>
                <div class="input-field col s3 m2">
                  <input oninput="test3(this, 1)" type="number" class="samdwichsNumber form-control" min="0" max="9" id="samdwichsNumber24" placeholder="0"/>
                </div>
                <div class="input-field col s12 m6" style="padding: 0">
                  <input type="text" class="form-control"  id="commentairesSamdwichs24" placeholder="commentaire / comment" disabled></input>
                </div>

                <div class="input-field col s9 m4" style="padding-left: 0; position: relative;">
                  <input class="form-control fr" value="Muffin au citron et à la pistache" id="samdwichs25"  readonly></input>
                  <input class="form-control en" value="Lemon pistachio muffin" id="samdwichs25" readonly></input>
                </div>
                <div class="input-field col s3 m2">
                  <input type="number" class="samdwichsNumber form-control" min="0" max="9" id="samdwichsNumber25" placeholder="0"/>
                </div>
                <div class="input-field col s12 m6" style="padding: 0">
                  <input oninput="test3(this, 1)" type="text" class="form-control"  id="commentairesSamdwichs25" placeholder="commentaire / comment" disabled></input>
                </div>

                <div class="input-field col s9 m4" style="padding-left: 0; position: relative;">
                  <input class="form-control fr" value="Muffin aux canneberges et graines de chia" id="samdwichs26"  readonly></input>
                  <input class="form-control en" value="Cranberry and chia seed muffin" id="samdwichs26" readonly></input>
                </div>
                <div class="input-field col s3 m2">
                  <input oninput="test3(this, 1)" type="number" class="samdwichsNumber form-control" min="0" max="9" id="samdwichsNumber26" placeholder="0"/>
                </div>
                <div class="input-field col s12 m6" style="padding: 0">
                  <input type="text" class="form-control"  id="commentairesSamdwichs26" placeholder="commentaire / comment" disabled></input>
                </div>

               <div class="input-field col s9 m4" style="padding-left: 0; position: relative;">
                  <input class="form-control fr" value="Muffin aux bleuets et graines de sésame" id="samdwichs27"  readonly></input>
                  <input class="form-control en" value="Blueberry and sesame seed muffin" id="samdwichs27" readonly></input>
                </div>
                <div class="input-field col s3 m2">
                  <input oninput="test3(this, 1)" type="number" class="samdwichsNumber form-control" min="0" max="9" id="samdwichsNumber27" placeholder="0"/>
                </div>
                <div class="input-field col s12 m6" style="padding: 0">
                  <input type="text" class="form-control"  id="commentairesSamdwichs27" placeholder="commentaire / comment" disabled></input>
                </div>

                <div class="input-field col s9 m4" style="padding-left: 0; position: relative;">
                  <input class="form-control fr" value="Assiette de fruits tranchés aux baies" id="samdwichs28"  readonly></input>
                  <input class="form-control en" value="Sliced fruit platter with berries" id="samdwichs28" readonly></input>
                </div>
                <div class="input-field col s3 m2">
                  <input oninput="test3(this, 1)" type="number" class="samdwichsNumber form-control" min="0" max="9" id="samdwichsNumber28" placeholder="0"/>
                </div>
                <div class="input-field col s12 m6" style="padding: 0">
                  <input type="text" class="form-control"  id="commentairesSamdwichs28" placeholder="commentaire / comment" disabled></input>
                </div>

                <div class="input-field col s9 m4" style="padding-left: 0; position: relative;">
                  <input class="form-control fr" value="Compote de fruits pour les enfants" id="samdwichs29"  readonly></input>
                  <input class="form-control en" value="Fruit compote for the children" id="samdwichs29" readonly></input>
                </div>
                <div class="input-field col s3 m2">
                  <input oninput="test3(this, 1)" type="number" class="samdwichsNumber form-control" min="0" max="9" id="samdwichsNumber29" placeholder="0"/>
                </div>
                <div class="input-field col s12 m6" style="padding: 0">
                  <input type="text" class="form-control"  id="commentairesSamdwichs29" placeholder="commentaire / comment" disabled></input>
                </div>
            </div>
          </div>

          <div class="container" style="margin-top: 30px; margin-bottom: 30px">
            <p style="text-align: center" class="en">(Nuts (N) / Seafood (S) / Egg (E) / Dairy (D) / Gluten (G) / Celery (C) / Mustard (M)
            Sulphur dioxide (SP) / Soybeans (SB) / Sesame seed (SS) / Vegetarian (V) / Vegan (VE) / Gluten free (GF)</p>
            <p style="text-align: center" class="fr">
            (Noix (N) / Fruits de mer (S) / Œuf (E) / Produits laitiers (D) / Gluten (G) / Céleri (C) / Moutarde (M))
            Dioxyde de soufre (SP) / Soja (SB) / Graine de sésame (SS) / Végétarien (V) / Vegan (VE) / Sans gluten (GF)</p>
          </div>

          <button style="margin: 40px 0 50px 0.75rem;" class="btnSubmit btn waves-effect waves-light col s2" onclick="sendEmail()" disabled>
            Envoyer
          </button>

        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>


    <script> 

    function test3(element, max){
        value = element.value;
        max = parseInt(max);
        if(value.length > max){
            element.value = value.substr(0, max);
        }
    }

    const btn = document.querySelector('.btnSubmit'); 
    let samdwichs = document.querySelectorAll('.samdwichsNumber'); 
    let witnesses = [];

    let titleContainerSalade = document.querySelector('.title_section_salade');
    let contentContainerSalade = document.querySelector('.container_section_salade');

    let titleContainerSandwich = document.querySelector('.title_section_sandwich'); 
    let contentContainerSandwich = document.querySelector('.container_section_sandwich');

    let titleContainerDessert = document.querySelector('.title_section_dessert'); 
    let contentContainerDessert = document.querySelector('.container_section_dessert');

     /**
     * * Fonction show salade / sandwichs / dessert
     */

    titleContainerSalade.addEventListener('click', function() {
      contentContainerSalade.classList.toggle('showContent');
      titleContainerSalade.lastElementChild.classList.toggle('transformArrow')
    })

    titleContainerSandwich.addEventListener('click', function() {
      contentContainerSandwich.classList.toggle('showContent');
      titleContainerSandwich.lastElementChild.classList.toggle('transformArrow')
    })

    titleContainerDessert.addEventListener('click', function() {
      contentContainerDessert.classList.toggle('showContent');
      titleContainerDessert.lastElementChild.classList.toggle('transformArrow')
    })

     /**
     * * Fonction change Lang
     */

    const elementEn = document.querySelectorAll('.en');
    const elementFr = document.querySelectorAll('.fr');

    document.getElementById('langFr').addEventListener('click', () => {
      btn.textContent = "Envoyer";

      elementFr.forEach(element => { element.style.display = 'block'; });
      elementEn.forEach(element => { element.style.display = 'none'; });
    });

    document.getElementById('langEn').addEventListener('click', () => {
      btn.textContent = "Send";

      elementEn.forEach(element => { element.style.display = 'block'; });
      elementFr.forEach(element => { element.style.display = 'none'; });
    });

     /**
     * * Fonction stop enter touche
     */

    (function(n) {
      var f = function(e) {
        var c = e.which || e.keyCode;
        if (c == 13) {
          e.preventDefault();
          return false;
        }
      };
      window.noPressEnter = function(a, b) {
        b = (typeof b === 'boolean') ? b : true;
        if (b) {
          a.addEventListener(n, f);
        } else {
          a.removeEventListener(n, f);
        }
        return a;
      };
    })('keydown');

    noPressEnter(document.body);


    samdwichs.forEach(element => {
        element.addEventListener('input', () => {
            samdwichs.forEach(elem => {
                if(elem.value != '' && elem.value != 0 && elem.value != '')
                {
                  witnesses.push(false);
                  elem.parentNode.nextElementSibling.firstElementChild.disabled = false;
                }
                else{
                  witnesses.push(true);
                  elem.parentNode.nextElementSibling.firstElementChild.disabled = true;
                } 
            })

            const result = witnesses.find(element => element == false);

            if(result == undefined) btn.disabled = true;
            else btn.disabled = false;

            witnesses = [];
        });
    });


    /**
     * * Fonction show description
     */

    function showDescriptionSamdwichs (that){
      that.nextElementSibling.nextElementSibling.nextElementSibling.classList.toggle('showDescription')
      that.firstElementChild.classList.toggle('transformArrow')
    }

    function resetButton()
    {
      btn.disabled = true;
    }

    function testValue(param){
      if(param != '' && param != undefined) return true;
      else return false;
    }

    function testValueObject(obj){
      let verif = Object.keys(obj).length;
      if(verif == 1 && obj.hasOwnProperty('commentaires')){
        return false;
      }
      else if(verif == 0){
        return false;
      }
      else {
        return true;
      }
    }

    function testNumberSandwihcs(obj){
      let array = [];
      let verif;
      for(prop in obj){
        if(obj[prop].hasOwnProperty('nombre')){
          if(obj[prop].nombre > 9){
            array.push(false);
          }
          else{
            array.push(true);
          }
        }

      }
      verif = array.find(element => element == false);
      if(verif == undefined){
        return true;
      }
      else{
        return false;
      }
    }

    function sendEmail() {

        let name = $("#name");
        let room = $("#room");
        let email = $("#email");
        let emailBody = "";
        const render = [];

        let samdwich1 = document.querySelectorAll('#samdwichs1');
        let samdwich2 = document.querySelectorAll('#samdwichs2');
        let samdwich3 = document.querySelectorAll('#samdwichs3');
        let samdwich4 = document.querySelectorAll('#samdwichs4');
        let samdwich5 = document.querySelectorAll('#samdwichs5');
        let samdwich6 = document.querySelectorAll('#samdwichs6');
        let samdwich7 = document.querySelectorAll('#samdwichs7');
        let samdwich8 = document.querySelectorAll('#samdwichs8');
        let samdwich13 = document.querySelectorAll('#samdwichs13');
        let samdwich14 = document.querySelectorAll('#samdwichs14');
        let samdwich15 = document.querySelectorAll('#samdwichs15');
        let samdwich16 = document.querySelectorAll('#samdwichs16');
        let samdwich17 = document.querySelectorAll('#samdwichs17');
        let samdwich18 = document.querySelectorAll('#samdwichs18');
        let samdwich19 = document.querySelectorAll('#samdwichs19');
        let samdwich20 = document.querySelectorAll('#samdwichs20');
        let samdwich21 = document.querySelectorAll('#samdwichs21');
        let samdwich22 = document.querySelectorAll('#samdwichs22');
        let samdwich23 = document.querySelectorAll('#samdwichs23');
        let samdwich24 = document.querySelectorAll('#samdwichs24');
        let samdwich25 = document.querySelectorAll('#samdwichs25');
        let samdwich26 = document.querySelectorAll('#samdwichs26');
        let samdwich27 = document.querySelectorAll('#samdwichs27');
        let samdwich28 = document.querySelectorAll('#samdwichs28');
        let samdwich29 = document.querySelectorAll('#samdwichs29');


        let samdwichNumber1 = document.querySelector('#samdwichsNumber1');
        let samdwichNumber2 = document.querySelector('#samdwichsNumber2');
        let samdwichNumber3 = document.querySelector('#samdwichsNumber3');
        let samdwichNumber4 = document.querySelector('#samdwichsNumber4');
        let samdwichNumber5 = document.querySelector('#samdwichsNumber5');
        let samdwichNumber6 = document.querySelector('#samdwichsNumber6');
        let samdwichNumber7 = document.querySelector('#samdwichsNumber7');
        let samdwichNumber8 = document.querySelector('#samdwichsNumber8');
        let samdwichNumber13 = document.querySelector('#samdwichsNumber13');
        let samdwichNumber14 = document.querySelector('#samdwichsNumber14');
        let samdwichNumber15 = document.querySelector('#samdwichsNumber15');
        let samdwichNumber16 = document.querySelector('#samdwichsNumber16');
        let samdwichNumber17 = document.querySelector('#samdwichsNumber17');
        let samdwichNumber18 = document.querySelector('#samdwichsNumber18');
        let samdwichNumber19 = document.querySelector('#samdwichsNumber19');
        let samdwichNumber20 = document.querySelector('#samdwichsNumber20');
        let samdwichNumber21 = document.querySelector('#samdwichsNumber21');
        let samdwichNumber22 = document.querySelector('#samdwichsNumber22');
        let samdwichNumber23 = document.querySelector('#samdwichsNumber23');
        let samdwichNumber24 = document.querySelector('#samdwichsNumber24');
        let samdwichNumber25 = document.querySelector('#samdwichsNumber25');
        let samdwichNumber26 = document.querySelector('#samdwichsNumber26');
        let samdwichNumber27 = document.querySelector('#samdwichsNumber27');
        let samdwichNumber28 = document.querySelector('#samdwichsNumber28');
        let samdwichNumber29 = document.querySelector('#samdwichsNumber29');

        let samdwichCommentaires1 = document.querySelector('#commentairesSamdwichs1');
        let samdwichCommentaires2 = document.querySelector('#commentairesSamdwichs2');
        let samdwichCommentaires3 = document.querySelector('#commentairesSamdwichs3');
        let samdwichCommentaires4 = document.querySelector('#commentairesSamdwichs4');
        let samdwichCommentaires5 = document.querySelector('#commentairesSamdwichs5');
        let samdwichCommentaires6 = document.querySelector('#commentairesSamdwichs6');
        let samdwichCommentaires7 = document.querySelector('#commentairesSamdwichs7');
        let samdwichCommentaires8 = document.querySelector('#commentairesSamdwichs8');
        let samdwichCommentaires13 = document.querySelector('#commentairesSamdwichs13');
        let samdwichCommentaires14 = document.querySelector('#commentairesSamdwichs14');
        let samdwichCommentaires15 = document.querySelector('#commentairesSamdwichs15');
        let samdwichCommentaires16 = document.querySelector('#commentairesSamdwichs16');
        let samdwichCommentaires17 = document.querySelector('#commentairesSamdwichs17');
        let samdwichCommentaires18 = document.querySelector('#commentairesSamdwichs18');
        let samdwichCommentaires19 = document.querySelector('#commentairesSamdwichs19');
        let samdwichCommentaires20 = document.querySelector('#commentairesSamdwichs20');
        let samdwichCommentaires21 = document.querySelector('#commentairesSamdwichs21');
        let samdwichCommentaires22 = document.querySelector('#commentairesSamdwichs22');
        let samdwichCommentaires23 = document.querySelector('#commentairesSamdwichs23');
        let samdwichCommentaires24 = document.querySelector('#commentairesSamdwichs24');
        let samdwichCommentaires25 = document.querySelector('#commentairesSamdwichs25');
        let samdwichCommentaires26 = document.querySelector('#commentairesSamdwichs26');
        let samdwichCommentaires27 = document.querySelector('#commentairesSamdwichs27');
        let samdwichCommentaires28 = document.querySelector('#commentairesSamdwichs28');
        let samdwichCommentaires29 = document.querySelector('#commentairesSamdwichs29');

        let commentaires = document.querySelector('#commentaire');
        let time = document.querySelector('#timepicker');

        const property = {
            samdwichs1: {nom: samdwich1[0].value, nombre: samdwichNumber1.value, commentaires: samdwichCommentaires1.value},
            samdwichs2: {nom: samdwich2[0].value, nombre: samdwichNumber2.value, commentaires: samdwichCommentaires2.value},
            samdwichs3: {nom: samdwich3[0].value, nombre: samdwichNumber3.value, commentaires: samdwichCommentaires3.value},
            samdwichs4: {nom: samdwich4[0].value, nombre: samdwichNumber4.value, commentaires: samdwichCommentaires4.value},
            samdwichs5: {nom: samdwich5[0].value, nombre: samdwichNumber5.value, commentaires: samdwichCommentaires5.value},
            samdwichs6: {nom: samdwich6[0].value, nombre: samdwichNumber6.value, commentaires: samdwichCommentaires6.value},
            samdwichs7: {nom: samdwich7[0].value, nombre: samdwichNumber7.value, commentaires: samdwichCommentaires7.value},
            samdwichs8: {nom: samdwich8[0].value, nombre: samdwichNumber8.value, commentaires: samdwichCommentaires8.value},
            samdwichs13: {nom: samdwich13[0].value, nombre: samdwichNumber13.value, commentaires: samdwichCommentaires13.value},
            samdwichs14: {nom: samdwich14[0].value, nombre: samdwichNumber14.value, commentaires: samdwichCommentaires14.value},
            samdwichs15: {nom: samdwich15[0].value, nombre: samdwichNumber15.value, commentaires: samdwichCommentaires15.value},
            samdwichs16: {nom: samdwich16[0].value, nombre: samdwichNumber16.value, commentaires: samdwichCommentaires16.value},
            samdwichs17: {nom: samdwich17[0].value, nombre: samdwichNumber17.value, commentaires: samdwichCommentaires17.value},
            samdwichs18: {nom: samdwich18[0].value, nombre: samdwichNumber18.value, commentaires: samdwichCommentaires18.value},
            samdwichs19: {nom: samdwich19[0].value, nombre: samdwichNumber19.value, commentaires: samdwichCommentaires19.value},
            samdwichs20: {nom: samdwich20[0].value, nombre: samdwichNumber20.value, commentaires: samdwichCommentaires20.value},
            samdwichs21: {nom: samdwich21[0].value, nombre: samdwichNumber21.value, commentaires: samdwichCommentaires21.value},
            samdwichs22: {nom: samdwich22[0].value, nombre: samdwichNumber22.value, commentaires: samdwichCommentaires22.value},
            samdwichs23: {nom: samdwich23[0].value, nombre: samdwichNumber23.value, commentaires: samdwichCommentaires23.value},
            samdwichs24: {nom: samdwich24[0].value, nombre: samdwichNumber24.value, commentaires: samdwichCommentaires24.value},
            samdwichs25: {nom: samdwich25[0].value, nombre: samdwichNumber25.value, commentaires: samdwichCommentaires25.value},
            samdwichs26: {nom: samdwich26[0].value, nombre: samdwichNumber26.value, commentaires: samdwichCommentaires26.value},
            samdwichs27: {nom: samdwich27[0].value, nombre: samdwichNumber27.value, commentaires: samdwichCommentaires27.value},
            samdwichs28: {nom: samdwich28[0].value, nombre: samdwichNumber28.value, commentaires: samdwichCommentaires28.value},
            samdwichs29: {nom: samdwich29[0].value, nombre: samdwichNumber29.value, commentaires: samdwichCommentaires29.value},
            time: {timelunch: time.value},
            commentaires: {comments: commentaires.value}
        }

        for(const props in property){
            if(property[props].nombre == '' || property[props].nombre == 0) delete property[props];          
            if(props.length >= 12){
                if(property[props].comments == '' || !isNaN(property[props].comments) || property[props].comments == undefined){
                    delete property[props]
                }
            }
        }

        for(const comments in property){
          if(property[comments].commentaires == '' || property[comments].commentaires == undefined){
            delete property[comments].commentaires;
          }

        }


        for(prop in property){
            if(prop.length < 12 && prop.length > 7){
              if(property[prop].commentaires == undefined || property[prop].commentaires == '' || !isNaN(property[prop].commentaires)){
                render.push("<p>" + property[prop].nom + ' : ' + property[prop].nombre + "</p>")
              }
              else{
                render.push("<p>" + property[prop].nom + ' : ' + property[prop].nombre + '; commentaires : ' + property[prop].commentaires + "</p>")
              }
            }
            if(prop.length >= 12)
            {
            render.push("<p>Commentaires" + ' : ' + property[prop].comments + "</p>")
            }
            if(prop.length < 5)
            {
            render.push("<p>Le client viendra récupérer sa commande à" + ' : ' + property[prop].timelunch + "</p>")
            }

        }

        render.unshift('<p>Le client : ' + ' ' + name.val() + '</p><p>Chambre : ' + ' ' + room.val() + '</p><p>Shouaite commander : </p>');

        emailBody = render.toString().replace(/,/gi, '');


        if(testValue(name.val()) && testValue(room.val()) && testValue(email.val()) && testValueObject(property) && testNumberSandwihcs(property)){
          alert('Afin de confirmer votre commande, Un mail de confirmation va vous être envoyé sur l\'adresse de messagerie renseigné. Merci de vérifier (Le mail peut être enregistré en spam, pensez à regarder).')
          $.ajax({
            url: 'sendEmail.php',
            method: 'POST',
            dataType: 'json',
            data: {
                name: name.val(),
                room: room.val(),
                email: email.val(),
                body: emailBody
            }, success: function (response) {
                $('.myForm')[0].reset();
                $('.sent-notification').text("Message Sent Successfully.");
            }
          });
        }
        else{
          alert('Votre commande n\'a pas été envoyé, une erreur est survenue lors de l\'envoi du mail, veuillez réessayer.')
        }
      }
   
    </script>

</body>
</html>