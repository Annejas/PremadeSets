<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-27 13:58:44 --- CRITICAL: Kohana_Exception [ 0 ]: The x_background property does not exist in the Model_Area_Npc class ~ MODPATH\orm\classes\kohana\ORM.php [ 687 ] in C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php:603
2015-05-27 13:58:44 --- DEBUG: #0 C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php(603): Kohana_ORM->get('x_background')
#1 C:\wamp\www\pokebox\application\views\admin\area\npcs.php(13): Kohana_ORM->__get('x_background')
#2 C:\wamp\www\pokebox\system\classes\kohana\View.php(62): include('C:\\wamp\\www\\pok...')
#3 C:\wamp\www\pokebox\system\classes\kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\pok...', Array)
#4 C:\wamp\www\pokebox\system\classes\kohana\View.php(236): Kohana_View->render()
#5 C:\wamp\www\pokebox\application\views\admin\area\edit.php(35): Kohana_View->__toString()
#6 C:\wamp\www\pokebox\system\classes\kohana\View.php(62): include('C:\\wamp\\www\\pok...')
#7 C:\wamp\www\pokebox\system\classes\kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\pok...', Array)
#8 C:\wamp\www\pokebox\system\classes\kohana\View.php(236): Kohana_View->render()
#9 C:\wamp\www\pokebox\application\views\template.php(11): Kohana_View->__toString()
#10 C:\wamp\www\pokebox\system\classes\kohana\View.php(62): include('C:\\wamp\\www\\pok...')
#11 C:\wamp\www\pokebox\system\classes\kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\pok...', Array)
#12 C:\wamp\www\pokebox\system\classes\kohana\controller\Template.php(44): Kohana_View->render()
#13 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(87): Kohana_Controller_Template->after()
#14 [internal function]: Kohana_Controller->execute()
#15 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_World))
#16 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#18 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#19 {main} in C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php:603
2015-05-27 14:06:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: php_cities_array ~ APPPATH\views\admin\area\npcs.php [ 14 ] in C:\wamp\www\pokebox\application\views\admin\area\npcs.php:14
2015-05-27 14:06:53 --- DEBUG: #0 C:\wamp\www\pokebox\application\views\admin\area\npcs.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\pok...', 14, Array)
#1 C:\wamp\www\pokebox\system\classes\kohana\View.php(62): include('C:\\wamp\\www\\pok...')
#2 C:\wamp\www\pokebox\system\classes\kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\pok...', Array)
#3 C:\wamp\www\pokebox\system\classes\kohana\View.php(236): Kohana_View->render()
#4 C:\wamp\www\pokebox\application\views\admin\area\edit.php(35): Kohana_View->__toString()
#5 C:\wamp\www\pokebox\system\classes\kohana\View.php(62): include('C:\\wamp\\www\\pok...')
#6 C:\wamp\www\pokebox\system\classes\kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\pok...', Array)
#7 C:\wamp\www\pokebox\system\classes\kohana\View.php(236): Kohana_View->render()
#8 C:\wamp\www\pokebox\application\views\template.php(11): Kohana_View->__toString()
#9 C:\wamp\www\pokebox\system\classes\kohana\View.php(62): include('C:\\wamp\\www\\pok...')
#10 C:\wamp\www\pokebox\system\classes\kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\pok...', Array)
#11 C:\wamp\www\pokebox\system\classes\kohana\controller\Template.php(44): Kohana_View->render()
#12 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(87): Kohana_Controller_Template->after()
#13 [internal function]: Kohana_Controller->execute()
#14 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_World))
#15 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#17 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#18 {main} in C:\wamp\www\pokebox\application\views\admin\area\npcs.php:14
2015-05-27 14:07:04 --- CRITICAL: ErrorException [ 2 ]: addcslashes() expects parameter 1 to be string, array given ~ APPPATH\views\admin\area\npcs.php [ 5 ] in file:line
2015-05-27 14:07:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'addcslashes() e...', 'C:\\wamp\\www\\pok...', 5, Array)
#1 C:\wamp\www\pokebox\application\views\admin\area\npcs.php(5): addcslashes(Array, '\x00..\x1F"\\')
#2 [internal function]: js_str(Array)
#3 C:\wamp\www\pokebox\application\views\admin\area\npcs.php(10): array_map('js_str', Array)
#4 C:\wamp\www\pokebox\application\views\admin\area\npcs.php(14): js_array(Array)
#5 C:\wamp\www\pokebox\system\classes\kohana\View.php(62): include('C:\\wamp\\www\\pok...')
#6 C:\wamp\www\pokebox\system\classes\kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\pok...', Array)
#7 C:\wamp\www\pokebox\system\classes\kohana\View.php(236): Kohana_View->render()
#8 C:\wamp\www\pokebox\application\views\admin\area\edit.php(35): Kohana_View->__toString()
#9 C:\wamp\www\pokebox\system\classes\kohana\View.php(62): include('C:\\wamp\\www\\pok...')
#10 C:\wamp\www\pokebox\system\classes\kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\pok...', Array)
#11 C:\wamp\www\pokebox\system\classes\kohana\View.php(236): Kohana_View->render()
#12 C:\wamp\www\pokebox\application\views\template.php(11): Kohana_View->__toString()
#13 C:\wamp\www\pokebox\system\classes\kohana\View.php(62): include('C:\\wamp\\www\\pok...')
#14 C:\wamp\www\pokebox\system\classes\kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\pok...', Array)
#15 C:\wamp\www\pokebox\system\classes\kohana\controller\Template.php(44): Kohana_View->render()
#16 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(87): Kohana_Controller_Template->after()
#17 [internal function]: Kohana_Controller->execute()
#18 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_World))
#19 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#20 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#21 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#22 {main} in file:line
2015-05-27 14:10:16 --- CRITICAL: ErrorException [ 2 ]: addcslashes() expects parameter 1 to be string, array given ~ APPPATH\views\admin\area\npcs.php [ 6 ] in file:line
2015-05-27 14:10:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'addcslashes() e...', 'C:\\wamp\\www\\pok...', 6, Array)
#1 C:\wamp\www\pokebox\application\views\admin\area\npcs.php(6): addcslashes(Array, '\x00..\x1F"\\')
#2 [internal function]: js_str(Array)
#3 C:\wamp\www\pokebox\application\views\admin\area\npcs.php(13): array_map('js_str', Array)
#4 C:\wamp\www\pokebox\application\views\admin\area\npcs.php(17): js_array(Array)
#5 C:\wamp\www\pokebox\system\classes\kohana\View.php(62): include('C:\\wamp\\www\\pok...')
#6 C:\wamp\www\pokebox\system\classes\kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\pok...', Array)
#7 C:\wamp\www\pokebox\system\classes\kohana\View.php(236): Kohana_View->render()
#8 C:\wamp\www\pokebox\application\views\admin\area\edit.php(35): Kohana_View->__toString()
#9 C:\wamp\www\pokebox\system\classes\kohana\View.php(62): include('C:\\wamp\\www\\pok...')
#10 C:\wamp\www\pokebox\system\classes\kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\pok...', Array)
#11 C:\wamp\www\pokebox\system\classes\kohana\View.php(236): Kohana_View->render()
#12 C:\wamp\www\pokebox\application\views\template.php(11): Kohana_View->__toString()
#13 C:\wamp\www\pokebox\system\classes\kohana\View.php(62): include('C:\\wamp\\www\\pok...')
#14 C:\wamp\www\pokebox\system\classes\kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\pok...', Array)
#15 C:\wamp\www\pokebox\system\classes\kohana\controller\Template.php(44): Kohana_View->render()
#16 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(87): Kohana_Controller_Template->after()
#17 [internal function]: Kohana_Controller->execute()
#18 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_World))
#19 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#20 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#21 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#22 {main} in file:line
2015-05-27 14:17:44 --- CRITICAL: Kohana_Exception [ 0 ]: The position property does not exist in the Model_Area_Npc class ~ MODPATH\orm\classes\kohana\ORM.php [ 687 ] in C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php:603
2015-05-27 14:17:44 --- DEBUG: #0 C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php(603): Kohana_ORM->get('position')
#1 C:\wamp\www\pokebox\application\views\admin\area\npcs.php(19): Kohana_ORM->__get('position')
#2 C:\wamp\www\pokebox\system\classes\kohana\View.php(62): include('C:\\wamp\\www\\pok...')
#3 C:\wamp\www\pokebox\system\classes\kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\pok...', Array)
#4 C:\wamp\www\pokebox\system\classes\kohana\View.php(236): Kohana_View->render()
#5 C:\wamp\www\pokebox\application\views\admin\area\edit.php(35): Kohana_View->__toString()
#6 C:\wamp\www\pokebox\system\classes\kohana\View.php(62): include('C:\\wamp\\www\\pok...')
#7 C:\wamp\www\pokebox\system\classes\kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\pok...', Array)
#8 C:\wamp\www\pokebox\system\classes\kohana\View.php(236): Kohana_View->render()
#9 C:\wamp\www\pokebox\application\views\template.php(11): Kohana_View->__toString()
#10 C:\wamp\www\pokebox\system\classes\kohana\View.php(62): include('C:\\wamp\\www\\pok...')
#11 C:\wamp\www\pokebox\system\classes\kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\pok...', Array)
#12 C:\wamp\www\pokebox\system\classes\kohana\controller\Template.php(44): Kohana_View->render()
#13 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(87): Kohana_Controller_Template->after()
#14 [internal function]: Kohana_Controller->execute()
#15 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_World))
#16 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#18 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#19 {main} in C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php:603
2015-05-27 14:21:23 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 64 ~ APPPATH\views\game\index.php [ 12 ] in C:\wamp\www\pokebox\application\views\game\index.php:12
2015-05-27 14:21:23 --- DEBUG: #0 C:\wamp\www\pokebox\application\views\game\index.php(12): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\wamp\\www\\pok...', 12, Array)
#1 C:\wamp\www\pokebox\system\classes\kohana\View.php(62): include('C:\\wamp\\www\\pok...')
#2 C:\wamp\www\pokebox\system\classes\kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\pok...', Array)
#3 C:\wamp\www\pokebox\system\classes\kohana\View.php(236): Kohana_View->render()
#4 C:\wamp\www\pokebox\application\views\template.php(11): Kohana_View->__toString()
#5 C:\wamp\www\pokebox\system\classes\kohana\View.php(62): include('C:\\wamp\\www\\pok...')
#6 C:\wamp\www\pokebox\system\classes\kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\pok...', Array)
#7 C:\wamp\www\pokebox\system\classes\kohana\controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#11 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\pokebox\application\views\game\index.php:12
2015-05-27 15:17:24 --- CRITICAL: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\views\admin\area\npcs.php [ 38 ] in file:line
2015-05-27 15:17:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', 'C:\\wamp\\www\\pok...', 38, Array)
#1 C:\wamp\www\pokebox\application\views\admin\area\npcs.php(38): implode(',', NULL)
#2 C:\wamp\www\pokebox\system\classes\kohana\View.php(62): include('C:\\wamp\\www\\pok...')
#3 C:\wamp\www\pokebox\system\classes\kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\pok...', Array)
#4 C:\wamp\www\pokebox\system\classes\kohana\View.php(236): Kohana_View->render()
#5 C:\wamp\www\pokebox\application\views\admin\area\edit.php(35): Kohana_View->__toString()
#6 C:\wamp\www\pokebox\system\classes\kohana\View.php(62): include('C:\\wamp\\www\\pok...')
#7 C:\wamp\www\pokebox\system\classes\kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\pok...', Array)
#8 C:\wamp\www\pokebox\system\classes\kohana\View.php(236): Kohana_View->render()
#9 C:\wamp\www\pokebox\application\views\template.php(11): Kohana_View->__toString()
#10 C:\wamp\www\pokebox\system\classes\kohana\View.php(62): include('C:\\wamp\\www\\pok...')
#11 C:\wamp\www\pokebox\system\classes\kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\pok...', Array)
#12 C:\wamp\www\pokebox\system\classes\kohana\controller\Template.php(44): Kohana_View->render()
#13 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(87): Kohana_Controller_Template->after()
#14 [internal function]: Kohana_Controller->execute()
#15 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_World))
#16 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#18 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#19 {main} in file:line