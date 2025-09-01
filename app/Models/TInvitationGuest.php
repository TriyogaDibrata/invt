<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TInvitationGuest extends Model
{
    protected $table = 't_invitation_guests';

    protected $fillable = [
        'invitation_id',
        'name',
        'email',
        'rsvp_status',
        'status',
    ];

    public function invitation()
    {
        return $this->belongsTo(TInvitation::class, 'invitation_id');
    }
}
