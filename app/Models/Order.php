<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    const STATUS = [
        'PENDING' => 'Menunggu Konfirmasi',
        'PROSES' => 'Sedang Diproses',
        'KIRIM' => 'Dalam Pengiriman',
        'SELESAI' => 'Pesanan Selesai'
    ];

    protected $fillable = [
        'product_id', 
        'customer_name', 
        'customer_phone', 
        'status', 
        'tracking_number'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public static function generateTrackingNumber()
    {
        return 'RH-' . strtoupper(uniqid());
    }
}