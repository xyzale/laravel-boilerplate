<?php

namespace App\Models;


use Spatie\EventSourcing\Projections\Projection;

class TransactionCount extends Projection
{
    protected $table = 'transactions_count';
    protected $guarded = [];
}
