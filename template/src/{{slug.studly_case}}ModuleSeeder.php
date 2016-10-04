<?php namespace {{vendor|studly_case}}\{{slug|studly_case}}Module;

use Anomaly\Streams\Platform\Database\Seeder\Seeder;

/**
 * Class {{slug|studly_case}}ModuleSeeder
 *
{{docblock}}
 * @package   {{vendor|studly_case}}\{{slug|studly_case}}Module
 */

class {{slug|studly_case}}ModuleSeeder extends Seeder
{
	protected $seeders = [];
    /**
     * Seed the localization module.
     */
    public function run()
    {   
    		foreach ($this->seeders as $seeder) {
        	    $this->call($seeder);
    		}             
    }
}