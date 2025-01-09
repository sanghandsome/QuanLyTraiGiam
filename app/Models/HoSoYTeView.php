<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HoSoYTeView extends Model
{
    protected $table = 'hsyt_view'; // Tên view trong SQL Server
    public $timestamps = false;
    protected $primaryKey = null;
    public $incrementing = false;
}
