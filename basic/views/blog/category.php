<?php
/**
 * Created by PhpStorm.
 * User:
 * Date: 27.07.2016
 * Time: 17:14
 */

use yii\helpers\Url;

$this->title = $data['category']['title'];
?>
<h1><?= $this->title = $data['category']['title']; ?></h1>

<?= $this->render('_post', ['data' => $data['posts']]); ?>