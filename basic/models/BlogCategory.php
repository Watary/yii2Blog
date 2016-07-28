<?php
/**
 * Created by PhpStorm.
 * User:
 * Date: 27.07.2016
 * Time: 13:30
 */

namespace app\models;

use Yii;
use yii\base\Model;

class BlogCategory extends Model{

    public function listCategory(){
        return Yii::$app->db->createCommand('SELECT * FROM blog_category')->queryAll();
    }

    public function postCategoryOne($id){
        return Yii::$app->db->createCommand("SELECT * FROM blog_category WHERE id=$id LIMIT 1")->queryOne();
    }

    public function postCategoryPostAll($id){
        return Yii::$app->db->createCommand('SELECT * FROM blog_post WHERE parent='.$id)->queryAll();
    }

    public function postAll(){
        return Yii::$app->db->createCommand('SELECT * FROM blog_post')->queryAll();
    }

    public function postOne($id){
        return Yii::$app->db->createCommand("SELECT * FROM blog_post WHERE id=$id LIMIT 1")->queryOne();
    }

}