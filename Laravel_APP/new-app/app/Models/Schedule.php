<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{

    public function train() {
        return $this->belongsTo(Train::class, 'train_id');
    }
    use HasFactory;
}
