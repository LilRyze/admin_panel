<?php

namespace AdminPanel;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = ['name', 'description', 'price',
                            'hotel', 'included', 'ticket_included',
                            'guided_visits'];
}
