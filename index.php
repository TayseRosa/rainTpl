<?php
   
    require ("vendor/autoload.php");
    use Rain\Tpl;

    $config = array(
        "tpl_dir"       => "tpl/",
        "cache_dir"     => "cache/"
);
Tpl::configure( $config );

$tpl = new Tpl;
$tpl->assign("name", "Tayse Rosa");
$tpl->assign("version", PHP_VERSION);
$tpl->draw('index');