<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Transfer extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'transfer';
}
