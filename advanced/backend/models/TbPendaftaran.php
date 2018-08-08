<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tb_pendaftaran".
 *
 * @property int $id
 * @property string $waktu_pendaftaran
 * @property int $pendaftaran_id
 * @property int $status_id
 * @property int $mapel_id
 *
 * @property TbMataPelajaran $mapel
 * @property TbPendaftaran $pendaftaran
 * @property TbPendaftaran[] $tbPendaftarans
 * @property TbStatus $status
 * @property TbSiswa[] $tbSiswas
 */
class TbPendaftaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_pendaftaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['waktu_pendaftaran', 'pendaftaran_id', 'status_id', 'mapel_id'], 'required'],
            [['waktu_pendaftaran'], 'safe'],
            [['pendaftaran_id', 'status_id', 'mapel_id'], 'integer'],
            [['mapel_id'], 'exist', 'skipOnError' => true, 'targetClass' => TbMataPelajaran::className(), 'targetAttribute' => ['mapel_id' => 'id']],
            [['pendaftaran_id'], 'exist', 'skipOnError' => true, 'targetClass' => TbPendaftaran::className(), 'targetAttribute' => ['pendaftaran_id' => 'id']],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => TbStatus::className(), 'targetAttribute' => ['status_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'waktu_pendaftaran' => 'Waktu Pendaftaran',
            'pendaftaran_id' => 'Pendaftaran ID',
            'status_id' => 'Status ID',
            'mapel_id' => 'Mapel ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMapel()
    {
        return $this->hasOne(TbMataPelajaran::className(), ['id' => 'mapel_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPendaftaran()
    {
        return $this->hasOne(TbPendaftaran::className(), ['id' => 'pendaftaran_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbPendaftarans()
    {
        return $this->hasMany(TbPendaftaran::className(), ['pendaftaran_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(TbStatus::className(), ['id' => 'status_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbSiswas()
    {
        return $this->hasMany(TbSiswa::className(), ['pendaftaran_id' => 'id']);
    }
}
