SELECT max(capacite), salles.nom, etage.nom
from etage
         inner join salles on etage.id = salles.id_etage;