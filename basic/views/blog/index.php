<?php
/**
 * Created by PhpStorm.
 * User:
 * Date: 27.07.2016
 * Time: 13:16
 */

use yii\helpers\Url;

$this->title = 'MY BLOG';

?>
<h1>Нові записи</h1>
<?= $this->render('_post', ['data' => $data]); ?>

