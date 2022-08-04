<?php


namespace App\classes;


class Product
{
    public $products;
    public $result = [];
    public function getAllProduct(){
        return [
            0 => [
                'id' => 1,
                'category_id' => 1,
                'name' => 'New T Shirt',
                'price' => 1000,
                'image' => '1.png',
                'description' => 'Smart T Shirt Description. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution'
            ],
            1 => [
                'id' => 2,
                'category_id' => 1,
                'name' => 'Smart TV',
                'price' => 2200,
                'image' => '2.png',
                'description' => 'Stmart TV Description. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution'
            ],
            2 => [
                'id' => 3,
                'category_id' => 3,
                'name' => 'King Size Bed',
                'price' => 2600,
                'image' => '3.png',
                'description' => 'King Size Bed Description. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution'
            ],
            3 => [
                'id' => 4,
                'category_id' => 4,
                'name' => 'Sharee',
                'price' => 1800,
                'image' => '4.png',
                'description' => 'Sharee Description. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution'
            ],
            4 => [
                'id' => 5,
                'category_id' => 5,
                'name' => 'Sport Hat',
                'price' => 800,
                'image' => '5.png',
                'description' => 'Sport Hat Description. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution'
            ],
        ];
    }

    public function getProductByCategoryId($categoryId){
        $this->products = $this->getAllProduct();
        foreach ($this->products as $product){
            if($product['category_id'] == $categoryId){
                array_push($this->result, $product);
            }
        }
        return $this->result;
    }
}