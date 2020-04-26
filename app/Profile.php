<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $link = ($this->image) ?  $this->image : 'profile/1JO6oL0ZRb0pHdHuXQ1YjfDdX75KaEPBsSkCgCYi.png';
        return '/storage/' . $link;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
