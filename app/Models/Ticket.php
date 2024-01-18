<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    public function tipo_ticket() {
        return $this->belongsTo(TicketType::class, 'ticket_type_id');
        }

    public function tipo_train() {
        return $this->belongsTo(Train::class, 'train_id');
        }
}
