<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-09 12:06:01 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\admin\area\edit.php [ 23 ] in C:\wamp\www\pokebox\application\views\admin\area\edit.php:23
2015-06-09 12:06:01 --- DEBUG: #0 C:\wamp\www\pokebox\application\views\admin\area\edit.php(23): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\wamp\\www\\pok...', 23, Array)
#1 C:\wamp\www\pokebox\system\classes\kohana\View.php(62): include('C:\\wamp\\www\\pok...')
#2 C:\wamp\www\pokebox\system\classes\kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\pok...', Array)
#3 C:\wamp\www\pokebox\system\classes\kohana\View.php(236): Kohana_View->render()
#4 C:\wamp\www\pokebox\application\views\template.php(11): Kohana_View->__toString()
#5 C:\wamp\www\pokebox\system\classes\kohana\View.php(62): include('C:\\wamp\\www\\pok...')
#6 C:\wamp\www\pokebox\system\classes\kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\pok...', Array)
#7 C:\wamp\www\pokebox\system\classes\kohana\controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_World))
#11 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\pokebox\application\views\admin\area\edit.php:23
2015-06-09 12:16:11 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Area::load() ~ APPPATH\classes\controller\world.php [ 75 ] in file:line
2015-06-09 12:16:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-09 12:52:27 --- CRITICAL: ErrorException [ 8 ]: Undefined index: top_right ~ APPPATH\views\admin\area\fullrelation.php [ 26 ] in C:\wamp\www\pokebox\application\views\admin\area\fullrelation.php:26
2015-06-09 12:52:27 --- DEBUG: #0 C:\wamp\www\pokebox\application\views\admin\area\fullrelation.php(26): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\pok...', 26, Array)
#1 C:\wamp\www\pokebox\system\classes\kohana\View.php(62): include('C:\\wamp\\www\\pok...')
#2 C:\wamp\www\pokebox\system\classes\kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\pok...', Array)
#3 C:\wamp\www\pokebox\system\classes\kohana\View.php(236): Kohana_View->render()
#4 C:\wamp\www\pokebox\application\views\template.php(11): Kohana_View->__toString()
#5 C:\wamp\www\pokebox\system\classes\kohana\View.php(62): include('C:\\wamp\\www\\pok...')
#6 C:\wamp\www\pokebox\system\classes\kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\pok...', Array)
#7 C:\wamp\www\pokebox\system\classes\kohana\controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_World))
#11 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\pokebox\application\views\admin\area\fullrelation.php:26
2015-06-09 13:03:17 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'area_id' in 'where clause' [ SELECT `area`.`id` AS `id`, `area`.`name` AS `name`, `area`.`x` AS `x`, `area`.`y` AS `y`, `area`.`height` AS `height`, `area`.`width` AS `width`, `area`.`area_left_id` AS `area_left_id`, `area`.`area_right_id` AS `area_right_id`, `area`.`area_top_id` AS `area_top_id`, `area`.`area_bot_id` AS `area_bot_id` FROM `areas` AS `area` WHERE `area_id` != '6' ] ~ MODPATH\mysqli\classes\Database\MySQLi.php [ 174 ] in C:\wamp\www\pokebox\modules\database\classes\kohana\database\Query.php:251
2015-06-09 13:03:17 --- DEBUG: #0 C:\wamp\www\pokebox\modules\database\classes\kohana\database\Query.php(251): Database_MySQLi->query(1, 'SELECT `area`.`...', 'Model_Area', Array)
#1 C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\pokebox\application\classes\controller\world.php(52): Kohana_ORM->find_all()
#4 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_World->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_World))
#7 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\pokebox\modules\database\classes\kohana\database\Query.php:251