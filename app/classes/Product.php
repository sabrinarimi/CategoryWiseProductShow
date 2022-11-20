<?php

namespace App\classes;

class Product
{
    public $products;
    public $results = [];
    public function getAllProduct()
    {

        return[
            0=>[
                'id' => 1,
                'category_id'=>1,
                'name'=> 'Sun glass',
                'price'=>'650 tk',
                'image'=>'1.jpg',
                'description'=>'New collection of Sun glasses Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
            ],
            1=>[
                'id' => 2,
                'category_id'=>2,
                'name'=> 'Womens hat',
                'price'=>'700 tk',
                'image'=>'h9.jpg',
                'description'=>'New collection of hats Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
            ],
            2=>[
                'id' => 3,
                'category_id'=>2,
                'name'=> 'Mans hat',
                'price'=>'700 tk',
                'image'=>'h.jpg',
                'description'=>'New collection of hats Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
            ],
            3=>[
                'id' => 4,
                'category_id'=>3,
                'name'=> 'Women Purse',
                'price'=>'2000 tk',
                'image'=>'4.jpg',
                'description'=>'New collection of purse Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'

            ],
            4=>[
                'id' => 5,
                'category_id'=>3,
                'name'=> 'Women Purse',
                'price'=>'1500 tk',
                'image'=>'p2.jpg',
                'description'=>'New collection of purse Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'

            ],
            5=>[
                'id' => 6,
                'category_id'=>4,
                'name'=> 'Belts',
                'price'=>'900 tk',
                'image'=>'belt.jpg',
                'description'=>'New collection of belts Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'

            ],
            6=>[
                'id' => 1,
                'category_id'=>1,
                'name'=> 'Sun glass',
                'price'=>'1300 tk',
                'image'=>'sn3.jpg',
                'description'=>'New collection of belts Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'

            ],
            7=>[
                'id' => 8,
                'category_id'=>4,
                'name'=> 'Belts',
                'price'=>'1300 tk',
                'image'=>'bd.jpg',
                'description'=>'New collection of belts Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'

            ],
            8=>[
                'id' => 9,
                'category_id'=>1,
                'name'=> 'Sun glass',
                'price'=>'800 tk',
                'image'=>'sn4.jpg',
                'description'=>'New collection of belts Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'

            ],
            9=>[
                'id' => 10,
                'category_id'=>5,
                'name'=> 'Red frock',
                'price'=>'1300 tk',
                'image'=>'34.jpg',
                'description'=>'New collection of belts Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'

            ],
            10=>[
                'id' => 11,
                'category_id'=>5,
                'name'=> 'new baby dress',
                'price'=>'900 tk',
                'image'=>'35.jpg',
                'description'=>'New collection of belts Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'

            ],
            11=>[
                'id' => 12,
                'category_id'=>5,
                'name'=> 'new baby dress',
                'price'=>'1000 tk',
                'image'=>'33.jpg',
                'description'=>'New collection of belts Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'

            ],

        ];

    }
    public function getProductByCategory($categoryId)

    {
        $this->products = $this->getAllProduct();
        foreach ($this->products as $product)
            {
                if ($product['category_id'] == $categoryId)
                {
                    array_push($this->results,$product);

                }


            }
        return $this->results;




    }

}