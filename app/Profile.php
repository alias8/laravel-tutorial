<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/4C8KsPhAQkeKWO3zsx8dAVxWPrmAET4BtaPRscZq.png';
        return '/storage/'.$imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
