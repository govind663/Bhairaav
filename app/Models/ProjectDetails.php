<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class ProjectDetails extends Model
{
    use HasFactory, SoftDeletes;
    public $timestamps = false;
    protected $fillable = [
        'id',
        'project_type_id',
        'project_name_id',
        'banner_image',
        'maha_rera_registration_number',
        'project_link',
        'overview_image',
        'project_description',
        'project_hallmarks_id',
        'project_location_advantages_id',
        'gps_link',
        'project_image',
        'project_amenities_id',
        'project_gallery_id',
        'inserted_by',
        'inserted_at',
        'modified_by',
        'modified_at',
        'deleted_by',
        'deleted_at',
    ];

    protected $dates = ['deleted_at'];

    // ==== Relationship between project_hallmarks_id
    public function projectHallmarks(){
        return $this->belongsTo(ProjectHallmarks::class, 'project_hallmarks_id', 'id');
    }

    // ==== Relationship between project_location_advantages_id
    public function projectLocationAdvantages(){
        return $this->belongsTo(LocationAdvantage::class, 'project_location_advantages_id', 'id');
    }

    // ==== Relationship between project_amenities_id
    public function projectAmenities(){
        return $this->belongsTo(ProjectAmenities::class, 'project_amenities_id', 'id');
    }

    // ==== Relationship between project_gallery_id
    public function projectGallery(){
        return $this->belongsTo(ProjectGallery::class, 'project_gallery_id', 'id');
    }

    // ==== Relationship between project_name_id
    public function projectName(){
        return $this->belongsTo(Projects::class, 'project_name_id', 'id');
    }
}
