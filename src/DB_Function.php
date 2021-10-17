<?php

class DB_function{

    private $sql;
    private $pdo;


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

    public function toSELECT ($tableName,$columnNames = []) {
        /* $tableName テーブル名
         * $columnNames 取得したい列名(配列、全ての時は[*])
         */
        $this->sql = "SELECT ";

        if(count($columnNames)){
            $this->sql .= "*";
        }else {

            foreach ($columnNames as $columnName) {
                $this->sql .= "`" . $columnName . "`";
                if (!($columnName === end($columnNames))) {
                    $this->sql .= ",";
                }
            }
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
        }

        $this->sql .= $values;
        return $this;
    }

    public function toWHERE ($columnName,$checkVariable){

        $this->sql .= " WHERE ".$columnName;
        $this->checks[count($this->checks)] = $checkVariable;

        return $this;
    }

    public function toEXECUTE($bindArray = null){

        $stmt = $this->pdo->prepare($this->sql);

        if(isset($bindArray)){
            $names = array_keys($bindArray);
            $i=0;
            foreach ($bindArray as $record){
                $stmt->bindValue($names[$i++],$record);
            }
        }

        $stmt->execute();
        $this->sql = "";

        return $stmt;
    }

    public function toSHOW(){
        echo $this->sql;
        return "end";
    }

}
