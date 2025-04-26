<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MotelModel extends Model
{
    public $timestamps = false;
    protected $table = 'motel'; // Specify the table name if different from the model name
    protected $fillable = ['idMotel','nameMotel', 'phoneNumber', 'rentTime', 'payment']; // Specify the fillable fields
    protected $primaryKey = 'id';

    public function payment()
    {
        return $this->hasMany(PaymentModel::class, 'id', 'payment');
    }

    // Define any relationships or additional methods here
}
