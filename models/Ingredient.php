<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ingredients".
 *
 * @property int $id
 * @property string $name
 * @property int|null $hidden
 */
class Ingredient extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ingredients';
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
     * Has many Dishes
     *
     * @return void
     */
    public function getDishes()
    {
        return $this->hasMany(Dish::classname(),['id'=>'dish_id'])
            ->viaTable('ingredients_to_dishes', ['ingredient_id' => 'id']);
    }
}
