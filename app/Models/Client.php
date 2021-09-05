<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table='clients';

    protected $primaryKey ='id';

    protected $fillable =['make',
    'model',
    'client_name',
    'license_number',
    'year',
    'telephone',
    'reg_data', 
    'email',
    'user_id',
    ];

    public function carModels(){
        return $this->hasMany(Car::class);
    }
}
