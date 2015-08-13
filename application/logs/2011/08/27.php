<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-08-27 06:11:35 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:11:37 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:11:39 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:11:45 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: images/pokemon/.gif ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:11:45 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:11:49 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:12:09 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:12:33 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:12:34 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:12:35 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:12:45 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:12:46 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:19:51 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND (
				r.id NOT IN (
					SELECT next
					FROM region
				)
				OR r.id NOT ' at line 4 [ 
			SELECT *
			FROM region r
			WHERE r.world_id = 
			AND (
				r.id NOT IN (
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
2011-08-27 06:19:51 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:20:54 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:22:10 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:22:55 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:23:05 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:24:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: availableRegions ~ APPPATH\classes\controller\world.php [ 15 ]
2011-08-27 06:24:55 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:25:06 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:25:19 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:25:23 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:26:02 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:26:32 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:28:59 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:29:32 --- ERROR: ReflectionException [ 0 ]: Method action_region does not exist ~ SYSPATH\classes\kohana\request.php [ 1112 ]
2011-08-27 06:29:32 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:37:40 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:38:48 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:39:02 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:40:37 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:40:45 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:40:50 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:41:10 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:43:35 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:43:45 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:43:56 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:45:15 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:48:41 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:50:33 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:50:39 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:50:50 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:51:26 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:51:54 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:53:43 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:54:44 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:55:59 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:56:25 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:57:30 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:58:16 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:59:24 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 06:59:37 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 07:00:11 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 07:00:21 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 07:00:38 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 07:01:19 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 07:01:49 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 07:01:59 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 07:02:07 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 07:03:04 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 07:05:12 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 07:06:31 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 07:07:17 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 07:07:32 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 07:07:43 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 07:08:03 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 07:12:02 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 07:14:17 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 07:14:59 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 07:15:22 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 07:16:05 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 07:16:27 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 07:17:08 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 07:18:11 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 07:18:29 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 07:18:59 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 07:19:10 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 07:19:53 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 07:20:13 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 07:21:35 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 07:22:04 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 07:22:06 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 07:22:12 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 07:22:52 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 07:23:04 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2011-08-27 07:23:13 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]