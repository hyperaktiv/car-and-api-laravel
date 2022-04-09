<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = ['name', 'founded', 'description', 'image_path', 'user_id'];

    // protected $hidden = ['updated_at'];
    // protected $visible = ['id', 'name', 'founded', 'description', 'created_at'];

    public function carModels()
    {
        return $this->hasMany(CarModel::class);
    }

    // define car has one through relationships with CarEngines
    public function carEngines()
    {
        return $this->hasManyThrough(
            CarEngine::class,
            CarModel::class,
            'car_id',       // foreign key on CarModel
            'model_id'      // foreign key on CarEngine
        );
    }

    // define car has one through relationship
    public function productionDate()
    {
        return $this->hasOneThrough(
            CarProductionDate::class,
            CarModel::class,
            'car_id',
            'model_id'
        );
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
