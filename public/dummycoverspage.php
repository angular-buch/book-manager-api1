<!DOCTYPE html>
<html lang="de">
  <head>
    <title>BookManager API v1</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui"/>
    <link rel="stylesheet" href="media/style.css" media="screen" />
  </head>
  <body class="markdown-body">
    <h1>Beispiel-Coverbilder</h1>

    <p>Wir stellen 30 Beispiel-Coverbilder bereit, die du als Bild-URLs im Buchformular verwenden kannst.</p>

    <div class="image-container">
      <?php for ($i = 1; $i <= 30; $i++): ?>
      <div class="image-box">
        <img src="https://cdn.ng-buch.de/cover/srcset/<?php echo $i; ?>_320.jpg" alt="Cover <?php echo $i; ?>" width="150" height="218">
        <div class="description">
          <h2>Cover <?php echo $i; ?></h2>
          <input type="text" value="https://cdn.ng-buch.de/cover/<?php echo $i; ?>.jpg" readonly onclick="this.select()">
        </div>
      </div>
      <?php endfor; ?>
    </div>
  </body>
</html>
