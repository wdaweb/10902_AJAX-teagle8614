<?php
date_default_timezone_set('Asia/Taipei');
session_start();


class DB{
   // 設定屬性
   private $dsn="mysql:host:localhost;charset=utf8;dbname=ajax";
   private $root="root";
   private $password="";
   protected $table;
   private $pdo;
 
   // 設定建構式
   public function __construct($table){
     $this->table=$table;
     $this->pdo=new PDO($this->dsn,$this->root,$this->password);
   }
 
   // 取得全部資料
   public function all(...$arg){
    $sql="select * from $this->table ";

    if(!empty($arg[0]) && is_array($arg[0])){

      foreach($arg[0] as $key => $value){
        // $tmp[]="`$key`='$value'";
        $tmp[]=sprintf("`%s`='%s'",$key,$value);
      }
      $sql=$sql." where ". implode(" && ", $tmp);
    }

    if(isset($arg[1])){
      $sql=$sql . $arg[1];
    }

    // echo $sql."<br><br>";
    return $this->pdo->query($sql)->fetchAll();
   }


  // 取得單筆資料
  public function find($arg){
    $sql="select * from $this->table ";

    if(is_array($arg)){
      foreach($arg as $key => $value){
        $tmp[]=sprintf("`%s`='%s'",$key,$value);
      }
      $sql=$sql." where ". implode(" && ", $tmp);
    }else{
      $sql=$sql." where `id`='$arg'";
    }

    // echo $sql."<br><br>";
    return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
   }


  // 計算筆數
  public function count(...$arg){
    $sql="select count(*) from $this->table ";

    if(!empty($arg[0]) && is_array($arg[0])){

      foreach($arg[0] as $key => $value){
        // $tmp[]="`$key`='$value'";
        $tmp[]=sprintf("`%s`='%s'",$key,$value);
      }
      $sql=$sql." where ". implode(" && ", $tmp);
    }else

    if(isset($arg[1])){
      $sql=$sql . $arg[1];
    }

    // echo $sql."<br><br>";
    return $this->pdo->query($sql)->fetchColumn(0);

  }
  // 新增/更新資料(在乙級解題都是單筆更新)
  public function save($arg){
    if(!empty($arg['id'])){
      // 更新
      // update $this->table set xxx=yy where `id`='xxx'
      foreach($arg as $key => $value){
        if($key!='id'){
          $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }
      }
      $sql="update $this->table set ". implode(",",$tmp) ." where `id`='".$arg['id']."'";

    }else{
      // 新增
      // insert into $this->table (``,``,``) values('','','')
      $sql="insert into $this->table (`".implode("`,`",array_keys($arg))."`) value('". implode("','",$arg) ."')";
    }
    // echo $sql."<br><br>";
    return $this->pdo->exec($sql);
  }

  // 刪除資料
  public function del($arg){
    $sql="delete from $this->table ";

    if(is_array($arg)){
      foreach($arg as $key => $value){
        $tmp[]=sprintf("`%s`='%s'",$key,$value);
      }
      $sql=$sql." where ". implode(" && ", $tmp);
    }else{
      $sql=$sql." where `id`='$arg'";
    }

    // echo $sql."<br><br>";
    return $this->pdo->exec($sql);
   }

  // 萬用語法
  function q($sql){
    return $this->pdo->query($sql)->fetchAll();
  }


}


function to($url){
  header("location:".$url);
}







?>