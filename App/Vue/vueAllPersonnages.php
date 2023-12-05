<?php ob_start()?>
<div class = "main">
    <?php foreach($tab as $personnage):?>
        <div class="personnage">
            <p><?=$personnage->getNom()?></p>
            <img src="./Public/asset/images/<?=$personnage->getPhoto()?>">
            <p>Histoire du personnage : <?=$personnage->getHistoire()?></p>
            <p>Equipement du personnage : <?=$personnage->getEquipement()?></p>
            <p>Auteur : <?= $personnage->auteur_pseudo?></p>
            <a href='./personnagedisplay?id_fiche_personnage=<?=$personnage->getId()?>'>afficher</a>
        </div>
    <?php endforeach?>
    <p><?=$error?></p>
</div>
<?php $content = ob_get_clean()?>