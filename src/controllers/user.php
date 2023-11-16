<?php

namespace Blr\Php\Controllers;

use Blr\Php\Models\User as UserModel;

class User
{
  public function index()
  {
    $user = new UserModel();

    $user->test();
  }
  /**
   * Class constructor.
   */
  public function __construct()
  {
  }
}
