<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    public function tipo_train() {
        return $this->belongsTo(TrainType::class, 'train_type_id');
    }
}
