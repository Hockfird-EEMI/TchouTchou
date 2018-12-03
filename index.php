<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tchou Tchou</title>
  </head>
  <body>
    <link rel="stylesheet" type="text/css" href="styles/semantic-ui/semantic.css">

    <div class="ui segment container">

      <h2 class="ui center aligned icon header blue">
        <i class="circular train icon"></i>
        Tchou Tchou
      </h2>

      <?php
        $fakeData = array (
          'Courcelles' => array(
            'lat'     => 48.8794444,
            'lon'     => 2.304444444444444,
            'acc'     => 2,
            'retards' => 1,
            'lignes'  => array(
              // LIGNE => ARRAY(RETARD, ACCIDENT)
              2 => array(0,0)
            )
          ),
          'Bastille' => array(
            'lat'     => 48.8530556,
            'lon'     => 2.3691666666666666,
            'acc'     => 2,
            'retards' => 1,
            'lignes'  => array(
              // LIGNE => ARRAY(RETARD, ACCIDENT)
              1 => array(0,0),
              5 => array(0,0),
              8 => array(0,0)
            )
          ),
          'Saint-Lazare' => array(
            'lat'     => 48.8755556,
            'lon'     => 2.326111111111111,
            'acc'     => 0,
            'retards' => 0,
            'lignes'  => array(
              // LIGNE => ARRAY(RETARD, ACCIDENT)
              3   => array(0,0),
              12  => array(0,0),
              13  => array(0,0),
              14  => array(0,0)
            )
          )
        );
      ?>

      <div class="ui divider"></div>

      <!-- // TABLEAU -->
      <div class="ui styled accordion">
      <?php
        foreach ($fakeData as $key => $data) {
          ?>

            <div class="title">
              <i class="dropdown icon"></i>
              <?=$key?> | <?=$data['acc']?> | <?=$data['retards']?>
            </div>
            <div class="content">
              <!-- <p class="transition hidden">A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a welcome guest in many households across the world.</p> -->
              <div class="accordion">
                <?php foreach ($data['lignes'] as $keyLigne => $value) { ?>
                  <div class="title">
                    <i class="dropdown icon"></i>
                    <?=$keyLigne?>
                  </div>
                  <div class="content">
                    <?=$value[0]?> | <?=$value[1]?>
                  </div>
                <?php } ?>
              </div>
            </div>

          <?php
        }
       ?>
       </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="styles/semantic-ui/semantic.js"></script>

    <script type="text/javascript">
      $('.ui.accordion').accordion();
    </script>
  </body>
</html>
