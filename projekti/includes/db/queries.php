<?php

class queries extends DBConfig
{
    public function readdata($table,$rows=null,$where=null)
    {
        $sql = "SELECT ". $rows ." FROM $table";
        $vlerat = [];
        if($where != null)
        {
            $fullinfo = [];
            foreach ($where as $key => $value)
            {
                if(is_numeric($key))
                {
                     $fullinfo[] = "$value"; 
                }else 
                {
                    $fullinfo[] = "$key = ?";
                    $vlerat[] = "$value";
                }
            }
            $sql .= " WHERE " . implode(" ",$fullinfo);
        }
        $stmt = $this->db()->prepare($sql);
        if(!$stmt->execute(($vlerat?$vlerat:null)))
        {
            $stmt= null;
            echo "Sql error";
            exit();
        }
        return $stmt;
    }

    public function create($table,$insert=[]){
        $columns = implode(',', array_keys($insert));
        $pikpytja = [];
        $vlerat = [];
        foreach($insert as $value)
        {
            $pikpytja[] = "?";
            $vlerat[] = "$value";
        }
        $valuesprepare = implode(',',$pikpytja);
        $sql ="INSERT INTO ".$table." (".$columns.") VALUES(".$valuesprepare.")";
        $stmt = $this->db()->prepare($sql);
        $result = true;
        if(!$stmt->execute($vlerat))
        {
            $result = false;
            $stmt= null;
            echo "Sql error";
            exit();
        }
        return $result;
    }

    public function update($table,$insert=[],$colum,$values){
        $pikpytja = [];
        $vlerat = [];
        foreach ($insert as $key => $value)
        {
            $pikpytja[] = "$key = ?";
            $vlerat[] = "$value";
        }
            $where = $colum . " = ?";
            $vlerat[] = $values;
            $sql = "UPDATE ". $table ." SET ".implode(',',$pikpytja) ." WHERE ". $where ."";
            $stmt = $this->db()->prepare($sql);
            $result = true;
            if(!$stmt->execute($vlerat))
            {
                $result = false;
                $stmt= null;
                utility::setmessage('error','Error sql db','/profili');
                exit();
            }
            return $result;
    }
    public function delete($table,$colum,$values){
        $prepvalue = $colum ."= ?";
        $value[] = $values;
        $sql = "DELETE FROM ". $table ." WHERE ". $prepvalue . "";
        $stmt = $this->db()->prepare($sql);
        $result = true;
        if(!$stmt->execute($value))
        {
            $result = false;
            $stmt= null;
            echo "Sql error";
            exit();
        }
        return $result;
    }
}


?>