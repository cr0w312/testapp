<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Partnership;
use App\Models\User;
use App\Models\OrderType;

class Order extends Model
{
    use HasFactory;

    public function partnership()
    {
        return $this->belongsTo(Partnership::class);
    }
}
