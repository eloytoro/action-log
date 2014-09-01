<?php namespace Eloytoro\ActionLog;

class ActionLog extends \Eloquent {

  public $table = 'action_log';

  public function user() {
    return $this->belongsTo('User');
  }

} 
