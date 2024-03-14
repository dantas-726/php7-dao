<?php

class Usuario {

  private $idusuario;
  private $deslogin;
  private $dessenha;
  private $dtcadastro;


  public function getIdusuario() {
    return $this->idusuario;
}
  public function setIdusuario($value) {
    $this->idusuario = $value;
  }
  public function getdeslogin() {
    return $this->deslogin;

}
  public function setdeslogin($value) {
    $this->deslogin = $value;
  }
public function getDessenha() {
  return $this->dessenha;
}
public function setDessenha($value) {
  $this->dessenha = $value;
}
public function getdtcadastro() {
  return $this->dtcadastro;
}
public function setDtcadastro($value) {
  $this->dtcadastro = $value;
}


public function loadById($id) {
  $sql = new Sql();

  $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario =:ID", array(":ID"=>$id));

  if (count($results) > 0) {

    $row = $results[0];

    $this->idusuario = ($row['idusuario']);
    $this->deslogin = ($row['deslogin']);
    $this->dessenha = ($row['dessenha']);
    $this->dtcadastro = (new DateTime ($row['dtcadastro']));

  }

  }



    public function __toString(){

      return json_encode(array(
      "idusuario"=>$this->getIdusuario(),
      "deslogin"=>$this->getDeslogin(),
      "dessenha"=>$this->getDessenha(),
      "dtcadastro"=>$this->getDtcadastro()

  ));

}

}