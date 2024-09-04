<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectGallery extends Model
{
    use HasFactory, SoftDeletes;
    public $timestamps = false;
    protected $fillable = [
        'id',
        'project_details_id',
        'gallery_title',
        'gallery_image',
        'gallery_image_name',
        'inserted_by',
        'inserted_at',
        'modified_by',
        'modified_at',
        'deleted_by',
        'deleted_at',
    ];

    protected $dates = ['deleted_at'];
}