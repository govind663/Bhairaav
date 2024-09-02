<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectLocationAdvantages extends Model
{
    use HasFactory, SoftDeletes;
    public $timestamps = false;
    protected $fillable = [
        'id',
        'project_details_id',
        'location_advantages_title',
        'location_advantage_id',
        'feature_value',
        'inserted_by',
        'inserted_at',
        'modified_by',
        'modified_at',
        'deleted_by',
        'deleted_at',
    ];

    protected $dates = ['deleted_at'];

    // ==== Relationship between location_advantage_id
    public function locationAdvantage(){
        return $this->belongsTo(LocationAdvantage::class, 'location_advantage_id');
    }
}
