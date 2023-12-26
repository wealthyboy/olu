<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $fillable = [
        'name',
        'last_name',
        'email',
        'comments',
        'type',
        'relationship',
        'link',
        'title'
    ];

    public function uploads()
    {
        return $this->hasMany(UploadFile::class, 'upload_id');
    }
}
