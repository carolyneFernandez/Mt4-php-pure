<?php

namespace App\Controller;

use App\Service\userService;

class LoginController extends AbstractController
{
  
  private userService $userService;
  
  public function __construct(userService $userService)
  {
    $this->userService = $userService;
  }
  
}