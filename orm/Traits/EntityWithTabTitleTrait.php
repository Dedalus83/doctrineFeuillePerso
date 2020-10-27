<?php

namespace orm\Traits;

trait EntityWithTabTitleTrait {
    public static function getTabTitle(){
        $class_name = self::class;
        $constant = "$class_name::TAB_TITLE";

        if(defined($constant)){
            return self::TAB_TITLE;
        }
        throw new \Exception("This entity has no associated tab title.");
    }
}