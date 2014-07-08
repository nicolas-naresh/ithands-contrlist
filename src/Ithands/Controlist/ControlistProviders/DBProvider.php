<?php
	namespace Ithands\Controlist\ControlistProviders;
	use Ithands\Controlist\Models\Permission;
	use Ithands\Controlist\Models\Role;

	class DBProvider{
		public function allPermissions(){
			Permission::fetchAllPermissions();
		}
	}
