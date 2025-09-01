<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TInvitationCustomField extends Model
{
    protected $table = 't_invitation_custom_fields';

    protected $fillable = [
        'invitation_id',
        'field_name',
        'field_value',
    ];

    public function invitation()
    {
        return $this->belongsTo(TInvitation::class, 'invitation_id');
    }
}
