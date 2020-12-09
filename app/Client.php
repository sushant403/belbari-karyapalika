<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class Client extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait;

    public $table = 'clients';

    protected $appends = [
        'gallery',
        'consultancy',
        'days_notice',
        'acceptance1',
        'acceptance2',
        'finaldocs',
        'main_photo',
        'client_signature',
        'verified_sign',
        'neighbour1_sign',
        'neighbour2_sign',
        'neighbour3_sign',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'registration',
        'address',
        'phone',
        'neighbour1',
        'neighbour2',
        'neighbour3',
        'neighbour4',
        'created_at',
        'updated_at',
        'deleted_at',
        'verified_by',
        'is_verified',
    ];

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->width(50)->height(50);
        $this->addMediaConversion('big_thumb')->width(500)->height(500);
    }

    public function getMainPhotoAttribute()
    {
        $file = $this->getMedia('main_photo')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }

    public function getClientSignatureAttribute()
    {
        $file = $this->getMedia('client_signature')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }


    //=======================================================================  
    //documents
    public function getGalleryAttribute()
    {
        $files = $this->getMedia('gallery');
        $files->each(function ($item) {
            $item->url       = $item->getUrl();
            $item->thumbnail = $item->getUrl('thumb');
        });

        return $files;
    }
    public function getConsultancyAttribute()
    {
        $files = $this->getMedia('consultancy');
        $files->each(function ($item) {
            $item->url       = $item->getUrl();
            $item->thumbnail = $item->getUrl('thumb');
        });

        return $files;
    }
    public function getDaysNoticeAttribute()
    {
        $files = $this->getMedia('days_notice');
        $files->each(function ($item) {
            $item->url       = $item->getUrl();
            $item->thumbnail = $item->getUrl('thumb');
        });

        return $files;
    }
    public function getAcceptance1Attribute()
    {
        $files = $this->getMedia('acceptance1');
        $files->each(function ($item) {
            $item->url       = $item->getUrl();
            $item->thumbnail = $item->getUrl('thumb');
        });

        return $files;
    }
    public function getAcceptance2Attribute()
    {
        $files = $this->getMedia('acceptance2');
        $files->each(function ($item) {
            $item->url       = $item->getUrl();
            $item->thumbnail = $item->getUrl('thumb');
        });

        return $files;
    }
    public function getFinaldocsAttribute()
    {
        $files = $this->getMedia('finaldocs');
        $files->each(function ($item) {
            $item->url       = $item->getUrl();
            $item->thumbnail = $item->getUrl('thumb');
        });

        return $files;
    }


    //=======================================================================  
    //neighbours
    public function getNeighbour1SignAttribute()
    {
        $file = $this->getMedia('neighbour1_sign')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }
    public function getNeighbour2SignAttribute()
    {
        $file = $this->getMedia('neighbour2_sign')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }
    public function getNeighbour3SignAttribute()
    {
        $file = $this->getMedia('neighbour3_sign')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }

    //==========================================================================
    //verification officer
    public function getVerifiedSignAttribute()
    {
        $file = $this->getMedia('verified_sign')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }
}
