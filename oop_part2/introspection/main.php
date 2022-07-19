<?php
include_once "A.php";
include_once "B.php";
include_once "C.php";

function getCallableMethods($object): array
{
    return get_class_methods($object);
}

function getLineage($object): array
{
    $parent = array();
    $par = get_parent_class($object);
    $parent[] = $par;
    while($par !== false) {
        $par = get_parent_class($par);
        $parent[] = $par;
    }
    return $parent;
}

function getChildClasses($object): array
{
    $children = array();
    foreach (get_declared_classes() as $child){
        if(is_subclass_of($child, $object)){
            $children[] = $child;
        }
    }
    return $children;
}

function getProperties ($object): array
{
    return get_object_vars($object);
}

function printObjectInfo($object){
    echo $object::class . "<br>";
    echo "Class methods: ";
    foreach (getCallableMethods($object) as $method){
        echo $method . "; ";
    }
    echo "<br>";
    echo "Lineage: ";
    foreach (getLineage($object) as $class) {
        echo $class . ";";
    }
    echo "<br>";
    echo "Child classes: ";
    foreach (getChildClasses($object::class) as $class){
        echo $class . ";";
    }
    echo "<br>";
    echo "Properties: ";
    foreach (getProperties($object) as $property){
        echo $property . ";";
    }
    echo "<br>";
    echo "<br>";
}

$a = new A();
$a->foo = "sylvie";
$a->bar = 23;
$b = new B();
$b->foo = "bruno";
$b->quux = true;
$c = new C();
printObjectInfo($a);
printObjectInfo($b);
printObjectInfo($c);