<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Suplier extends Model
{
    use AutoNumberTrait;
    
    public function getAutoNumberOptions()
    {
        return[
            'id_suplier' => [
                'format' => 'S?', //autonumber format. '?' will be replaced with the generated number.
                'leght' => 3 //the number of digits in an autonumber
            ]
        ];
    }
    
    use HasFactory;
    protected $table = 'tbl_suplier';
    protected $guarded = [];
}
