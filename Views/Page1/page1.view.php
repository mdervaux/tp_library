<h1 class='text-blue-600 text-3xl text-center'>Page 1</h1>
<?php foreach($datas as $ligne) : ?>
    <br />
    --------------------------
    <br />
    Titre : <?=  $ligne['titre'] ?><br/>
    Auteur : <?= $ligne['auteur'] ?>
    <br />
    --------------------------
    <br />
<?php endforeach; ?>



