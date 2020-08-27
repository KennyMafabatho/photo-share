<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/T26FM1br96ADue4YmDGk5Kf4gSkeB0RBTIJTt3uN.jpeg';
        return '/storage/'.$imagePath;
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
