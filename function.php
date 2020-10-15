<?php
function dynamicInputAttributes($name, $entity, $type = "string"){
    $entityId = $entity->getId();
    $className = get_class($entity);

    return " data-dynamic-input=\"$name\" data-dynamic-type=\"$type\" data-dynamic-entity=\"$className\" data-dynamic-id=\"$entityId\" ";
};


function isSwitchChecked($value, $modifyActivated){
    return $modifyActivated === $value ? "checked" : "";
}

