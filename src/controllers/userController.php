<?php
namespace Dsw\Ifriend\Controllers;

require_once('../src/connection.php');

use Dsw\Ifriend\models\User;

class userController
{
  // Display a listing of the resource.
  public function index()
  {
    // Get de users for the model
    $users = User::all();
    // Call the blade-template with the users
    global $blade;
    echo $blade->view()->make('list', compact('users'))->render();
  }

  // Show the form for creating a new resource.
  // public function create()
  // {
  //   global $blade;
  //   echo $blade->view()->make('create')->render();
  // }

  // Store a newly created resource in storage.
  public function store()
  {
    echo "almacenando...";
    var_dump($_POST);
    $name = $_POST['name'];
    $password = $_POST['password'];
    $user = new User;
    $user->name=$name;
    $user->password=$password;
    $user->save();
  }

  // Display the specified resource.
  public function show($param)
  {
    $id = $param['id'];
    $user = User::find($id);
    if ($user) {
      global $blade;
      echo $blade->view()->make('show', compact('user'))->render();
    } else {
      echo "<h2>Usuario no encontrado</h2>";
    }
  }

  //Show the form for editing the specified resource.
  public function edit($id)
  {
  }

  //Update the specified resource in storage.
  public function update($id)
  {
  }

  //Remove the specified resource from storage.
  public function destroy($id)
  {
  }
}