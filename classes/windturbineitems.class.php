<?php

class WindTurbineItems extends DBH {
    public function count(){
        $sql = "SELECT count(*) AS count FROM wind_turbine_items;";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return intval($stmt->fetch()['count']);
    }

    public function insert(int $num){
        if($num < 1){return false;}  // check if input number is valid
        $sql = "INSERT INTO wind_turbine_items
            ()
            VALUES ";
        $arr = array_fill(0, $num, "()");
        $sql .= implode(", ", $arr);
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute();
    }

    // mark coating_dmg = 1 for multiple of base
    public function coatingDmg(int $base){
        $sql = "UPDATE wind_turbine_items SET coating_dmg = 1 WHERE id % ? = 0;";
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute([$base]);
    }

    // mark lightning_strike = 1 for multiple of base
    public function lightningStrike(int $base){
        $sql = "UPDATE wind_turbine_items SET ligntning_strike = 1 WHERE id % ? = 0;";
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute([$base]);
    }

    public function listAllItems(){
        $sql = "SELECT * FROM wind_turbine_items;";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}