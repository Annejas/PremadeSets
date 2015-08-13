<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-14 11:59:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: backgroundPositions ~ APPPATH\views\game\index.php [ 59 ] in C:\wamp\www\pokebox\application\views\game\index.php:59
2015-06-14 11:59:39 --- DEBUG: #0 C:\wamp\www\pokebox\application\views\game\index.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\pok...', 59, Array)
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
#14 {main} in C:\wamp\www\pokebox\application\views\game\index.php:59