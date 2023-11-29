<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberOrders extends Model
{
    use HasFactory;

    protected $table = 	'member_orders';

    protected $primarykey = 'id';
}
