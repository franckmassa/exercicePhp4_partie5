<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>p5exo4</title>
  </head>
  <body>
    <p>
      <?php
        //recupération du tableau et correction du mois d août
        $months = array('Janvier','Févier','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre');
        $months[7] = 'Août';
        echo $months[7];
      ?>
    </p>
  </body>
</html>