<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-03-25 02:26:30 --- ERROR: ReflectionException [ -1 ]: Class controller_prev does not exist ~ SYSPATH\classes\kohana\request.php [ 1094 ]
2011-03-25 02:26:39 --- ERROR: ReflectionException [ -1 ]: Class controller_previous does not exist ~ SYSPATH\classes\kohana\request.php [ 1094 ]
2011-03-25 02:26:45 --- ERROR: ReflectionException [ -1 ]: Class controller_back does not exist ~ SYSPATH\classes\kohana\request.php [ 1094 ]
2011-03-25 02:26:57 --- ERROR: ReflectionException [ 0 ]: Method action_prev does not exist ~ SYSPATH\classes\kohana\request.php [ 1112 ]
2011-03-25 02:27:03 --- ERROR: ReflectionException [ 0 ]: Method action_back does not exist ~ SYSPATH\classes\kohana\request.php [ 1112 ]
2011-03-25 02:43:24 --- ERROR: ErrorException [ 1 ]: Class 'Message' not found ~ APPPATH\classes\controller\story.php [ 34 ]
2011-03-25 02:43:53 --- ERROR: ErrorException [ 1 ]: Class 'Self' not found ~ APPPATH\classes\model\message.php [ 33 ]
2011-03-25 02:44:12 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database::SELECT() ~ APPPATH\classes\model\message.php [ 33 ]
2011-03-25 02:45:00 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Model_Message::__construct() must be an instance of Kohana_Database_Result, instance of Database_Query given, called in C:\wamp\pokebox\application\classes\model\message.php on line 33 and defined ~ APPPATH\classes\model\message.php [ 7 ]
2011-03-25 02:50:25 --- ERROR: ErrorException [ 2 ]: current() expects parameter 1 to be array, integer given ~ APPPATH\classes\model\message.php [ 37 ]
2011-03-25 12:58:18 --- ERROR: ErrorException [ 2 ]: call_user_func() expects parameter 1 to be a valid callback, no array or string given ~ APPPATH\classes\controller\story.php [ 20 ]