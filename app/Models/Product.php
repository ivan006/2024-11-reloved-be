<?php

namespace App\Models;

use QuicklistsOrmApi\OrmApiBaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends OrmApiBaseModel
{
    protected $table = 'products';

    public $timestamps = false;

    protected $primaryKey = 'id';

    public function parentRelationships()
    {
        return [
            'seller' => [],
            'buyer' => [],
            'category' => [],
            'brand' => []
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
            
        ];
    }

    public function rules()
    {
        return [
            'title' => 'sometimes:required',
            'description' => 'nullable',
            'price' => 'sometimes:required',
            'seller_id' => 'sometimes:required',
            'buyer_id' => 'nullable',
            'category_id' => 'nullable',
            'brand_id' => 'nullable',
            'status' => 'sometimes:required',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }

    protected $fillable = [
        'title',
        'description',
        'price',
        'seller_id',
        'buyer_id',
        'category_id',
        'brand_id',
        'status',
        'created_at',
        'updated_at'
    ];

        public function seller(): BelongsTo
    {
        return $this->belongsTo(User::class, 'seller_id');
    }

        public function buyer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'buyer_id');
    }

        public function category(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }

        public function brand(): BelongsTo
    {
        return $this->belongsTo(ProductBrand::class, 'brand_id');
    }

    

    
}