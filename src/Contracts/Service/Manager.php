<?php

namespace IcebergApp\Contracts\Service;

interface Manager
{

  public function load(Array $settings = []);

  public function middleware(Array $settings = []);

  public function config(Array $settings = []);

  public function run(Array $settings = []);
  
  public function getService();
  
  public function setService($service);
  
  public function getServiceContainer();
}