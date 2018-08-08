<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tb_ruangan".
 *
 * @property int $id
 * @property string $nama
 * @property int $kapasitas
 *
 * @property TbJadwal[] $tbJadwals
 */
class TbRuangan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_ruangan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'kapasitas'], 'required'],
            [['kapasitas'], 'integer'],
            [['nama'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'kapasitas' => 'Kapasitas',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbJadwals()
    {
        return $this->hasMany(TbJadwal::className(), ['ruangan_id' => 'id']);
    }
}
