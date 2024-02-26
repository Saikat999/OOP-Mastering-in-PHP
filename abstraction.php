<?php 
class BetterArray{
    private $items;

    public function __construct(){
        $this->items = [];
    }

    // public function getItem(){
    //     if(isset($this->items)){
    //         return $this->items;
    //     }else{
    //         return null;
    //     }
    // }

    public function getAllItems() {
        return $this->items;
    }
    public function addItem($item){
        $this->items[] = $item;
    }
    public function removeItem($index){
        if(isset($this->items[$index])){
            unset($this->items[$index]);
        }else{
            throw new Exception("Invalid index: $index");
        }
    }
    public function modifyItem($index, $newValue){
        if(isset($this->items[$index])){
            $this->items[$index] = $newValue;
        }else{
            throw new Exception("Index is not valid");
        }
    }
}


$array = new BetterArray();

$array->addItem("Item-1");
$array->addItem("Item-2");
$array->addItem("Item-3");

$allItems = $array->getAllItems();
print_r($allItems); // the array elements with the index
// var_dump($allItems); // show the array elements with index and type & length

$array->removeItem(2);
print_r($array);

$array->modifyItem(0,"Modified Item-1");
print_r($array);






?>