<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;
    use HasFactory;

    protected $table = 'services'; // Tên bảng trong database
    protected $primaryKey = 'id'; // Khóa chính

    protected $fillable = [
        'service_name',
        'description',
        'image',
        'status'
    ];
}
