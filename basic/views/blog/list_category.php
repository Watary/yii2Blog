<?php
/**
 * Created by PhpStorm.
 * User:
 * Date: 27.07.2016
 * Time: 13:28
 */

use yii\helpers\Url;

$this->title = 'List category';
?>
<h1>Категорії</h1>
<ul class="list_category">
<?php foreach ($data AS $value){ ?>
    <li><a href="<?=Url::to(['blog/category', 'id' => $value['id']]);?>"><?= $value['title']; ?></a></li>
<?php } ?>
</ul>