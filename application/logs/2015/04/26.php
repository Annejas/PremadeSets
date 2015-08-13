<?php defined('SYSPATH') or die('No direct script access.'); ?>

2015-04-26 04:29:23 --- ERROR: ReflectionException [ -1 ]: Class controller_index does not exist ~ SYSPATH\classes\kohana\request.php [ 1094 ]
2015-04-26 04:32:08 --- ERROR: ReflectionException [ -1 ]: Class controller_index does not exist ~ SYSPATH\classes\kohana\request.php [ 1094 ]
2015-04-26 04:32:12 --- ERROR: Database_Exception [ 0 ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2015-04-26 04:32:15 --- ERROR: Database_Exception [ 0 ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2015-04-26 04:32:20 --- ERROR: Database_Exception [ 0 ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2015-04-26 04:36:23 --- ERROR: Database_Exception [ 0 ]:  ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2015-04-26 04:36:23 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2015-04-26 04:38:28 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2015-04-26 04:38:48 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2015-04-26 04:39:10 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 674 ]
2015-04-26 04:44:37 --- CRITICAL: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'validate' at 'MODPATH\validate' ~ SYSPATH\classes\kohana\Core.php [ 579 ] in C:\wamp\www\pokebox\application\bootstrap.php:146
2015-04-26 04:44:37 --- DEBUG: #0 C:\wamp\www\pokebox\application\bootstrap.php(146): Kohana_Core::modules(Array)
#1 C:\wamp\www\pokebox\index.php(102): require('C:\\wamp\\www\\pok...')
#2 {main} in C:\wamp\www\pokebox\application\bootstrap.php:146
2015-04-26 04:44:37 --- CRITICAL: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'validate' at 'MODPATH\validate' ~ SYSPATH\classes\kohana\Core.php [ 579 ] in C:\wamp\www\pokebox\application\bootstrap.php:146
2015-04-26 04:44:37 --- DEBUG: #0 C:\wamp\www\pokebox\application\bootstrap.php(146): Kohana_Core::modules(Array)
#1 C:\wamp\www\pokebox\index.php(102): require('C:\\wamp\\www\\pok...')
#2 {main} in C:\wamp\www\pokebox\application\bootstrap.php:146
2015-04-26 04:44:52 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\kohana\database\MySQL.php [ 67 ] in C:\wamp\www\pokebox\modules\database\classes\kohana\database\MySQL.php:171
2015-04-26 04:44:52 --- DEBUG: #0 C:\wamp\www\pokebox\modules\database\classes\kohana\database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\pokebox\modules\database\classes\kohana\database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php(46): Kohana_ORM->__construct(2)
#7 C:\wamp\www\pokebox\application\classes\controller\battle.php(10): Kohana_ORM::factory('user', 2)
#8 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(69): Controller_Battle->before()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#11 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\pokebox\modules\database\classes\kohana\database\MySQL.php:171
2015-04-26 04:49:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\controller\battle.php [ 49 ] in file:line
2015-04-26 04:49:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-26 04:51:45 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\ORM.php [ 966 ] in C:\wamp\www\pokebox\application\classes\controller\game.php:21
2015-04-26 04:51:45 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\game.php(21): Kohana_ORM->find()
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Game->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\game.php:21
2015-04-26 04:55:37 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\ORM.php [ 966 ] in C:\wamp\www\pokebox\application\classes\controller\battle.php:21
2015-04-26 04:55:37 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\battle.php(21): Kohana_ORM->find()
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\battle.php:21
2015-04-26 04:55:55 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\Template.php [ 44 ] in file:line
2015-04-26 04:55:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-26 05:00:59 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\Template.php [ 44 ] in file:line
2015-04-26 05:00:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-26 05:02:50 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\ORM.php [ 991 ] in C:\wamp\www\pokebox\application\classes\controller\game.php:36
2015-04-26 05:02:50 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\game.php(36): Kohana_ORM->find_all()
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Game->action_move()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\game.php:36
2015-04-26 13:26:44 --- CRITICAL: ErrorException [ 8 ]: Object of class Model_Effectiveness could not be converted to int ~ APPPATH\classes\controller\battle.php [ 88 ] in C:\wamp\www\pokebox\application\classes\controller\battle.php:88
2015-04-26 13:26:44 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\battle.php(88): Kohana_Core::error_handler(8, 'Object of class...', 'C:\\wamp\\www\\pok...', 88, Array)
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_attack()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\battle.php:88
2015-04-26 13:46:31 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\ORM.php [ 991 ] in C:\wamp\www\pokebox\application\classes\controller\game.php:36
2015-04-26 13:46:31 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\game.php(36): Kohana_ORM->find_all()
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Game->action_move()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\game.php:36