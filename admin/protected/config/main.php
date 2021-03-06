<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

$frontend = dirname(dirname(dirname(dirname((__FILE__) )))).DIRECTORY_SEPARATOR.'protected'.DIRECTORY_SEPARATOR;
$approot = dirname(dirname(dirname(__FILE__))).DIRECTORY_SEPARATOR;

Yii::setPathOfAlias('frontend',$frontend);


Yii::setPathOfAlias('appwebroot', $approot);
require_once($frontend . "/config/globals.php");

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Guitar Tutor',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'frontend.components.common.*',
		'frontend.components.library.*',
		'frontend.extensions.mailer.EMailer',
		'frontend.modules.*',
		'frontend.models.*',
		'frontend.components.*',
		
		),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'map',
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'admin',
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
			
			'loginUrl' => array('login/index'),
			'class' => 'WebUser',
			//'identityCookie' => array('domain' => '.thankful.com.au', 'path' => '/'/*, 'name' => 'PHPSESSID_ADMIN'*/),
			'stateKeyPrefix' => 'userstate'
		),
		'uploader' => array(
			'class' => 'application.components.library.FileUpload'
		),
			'cache' => require_once($frontend . "/config/caching_config.php"),
		'input'=>array(   
            'class'         => 'CmsInput',  
            'cleanPost'     => false,  
            'cleanGet'      => false,   
        ),
		
		'uploader' => array(
			'class' => 'frontend.components.library.FileUpload'
		),
		'phpThumb'=>array(
			'class'=>'frontend.extensions.EPhpThumb.EPhpThumb',
		),
			'cache' => require_once($frontend . "/config/caching_config.php"),
		
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=ads_engine_db',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'password',
			'charset' => 'utf8',
		),
		
		'db'=>array(
			'connectionString' => 'mysql:host=68.178.143.70;dbname=tutorguitarist',
			'emulatePrepare' => true,
			'username' => 'tutorguitarist',
			'password' => 'Admin32!',
			'charset' => 'utf8',
		),
		
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
				'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
		'dateformat'=>'yy-mm-dd'
	),
);