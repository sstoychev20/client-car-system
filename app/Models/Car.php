<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table='cars';

    protected $primaryKey ='id';

    protected $fillable =[
        'client_id',
        'licence_no',
        'vin',
        'model',
        'make',
        'date',
    ];

    public function client(){
        return $this->belongsTo(Client::class);
    }
}
