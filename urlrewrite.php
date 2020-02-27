<?php
$arUrlRewrite=array (
  7 => 
  array (
    'CONDITION' => '#^/about/([a-zA-Z0-9\\.\\-_]+)/?.*#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => 'bitrix::news.detail',
    'PATH' => '/about/index.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/aero-programs/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/aero-programs/index.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/avia-programs/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/avia-programs/index.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/articles/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/articles/index.php',
    'SORT' => 100,
  ),
  8 => 
  array (
    'CONDITION' => '#^/media/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/media/index.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/smi/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/smi/index.php',
    'SORT' => 100,
  ),
);
