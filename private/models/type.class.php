<?php

class Type {
  static protected $database;

  static public function set_database($database) {
    self::$database = $database;
  }

}
