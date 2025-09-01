<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TInvitationComment extends Model
{
    protected $table = 't_invitation_comments';

    protected $fillable = [
        'invitation_id',
        'parent_id',
        'commenter_name',
        'comment_text',
        'status',
    ];

    public function invitation()
    {
        return $this->belongsTo(TInvitation::class, 'invitation_id');
    }

    public function parent()
    {
        return $this->belongsTo(TInvitationComment::class, 'parent_id');
    }

    public function replies()
    {
        return $this->hasMany(TInvitationComment::class, 'parent_id');
    }
}
