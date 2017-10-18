<?php
class smarty{
    public $templateUrl;
    public $compileUrl;
    public $arr = array();
    public function setTemplateUrl($dirname='template'){
        if(!is_dir(APP_PATH.'/'.$dirname)){
            mkdir(APP_PATH.'/'.$dirname);
        }
        $this->templateUrl=APP_PATH.'/'.$dirname;
    }
    public function setcompileUrl($dirname='compile'){
        if(!is_dir(APP_PATH.'/'.$dirname)){
            mkdir(APP_PATH.'/'.$dirname);
        }
        $this->compileUrl=APP_PATH.'/'.$dirname;
    }
    public function assign($str,$val){
        $this->arr[$str]=$val;
    }
    public function display($url){

        $fullpath=$this->templateUrl.'/'.$url;
        $str=file_get_contents($fullpath);
        $newstr=preg_replace("/\{([^\}\s]+)\}/",'<?php echo $this->arr["$1"]?>',$str);
        $comfullpath=$this->compileUrl.'/'.md5($url).'.php';
        file_put_contents($comfullpath,$newstr);
        include $comfullpath;
    }
}
?>