<?php

class FakeCharacter {

    protected $health;
    protected $force;

    public function __construct(){
        $this->health = 100;
        $this->force = 10;

        $this->buffs = [];
    }

    // JSON en bdd
    protected $buffs;

    public function loadBuffs($buffsData){
        foreach($buffsData as $buffClassName => $buffParams){
            $fullClassName = $buffClassName."Buff";
            $buff = new $fullClassName();
            $buff->setParams($buffParams);

            $this->buffs[] = $buff;
        }
    }

    public function getStats(){
        return [
            "health" => $this->health,
            "force" => $this->force
        ];
    }

    public function getComputedStatsWithBuffs(){
        $stats = $this->getStats();

        foreach($this->buffs as $buff){
            $stats = $buff->getComputedStats($stats);
        }

        return $stats;
    }
}


class BaseBuff {
    
    public function setParams($params){}

    public function getComputedStats($stats){ }

    protected function _bindParam($params, $paramName, $paramKey, $defaultValue){
        $this->$paramName = isset($params[$paramKey]) ? $params[$paramKey] : $defaultValue;
    }
}

class HealthUpgradeBuff extends BaseBuff {
    protected $delta;

    public function setParams($params){
        $this->_bindParam($params, "delta", "delta", 0);
    }

    public function getComputedStats($stats){
        $stats["health"] += $this->delta;

        return $stats;
    }
}

class ForceUpBuff extends BaseBuff {
    protected $power;
    protected $duration;
    protected $started;

    public function setParams($params){
        $this->_bindParam($params, "power", "power", 0);
        $this->_bindParam($params, "duration", "duration", 0);
        $this->_bindParam($params, "started", "started", 0);
    }

    public function getComputedStats($stats){
        $now = new DateTime();
        $then = new DateTime($this->started);

        $end = new DateTime($this->started);
        date_add($end, date_interval_create_from_date_string($this->duration.' days'));

        

        if($now < $end){
            // $stats["force"] += $this->power; // Augmentation absolue
            $stats["force"] *= (100 + $this->power) / 100; // Pourcentages
        }

        return $stats;
    }
}


$character = new FakeCharacter();

/**
 * En BDD:
 * {
 *   HealthUpgrade: { delta: 20 },
 *   ForceUp: { power: 10, duration: 1000, started: "2020-09-29 09:12:46.381042" }
 * }
 */
// $character->buffs = [
//     "HealthUpgrade" => ["delta" => 20],
//     "ForceUp" => ["power" => 10, "duration" => 1000, "started" => "2020-09-29 09:12:46.381042"]
// ];
$charBuffData = json_decode('{
       "HealthUpgrade": { "delta": 20 },
       "ForceUp": { "power": 10, "duration": 1000, "started": "2020-09-29 09:12:46.381042" }
     }', true);
$character->loadBuffs($charBuffData);

$stats = $character->getStats();
$statsWithBuffs = $character->getComputedStatsWithBuffs();

var_dump($stats);
var_dump($statsWithBuffs);