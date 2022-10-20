<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Transaksi extends Model
{
    use AutoNumberTrait;
    
    public function getAutoNumberOptions()
    {
        return[
            'id_transaksi' => [
                'format' => 'T?', //autonumber format. '?' will be replaced with the generated number.
                'leght' => 3 //the number of digits in an autonumber
            ]
        ];
    }

    use HasFactory;
    protected $table = 'tbl_transaksi';
    protected $guarded = [];
}