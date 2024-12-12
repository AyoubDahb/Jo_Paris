<!-- views/admin/professionnels_list.php -->
<h1>Liste des Professionnels</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Numéro SIRET</th>
            <th>Adresse</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($professionnels as $pro): ?>
            <tr>
                <td><?= htmlspecialchars($pro['iduser']) ?></td>
                <td><?= htmlspecialchars($pro['nom']) ?></td>
                <td><?= htmlspecialchars($pro['email']) ?></td>
                <td><?= htmlspecialchars($pro['num_Siret']) ?></td>
                <td><?= htmlspecialchars($pro['adresse']) ?></td>
                <td>
                    <a href="index.php?controller=admin&action=modifierProfessionnel&iduser=<?= $pro['iduser'] ?>">Modifier</a>
                    <a href="index.php?controller=admin&action=supprimerProfessionnel&iduser=<?= $pro['iduser'] ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce professionnel ?');">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>