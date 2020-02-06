<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dishes".
 *
 * @property int $id
 * @property string $name
 * @property int|null $hidden
 */
class Dish extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dishes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string'],
            [['hidden'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'hidden' => 'Hidden',
        ];
    }

    /**
     * Has many Ingredients
     *
     * @return void
     */
    public function getIngredients()
    {
        return $this->hasMany(Ingredient::classname(),['id'=>'ingredient_id'])
            ->viaTable('ingredients_to_dishes', ['dish_id' => 'id']);
    }
}
