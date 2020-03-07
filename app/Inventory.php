<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'inventory';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'id', 'stock_num', 'vin', 'year', 'make', 'model', 'trim', 'kms', 'title', 'color', 'trans', 'dis', 'dok', 'page', 'ad_num', 'price', 'desc'
  ];

  /**
   * Get images
   */
  public function images()
  {
      return $this->hasMany('App\Image');
  }

}
