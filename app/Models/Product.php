<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use HasFactory, Sluggable;

    // protected $fillable = ['nama_produk', 'deskripsi', 'spesifikasi', 'fungsi'];
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        if(isset($filters['search']) ? $filters['search'] : false) {
            return $query->where('nama_produk', 'like', '%' . $filters['search'] . '%');
        }
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama_produk'
            ]
        ];
    }
}