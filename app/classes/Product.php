<?php


namespace App\classes;


class Product
{
    private $products;

    public function getAllproducts()
    {
        return[
            0=>[
                'id'=>1,
                'category_id'=>'1',
                'name'=>'Blue T shirt',
                'price'=>17500,
                'size'=>'xl',
                'image'=>'slider1.jpg',
                'short_description '=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'long_descreption'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at autem blanditiis, consequuntur cumque dignissimos fuga id impedit iste nostrum odio possimus quasi qui, quo quod rem rerum sequi, voluptatum?
',
            ],
            1=>[
                'id'=>2,
                'category_id'=>'1',
                'name'=>'Blue pent',
                'price'=>17500,
                'size'=>'xl',
                'image'=>'slider2.jpg',
                'short_description '=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'long_descreption'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at autem blanditiis, consequuntur cumque dignissimos fuga id impedit iste nostrum odio possimus quasi qui, quo quod rem rerum sequi, voluptatum?
',
            ],
            2=>[
                'id'=>3,
                'category_id'=>'1',
                'name'=>'Blue ff',
                'price'=>17500,
                'size'=>'xl',
                'image'=>'slider3.jpg',
                'short_description '=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'long_descreption'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at autem blanditiis, consequuntur cumque dignissimos fuga id impedit iste nostrum odio possimus quasi qui, quo quod rem rerum sequi, voluptatum?
',
            ],
            3=>[
                'id'=>4,
                'category_id'=>'1',
                'name'=>'lungi',
                'price'=>17500,
                'size'=>'xl',
                'image'=>'slider4.jpg',
                'short_description '=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'long_descreption'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at autem blanditiis, consequuntur cumque dignissimos fuga id impedit iste nostrum odio possimus quasi qui, quo quod rem rerum sequi, voluptatum?
',
            ],
            4=>[
                'id'=>5,
                'category_id'=>'2',
                'name'=>'kkkk',
                'price'=>17500,
                'size'=>'xl',
                'image'=>'slider5.jpg',
                'short_description '=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'long_descreption'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at autem blanditiis, consequuntur cumque dignissimos fuga id impedit iste nostrum odio possimus quasi qui, quo quod rem rerum sequi, voluptatum?
',
            ],
            5=>[
                'id'=>6,
                'category_id'=>'2',
                'name'=>'kkk',
                'price'=>17500,
                'size'=>'xl',
                'image'=>'team-1.jpg',
                'short_description '=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'long_descreption'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at autem blanditiis, consequuntur cumque dignissimos fuga id impedit iste nostrum odio possimus quasi qui, quo quod rem rerum sequi, voluptatum?
',
            ],
            6=>[
                'id'=>7,
                'category_id'=>'2',
                'name'=>'DDD',
                'price'=>17500,
                'size'=>'xl',
                'image'=>'team-2.jpg',
                'short_description '=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'long_descreption'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at autem blanditiis, consequuntur cumque dignissimos fuga id impedit iste nostrum odio possimus quasi qui, quo quod rem rerum sequi, voluptatum?
',
            ],
            7=>[
                'id'=>8,
                'category_id'=>'2',
                'name'=>'MMM',
                'price'=>17500,
                'size'=>'xl',
                'image'=>'team-3.jpg',
                'short_description '=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'long_descreption'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at autem blanditiis, consequuntur cumque dignissimos fuga id impedit iste nostrum odio possimus quasi qui, quo quod rem rerum sequi, voluptatum?
',
            ],
            8=>[
                'id'=>9,
                'category_id'=>'3',
                'name'=>'LLL',
                'price'=>17500,
                'size'=>'xl',
                'image'=>'team-4.jpg',
                'short_description '=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'long_descreption'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at autem blanditiis, consequuntur cumque dignissimos fuga id impedit iste nostrum odio possimus quasi qui, quo quod rem rerum sequi, voluptatum?
',
            ],
            9=>[
                'id'=>10,
                'category_id'=>'3',
                'name'=>'www',
                'price'=>17500,
                'size'=>'xl',
                'image'=>'testimonial-1.jpg',
                'short_description '=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'long_descreption'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at autem blanditiis, consequuntur cumque dignissimos fuga id impedit iste nostrum odio possimus quasi qui, quo quod rem rerum sequi, voluptatum?
',
            ],
            10=>[
                'id'=>11,
                'category_id'=>'3',
                'name'=>'oooo',
                'price'=>17500,
                'size'=>'xl',
                'image'=>'testimonial-2.jpg',
                'short_description '=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'long_descreption'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at autem blanditiis, consequuntur cumque dignissimos fuga id impedit iste nostrum odio possimus quasi qui, quo quod rem rerum sequi, voluptatum?
',
            ],
            11=>[
                'id'=>12,
                'category_id'=>'3',
                'name'=>'AAA',
                'price'=>17500,
                'size'=>'xl',
                'image'=>'testimonial-3.jpg',
                'short_description '=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'long_descreption'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at autem blanditiis, consequuntur cumque dignissimos fuga id impedit iste nostrum odio possimus quasi qui, quo quod rem rerum sequi, voluptatum?
',
            ],
        ];
    }

  public function getAllproductDetails($productId)
  {
      $this->products=$this->getAllproducts();
      foreach ($this->products as $product)
      {
          if ($product['id'] == $productId)
          {
              return $product;
          }
      }
      return 'error';
  }


}