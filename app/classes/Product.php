<?php


namespace App\classes;


class Product
{
    protected $products = [];
    protected $search_product;
    protected $result = [];
    protected $search_id;

    public function __construct($post = null)
    {
        if (isset($post['search_btn'])) {
            $this->search_id = $post['search'];
        }
    }

    public function getAllProduct(){

        return [
            0 => [
                'id'            => '1',
                'name'          => 'Pant',
                'description'   => 'Blog Description',
                'price'         => '1000 tk',
                'image'         => 'pant.png',
                'brand'         => 'H&M',
                'category'      => 'Men'
            ],
            1 => [
                'id'            => '2',
                'name'          => 'Shirt',
                'description'   => 'Blog Description',
                'price'         => '1500 tk',
                'image'         => 'shirt.png',
                'brand'         => 'EASY',
                'category'      => 'Men'
            ],
            2 => [
                'id'            => '3',
                'name'          => 'Hoodie',
                'description'   => 'Blog Description',
                'price'         => '2300 tk',
                'image'         => 'hoodie.png',
                'brand'         => 'EASY',
                'category'      => 'Men'
            ],
            3 => [
                'id'            => '4',
                'name'          => 'Shoes',
                'description'   => 'Blog Description',
                'price'         => '3000 tk',
                'image'         => 'shoes.png',
                'brand'         => 'Apex',
                'category'      => 'Men'
            ],
            4 => [
                'id'            => '5',
                'name'          => 'Watch',
                'description'   => 'Blog Description',
                'price'         => '2300 tk',
                'image'         => 'watch.png',
                'brand'         => 'Rolex',
                'category'      => 'Men'
            ],
            5 => [
                'id'            => '6',
                'name'          => 'Canon DSLR',
                'description'   => 'Blog Description',
                'price'         => '30000 tk',
                'image'         => 'canon.png',
                'brand'         => 'Canon',
                'category'      => 'Men'
            ],
        ];
    }
    public function getProductById($id){

        $this->products = $this->getAllProduct();
        foreach ($this->products as $product){

            if ($product['id'] == $id){
                return $product;
            }
        }
    }

    public function searchProduct(){

        $this->search_product = $this->getAllProduct();
        foreach ($this->search_product as $prod){
            if ($this->search_id == $prod['id']){
                $this->result = $prod;
                break;
            }
        }
        return $this->result;
    }
}