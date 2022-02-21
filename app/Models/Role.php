<?php

namespace App\Models;

use App\Traits\FindAndCountTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory, FindAndCountTrait, SoftDeletes;

    protected $fillable = ['name', 'value'];
}
