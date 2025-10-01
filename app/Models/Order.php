<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['order_code','user_id', 'subtotal','tax','grandtotal', 'status', 'created_at','table_nubmer','payment_method', 'note', 'updated_at'];
    protected $dates = ['deleted_at'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}

