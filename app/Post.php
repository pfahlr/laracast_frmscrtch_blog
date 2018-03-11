<?php

namespace App;

use Carbon\Carbon;

class Post extends Model
{

  public function comments() {
    //$this->hasMany('App\Comments'), Comment::class is string representation of full class path
    return $this->hasMany(Comment::class);
  }

  public function addComment($body) {
    $this->comments()->create(compact('body'));
  }

  public function user() {
    return $this->belongsTo(User::class);
  }

  public static function archives() {
    return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*)')
      ->groupBy('year','month')
      ->orderByRaw('min(created_at) desc')
      ->get()
      ->toArray();
  }

  public function scopeFilter($query, $filters)
  {
    if(isset($filters['month']) && $month = $filters['month']) {
      $query->whereMonth('created_at', Carbon::parse($month)->month);
    }
    if(isset($filters['year']) && $year = $filters['year']){
      $query->whereYear('created_at', $year);
    }

    return $query;
  }
}