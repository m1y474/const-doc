<?php
require_once('./enum.php');

$ref = new ReflectionClass(Enum::class);
foreach ($ref->getConstants() as $key => $value) {
    $const = new ReflectionClassConstant($ref->getName(), $key);
    echo $ref->getName().'::' . $const->name . " => '" . str_replace(' */', '', (str_replace('/** @var int ', '', $const->getDocComment()))) . "',\n";
}
