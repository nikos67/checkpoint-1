<?php
// Je vérifie si l'utilisateur a cliqué sur le bouton ajouter un nouveau membre
if($_POST){
    // Je construis ma requete sql
    $sql = "INSERT INTO pot_de_vin (name,payment) VALUES ('".$_POST['name']."', '".$_POST['payment']."')";
    // Je vérifie si ma requete a bien été executé
    if ($pdo->exec($sql)) {
        echo 'Votre insertion a été un succès'; // J'affiche un message de succes
        // Ssi ma requete a bien été executé
    } else {
        echo 'Votre insertion a été un echec'; // J'affiche un message d'echec
    }
}
?>
<!-- Mon formulaire -->
<form class="add-bribe" method="post">
    <label for="name">Name</label>
    <input type="text" name="name" style="border: 1px solid #000000" />
    <label for="payment">Payment</label>
    <input type="text" name="payment" style="border: 1px solid #000000" />
    <button type="submit">pay!</button>
</form>