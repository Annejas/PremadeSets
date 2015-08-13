<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-03 05:06:23 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\model\battle.php [ 48 ] in file:line
2015-05-03 05:06:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-03 05:17:37 --- CRITICAL: Database_Exception [ 2 ]: mysqli_connect(): (HY000/2002): No connection could be made because the target machine actively refused it.
 ~ MODPATH\mysqli\classes\Database\MySQLi.php [ 59 ] in C:\wamp\www\pokebox\modules\mysqli\classes\Database\MySQLi.php:157
2015-05-03 05:17:37 --- DEBUG: #0 C:\wamp\www\pokebox\modules\mysqli\classes\Database\MySQLi.php(157): Database_MySQLi->connect()
#1 C:\wamp\www\pokebox\modules\mysqli\classes\Database\MySQLi.php(338): Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#2 C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php(1668): Database_MySQLi->list_columns('users')
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
#14 {main} in C:\wamp\www\pokebox\modules\mysqli\classes\Database\MySQLi.php:157
2015-05-03 05:21:27 --- CRITICAL: ErrorException [ 1 ]: Access to undeclared static property: Model_Status::$STATUS_FROZEN ~ APPPATH\classes\model\battle.php [ 87 ] in file:line
2015-05-03 05:21:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-03 05:22:27 --- CRITICAL: ErrorException [ 1 ]: Access to undeclared static property: Model_Status::$STATUS_POISON ~ APPPATH\classes\model\battle.php [ 86 ] in file:line
2015-05-03 05:22:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-03 05:23:26 --- CRITICAL: ErrorException [ 2 ]: array_intersect(): Argument #1 is not an array ~ APPPATH\classes\model\battle.php [ 48 ] in file:line
2015-05-03 05:23:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_intersect...', 'C:\\wamp\\www\\pok...', 48, Array)
#1 C:\wamp\www\pokebox\application\classes\model\battle.php(48): array_intersect('2', Array)
#2 C:\wamp\www\pokebox\application\classes\controller\battle.php(77): Model_Battle->processStatusChanges(Object(Model_Move), Object(Model_Battle_Opp_Pokemon), true)
#3 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_attack()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#6 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-05-03 05:24:06 --- CRITICAL: ErrorException [ 1 ]: Access to undeclared static property: Model_Status::$STATUS_BURN ~ APPPATH\classes\model\battle.php [ 51 ] in file:line
2015-05-03 05:24:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-03 05:24:20 --- CRITICAL: ErrorException [ 1 ]: Access to undeclared static property: Model_Status::$STATUS_BURN ~ APPPATH\classes\model\battle.php [ 61 ] in file:line
2015-05-03 05:24:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-03 05:50:22 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'STATUS_BURN' ~ APPPATH\classes\model\battle.php [ 138 ] in file:line
2015-05-03 05:50:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-03 05:51:08 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'STATUS_FROZEN' ~ APPPATH\classes\model\battle.php [ 142 ] in file:line
2015-05-03 05:51:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-03 05:51:31 --- CRITICAL: Kohana_Exception [ 0 ]: The total_hp property does not exist in the Model_Battle_Opp_Pokemon class ~ MODPATH\orm\classes\kohana\ORM.php [ 687 ] in C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php:603
2015-05-03 05:51:31 --- DEBUG: #0 C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php(603): Kohana_ORM->get('total_hp')
#1 C:\wamp\www\pokebox\application\classes\model\battle.php(104): Kohana_ORM->__get('total_hp')
#2 C:\wamp\www\pokebox\application\classes\controller\battle.php(83): Model_Battle->processStatusEffects(Object(Model_Move), Object(Model_Battle_Opp_Pokemon), true)
#3 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_attack()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#6 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php:603
2015-05-03 06:13:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: physicalModifier ~ APPPATH\classes\model\battle.php [ 147 ] in C:\wamp\www\pokebox\application\classes\model\battle.php:147
2015-05-03 06:13:29 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\model\battle.php(147): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\pok...', 147, Array)
#1 C:\wamp\www\pokebox\application\classes\controller\battle.php(83): Model_Battle->processStatusEffects(Object(Model_Move), Object(Model_Move), Object(Model_Battle_Opp_Pokemon), true)
#2 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_attack()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#5 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\pokebox\application\classes\model\battle.php:147
2015-05-03 06:14:14 --- CRITICAL: Kohana_Exception [ 0 ]: The statuses property does not exist in the Model_Move class ~ MODPATH\orm\classes\kohana\ORM.php [ 687 ] in C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php:603
2015-05-03 06:14:14 --- DEBUG: #0 C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php(603): Kohana_ORM->get('statuses')
#1 C:\wamp\www\pokebox\application\classes\model\battle.php(44): Kohana_ORM->__get('statuses')
#2 C:\wamp\www\pokebox\application\classes\controller\battle.php(84): Model_Battle->processStatusChanges(Object(Model_Move), Object(Model_Move), Object(Model_Pokemon_Own), false)
#3 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_attack()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#6 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php:603
2015-05-03 06:15:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: oppStatusEffects ~ APPPATH\classes\controller\battle.php [ 144 ] in C:\wamp\www\pokebox\application\classes\controller\battle.php:144
2015-05-03 06:15:06 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\battle.php(144): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\pok...', 144, Array)
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_attack()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\battle.php:144
2015-05-03 06:16:40 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\ORM.php [ 991 ] in C:\wamp\www\pokebox\application\classes\controller\game.php:36
2015-05-03 06:16:40 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\game.php(36): Kohana_ORM->find_all()
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Game->action_move()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\game.php:36
2015-05-03 13:05:43 --- CRITICAL: ErrorException [ 2 ]: array_intersect(): Argument #1 is not an array ~ APPPATH\classes\model\battle.php [ 181 ] in file:line
2015-05-03 13:05:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_intersect...', 'C:\\wamp\\www\\pok...', 181, Array)
#1 C:\wamp\www\pokebox\application\classes\model\battle.php(181): array_intersect(NULL, Array)
#2 C:\wamp\www\pokebox\application\classes\model\battle.php(47): Model_Battle->hasNonVolatileStatus(NULL)
#3 C:\wamp\www\pokebox\application\classes\controller\battle.php(77): Model_Battle->processStatusChanges(Object(Model_Move), Object(Model_Battle_Opp_Pokemon), true)
#4 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_attack()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#7 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2015-05-03 13:07:15 --- CRITICAL: ErrorException [ 2 ]: array_keys() expects parameter 1 to be array, null given ~ APPPATH\classes\model\battle.php [ 181 ] in file:line
2015-05-03 13:07:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_keys() ex...', 'C:\\wamp\\www\\pok...', 181, Array)
#1 C:\wamp\www\pokebox\application\classes\model\battle.php(181): array_keys(NULL)
#2 C:\wamp\www\pokebox\application\classes\model\battle.php(47): Model_Battle->hasNonVolatileStatus(NULL)
#3 C:\wamp\www\pokebox\application\classes\controller\battle.php(77): Model_Battle->processStatusChanges(Object(Model_Move), Object(Model_Battle_Opp_Pokemon), true)
#4 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_attack()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#7 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#10 {main} in file:line