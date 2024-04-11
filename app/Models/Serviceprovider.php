<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    protected $primaryKey = 'id'; // Assuming your primary key column name is 'provider_id'
    protected $table = 'serviceProviders';
    public function category()
    {
        return $this->belongsTo(Category::class, 'c_id');
    }
}
