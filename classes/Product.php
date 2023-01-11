<?php
class Product
{
    private string $id;
    private string $name;
    private int $price;
    private string $description;
    private int $avaiableQty;
    private string $category;
    private string $salesStartMounth;
    private string $salesEndMount;

    public function __construct($_id, $_name, $_price, $_description, $_avaiableQty, $_category)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->price = $_price;
        $this->description = $_description;
        $this->avaiableQty = $_avaiableQty;
        $this->category = $_category;
    }

    public function setSalesMount($_dateStart, $_dateEnd) {
        $this->salesStartMounth = $_dateStart;
        $this->salesEndMount = $_dateEnd;
        return $this;
    }

    public function isAvaiable()
    {
        if ($this->avaiableQty < 1) {
            return false;
        }
        $currentMount = (int) date('m');
        if ($this->salesStartMounth < $currentMount && $this->salesEndMount <= $currentMount) {
            return true;
        } else {
            return false;
        }
    }

    public function decrementAvaiableQty()
    {
        $this->avaiableQty--;
        return $this;
    }

    public function getPrice() {
        return '€' . $this->price / 100;
    }
}