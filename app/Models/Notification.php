<?php

namespace App\Models;

use App\Traits\FindAndCountTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notification extends Model
{
    use HasFactory, SoftDeletes, FindAndCountTrait;

    protected $fillable = ['content', 'user_id', 'type', 'is_read'];

    public function setTypeAttribute($type)
    {
        $this->attributes['type'] = $type ?? 'info';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
