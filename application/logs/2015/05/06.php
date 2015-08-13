<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-06 14:11:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: ownStatusEffects ~ APPPATH\classes\controller\battle.php [ 88 ] in C:\wamp\www\pokebox\application\classes\controller\battle.php:88
2015-05-06 14:11:20 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\battle.php(88): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\pok...', 88, Array)
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_attack()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\battle.php:88
2015-05-06 14:12:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: oppStatusEffects ~ APPPATH\classes\controller\battle.php [ 88 ] in C:\wamp\www\pokebox\application\classes\controller\battle.php:88
2015-05-06 14:12:06 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\battle.php(88): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\pok...', 88, Array)
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_attack()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\battle.php:88
2015-05-06 14:12:27 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to __() must be of the type array, string given, called in C:\wamp\www\pokebox\application\classes\controller\battle.php on line 257 and defined ~ SYSPATH\classes\kohana\I18n.php [ 155 ] in C:\wamp\www\pokebox\system\classes\kohana\I18n.php:155
2015-05-06 14:12:27 --- DEBUG: #0 C:\wamp\www\pokebox\system\classes\kohana\I18n.php(155): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\\wamp\\www\\pok...', 155, Array)
#1 C:\wamp\www\pokebox\application\classes\controller\battle.php(257): __('%s used %s', 'Glaceon', 'Stun Spore')
#2 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_attack()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#5 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\pokebox\system\classes\kohana\I18n.php:155
2015-05-06 14:15:09 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\controller\battle.php [ 791 ] in C:\wamp\www\pokebox\application\classes\controller\battle.php:791
2015-05-06 14:15:09 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\battle.php(791): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\wamp\\www\\pok...', 791, Array)
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_attack()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\battle.php:791
2015-05-06 14:15:36 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\controller\battle.php [ 791 ] in C:\wamp\www\pokebox\application\classes\controller\battle.php:791
2015-05-06 14:15:36 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\battle.php(791): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\wamp\\www\\pok...', 791, Array)
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_attack()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\battle.php:791
2015-05-06 16:46:24 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to __() must be of the type array, string given, called in C:\wamp\www\pokebox\application\classes\controller\battle.php on line 343 and defined ~ SYSPATH\classes\kohana\I18n.php [ 155 ] in C:\wamp\www\pokebox\system\classes\kohana\I18n.php:155
2015-05-06 16:46:24 --- DEBUG: #0 C:\wamp\www\pokebox\system\classes\kohana\I18n.php(155): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\\wamp\\www\\pok...', 155, Array)
#1 C:\wamp\www\pokebox\application\classes\controller\battle.php(343): __('Opponent %s fai...', 'Pidgey')
#2 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_attack()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#5 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\pokebox\system\classes\kohana\I18n.php:155
2015-05-06 16:54:53 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\ORM.php [ 991 ] in C:\wamp\www\pokebox\application\classes\controller\game.php:36
2015-05-06 16:54:53 --- DEBUG: #0 C:\wamp\www\pokebox\application\classes\controller\game.php(36): Kohana_ORM->find_all()
#1 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Game->action_move()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Game))
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\pokebox\application\classes\controller\game.php:36