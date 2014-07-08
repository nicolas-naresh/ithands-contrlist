<?php namespace Ithands\Controlist\Models;

	use Illuminate\Database\Eloquent\Model as Eloquent;

	class Permission extends Eloquent {
		public function permissions()
    {
      return $this->belongsToMany('Permission');
    }
    
		public static function fetchAllPermissions(){
    	echo app_path().'/controllers';die;
    }
	}
?>