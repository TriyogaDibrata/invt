<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TInvitation extends Model
{
    protected $table = 't_invitations';

    protected $fillable = [
        'user_id',
        'template_id',
        'title',
        'description',
        'event_date',
        'event_time',
        'event_date_time',
        'location',
        'location_url',
        'slug',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function template()
    {
        return $this->belongsTo(MTemplate::class, 'template_id');
    }

    public function guests()
    {
        return $this->hasMany(TInvitationGuest::class, 'invitation_id');
    }

    public function customFields()
    {
        return $this->hasMany(TInvitationCustomField::class, 'invitation_id');
    }

    public function comments()
    {
        return $this->hasMany(TInvitationComment::class, 'invitation_id');
    }
}
