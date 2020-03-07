<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'id', 'inventory_id', 'src'
  ];
  /**
   * Get the vehicle
   */
  public function vehicle()
  {
    return $this->belongsTo('App\Inventory');
  }
}
