<?php namespace Ithands\Controlist\Models;
	class Role extends \Eloquent {
		public function permissions()
    {
      return $this->belongsToMany('Permission');
    }
	}

?>