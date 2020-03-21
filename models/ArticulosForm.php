<?php

namespace app\models;

use yii;
use yii\base\Model;

class ArticulosForm extends Model {

    public $producto;
    public $cantidad;
    public $precio;

    public function rules() {
        return [
            [['producto', 'precio'], 'required'],
            [['cantidad', 'precio'], 'number']
        ];
    }

    public function attributeLabels() {
        return [
            'producto' => 'ingrese el nombre del producto ',
            'cantidad' => 'Cantidad',
            'precio' => 'Precio',
        ];
    }

}
