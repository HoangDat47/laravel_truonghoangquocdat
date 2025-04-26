<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentModel extends Model
{
    public $timestamps = false;
    protected $table = 'payment_method'; // Specify the table name if different from the model name
    protected $fillable = ['id', 'type']; // Specify the fillable fields
    protected $primaryKey = 'id';

    public function payment()
    {
        return $this->hasMany(PaymentModel::class, 'payment_id', 'id');
    }
    // Define any relationships or additional methods here

    public function motel()
    {
        return $this->belongsTo(MotelModel::class, 'payment', 'id');
    }
}
