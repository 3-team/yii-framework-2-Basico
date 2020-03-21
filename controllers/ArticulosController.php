<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class ArticulosController extends Controller {

    public function actionIndex() {
        $model = new \app\models\ArticulosForm();
        if ($model->load(Yii::$app->request->post())) {
            return Yii::$app->getResponse()->redirect('crear');
        }
        return $this->render('index', ['model' => $model]);
    }

    public function actionCrear() {
        return $this->render('registrado');
    }

}
