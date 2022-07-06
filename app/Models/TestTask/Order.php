<?php

namespace App\Models\TestTask;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TestTask\Manager;

class Order extends Model
{
    use HasFactory;

    public function manager()
    {
        return $this->hasOne(Manager::class,'id','manager_id');
    }
}
