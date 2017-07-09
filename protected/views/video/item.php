<?php
/**
 * @var $video Video
 */
?>
<div class="video-item">
    <iframe
            src="https://www.youtube.com/embed/<?= $video['code']; ?>"
            frameborder="0"
            width="100%"
            height="100%"
            allowfullscreen
    ></iframe>
</div>