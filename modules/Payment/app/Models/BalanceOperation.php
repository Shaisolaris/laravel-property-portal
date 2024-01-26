<?php

namespace Modules\Payment\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Payment\Database\factories\BalanceOperationFactory;

class BalanceOperation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    
    protected static function newFactory(): BalanceOperationFactory
    {
        //return BalanceOperationFactory::new();
    }
}
