<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'client_id',
        'equipment',
        'defect',
        'entry_date',
    ];

    // Relacionamentos
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    protected $casts = [
        'entry_date' => 'date',
    ];
}
