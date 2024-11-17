<?php

namespace App\Models;

use QuicklistsOrmApi\OrmApiBaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ProductCategory extends OrmApiBaseModel
{
    protected $table = 'product_categories';

    public $timestamps = false;

    protected $primaryKey = 'id';

    public function parentRelationships()
    {
        return [
            
        ];
    }

    public function spouseRelationships()
    {
        return [
            
        ];
    }

    public function childRelationships()
    {
        return [
            'products' => []
        ];
    }

    public function rules()
    {
        return [
            'name' => 'sometimes:required',
            'slug' => 'sometimes:required',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }

    protected $fillable = [
        'name',
        'slug',
        'created_at',
        'updated_at'
    ];

    

        public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'category_id');
    }

    
}