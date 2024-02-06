<h1 class='text-blue-600 text-3xl text-center'>Livre</h1>
<?php foreach ($datas as $ligne): ?>
    <br />
    --------------------------
    <br />
    <form action="" method="POST">
        <?= $ligne['titre'] ?>
        -
        <?= $ligne['auteur'] ?>
        -
        <?php if ($ligne['id_type_livre'] == 1) {
            echo $ligne['poids'] . " Kg";
        } else {
            echo $ligne['taille'] . " Mo";
        }
        ?>
        -
        <?= $ligne['intitule'] ?>
        -
        <?php if ($ligne['emprunte'] == 0) {
            echo "Disponible";
        } else {
            echo "Emprunté";
        }
        ?>
        <?php if ($ligne['emprunte'] == 0) {
        echo "<button
            class='ml-2 shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded'
            type='submit'>
            Réserver
        </button>";
        } ?>
    </form>
    <br />
    --------------------------
    <br />
<?php endforeach; ?>