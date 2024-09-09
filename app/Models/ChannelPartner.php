<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChannelPartner extends Model
{
    use HasFactory, SoftDeletes;
    public $timestamps = false;
    protected $fillable = [
        'id',
        'companyNameOrIndividualName',
        'nameOfTheOwner',
        'entity',
        'officeAddress',
        'telephoneNumber',
        'mobileNumber',
        'website',
        'emailId',
        'numberOfYearsInOperation',
        'preferredExpertise',
        'panCardNo',
        'gstNo',
        'reraNo',
        'brokerAffiliation',
        'propertiesType',
        'authorizedSignatories',
        'name',
        'designation',
        'pancard_doc',
        'aadhar_doc',
        'terms',
        'inserted_by',
        'inserted_at',
        'modified_by',
        'modified_at',
        'deleted_by',
        'deleted_at',
    ];

    protected $dates = [
        'inserted_at',
        'modified_at',
        'deleted_at',
    ];
}
