<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property int $id_barang
 * @property string $nama_barang
 * @property string $harga_barang
 * @property string $biaya_penyimpanan
 * @property string $periode_permintaan
 * @property string $satuan
 * @property string $konversi
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_barang', 'harga_barang', 'biaya_penyimpanan', 'periode_permintaan', 'satuan', 'konversi'], 'required'],
            [['nama_barang'], 'string', 'max' => 64],
            [['harga_barang', 'biaya_penyimpanan', 'satuan', 'konversi'], 'string', 'max' => 16],
            [['periode_permintaan'], 'string', 'max' => 4],
            [['nama_barang'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_barang' => 'Id Barang',
            'nama_barang' => 'Nama Barang',
            'harga_barang' => 'Harga Barang',
            'biaya_penyimpanan' => 'Biaya Penyimpanan',
            'periode_permintaan' => 'Periode Permintaan',
            'satuan' => 'Satuan',
            'konversi' => 'Konversi',
        ];
    }
}
