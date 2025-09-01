<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MTemplate extends Model
{
    protected $table = 'm_templates';

    protected $fillable = [
        'name',
        'description',
        'preview_url',
        'template_file',
    ];

    public function invitations()
    {
        return $this->hasMany(TInvitation::class, 'template_id', 'id');
    }
}
