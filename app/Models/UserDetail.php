<?php

namespace App\Models;

use App\Traits\HasFileUploads;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;

class UserDetail extends Model implements HasMedia
{
    use HasFactory;
    use HasFileUploads;

    protected $fillable = [
        'user_id',
        'account_type',
        'account_holder_name',
        'account_number',
        'extra_information',
    ];
}
