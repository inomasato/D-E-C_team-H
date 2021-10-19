<?php
// class DB_function{

//     private $sql;
//     private $pdo;
//     private $checks=[];
//     private $bindArray;

//     public static function creat (){
//         return new DB_function();
//     }

//     function connect($dbName,$dbHost = "localhost",$dbUser = "root",$dbPwd = ""){

//         $dbn = "mysql:dbname={$dbName};charset=utf8;port=3306;host={$dbHost}";
//         $user = $dbUser;
//         $pwd = $dbPwd;

//         try {
//             $this->pdo = new PDO($dbn, $user, $pwd);
//             return $this;
//         } catch (PDOException $e) {
//             echo json_encode(["db error" => "{$e->getMessage()}"]);
//             exit();
//         }
//     }

//     public function toSELECT ($tableName,$columns = []) {
//         /* $tableName テーブル名
//          * $columnNames 取得したい列名(配列)
//          */
//         $this->sql = "SELECT ";

//         if(count($columns)>0){
//             foreach ($columns as $column) {
//                 $this->sql .= "`" . $column . "`";
//                 if (!($column === end($column))) {
//                     $this->sql .= ",";
//                 }
//             }
//         }else {
//             $this->sql .= "*";
//         }

//         $this->sql .= " FROM ".$tableName;

//         return $this;
//     }

//     public function toINSERT($tableName,$insertData){
      
//         $this->sql = "INSERT INTO {$tableName} (";
//         $values = ") VALUE (";
//         $i=0;
//         $names = array_keys($insertData);
//         foreach ($insertData as $columnName){
//             $key = $names[$i++];
//             $this->sql .= "`{$key}`";
//             $values .= ":{$key}";
//             if(!($columnName === end($insertData))){
//                 $this->sql .= ",";
//                 $values .= ",";
//             }else{
//                 $values .= ")";
//             }
//             $this->bindArray[$key] = $columnName;
//         }

//         $this->sql .= $values;
//         return $this;
//     }

//     public function toWHERE ($columnName,$cond,$checkVariable){

//         if(strpos($cond,':') === true){

//             $checkVariable = 

//             $this->sql .= " WHERE `{$columnName}` LIKE :{$columnName}";
//             $this->checks[$columnName] = $checkVariable;

//         }else{
//             $this->sql .= " WHERE `{$columnName}` {$cond} :{$columnName}";
//             $this->checks[$columnName] = $checkVariable;
//         }
        

        
//         return $this;
//     }

//     public function toAND ($columnName,$cond,$checkVariable){
        
//         $this->sql .= " AND `{$columnName}` {$cond} :{$columnName}";
//         $this->checks[$columnName] = $checkVariable;
        
//         return $this;
//     }
    
//     public function toOR ($columnName,$cond,$checkVariable){
        
//         $this->sql .= " OR `{$columnName}` {$cond} :{$columnName}";
//         $this->checks[$columnName] = $checkVariable;
        
//         return $this;
//     }

//     public function toEXECUTE($mode = "BOTH"){

//         $stmt = $this->pdo->prepare($this->sql);

//         if(isset($this->bindArray)){
//             $names = array_keys($this->bindArray);
//             $i=0;
//             foreach ($this->bindArray as $record){
//                 $stmt->bindValue($names[$i++],$record);
//             }
//         }

//         if(count($this->checks)>0){
//             echo "0以上";
//             $names = array_keys($this->checks);
//             $i=0;
//             foreach($this->checks as $check){
//                 $stmt->bindValue($names[$i++],$check);
//             }
//         }

//         $stmt->execute();
//         $this->sql = "";

//         return $stmt;
//     }

//     public function toSHOW(){
//         echo $this->sql."<br>";
//         print_r($this->bindArray);
//         return "end";
//     }

// }

class DB_function{

    private $sql;
    private $pdo;
    private $checks=[];
    private $bindArray;

    public static function creat (){
        return new DB_function();
    }

    function connect($dbName,$dbHost = "localhost",$dbUser = "root",$dbPwd = ""){

        $dbn = "mysql:dbname={$dbName};charset=utf8;port=3306;host={$dbHost}";
        $user = $dbUser;
        $pwd = $dbPwd;

        try {
            $this->pdo = new PDO($dbn, $user, $pwd);
            return $this;
        } catch (PDOException $e) {
            echo json_encode(["db error" => "{$e->getMessage()}"]);
            exit();
        }
    }

    public function toSELECT ($tableName,$columns=[]) {
        /* $tableName テーブル名
         * $columnNames 取得したい列名(配列、全ての時は[*])
         */
        $this->sql = "SELECT ";

        if(count($columns)>0){
            foreach ($columns as $column) {
                $this->sql .= "`" . $column . "`";
                if (!($column === end($columns))) {
                    $this->sql .= ",";
                }
            }
        }else {
            $this->sql .= "*";
        }

        $this->sql .= " FROM ".$tableName;

        return $this;
    }

    public function toINSERT($tableName,$insertData){
      
        $this->sql = "INSERT INTO {$tableName} (";
        $values = ") VALUE (";
        $i=0;
        $names = array_keys($insertData);
        foreach ($insertData as $columnName){
            $key = $names[$i++];
            $this->sql .= "`{$key}`";
            $values .= ":{$key}";
            if(!($columnName === end($insertData))){
                $this->sql .= ",";
                $values .= ",";
            }else{
                $values .= ")";
            }
            $this->bindArray[$key] = $columnName;
        }

        $this->sql .= $values;
        return $this;
    }

    public function toWHERE ($columnName,$cond,$checkVariable){

        if(strpos($cond,':') !== false){

            $this->sql .= " WHERE `{$columnName}` LIKE :{$columnName}";
            $this->checks[$columnName] = $checkVariable;
        }else{
            $this->sql .= " WHERE `{$columnName}` {$cond} :{$columnName}";
            $this->checks[$columnName] = $checkVariable;
        }
        

        
        return $this;
    }

    public function toAND ($columnName,$cond,$checkVariable){
        
        $this->sql .= " AND `{$columnName}` {$cond} :{$columnName}";
        $this->checks[$columnName] = $checkVariable;
        
        return $this;
    }
    
    public function toOR ($columnName,$cond,$checkVariable){
        
        $this->sql .= " OR `{$columnName}` {$cond} :{$columnName}";
        $this->checks[$columnName] = $checkVariable;
        
        return $this;
    }

    public function toEXECUTE($mode = "BOTH"){

        $stmt = $this->pdo->prepare($this->sql);

        if(isset($this->bindArray)){
            $names = array_keys($this->bindArray);
            $i=0;
            foreach ($this->bindArray as $record){
                $stmt->bindValue($names[$i++],$record);
            }
        }

        if(count($this->checks)>0){
            echo "0以上";
            $names = array_keys($this->checks);
            $i=0;
            foreach($this->checks as $check){
                $stmt->bindValue($names[$i++],$check);
            }
        }

        $stmt->execute();
        $this->sql = "";

        return $stmt;
    }

    public function toSHOW(){
        echo $this->sql."<br>";
        print_r($this->bindArray);
        return "this";
    }

    public function toSQL(){
        return $this->sql;
    }

}
