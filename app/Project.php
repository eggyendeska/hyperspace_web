<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use TCG\Voyager\Traits\Resizable;

class Project extends Model
{
    use Notifiable;
    use Resizable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title','description','image','project_categories_id'
    ];

    public function projectCategory()
    {
        return $this->belongsTo(ProjectCategory::class);
    }
}
