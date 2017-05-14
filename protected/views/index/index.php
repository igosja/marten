<?php
/**
 * @var $a_slide array
 */
?>
<?php foreach ($a_slide as $item) { ?>
    <?php if (isset($item->image->url)) { ?>
        <img src="<?= $item->image->url; ?>"/>
    <?php } ?>
<?php } ?>
<br/>
Почему мы
<br/>
О компании
<br/>
Видео
<br/>
Текст
<br/>
3 страницы
<br/>
Реализованные проекты
<br/>
Текст
