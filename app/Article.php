<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;


    protected $fillable = [
        'title',
        'body',
        'published_at',
        'deleted',
        'created_by' // temporary
    ];

    /**
     * This attributes should be mutated to dates
     *
     * @var array
     */
    protected $dates = ['published_at','deleted_at'];

    public function scopeUnpublished($query)
    {
        $query->where('published_at', '>=', Carbon::now());
    }

    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::createFromFormat('d F, Y', $date);
    }

    /**
     * An article is owned by a user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'created_by');
    }

}
