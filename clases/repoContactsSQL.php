<?php

require_once("repoContacts.php");

class RepoContactsSQL extends repoContacts
{
  protected $conexion;

  public function __construct($conexion) 
  {
    $this->conexion = $conexion;
  }

  public function saveContactFormContactInBDD($post)
  {

    $newsletter = 'No';

    if ( isset($post['newsletter']) ) {
      $newsletter = 'Si';
    }

    $sql = "INSERT INTO contacts_form values(default, :name, :email, :phone, :comments, :origin, :newsletter, :created_at)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindValue(":name", $post['name'], PDO::PARAM_STR);
        $stmt->bindValue(":email", $post['email'], PDO::PARAM_STR);
        $stmt->bindValue(":phone", $post['phone'], PDO::PARAM_STR);
        $stmt->bindValue(":comments", $post['comments'], PDO::PARAM_STR);
        $stmt->bindValue(":origin", $post['origin'], PDO::PARAM_STR);
        $stmt->bindValue(":newsletter", $newsletter, PDO::PARAM_STR);
        $stmt->bindValue(":created_at", date("Y-m-d H:i:s"), PDO::PARAM_STR);
        
    $save = $stmt->execute();

    return $save;

  }

}

?>
