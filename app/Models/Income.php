<?php

namespace App\Models;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Income extends Eloquent
{
 
    protected $connection = 'mongodb';
    protected $collection = 'daily';
}
