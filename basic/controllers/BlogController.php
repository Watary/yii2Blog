<?php
/**
 * Created by PhpStorm.
 * User:
 * Date: 27.07.2016
 * Time: 13:11
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\BlogCategory;

class BlogController extends Controller
{

    public function actionIndex(){

        $model = new BlogCategory();

        $data = $model->postAll();

        return $this->render('index', ['data' => $data]);

    }

    public function actionListCategory(){

        $model = new BlogCategory();

        $data = $model->listCategory();

        return $this->render('list_category', ['data' => $data]);

    }

    public function actionCategory($id){

        $model = new BlogCategory();

        $data['posts'] = $model->postCategoryPostAll($id);
        $data['category'] = $model->postCategoryOne($id);

        return $this->render('category', ['data' => $data]);

    }

    public function actionPost($id){

        $model = new BlogCategory();

        $data['post'] = $model->postOne($id);

        return $this->render('post', ['data' => $data]);

    }

}