## Paramétrage du plugin Aéroclub

Allez sur la page _**"Paramètres aéroclub"**_.

Voici la liste des paramètres :

<table>
  <thead>
    <tr>
      <th>Nom</th>
      <th>Description</th>
      <th>Utilisation</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>AD_DEFAUT</td>
      <td>Code OACI de l'Aerodrome de l'Aeroclub</td>
      <td>Sert à préremplir le formulaire de création d'opération ou lors du rapprochement d'une réservation</td>
    </tr>
    <tr>
      <td>AEROCLUB_LATITUDE</td>
      <td>Latitude de l'aéroclub (pour le calcul de nuit aéro)</td>
      <td>Sert à calculer la nuit aéro</td>
    </tr>
    <tr>
      <td>AEROCLUB_LONGITUDE</td>
      <td>Longitude de l'aéroclub (pour le calcul de nuit aéro)</td>
      <td>Sert à calculer la nuit aéro</td>
     </tr>
     <tr>
      <td>{"AUTORISER_RESA_INTERDIT"}</td>
      <td>Autoriser la réservation sur les pages marquées interdites (valeur: O/N)</td>
      <td>Selon _O_ pour _oui_ ou _N_ pour _non_, autorise la réservation le samedi + dimanche aux heures renseignées ou ne l'autorise pas</td>
    </tr>
    <tr>
      <td>{"CALENDRIER_HEURE_SAMEDI"}</td>
      <td>Heure à partir de laquelle, on ne peut plus réserver le samedi (école)</td>
      <td>Avec le paramètre {"AUTORISER_RESA_INTERDIT"}, indique à partir de quelle heure, on ne peut plus réserver le samedi (affichage en rouge sur le planning)</td>
    </tr>
    <tr>
      <td>{"CALENDRIER_HEURE_DIMANCHE"}</td>
      <td>Heure à partir de laquelle, on ne peut plus réserver le dimanche (école)</td>
      <td>Avec le paramètre AUTORISER_RESA_INTERDIT, indique à partir de quelle heure, on ne peut plus réserver le dimanche (affichage en rouge sur le planning)</td>
    </tr>
    <tr>
      <td>BLOCAGE_RESERVATION</td>
      <td>Bloquer résa aux pilotes pas en règle (solde, situation aéro), valeurs D/W/B (off/warning/bloquer)</td>
      <td>Permet d'effectuer une vérification juste avant qu'un adhérent pose une réservation sur son solde ou sa situation aéronautique (date de visite médicale et license). Selon la valeur D (pas de vérification), W (vérification solde) ou B (situation aéronautique), peut empêcher un adhérent de poser une réservation</td>
    </tr>
    <tr>
      <td>{"BLOCAGE_MESSAGE_BLOQUE"}</td>
      <td>Message de blocage si blocage est en mode Blocage (empêche réservation)</td>
      <td>Message associé à la situation aéronautique non conforme</td>
    </tr>
    <tr>
      <td>{"BLOCAGE_MESSAGE_WARNING"}</td>
      <td>Message de warning si blocage est en mode Warning</td>
      <td>Message de warning associé au solde négatif</td>
    </tr>
    <tr>
      <td>{"CALENDRIER_HEURE_DEBUT"}</td>
      <td>Première heure réservable dans la journée</td>
      <td></td>
    </tr>
    <tr>
      <td>{"CALENDRIER_HEURE_FIN"}</td>
      <td>Dernière heure réservable dans la journée</td>
      <td></td>
     </tr>
     <tr>
      <td>COULEUR_INTERDIT</td>
      <td>Couleur de fond des cellules lorsqu'il est interdit de réserver un avion</td>
      <td>Vous permet de changer les couleurs dans le planning et le calendrier de réservation - couleur du samedi + dimanche après-midi</td>
    </tr>
    <tr>
      <td>COULEUR_LIBRE</td>
      <td>Couleur de fond des cellules où l'on peut réserver un avion</td>
      <td>Vous permet de changer les couleurs dans le planning et le calendrier de réservation - couleur de fond classique</td>
    </tr>
    <tr>
      <td>COULEUR_RESERVE</td>
      <td>Couleur de fond des cellules lorsqu'un avion est réservé par un membre</td>
      <td>Vous permet de changer les couleurs dans le planning et le calendrier de réservation - couleur de fond 'une plage réservée</td>
    </tr>
    <tr>
      <td>COTISATION_SECTION</td>
      <td>Nom de la cotisation qui rend le membre actif</td>
      <td>Ne pas en tenir compte, utilisé par l'import si vous utilisez Access (chance = 0%)</td>
    </tr>
    <tr>
      <td>{"DATE_DERNIER_IMPORT"}</td>
      <td>Indique la date de dernier import d'Access vers Galette</td>
      <td>Ne pas en tenir compte, utilisé par l'import si vous utilisez Access (chance = 0%)</td>
   </tr>
  </tbody>
</table>