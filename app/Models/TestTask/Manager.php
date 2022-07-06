<?php

namespace App\Models\TestTask;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;
    protected $appends = ["fullname"];

    public function getFullNameAttribute() {
        return $this->attributes['lastName'] . ' - ' . $this->attributes['firstName'];
    }
}
