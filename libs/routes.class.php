<?php
header("content-type:text/html;charset:utf-8");
if(!defined("come")){
    echo "非法访问";
    exit;
};
class routes{
    private static $m;
    private static $f;
    private static $a;
    private function getInfo(){
        self::$m=isset($_REQUEST['m'])&&!empty($_REQUEST['m'])?$_REQUEST['m']:'index';
        self::$f=isset($_REQUEST['f'])&&!empty($_REQUEST['f'])?$_REQUEST['f']:'index';
        self::$a=isset($_REQUEST['a'])&&!empty($_REQUEST['a'])?$_REQUEST['a']:'init';
    }
    public function set(){
        $this->getInfo();
        $murl=MODULES_PATH.'/'.self::$m;
        $F=self::$f;
        $furl=$murl.'/'.$F.'.class.php';
        if(is_dir($murl)){
            if(is_file($furl)){
                include_once $furl;
             if(class_exists($F)){
                 $obj = new $F();
                 $method=self::$a;
                 if(method_exists($obj,$method)){
                     $obj->$method();

                 }else{
                     echo self::$a."这个方法不存在";
                 }
             }else{
                 echo $F."这个类不存在";
             }
            }else{
               echo $furl."这个文件不存在";
            }
        }else{
            echo $murl."这个目录不存在";
        }
    }
}
?>