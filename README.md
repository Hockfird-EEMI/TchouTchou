Cahier des charges
Project TchouTchou

Objectif:
Mettre à disposition une étude comparative des stations accumulant le plus de retards et/ou d’accidents voyageurs. Rendre sa lecture simple et ludique, via l’utilisation d’une carte intéractive par exemple.

Processus:

Partie 1: Récupération

Nous avons deux types de données à récupérer:
Les trains en retards à des stations précises
Les accidents voyageurs par station

Cet annuaire de données devra fournir un résultat au format JSON exploitable (lisible et utile donc). Pour ce faire, nous devons utiliser tous les jeux de données “ouvert” à disposition via des APIs ou des datasets (import de fichiers excel par exemple).

Partie 2: Traitement

Il s’agira ici de mixer les données récupérées des différentes sources et de les convertir dans un format commun. Une fois ce premier traitement effectué, les tâches suivantes sont à prévoir:
Tri des stations par Retards / Accidents
Gestion des évènements aléatoires
Récupération des coordonnées des stations et/ou des noms

Partie 3: Exportation

Exporter les données traitées sous forme d’une API avec les contraintes suivantes:
Tokenizable
Gestion simple des urls (accès direct à la donnée via un call)

Partie 4: Visualisation

Affichage de la donnée brute reçue avec les contraintes suivantes:
format simple et lisible
possibilité de mettre à jour
(gestion du tri des données depuis le front)
