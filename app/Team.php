<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Team extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'quote', 'image', 'order', 'specialty'
    ];

    public function skills()
    {
        return $this->belongsToMany(Skill::class,'team_skill');
    }
}
