<?php 

namespace app\models;

use Yii;
use yii\base\Model;

Class Catalog extends Model{

    public function getCatalog(){
        
        return [
            ['name'=>'lambargini','price'=>91],
            ['name'=>'bugatti','price'=>86],
            ['name'=>'shevrollet','price'=>79],
            ['name'=>'ford','price'=>52],
            ['name'=>'sheron','price'=>35]
        ];
    }
    public function getMeta(){
        return [
            'title'=>'Catalog'
        ];
    }
}



?>