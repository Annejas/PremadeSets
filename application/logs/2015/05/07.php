<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-07 02:57:50 --- CRITICAL: ErrorException [ 8 ]: Undefined index: beforeOwnMoveText ~ APPPATH\classes\controller\battle.php [ 262 ] in C:\wamp\www\pokebox\application\classes\controller\battle.php:262
2015-05-07 02:57:50 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\battle.php(262): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\pok...', 262, Array)
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_attack()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\battle.php:262
2015-05-07 03:05:09 --- CRITICAL: ErrorException [ 8 ]: Undefined index: message ~ APPPATH\classes\controller\battle.php [ 134 ] in C:\wamp\www\pokebox\application\classes\controller\battle.php:134
2015-05-07 03:05:09 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\battle.php(134): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\pok...', 134, Array)
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_attack()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\battle.php:134
2015-05-07 03:05:25 --- CRITICAL: ErrorException [ 8 ]: Undefined index: data ~ APPPATH\classes\controller\battle.php [ 134 ] in C:\wamp\www\pokebox\application\classes\controller\battle.php:134
2015-05-07 03:05:25 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\battle.php(134): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\pok...', 134, Array)
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_attack()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\battle.php:134
2015-05-07 03:10:06 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\controller\battle.php [ 266 ] in C:\wamp\www\pokebox\application\classes\controller\battle.php:266
2015-05-07 03:10:06 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\battle.php(266): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\\wamp\\www\\pok...', 266, Array)
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_attack()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\battle.php:266
2015-05-07 03:40:39 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\ORM.php [ 991 ] in C:\wamp\www\pokebox\application\classes\controller\game.php:36
2015-05-07 03:40:39 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\game.php(36): Kohana_ORM->find_all()
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Game->action_move()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\game.php:36
2015-05-07 03:41:19 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\ORM.php [ 991 ] in C:\wamp\www\pokebox\application\classes\controller\game.php:36
2015-05-07 03:41:19 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\game.php(36): Kohana_ORM->find_all()
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Game->action_move()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\game.php:36
2015-05-07 03:45:52 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\ORM.php [ 991 ] in C:\wamp\www\pokebox\application\classes\controller\game.php:15
2015-05-07 03:45:52 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\game.php(15): Kohana_ORM->find_all()
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Game->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\game.php:15
2015-05-07 03:46:37 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Battle::count() ~ APPPATH\classes\controller\game.php [ 15 ] in file:line
2015-05-07 03:46:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-07 03:49:00 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\ORM.php [ 991 ] in C:\wamp\www\pokebox\application\classes\controller\game.php:15
2015-05-07 03:49:00 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\game.php(15): Kohana_ORM->find_all()
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Game->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\game.php:15
2015-05-07 03:49:25 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\ORM.php [ 991 ] in C:\wamp\www\pokebox\application\classes\controller\game.php:15
2015-05-07 03:49:25 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\game.php(15): Kohana_ORM->find_all()
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Game->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\game.php:15
2015-05-07 03:50:46 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\ORM.php [ 991 ] in C:\wamp\www\pokebox\application\classes\controller\game.php:15
2015-05-07 03:50:46 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\game.php(15): Kohana_ORM->find_all()
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Game->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\game.php:15
2015-05-07 03:51:02 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\controller\game.php [ 16 ] in file:line
2015-05-07 03:51:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-07 05:18:42 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Battle::action_switch(), called in C:\wamp\www\pokebox\system\classes\kohana\Controller.php on line 84 and defined ~ APPPATH\classes\controller\battle.php [ 1365 ] in C:\wamp\www\pokebox\application\classes\controller\battle.php:1365
2015-05-07 05:18:42 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\battle.php(1365): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\wamp\\www\\pok...', 1365, Array)
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_switch()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\battle.php:1365
2015-05-07 07:09:15 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Battle::getUser() ~ APPPATH\classes\controller\battle.php [ 1495 ] in file:line
2015-05-07 07:09:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-07 07:09:37 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'status' in 'where clause' [ SELECT `pokemon_own`.`id` AS `id`, `pokemon_own`.`pokemon_id` AS `pokemon_id`, `pokemon_own`.`user_id` AS `user_id`, `pokemon_own`.`roster` AS `roster`, `pokemon_own`.`box` AS `box`, `pokemon_own`.`exp` AS `exp`, `pokemon_own`.`current_hp` AS `current_hp`, `pokemon_own`.`current_status` AS `current_status`, `pokemon_own`.`attack_modifier` AS `attack_modifier`, `pokemon_own`.`defense_modifier` AS `defense_modifier`, `pokemon_own`.`spattack_modifier` AS `spattack_modifier`, `pokemon_own`.`spdefense_modifier` AS `spdefense_modifier`, `pokemon_own`.`speed_modifier` AS `speed_modifier`, `pokemon_own`.`crit_stage` AS `crit_stage`, `pokemon_own`.`move1_id` AS `move1_id`, `pokemon_own`.`move2_id` AS `move2_id`, `pokemon_own`.`move3_id` AS `move3_id`, `pokemon_own`.`move4_id` AS `move4_id`, `pokemon_own`.`move1_current_pp` AS `move1_current_pp`, `pokemon_own`.`move1_max_pp` AS `move1_max_pp`, `pokemon_own`.`move2_current_pp` AS `move2_current_pp`, `pokemon_own`.`move2_max_pp` AS `move2_max_pp`, `pokemon_own`.`move3_current_pp` AS `move3_current_pp`, `pokemon_own`.`move3_max_pp` AS `move3_max_pp`, `pokemon_own`.`move4_current_pp` AS `move4_current_pp`, `pokemon_own`.`move4_max_pp` AS `move4_max_pp`, `pokemon_own`.`item_id` AS `item_id`, `pokemon_own`.`user_caught_id` AS `user_caught_id`, `pokemon_own`.`has_fought` AS `has_fought`, `pokemon_own`.`statuses` AS `statuses` FROM `pokemon_owns` AS `pokemon_own` WHERE `pokemon_own`.`user_id` = '2' AND `roster` = 52 AND `status` != '1' LIMIT 1 ] ~ MODPATH\mysqli\classes\Database\MySQLi.php [ 174 ] in C:\wamp\www\pokebox\modules\database\classes\kohana\database\Query.php:251
2015-05-07 07:09:37 --- DEBUG: #0 C:\wamp\www\pokebox\modules\database\classes\kohana\database\Query.php(251): Database_MySQLi->query(1, 'SELECT `pokemon...', false, Array)
#1 C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\pokebox\application\classes\controller\battle.php(1502): Kohana_ORM->find()
#4 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_use_item()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#7 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\pokebox\modules\database\classes\kohana\database\Query.php:251
2015-05-07 07:10:04 --- CRITICAL: Kohana_Exception [ 0 ]: The total_hp property does not exist in the Model_Pokemon_Own class ~ MODPATH\orm\classes\kohana\ORM.php [ 687 ] in C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php:603
2015-05-07 07:10:04 --- DEBUG: #0 C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php(603): Kohana_ORM->get('total_hp')
#1 C:\wamp\www\pokebox\application\classes\controller\battle.php(1503): Kohana_ORM->__get('total_hp')
#2 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_use_item()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#5 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php:603
2015-05-07 07:16:34 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQLi_Result::$count ~ APPPATH\classes\controller\battle.php [ 1506 ] in C:\wamp\www\pokebox\application\classes\controller\battle.php:1506
2015-05-07 07:16:34 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\battle.php(1506): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\wamp\\www\\pok...', 1506, Array)
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_use_item()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\battle.php:1506
2015-05-07 07:16:46 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Pokemon_Own::count() ~ APPPATH\classes\controller\battle.php [ 1506 ] in file:line
2015-05-07 07:16:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-07 07:19:15 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQLi_Result::$name ~ APPPATH\classes\controller\battle.php [ 1511 ] in C:\wamp\www\pokebox\application\classes\controller\battle.php:1511
2015-05-07 07:19:15 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\battle.php(1511): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\wamp\\www\\pok...', 1511, Array)
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_use_item()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\battle.php:1511
2015-05-07 07:19:51 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQLi_Result::$name ~ APPPATH\classes\controller\battle.php [ 1510 ] in C:\wamp\www\pokebox\application\classes\controller\battle.php:1510
2015-05-07 07:19:51 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\battle.php(1510): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\wamp\\www\\pok...', 1510, Array)
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_use_item()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\battle.php:1510
2015-05-07 07:20:22 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQLi_Result::$item_name ~ APPPATH\classes\controller\battle.php [ 1510 ] in C:\wamp\www\pokebox\application\classes\controller\battle.php:1510
2015-05-07 07:20:22 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\battle.php(1510): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\wamp\\www\\pok...', 1510, Array)
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_use_item()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\battle.php:1510
2015-05-07 07:22:29 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_item_action_type' not found ~ MODPATH\orm\classes\kohana\ORM.php [ 46 ] in file:line
2015-05-07 07:22:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-07 07:22:33 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_item_action_type' not found ~ MODPATH\orm\classes\kohana\ORM.php [ 46 ] in file:line
2015-05-07 07:22:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-07 08:07:34 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Battle::action_switch(), called in C:\wamp\www\pokebox\system\classes\kohana\Controller.php on line 84 and defined ~ APPPATH\classes\controller\battle.php [ 1381 ] in C:\wamp\www\pokebox\application\classes\controller\battle.php:1381
2015-05-07 08:07:34 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\battle.php(1381): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\wamp\\www\\pok...', 1381, Array)
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_switch()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\battle.php:1381
2015-05-07 08:24:18 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\orm\classes\kohana\ORM.php [ 1602 ] in C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php:1602
2015-05-07 08:24:18 --- DEBUG: #0 C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php(1602): Kohana_Core::error_handler(2, 'Illegal offset ...', 'C:\\wamp\\www\\pok...', 1602, Array)
#1 C:\wamp\www\pokebox\application\classes\controller\battle.php(1540): Kohana_ORM->remove(Object(Model_Item))
#2 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_use_item()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#5 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php:1602
2015-05-07 08:38:34 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Item::count() ~ APPPATH\classes\controller\battle.php [ 1559 ] in file:line
2015-05-07 08:38:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-07 08:42:43 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Battle::action_switch(), called in C:\wamp\www\pokebox\system\classes\kohana\Controller.php on line 84 and defined ~ APPPATH\classes\controller\battle.php [ 1381 ] in C:\wamp\www\pokebox\application\classes\controller\battle.php:1381
2015-05-07 08:42:43 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\battle.php(1381): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\wamp\\www\\pok...', 1381, Array)
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_switch()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\battle.php:1381
2015-05-07 09:01:35 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\ORM.php [ 966 ] in C:\wamp\www\pokebox\application\classes\controller\battle.php:1389
2015-05-07 09:01:35 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\battle.php(1389): Kohana_ORM->find()
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_switch()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\battle.php:1389
2015-05-07 09:02:01 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQLi_Result::$move1_current_pp ~ APPPATH\classes\controller\battle.php(1427) : eval()'d code [ 1 ] in C:\wamp\www\pokebox\application\classes\controller\battle.php(1427) : eval()'d code:1
2015-05-07 09:02:01 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\battle.php(1427) : eval()'d code(1): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\wamp\\www\\pok...', 1, Array)
#1 C:\wamp\www\pokebox\application\classes\controller\battle.php(1427): eval()
#2 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_switch()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#5 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\pokebox\application\classes\controller\battle.php(1427) : eval()'d code:1
2015-05-07 09:05:21 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\model\battle.php [ 406 ] in C:\wamp\www\pokebox\application\classes\model\battle.php:406
2015-05-07 09:05:21 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\model\battle.php(406): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\\wamp\\www\\pok...', 406, Array)
#1 C:\wamp\www\pokebox\application\classes\controller\battle.php(1404): Model_Battle->processSwitchOut(Object(Model_Pokemon_Own))
#2 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_switch()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#5 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\pokebox\application\classes\model\battle.php:406
2015-05-07 09:08:35 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to __() must be of the type array, string given, called in C:\wamp\www\pokebox\application\classes\controller\battle.php on line 1441 and defined ~ SYSPATH\classes\kohana\I18n.php [ 155 ] in C:\wamp\www\pokebox\system\classes\kohana\I18n.php:155
2015-05-07 09:08:35 --- DEBUG: #0 C:\wamp\www\pokebox\system\classes\kohana\I18n.php(155): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\\wamp\\www\\pok...', 155, Array)
#1 C:\wamp\www\pokebox\application\classes\controller\battle.php(1441): __('Come back %s', 'Glaceon')
#2 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_switch()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#5 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\pokebox\system\classes\kohana\I18n.php:155
2015-05-07 09:21:21 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\ORM.php [ 991 ] in C:\wamp\www\pokebox\application\classes\controller\game.php:35
2015-05-07 09:21:21 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\game.php(35): Kohana_ORM->find_all()
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Game->action_move()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\game.php:35
2015-05-07 09:24:55 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Pokemon_Own::order() ~ APPPATH\classes\controller\battle.php [ 38 ] in file:line
2015-05-07 09:24:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-07 09:25:04 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'IF(roster=3,1,0' in 'order clause' [ SELECT `pokemon_own`.`id` AS `id`, `pokemon_own`.`pokemon_id` AS `pokemon_id`, `pokemon_own`.`user_id` AS `user_id`, `pokemon_own`.`roster` AS `roster`, `pokemon_own`.`box` AS `box`, `pokemon_own`.`exp` AS `exp`, `pokemon_own`.`current_hp` AS `current_hp`, `pokemon_own`.`current_status` AS `current_status`, `pokemon_own`.`attack_modifier` AS `attack_modifier`, `pokemon_own`.`defense_modifier` AS `defense_modifier`, `pokemon_own`.`spattack_modifier` AS `spattack_modifier`, `pokemon_own`.`spdefense_modifier` AS `spdefense_modifier`, `pokemon_own`.`speed_modifier` AS `speed_modifier`, `pokemon_own`.`crit_stage` AS `crit_stage`, `pokemon_own`.`move1_id` AS `move1_id`, `pokemon_own`.`move2_id` AS `move2_id`, `pokemon_own`.`move3_id` AS `move3_id`, `pokemon_own`.`move4_id` AS `move4_id`, `pokemon_own`.`move1_current_pp` AS `move1_current_pp`, `pokemon_own`.`move1_max_pp` AS `move1_max_pp`, `pokemon_own`.`move2_current_pp` AS `move2_current_pp`, `pokemon_own`.`move2_max_pp` AS `move2_max_pp`, `pokemon_own`.`move3_current_pp` AS `move3_current_pp`, `pokemon_own`.`move3_max_pp` AS `move3_max_pp`, `pokemon_own`.`move4_current_pp` AS `move4_current_pp`, `pokemon_own`.`move4_max_pp` AS `move4_max_pp`, `pokemon_own`.`item_id` AS `item_id`, `pokemon_own`.`user_caught_id` AS `user_caught_id`, `pokemon_own`.`has_fought` AS `has_fought`, `pokemon_own`.`statuses` AS `statuses` FROM `pokemon_owns` AS `pokemon_own` WHERE `pokemon_own`.`user_id` = '2' AND `box` = '0' ORDER BY `IF(roster=3,1,0` DESC, `roster` ASC ] ~ MODPATH\mysqli\classes\Database\MySQLi.php [ 174 ] in C:\wamp\www\pokebox\modules\database\classes\kohana\database\Query.php:251
2015-05-07 09:25:04 --- DEBUG: #0 C:\wamp\www\pokebox\modules\database\classes\kohana\database\Query.php(251): Database_MySQLi->query(1, 'SELECT `pokemon...', 'Model_Pokemon_O...', Array)
#1 C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\pokebox\application\classes\controller\battle.php(38): Kohana_ORM->find_all()
#4 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#7 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\pokebox\modules\database\classes\kohana\database\Query.php:251
2015-05-07 09:25:35 --- CRITICAL: ErrorException [ 2 ]: array_map(): Argument #2 should be an array ~ MODPATH\database\classes\kohana\database\Expression.php [ 129 ] in file:line
2015-05-07 09:25:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_map(): Ar...', 'C:\\wamp\\www\\pok...', 129, Array)
#1 C:\wamp\www\pokebox\modules\database\classes\kohana\database\Expression.php(129): array_map(Array, 'DESC')
#2 C:\wamp\www\pokebox\modules\database\classes\kohana\Database.php(519): Kohana_Database_Expression->compile(Object(Database_MySQLi))
#3 C:\wamp\www\pokebox\modules\database\classes\kohana\database\query\Builder.php(226): Kohana_Database->quote_column(Object(Database_Expression))
#4 C:\wamp\www\pokebox\modules\database\classes\kohana\database\query\builder\Select.php(390): Kohana_Database_Query_Builder->_compile_order_by(Object(Database_MySQLi), Array)
#5 C:\wamp\www\pokebox\modules\database\classes\kohana\database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQLi))
#6 C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQLi))
#7 C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#8 C:\wamp\www\pokebox\application\classes\controller\battle.php(38): Kohana_ORM->find_all()
#9 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#12 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2015-05-07 09:25:48 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DESC, `roster` ASC' at line 1 [ SELECT `pokemon_own`.`id` AS `id`, `pokemon_own`.`pokemon_id` AS `pokemon_id`, `pokemon_own`.`user_id` AS `user_id`, `pokemon_own`.`roster` AS `roster`, `pokemon_own`.`box` AS `box`, `pokemon_own`.`exp` AS `exp`, `pokemon_own`.`current_hp` AS `current_hp`, `pokemon_own`.`current_status` AS `current_status`, `pokemon_own`.`attack_modifier` AS `attack_modifier`, `pokemon_own`.`defense_modifier` AS `defense_modifier`, `pokemon_own`.`spattack_modifier` AS `spattack_modifier`, `pokemon_own`.`spdefense_modifier` AS `spdefense_modifier`, `pokemon_own`.`speed_modifier` AS `speed_modifier`, `pokemon_own`.`crit_stage` AS `crit_stage`, `pokemon_own`.`move1_id` AS `move1_id`, `pokemon_own`.`move2_id` AS `move2_id`, `pokemon_own`.`move3_id` AS `move3_id`, `pokemon_own`.`move4_id` AS `move4_id`, `pokemon_own`.`move1_current_pp` AS `move1_current_pp`, `pokemon_own`.`move1_max_pp` AS `move1_max_pp`, `pokemon_own`.`move2_current_pp` AS `move2_current_pp`, `pokemon_own`.`move2_max_pp` AS `move2_max_pp`, `pokemon_own`.`move3_current_pp` AS `move3_current_pp`, `pokemon_own`.`move3_max_pp` AS `move3_max_pp`, `pokemon_own`.`move4_current_pp` AS `move4_current_pp`, `pokemon_own`.`move4_max_pp` AS `move4_max_pp`, `pokemon_own`.`item_id` AS `item_id`, `pokemon_own`.`user_caught_id` AS `user_caught_id`, `pokemon_own`.`has_fought` AS `has_fought`, `pokemon_own`.`statuses` AS `statuses` FROM `pokemon_owns` AS `pokemon_own` WHERE `pokemon_own`.`user_id` = '2' AND `box` = '0' ORDER BY IF(roster=3,1,0 DESC, `roster` ASC ] ~ MODPATH\mysqli\classes\Database\MySQLi.php [ 174 ] in C:\wamp\www\pokebox\modules\database\classes\kohana\database\Query.php:251
2015-05-07 09:25:48 --- DEBUG: #0 C:\wamp\www\pokebox\modules\database\classes\kohana\database\Query.php(251): Database_MySQLi->query(1, 'SELECT `pokemon...', 'Model_Pokemon_O...', Array)
#1 C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\pokebox\application\classes\controller\battle.php(38): Kohana_ORM->find_all()
#4 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#7 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\pokebox\modules\database\classes\kohana\database\Query.php:251
2015-05-07 09:26:29 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\ORM.php [ 991 ] in C:\wamp\www\pokebox\application\classes\controller\game.php:35
2015-05-07 09:26:29 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\game.php(35): Kohana_ORM->find_all()
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Game->action_move()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\game.php:35
2015-05-07 11:07:56 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\ORM.php [ 991 ] in C:\wamp\www\pokebox\application\classes\controller\game.php:35
2015-05-07 11:07:56 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\game.php(35): Kohana_ORM->find_all()
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Game->action_move()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\game.php:35
2015-05-07 11:19:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\controller\world.php [ 25 ] in file:line
2015-05-07 11:19:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line