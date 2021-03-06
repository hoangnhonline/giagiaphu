<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Video extends Model  {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'video';	

	 /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_vi',
        'name_en',
        'alias_vi',
        'alias_en',
        'slug_vi',
        'slug_en',
        'description_vi',
        'description_en',
        'image_url',
        'video_url',        
        'status',
        'meta_id',
        'created_user',
        'updated_user'
    ];

    public function images()
    {
        return $this->hasMany('App\Models\AlbumImg', 'album_id');
    }
}
