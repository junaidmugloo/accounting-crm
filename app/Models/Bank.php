<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Bank extends Eloquent
{
 
    protected $connection = 'mongodb';
    protected $collection = 'bank_accounts';
}
