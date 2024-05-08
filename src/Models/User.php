<?php

namespace HenryAvila\LaravelNovaEmailTracking\Models;

use HenryAvila\LaravelNovaEmailTracking\Traits\ModelWithEmailsSenderTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    use ModelWithEmailsSenderTrait;

    protected $guarded = [];
}
