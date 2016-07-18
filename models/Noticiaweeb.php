<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "noticiaweeb".
 *
 * @property string $TituloWEEB
 * @property string $CuerpoWEEB
 * @property string $CategoriaWEEB
 * @property integer $EstadoWEEB
 * @property string $FechaWEEB
 * @property integer $IdNoticiaWEEB
 */
class Noticiaweeb extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'noticiaweeb';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TituloWEEB', 'CuerpoWEEB', 'CategoriaWEEB', 'EstadoWEEB', 'FechaWEEB'], 'required'],
            [['CuerpoWEEB'], 'string'],
            [['EstadoWEEB'], 'integer'],
            [['FechaWEEB'], 'safe'],
            [['TituloWEEB', 'CategoriaWEEB'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'TituloWEEB' => 'Titulo Weeb',
            'CuerpoWEEB' => 'Cuerpo Weeb',
            'CategoriaWEEB' => 'Categoria Weeb',
            'EstadoWEEB' => 'Estado Weeb',
            'FechaWEEB' => 'Fecha Weeb',
            'IdNoticiaWEEB' => 'Id Noticia Weeb',
        ];
    }
}
