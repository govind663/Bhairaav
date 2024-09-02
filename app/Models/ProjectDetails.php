<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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

    public function storeOverviewImage($image)
    {
        $extension = $image->getClientOriginalExtension();
        $new_name = time() . rand(10, 999) . '.' . $extension;
        $image->move(public_path('/bhairaav/projects/project_detail/overview_image'), $new_name);
        $this->overview_image = $new_name;
    }

    public function storeBannerImages($images)
    {
        $image_paths = [];
        foreach ($images as $image) {
            $extension = $image->getClientOriginalExtension();
            $new_name = time() . rand(10, 999) . '.' . $extension;
            $image->move(public_path('/bhairaav/projects/project_detail/banner_image'), $new_name);
            $image_paths[] = "/bhairaav/projects/project_detail/banner_image/" . $new_name;
        }
        $this->banner_images = json_encode($image_paths);
    }

    public function storeHallmarks($hallmarks)
    {
        foreach ($hallmarks as $hallmark) {
            if (!empty($hallmark)) {
                $this->hallmarks()->create([
                    'hallmark' => $hallmark]);
            }
        }
    }

    public function storeLocationAdvantages($advantageIds, $featureValues)
    {
        foreach ($advantageIds as $index => $advantage_id) {
            if (!empty($advantage_id) && !empty($featureValues[$index])) {
                $this->locationAdvantages()->create([
                    'location_advantage_id' => $advantage_id,
                    'feature_value' => $featureValues[$index],
                ]);
            }
        }
    }

    public function storeAmenities($ameniteImageNames)
    {
        foreach ($ameniteImageNames as $image_name) {
            if (!empty($image_name)) {
                $this->amenities()->create([
                    'image_name' => $image_name
                ]);
            }
        }
    }

    public function storeGalleryImages($images, $imageNames)
    {
        foreach ($images as $index => $image) {
            $image_name = $imageNames[$index];
            $new_name = time() . rand(10, 999) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/bhairaav/projects/project_detail/gallery_image'), $new_name);
            $this->gallery()->create([
                'image_name' => $image_name,
                'image_path' => "/bhairaav/projects/project_detail/gallery_image/" . $new_name,
            ]);
        }
    }

    // Define relationships
    public function hallmarks()
    {
        return $this->hasMany(ProjectHallmarks::class);
    }

    public function locationAdvantages()
    {
        return $this->hasMany(ProjectLocationAdvantages::class);
    }

    public function amenities()
    {
        return $this->hasMany(ProjectAmenities::class);
    }

    public function gallery()
    {
        return $this->hasMany(ProjectGallery::class);
    }

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
}
