<?php
if(!defined("come")){
    echo "非法访问";
    exit;
}
class index{
    public function init(){
        $title="我是标题";
        $smartyobj=new smarty();
        $smartyobj->setCompileUrl();
        $smartyobj->setTemplateUrl();
        $smartyobj->assign("title","我是标题");
        $smartyobj->assign("CSS_URL",CSS_URL);
        $smartyobj->display("index/index.html");
    }
}