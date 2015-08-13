<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-04 03:48:42 --- CRITICAL: ErrorException [ 2 ]: array_keys() expects parameter 1 to be array, object given ~ APPPATH\classes\model\battle.php [ 319 ] in file:line
2015-05-04 03:48:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_keys() ex...', 'C:\\wamp\\www\\pok...', 319, Array)
#1 C:\wamp\www\pokebox\application\classes\model\battle.php(319): array_keys(Object(stdClass))
#2 C:\wamp\www\pokebox\application\classes\model\battle.php(47): Model_Battle->hasNonVolatileStatus(Object(stdClass))
#3 C:\wamp\www\pokebox\application\classes\controller\battle.php(77): Model_Battle->processStatusChanges(Object(Model_Move), Object(Model_Battle_Opp_Pokemon), true)
#4 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_attack()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#7 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2015-05-04 04:17:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: own ~ APPPATH\classes\model\pokemon\owning.php [ 17 ] in C:\wamp\www\pokebox\application\classes\model\pokemon\owning.php:17
2015-05-04 04:17:53 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\model\pokemon\owning.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\pok...', 17, Array)
#1 C:\wamp\www\pokebox\application\classes\model\pokemon\owning.php(9): Model_Pokemon_Owning->calculateLevel()
#2 C:\wamp\www\pokebox\application\views\game\battle.php(3): Model_Pokemon_Owning->getHP()
#3 C:\wamp\www\pokebox\system\classes\kohana\View.php(62): include('C:\\wamp\\www\\pok...')
#4 C:\wamp\www\pokebox\system\classes\kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\pok...', Array)
#5 C:\wamp\www\pokebox\system\classes\kohana\View.php(236): Kohana_View->render()
#6 C:\wamp\www\pokebox\application\views\template.php(11): Kohana_View->__toString()
#7 C:\wamp\www\pokebox\system\classes\kohana\View.php(62): include('C:\\wamp\\www\\pok...')
#8 C:\wamp\www\pokebox\system\classes\kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\pok...', Array)
#9 C:\wamp\www\pokebox\system\classes\kohana\controller\Template.php(44): Kohana_View->render()
#10 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(87): Kohana_Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#13 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\pokebox\application\classes\model\pokemon\owning.php:17
2015-05-04 04:18:13 --- CRITICAL: Kohana_Exception [ 0 ]: The exp property does not exist in the Model_Battle_Opp_Pokemon class ~ MODPATH\orm\classes\kohana\ORM.php [ 687 ] in C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php:603
2015-05-04 04:18:13 --- DEBUG: #0 C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php(603): Kohana_ORM->get('exp')
#1 C:\wamp\www\pokebox\application\classes\model\pokemon\owning.php(17): Kohana_ORM->__get('exp')
#2 C:\wamp\www\pokebox\application\classes\model\pokemon\owning.php(9): Model_Pokemon_Owning->calculateLevel()
#3 C:\wamp\www\pokebox\application\views\game\battle.php(5): Model_Pokemon_Owning->getHP()
#4 C:\wamp\www\pokebox\system\classes\kohana\View.php(62): include('C:\\wamp\\www\\pok...')
#5 C:\wamp\www\pokebox\system\classes\kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\pok...', Array)
#6 C:\wamp\www\pokebox\system\classes\kohana\View.php(236): Kohana_View->render()
#7 C:\wamp\www\pokebox\application\views\template.php(11): Kohana_View->__toString()
#8 C:\wamp\www\pokebox\system\classes\kohana\View.php(62): include('C:\\wamp\\www\\pok...')
#9 C:\wamp\www\pokebox\system\classes\kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\pok...', Array)
#10 C:\wamp\www\pokebox\system\classes\kohana\controller\Template.php(44): Kohana_View->render()
#11 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#14 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#17 {main} in C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php:603
2015-05-04 04:19:00 --- CRITICAL: Kohana_Exception [ 0 ]: The level property does not exist in the Model_Pokemon_Own class ~ MODPATH\orm\classes\kohana\ORM.php [ 687 ] in C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php:603
2015-05-04 04:19:00 --- DEBUG: #0 C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php(603): Kohana_ORM->get('level')
#1 C:\wamp\www\pokebox\application\classes\model\pokemon\owning.php(17): Kohana_ORM->__get('level')
#2 C:\wamp\www\pokebox\application\classes\model\pokemon\owning.php(9): Model_Pokemon_Owning->calculateLevel()
#3 C:\wamp\www\pokebox\application\views\game\battle.php(3): Model_Pokemon_Owning->getHP()
#4 C:\wamp\www\pokebox\system\classes\kohana\View.php(62): include('C:\\wamp\\www\\pok...')
#5 C:\wamp\www\pokebox\system\classes\kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\pok...', Array)
#6 C:\wamp\www\pokebox\system\classes\kohana\View.php(236): Kohana_View->render()
#7 C:\wamp\www\pokebox\application\views\template.php(11): Kohana_View->__toString()
#8 C:\wamp\www\pokebox\system\classes\kohana\View.php(62): include('C:\\wamp\\www\\pok...')
#9 C:\wamp\www\pokebox\system\classes\kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\pok...', Array)
#10 C:\wamp\www\pokebox\system\classes\kohana\controller\Template.php(44): Kohana_View->render()
#11 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#14 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#17 {main} in C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php:603
2015-05-04 04:19:23 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH\classes\model\battle.php [ 108 ] in file:line
2015-05-04 04:19:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-04 04:22:58 --- CRITICAL: ErrorException [ 2 ]: array_map() expects parameter 1 to be a valid callback, function 'objectToArray' not found or invalid function name ~ APPPATH\classes\helper\General.php [ 20 ] in file:line
2015-05-04 04:22:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_map() exp...', 'C:\\wamp\\www\\pok...', 20, Array)
#1 C:\wamp\www\pokebox\application\classes\helper\General.php(20): array_map('objectToArray', Array)
#2 C:\wamp\www\pokebox\application\classes\model\battle.php(44): Helper_General::objectToArray(Object(stdClass))
#3 C:\wamp\www\pokebox\application\classes\controller\battle.php(75): Model_Battle->processStatusChanges(Object(Model_Move), Object(Model_Battle_Opp_Pokemon), true)
#4 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_attack()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#7 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2015-05-04 04:23:34 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ APPPATH\classes\helper\General.php [ 8 ] in file:line
2015-05-04 04:23:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-04 04:24:30 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ APPPATH\classes\helper\General.php [ 8 ] in file:line
2015-05-04 04:24:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-04 04:25:48 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\model\battle.php [ 133 ] in C:\wamp\www\pokebox\application\classes\model\battle.php:133
2015-05-04 04:25:48 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\model\battle.php(133): Kohana_Core::error_handler(2048, 'Only variables ...', 'C:\\wamp\\www\\pok...', 133, Array)
#1 C:\wamp\www\pokebox\application\classes\controller\battle.php(81): Model_Battle->processStatusEffects(Object(Model_Move), Object(Model_Move), Object(Model_Battle_Opp_Pokemon), true)
#2 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_attack()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#5 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\pokebox\application\classes\model\battle.php:133
2015-05-04 04:26:26 --- CRITICAL: ErrorException [ 2 ]: ksort() expects parameter 1 to be array, null given ~ APPPATH\classes\model\battle.php [ 134 ] in file:line
2015-05-04 04:26:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'ksort() expects...', 'C:\\wamp\\www\\pok...', 134, Array)
#1 C:\wamp\www\pokebox\application\classes\model\battle.php(134): ksort(NULL)
#2 C:\wamp\www\pokebox\application\classes\controller\battle.php(82): Model_Battle->processStatusEffects(Object(Model_Move), Object(Model_Move), Object(Model_Pokemon_Own), false)
#3 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_attack()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#6 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-05-04 04:26:57 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\model\battle.php [ 150 ] in C:\wamp\www\pokebox\application\classes\model\battle.php:150
2015-05-04 04:26:57 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\model\battle.php(150): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\\wamp\\www\\pok...', 150, Array)
#1 C:\wamp\www\pokebox\application\classes\controller\battle.php(82): Model_Battle->processStatusEffects(Object(Model_Move), Object(Model_Move), Object(Model_Pokemon_Own), false)
#2 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_attack()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#5 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\pokebox\application\classes\model\battle.php:150
2015-05-04 04:27:13 --- CRITICAL: ErrorException [ 8 ]: Undefined index: speedModifier ~ APPPATH\classes\controller\battle.php [ 141 ] in C:\wamp\www\pokebox\application\classes\controller\battle.php:141
2015-05-04 04:27:13 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\battle.php(141): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\pok...', 141, Array)
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_attack()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\battle.php:141
2015-05-04 04:27:17 --- CRITICAL: ErrorException [ 8 ]: Undefined index: speedModifier ~ APPPATH\classes\controller\battle.php [ 141 ] in C:\wamp\www\pokebox\application\classes\controller\battle.php:141
2015-05-04 04:27:17 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\battle.php(141): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\pok...', 141, Array)
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_attack()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\battle.php:141
2015-05-04 04:47:16 --- CRITICAL: ErrorException [ 8 ]: Undefined index: canMove ~ APPPATH\classes\controller\battle.php [ 117 ] in C:\wamp\www\pokebox\application\classes\controller\battle.php:117
2015-05-04 04:47:16 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\battle.php(117): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\pok...', 117, Array)
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_attack()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\battle.php:117
2015-05-04 14:54:01 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\ORM.php [ 991 ] in C:\wamp\www\pokebox\application\classes\controller\game.php:36
2015-05-04 14:54:01 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\game.php(36): Kohana_ORM->find_all()
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Game->action_move()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\game.php:36