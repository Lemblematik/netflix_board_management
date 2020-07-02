<?php


namespace PaulKamdem\WESS20\config;


use PaulKamdem\WESS20\library\Config as Config;

Config::set('site_name', 'NETFLIX CMS');
Config::set('default_controller', 'movie');
Config::set('default_action', 'index');
Config::set('default_param', 'defaultParam');
Config::set('default_route', 'admin');

//Database
Config::set('db.host', 'localhost');
Config::set('db.user', 'root');
Config::set('db.password', 'Moimeme?123');
Config::set('db.db_name', 'netflix_cms');
