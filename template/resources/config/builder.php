<?php

return [

  /*
  |           __
  |          /  |
  |         |    \_        ______ __   __ __ __     _____  ______ _____
  |      __  \     `-_    |  _   |  | |  |  |  |   |     ||      |   _ |
  |    /   \  ''-.    \   | |_|  |  | |  |  |  |   |  _   |   ___|  | ||
  |   /    /      \    \  |      |  |_|  |  |  |   | | |  |  |___   |_||_
  |   |   |  PYRO  |   |  |  _  ||       |  |  |___| |_|  |   ___|   __  |
  |   \    \      /    /  | |_|  |       |  |      |      |  |___|  |  | |
  |    \    `-..-'    /   |______|_______|__|______|_____||______|__|  |_|
  |     '-_        _-'
  |        `------'      Addons scaffolder for maximum coding pleasure
  */

	/*
	|--------------------------------------------------------------------------
	| Namespaces
	|--------------------------------------------------------------------------
	| A list of all the Stream Namespaces used in this Module.
	|
	| More control over code generated can be established per assignment,
	| for example, hide / show table columns and form fields per stream assignment,
	| also table column field view / template.
	|
	| for example:
	|
	|	'namespaces' => [
	|		'namespace' => [
	|			'field_slug' => [
	|				'hide_column' => true,  *optional, (false by default)
	|				'hide_field'  => false,  *optional, (false by default)
	|				'column_template'    =>
	|     '<span class="label label-default">{value}</span> *optional, ('{value}' by default)
	|			]
	|		]
	| ]
	|
	| Boolean Field Type:
	| ------------------
	| For boolean type there's a default column_template if it's value is set to,
	|  			'column_template'    =>  'default'
	| You can also have your own markup, for that there's two variables {class} & {value}
	| For example, '<span class="label label-{class}">{value}</span>'
	|
	|	*/

	'namespaces' => [
		'{{slug|lower}}' => [
			// 'field_slug_1' => [
			// 	'column_template'    => '<span class="label label-info">{value}</span>'
			// ],
			// 'field_slug_2' => [
			// 	'hide_column'        => true
			// ]
		]
	],

	/*
	|--------------------------------------------------------------------------
	| Seeding
	|--------------------------------------------------------------------------
	| Allow to seed the module after it has installed by:
	|
	*/

	'seed' => false,

	/*
	|--------------------------------------------------------------------------
	| Relationship 'null' value
	|--------------------------------------------------------------------------
	| The default view for a null relationship entry
	|
	*/

	'null_relationship_entry' => '<span class="label label-default">null</span>',

	/*
	|--------------------------------------------------------------------------
	| Namespaces folder
	|--------------------------------------------------------------------------
	| Group all entities (streams) in one folder
	|
	*/

	'namespace_folder' => true,

  /*
	|--------------------------------------------------------------------------
	| Module icon
	|--------------------------------------------------------------------------
	| Based on http://fontawesome.io/icons/
	|
	*/

	'icon' => '{{icon}}',

  /*
	|--------------------------------------------------------------------------
	| Home Page
	|--------------------------------------------------------------------------
	| Default landing page for the module, 'yes' or 'no'
	|
  |
	*/

	'landing_page' => {{landing_page}},

	/*
	|--------------------------------------------------------------------------
	| Repository Super Class
	|--------------------------------------------------------------------------
	| Extend all generated repositories to a common super class,
  | '\Anomaly\Streams\Platform\Entry\EntryRepository' by default,
  |
	| Example: 'Websemantics\NamedModule\Common\CommonRepository'
  |
	*/

	'extends_repository' => 'Anomaly\Streams\Platform\Entry\EntryRepository',

	/*
	|--------------------------------------------------------------------------
	| Avoid Overwrite
	|--------------------------------------------------------------------------
	|
	| For development and to avoid overwriting on code added, list all the files
	| that should not be overwritten by the builder. Use the last part of the
	| file name, ..
	|
	| for example:
	|   -PostModel.php 		  -> 'Model.php'
	|   -FileTableColumns.php -> 'TableColumns.php'
	|
	| If you require the builder to generate a fresh copy of the file, either remove it from
	| here or delete it form the module.
	|
	*/

	'avoid_overwrite' => [
		'Model.php',
		'Repository.php'/* ,
    'TableColumns.php',
    'FormBuilder.php'
    'ModuleSeeder.php' */
	],

	/*
	|--------------------------------------------------------------------------
	| Docblock
	|--------------------------------------------------------------------------
	|	Docblock text to include with entity generated files
	|
	*/

	'docblock' =>
' * @link      http://websemantics.ca
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan M.Sagar, PhD. <adnan@websemantics.ca>'
];
