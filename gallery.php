<?php

foreach ($images as $image):
    $imgUrl = "/photo.php?id={$image['id']}";
    ?>
    <a href="<?=$imgUrl?>" >
        <img src="/img/<?=$image['link']?>" height="190" width="210">
    </a>
<?php
endforeach;
?>