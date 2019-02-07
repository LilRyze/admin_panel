<?php

namespace AdminPanel;

use Illuminate\Database\Eloquent\Model;

class Scraping extends Model
{
    protected $fillable = ['name' , 'country_city',
                            'price', 'includes',
                            'days', 'image'];
}
