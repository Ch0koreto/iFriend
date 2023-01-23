<?php

namespace Dsw\Ifriend\Controllers;

require_once('../src/connection.php');

use Dsw\Ifriend\models\User;

class userController
{

  public function index()
  {
    //Obtener los datos del modelo
    $users = User::all();
    echo "<h1>Listado de usuarios</h1>";
    foreach ($users as $user) {
      echo "<p>.$user->name.</p>";
    }
  }
  public function create()
  {
  }
  public function store()
  {
  }
  public function show($param)
  {
    $user = User::find($param['id']);
    if ($user) {
      echo "<p>.$user->name.</p>";
    } else {
      echo "<h1>usuario no encontrado</h1>";
    }
  }
  public function in12dex($id)
  {
  }
  public function asdw2($id)
  {
  }
  public function inde4x($id)
  {
  }
}
