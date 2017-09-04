<?php
/**
 * @var $item Project
 */
?>
<a href="<?= ImageIgosja::resize($item['image_id'], 600, 600); ?>" class="projects__i" data-lightbox="1">
    <img src="<?= ImageIgosja::resize($item['image_id'], 448, 448); ?>" alt="">
</a>