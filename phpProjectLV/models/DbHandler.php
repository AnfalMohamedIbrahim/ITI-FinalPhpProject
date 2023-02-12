<?php

interface DbHandler
{
  public function setTable($table);
  public function selectRecord($data);
  public function selectRecordById($id);
  public function selectOrder($userEmail);
  public function selectRecords();
  public function insertNewUser($email,$password);
  public function insertNewProduct($fileName,$size,$content);
  public function updateFileName($id,$productNewName);
  public function makeNewOrder($userId,$downloadsCounter);
}