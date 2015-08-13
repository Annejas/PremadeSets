<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-30 14:36:46 --- CRITICAL: Database_Exception [ 1146 ]: Table 'pokebox.move_statuses' doesn't exist [ SHOW FULL COLUMNS FROM `move_statuses` ] ~ MODPATH\mysqli\classes\Database\MySQLi.php [ 174 ] in C:\wamp\www\pokebox\modules\mysqli\classes\Database\MySQLi.php:338
2015-04-30 14:36:46 --- DEBUG: #0 C:\wamp\www\pokebox\modules\mysqli\classes\Database\MySQLi.php(338): Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php(1668): Database_MySQLi->list_columns('move_statuses')
#2 C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php(659): Kohana_ORM::factory('move_status')
#7 C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php(603): Kohana_ORM->get('statusses')
#8 C:\wamp\www\pokebox\application\classes\controller\battle.php(161): Kohana_ORM->__get('statusses')
#9 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_attack()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#12 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\pokebox\modules\mysqli\classes\Database\MySQLi.php:338
2015-04-30 14:37:11 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to __() must be of the type array, string given, called in C:\wamp\www\pokebox\application\classes\controller\battle.php on line 171 and defined ~ SYSPATH\classes\kohana\I18n.php [ 155 ] in C:\wamp\www\pokebox\system\classes\kohana\I18n.php:155
2015-04-30 14:37:11 --- DEBUG: #0 C:\wamp\www\pokebox\system\classes\kohana\I18n.php(155): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\\wamp\\www\\pok...', 155, Array)
#1 C:\wamp\www\pokebox\application\classes\controller\battle.php(171): __('Opponent %s is ...', 'Pidgey')
#2 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_Battle->action_attack()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Battle))
#5 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\pokebox\system\classes\kohana\I18n.php:155