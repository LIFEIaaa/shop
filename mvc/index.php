<?php
header("Content-Type:text/html;charset=utf-8");
//window  \     liunx  /
//定义当前路径分隔符
define("DS",DIRECTORY_SEPARATOR);
//定义文件根目录      D:\wamp\www\mvc\
define("ROOT",__DIR__.DS);
//定义核心类根目录   D:\wamp\www\mvc\libs\
define("LIBS_PATH",ROOT."libs".DS);
//定义app(应用文件)根目录     D:\wamp\www\mvc\app\
define("APP_PATH",ROOT."app".DS);
//定义smarty编译文件放置的目录   D:\wamp\www\mvc\compile
define("COMPILE_PATH",ROOT."compile");


//M  V   C各自的目录
define("MODEL_PATH",APP_PATH."model".DS);
//定义视图根目录
define("VIEW_PATH",APP_PATH."views");
//定义控制器根目录
define("CONTROLLER_PATH",APP_PATH."controller".DS);
//定义本地字体文件目录
define("FONT_PATH",ROOT.DS."static/font");
//定义上传目录
define("UPLOAD_PATH",ROOT."upload".DS);

//定义当前的网络地址根目录    http://localhost/mvc/
define("WEB_PATH","//".$_SERVER["SERVER_NAME"].substr($_SERVER["SCRIPT_NAME"],0,strrpos($_SERVER["SCRIPT_NAME"],"/")+1));

//定义各种静态文件的根路径
//css文件的网络地址
define("CSS_PATH",WEB_PATH."static/css");
//js文件的网络地址
define("JS_PATH",WEB_PATH."static/js");
//img文件的网络地址
define("IMG_PATH",WEB_PATH."static/images");

//导入当前应用的核心类
include LIBS_PATH."db.class.php";
include LIBS_PATH."session.class.php";
include LIBS_PATH."router.class.php";
include LIBS_PATH."code.class.php";
include LIBS_PATH."smarty".DS."libs".DS."Smarty.class.php";
include LIBS_PATH."controller.class.php";
include LIBS_PATH."pager.class.php";
include LIBS_PATH."upload.class.php";
include LIBS_PATH."indexcontroller.class.php";
include LIBS_PATH."Ucpaas.class.php";

$router=new router();
$router->jump();











//echo $_SERVER["SERVER_NAME"];      //localhost
//echo substr($_SERVER["SCRIPT_NAME"],0,strrpos($_SERVER["SERVER_NAME"],"/")+1);     //    /mvc/index.php
//      localhost/mvc
//           // 双斜杠：使用当前的协议 http