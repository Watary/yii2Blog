<?php
/**
 * Created by PhpStorm.
 * User:
 * Date: 27.07.2016
 * Time: 22:44
 */

use yii\helpers\Url;

foreach ($data AS $value){ ?>
    <div class="cat-post">
        <h2><a href="<?= Url::to(['blog/post', 'id' => $value['id']]); ?>"><?= $value['title']; ?></a></h2>
        <p><?= $value['short_text']; ?></p>
    </div>
<?php } ?>
