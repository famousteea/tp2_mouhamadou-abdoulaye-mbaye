
<?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include("process.php");
      } else {
        include("adresse.php");
      }
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo '<h2>Confirmez vos informations :</h2>';
        
        for ($i = 1; $i <= $addressCount; $i++) {
          echo '
            <div class="confirmation-section">
              <strong>Adresse '.$i.' :</strong>
              <p>Street: '.$_POST['street'.$i].'</p>
              <p>Street Number: '.$_POST['streetNb'.$i].'</p>
              <p>Type: '.$_POST['type'.$i].'</p>
              <p>City: '.$_POST['city'.$i].'</p>
              <p>Zipcode: '.$_POST['zipcode'.$i].'</p>
            </div>
          ';
        }
        echo '<button onclick="saveToDB()">Enregistrer</button>';
        echo '<button onclick="goBack()">Modifier</button>';
      }
      ?>
      <?php
      include("config.php");
      ?>
    
    