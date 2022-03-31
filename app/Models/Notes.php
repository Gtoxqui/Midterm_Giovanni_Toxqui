<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Equipment;

class Notes extends Model
{
    use HasFactory;
    protected $fillable = [
    'equipment_id',
    'services',
    'software'
  ];
    protected $table = 'notes';

    public function equipment()
    {
      return $this->belongsTo(Equipment::class);
    }
}
