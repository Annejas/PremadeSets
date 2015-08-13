<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-08-25 06:24:07 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-25 06:24:09 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-25 06:24:11 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-25 06:24:15 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: images/pokemon/.gif ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-25 06:24:15 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-25 06:52:01 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'utb.id' in 'field list' [ SELECT utb.id FROM area a INNER JOIN area_trainer at ON (at.area = a.id) WHERE a.id = 5 AND at.id NOT IN (SELECT trainer_id FROM user_trainer_beaten WHERE user_id = 2) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 179 ]
2011-08-25 06:52:02 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-25 06:52:41 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-25 06:52:59 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-25 06:54:30 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-25 06:57:03 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-25 06:59:32 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-25 06:59:57 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-25 07:00:16 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-25 07:55:51 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Model_User_Trainer_Beaten::getAvailableRegions() must be an instance of Model_User, instance of Model_Area given, called in C:\wamp\pokebox\application\classes\controller\world.php on line 7 and defined ~ APPPATH\classes\model\user\trainer\beaten.php [ 37 ]
2011-08-25 07:55:52 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-25 07:56:15 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Model_Region::__construct() must be an instance of Kohana_Database_Result, instance of Database_Query given, called in C:\wamp\pokebox\application\classes\model\user\trainer\beaten.php on line 63 and defined ~ APPPATH\classes\model\region.php [ 7 ]
2011-08-25 07:56:15 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-25 07:56:40 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE r.id NOT IN (
					SELECT next
					FROM region
				)
				OR r.id NOT IN(
' at line 7 [ 
			SELECT *
			FROM region r
			LEFT JOIN area a ON (a.region_id = r.id)
			LEFT JOIN area_trainer at ON (at.area = a.id)
			WHERE r.world_id = 5
			AND (
				WHERE r.id NOT IN (
					SELECT next
					FROM region
				)
				OR r.id NOT IN(
					SELECT a.region_id
					FROM area a
					WHERE a.id IN (
						SELECT at.area
						FROM area_trainer at
						WHERE at.id NOT IN (
							SELECT utb.trainer_id
							FROM user_trainer_beaten utb
							WHERE user_id = 2
						)
					)
				)
			)
			GROUP BY r.id  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 179 ]
2011-08-25 07:56:40 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-25 07:57:12 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-25 07:58:00 --- ERROR: ErrorException [ 8 ]: Use of undefined constant name - assumed 'name' ~ APPPATH\classes\controller\world.php [ 9 ]
2011-08-25 07:58:00 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-25 07:58:46 --- ERROR: ErrorException [ 8 ]: Use of undefined constant name - assumed 'name' ~ APPPATH\classes\controller\world.php [ 9 ]
2011-08-25 07:58:46 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-25 07:58:54 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-25 07:59:39 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-25 08:00:20 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-1
						)
					)
				)
			)
			GROUP BY r.id' at line 1 [ -1
						)
					)
				)
			)
			GROUP BY r.id  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 179 ]
2011-08-25 08:00:21 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-25 08:00:49 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-25 08:01:01 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]