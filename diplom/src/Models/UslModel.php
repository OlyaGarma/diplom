<?php 

namespace Olgagarma\Diplom\Models;
use Olgagarma\Diplom\Core\DBConnection;
//  из БД
class UslModel
{
  private $bd;

  public function __construct()
  {
  $this->db = DBConnection::getInstance();    
  }
   public function getAllUsl() {
// вставить мою базу данных 
     $sql = 'SELECT * FROM z';
     return $this->db->queryAll($sql);
   }
   public function getUsl($usl) {
     $sql = 'SELECT * FROM z WHERE usl = :usl;';
     return $this->db->execute($sql, ['usl'=>$usl], false);
   }
}