<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $addressCount = isset($_POST['addressCount']) ? (int)$_POST['addressCount'] : 0;

  if ($addressCount > 0) {
    echo '<form method="post" action="confirmation.php">';
    
    for ($i = 1; $i <= $addressCount; $i++) {
      echo '
        <div class="address-section">
          <label for="street'.$i.'">Street:</label>
          <input type="text" name="street'.$i.'" id="street'.$i.'" maxlength="50" required>

          <label for="streetNb'.$i.'">Street Number:</label>
          <input type="number" name="streetNb'.$i.'" id="streetNb'.$i.'" required>

          <label for="type'.$i.'">Type:</label>
          <select name="type'.$i.'" id="type'.$i.'" maxlength="20" required>
            <option value="livraison">Livraison</option>
            <option value="facturation">Facturation</option>
            <option value="autre">Autre</option>
          </select>

          <label for="city'.$i.'">City:</label>
          <select name="city'.$i.'" id="city'.$i.'" required>
            <option value="Montreal">Montreal</option>
            <option value="Laval">Laval</option>
            <option value="Toronto">Toronto</option>
            <option value="Quebec">Quebec</option>
          </select>

          <label for="zipcode'.$i.'">Zipcode:</label>
          <input type="text" name="zipcode'.$i.'" id="zipcode'.$i.'" pattern="[0-9]{6}" required>
        </div>
      ';
    }

    echo '<button type="submit">Confirmer</button></form>';
  }
}
?>