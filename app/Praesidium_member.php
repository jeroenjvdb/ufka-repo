<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Praesidium_member extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'function',
        'facebook_username',
        'instagram_username',
        'twitter_username'
    ];

  protected $appends = [
	'full_name_picture',
  ];

  public function getFullNameAttribute() {
	return $this->first_name . ' ' . $this->last_name;
  }

  public function getFullNamePictureAttribute() {
	return iconv('utf-8', 'ascii//TRANSLIT//IGNORE', strtolower($this->first_name)).'_'.iconv('utf-8', 'ascii//TRANSLIT//IGNORE', preg_replace('/\s+/', '', strtolower($this->last_name)).'.jpg');
  }
}
