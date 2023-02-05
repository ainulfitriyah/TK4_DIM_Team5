<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pemesanan".
 *
 * @property int $id_pesanan
 * @property string $nama_pemesan
 * @property int $id_barang
 * @property string $jumlah_pesanan
 * @property int $lead_time
 * @property string $pakai
 */
class Pemesanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pemesanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pemesan', 'id_barang', 'jumlah_pesanan', 'lead_time', 'pakai'], 'required'],
            [['id_barang', 'lead_time'], 'integer'],
            [['nama_pemesan'], 'string', 'max' => 32],
            [['jumlah_pesanan'], 'string', 'max' => 16],
            [['pakai'], 'string', 'max' => 8],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pesanan' => 'Id Pesanan',
            'nama_pemesan' => 'Nama Pemesan',
            'id_barang' => 'Id Barang',
            'jumlah_pesanan' => 'Jumlah Pesanan',
            'lead_time' => 'Lead Time',
            'pakai' => 'Pakai',
        ];
    }
}
