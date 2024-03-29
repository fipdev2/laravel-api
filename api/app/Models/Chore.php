<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Chore extends Model
{
    use HasFactory;
    use HasUuids;
    protected $primaryKey = 'chore_id';
    public $incrementing = false;
}
