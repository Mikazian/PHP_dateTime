<?php

// récupère la date et l'heure d'aujourd'hui en Europe/Paris
$presentTime = new DateTime('now', new DateTimeZone('Europe/Paris'));

$destinationTime = new DateTime();
$destinationTime = clone $presentTime;
$destinationTime->modify('+6 months +10 days +15 years +4 hours +30 mins');

$dateDiff = $presentTime->diff($destinationTime);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PHP - Retour vers le futur</title>
  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
  <!-- DESTINATION TIME -->
  <header>
    <h1>PHP Quest</h1>
    <div class="logo">
      <img src="/assets/images/logo.png" alt="logo">
    </div>
  </header>

  <div class="container-timer destination">
    <div class="timer-present">
      <div class="timer-content">
        <div class="title-content">
          <p class="timer-label">month</p>
        </div>
        <div class="content-result">
          <p class="timer-result"><?= $destinationTime->format('M') ?></p>
        </div>
      </div>
      <div class="timer-content">
        <div class="title-content">
          <p class="timer-label">day</p>
        </div>
        <div class="content-result">
          <p class="timer-result"><?= $destinationTime->format('d') ?></p>
        </div>
      </div>
      <div class="timer-content">
        <div class="title-content">
          <p class="timer-label">year</p>
        </div>
        <div class="content-result">
          <p class="timer-result"><?= $destinationTime->format('Y') ?></p>
        </div>
      </div>
      <div class="container-daily">
        <div class="title-content">
          <p class="timer-label">AM</p>
        </div>
        <div class="circle c1"></div>
        <div class="title-content">
          <p class="timer-label">PM</p>
        </div>
        <div class="circle c2"></div>
      </div>
      <div class="timer-content">
        <div class="title-content">
          <p class="timer-label">hour</p>
        </div>
        <div class="content-result">
          <p class="timer-result"><?= $destinationTime->format('h') ?></p>
        </div>
      </div>
      <p class="timer-separator">:</p>
      <div class="timer-content">
        <div class="title-content">
          <p class="timer-label">min</p>
        </div>
        <div class="content-result">
          <p class="timer-result"><?= $destinationTime->format('i') ?></p>
        </div>
      </div>
    </div>
    <div class="destination-time">
      <p class="timer-label">destination time</p>
    </div>
  </div>
  <!-- PRESENT TIME -->
  <div class="container-timer present">
    <div class="timer-present">
      <div class="timer-content">
        <div class="title-content">
          <p class="timer-label">month</p>
        </div>
        <div class="content-result">
          <p class="timer-result green"><?= $presentTime->format('M') ?></p>
        </div>
      </div>
      <div class="timer-content">
        <div class="title-content">
          <p class="timer-label">day</p>
        </div>
        <div class="content-result">
          <p class="timer-result green"><?= $presentTime->format('d') ?></p>
        </div>
      </div>
      <div class="timer-content">
        <div class="title-content">
          <p class="timer-label">year</p>
        </div>
        <div class="content-result">
          <p class="timer-result green"><?= $presentTime->format('Y') ?></p>
        </div>
      </div>
      <div class="container-daily">
        <div class="title-content">
          <p class="timer-label">AM</p>
        </div>
        <div class="circle c1"></div>
        <div class="title-content">
          <p class="timer-label">PM</p>
        </div>
        <div class="circle c2"></div>
      </div>
      <div class="timer-content">
        <div class="title-content">
          <p class="timer-label">hour</p>
        </div>
        <div class="content-result">
          <p class="timer-result green"><?= $presentTime->format('h') ?></p>
        </div>
      </div>
      <p class="timer-separator">:</p>
      <div class="timer-content">
        <div class="title-content">
          <p class="timer-label">min</p>
        </div>
        <div class="content-result">
          <p class="timer-result green"><?= $presentTime->format('i') ?></p>
        </div>
      </div>
    </div>
    <div class="destination-time">
      <p class="timer-label">present time</p>
    </div>
  </div>
  <!-- DIFFERENCE TIME -->
  <div class="container-timer present">
    <div class="timer-present">
      <div class="timer-content">
        <div class="title-content">
          <p class="timer-label">month</p>
        </div>
        <div class="content-result">
          <p class="timer-result blue"><?= $dateDiff->format('%m') ?></p>
        </div>
      </div>
      <div class="timer-content">
        <div class="title-content">
          <p class="timer-label">day</p>
        </div>
        <div class="content-result">
          <p class="timer-result blue"><?= $dateDiff->format('%d') ?></p>
        </div>
      </div>
      <div class="timer-content">
        <div class="title-content">
          <p class="timer-label">year</p>
        </div>
        <div class="content-result">
          <p class="timer-result blue"><?= $dateDiff->format('%y') ?></p>
        </div>
      </div>
      <div class="container-daily">
        <div class="title-content">
          <p class="timer-label">AM</p>
        </div>
        <div class="circle c1"></div>
        <div class="title-content">
          <p class="timer-label">PM</p>
        </div>
        <div class="circle c2"></div>
      </div>
      <div class="timer-content">
        <div class="title-content">
          <p class="timer-label">hour</p>
        </div>
        <div class="content-result">
          <p class="timer-result blue"><?= $dateDiff->format('%h') ?></p>
        </div>
      </div>
      <p class="timer-separator">:</p>
      <div class="timer-content">
        <div class="title-content">
          <p class="timer-label">min</p>
        </div>
        <div class="content-result">
          <p class="timer-result blue"><?= $dateDiff->format('%i') ?></p>
        </div>
      </div>
    </div>
    <div class="destination-time">
      <p class="timer-label">difference time</p>
    </div>
  </div>
</body>

</html>