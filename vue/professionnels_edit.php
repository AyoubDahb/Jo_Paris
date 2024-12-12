<!-- views/admin/professionnels_edit.php -->
<h1>Modifier un professionnel</h1>
<form method="post">
    <label>Nom :</label>
    <input type="text" name="nom" value="<?= htmlspecialchars($professionnel['nom']) ?>" required>
    <label>Email :</label>
    <input type="email" name="email" value="<?= htmlspecialchars($professionnel['email']) ?>" required>
    <label>Numéro SIRET :</label>
    <input type="text" name="num_Siret" value="<?= htmlspecialchars($professionnel['num_Siret']) ?>" required>
    <label>Adresse :</label>
    <input type="text" name="adresse" value="<?= htmlspecialchars($professionnel['adresse']) ?>" required>
    <button type="submit">Enregistrer</button>
</form>