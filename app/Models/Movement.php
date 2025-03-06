<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    use HasFactory;

    protected $fillable = [
        'asset_id',
        'from_location_id',
        'to_location_id',
        'from_user_id',
        'to_user_id',
        'reason',
        'notes',
        'movement_date',
        'moved_by_user_id'
    ];

    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }

    public function fromLocation()
    {
        return $this->belongsTo(Location::class, 'from_location_id');
    }

    public function toLocation()
    {
        return $this->belongsTo(Location::class, 'to_location_id');
    }

    public function fromUser()
    {
        return $this->belongsTo(User::class, 'from_user_id');
    }

    public function toUser()
    {
        return $this->belongsTo(User::class, 'to_user_id');
    }

    public function movedBy()
    {
        return $this->belongsTo(User::class, 'moved_by_user_id');
    }
}
