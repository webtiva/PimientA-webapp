<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmisionPA extends Model
{
    protected $table = 'emision_programa_analiticos';

    public function programa_analitico() : BelongsTo
    {
        return $this->belongsTo(ProgramaAnalitico::class);
    }
}
