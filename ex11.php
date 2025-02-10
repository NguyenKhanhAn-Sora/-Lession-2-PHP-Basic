<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./fontawesome-free-6.6.0-web/css/all.css">
    <title>Document</title>
</head>
<body>

<div class='main'>

</div>

<style>

    .main {
        width: cal(100% - 264px);
        max-width: 1100px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 10px;
    }

    p{
        margin: 0;
        padding: 0;
    }

    i {
        margin: 0;
        padding: 0;
    }
    body {
        background-color: #f5f5fa;
        font-family: 'Inter', sans-serif;
    }
    .container{
        border-radius: 8px;
        background-color: white;
    }
    
    a {
        text-decoration: none;
        color: black;
    }

    .product-link {
        display: block;
        width: 100%;
        height: 100%;
    }

    .container:hover {
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    }

    .content {
        padding: 10px;
    }

    .name {
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
        overflow: hidden;
        word-break: break-word;
        text-overflow: ellipsis;
        display: -webkit-box;
    }

    .feed-back {
        display: flex;
        align-items: center;
    }

    .rating {
        padding-right: 10px;
        position: relative;
        display: flex;
        align-items: center;
    }

    .rating > i {
        color: rgb(255 196 0);
        font-size: 10px;
        padding: 0 1px;
    }

    .rating::after {
        position: absolute;
        content: '';
        display: block;
        height: 15px;
        width: 1px;
        background-color:rgba(128, 128, 137, 0.5);
        right: 0px;
        top: -2px;
    }

    .sold {
        color: #808089;
        margin-left: 4px;
        padding-left: 4px;
        font-size: 14px;
        
    }


</style>



    <?php
        class product {
            public $img;
            public $name;
            public $cost;
            public $perSale;
            public $brand;
            public $rating;
            public $sold;
            public $quantityColor;


            public function infoProduct($img, $name, $cost, $perSale, $brand, $rating, $sold, $quantityColor) {
                $this->img = $img;
                $this->name = $name;
                $this->cost = $cost;
                $this->perSale = $perSale;
                $this->brand = $brand;
                $this->rating = $rating;
                $this->sold = $sold;
                $this->quantityColor = $quantityColor;
            }

            public function showProduct($img, $name, $cost, $perSale, $brand, $rating, $sold, $quantityColor) {
                $brand = strtoupper($brand);
                echo "
                    <div class='container' style='min-width: 225px;max-width: 285px;max-height:530px; overflow: hidden'>
                        <a class='product-link' href=''>
                            <img style='width:100%' src=$img alt=''>
                            <div class='content'>
                                <div class='cost' style='margin-bottom: 10px'>
                                    <span style= 'font-size:24px;font-weight:700; padding-right:10px; color:rgb(255, 66, 78); font-size:18px; line-height:150%'>$cost ₫</span>
                                    <span style='color:rgb(39, 39, 42); font-weight:500; background:rgb(245, 245, 250); border-radius:999px; padding: 5px 8px'>-$perSale%</span>
                                </div>
                                <p class='brand' style='color: #808089; font-size: 14px; marginbottom: 5px; line-height: 1.6'>
                                    $brand
                                </p>
                                <p class='name' style='color:#27272a; font-size: 16px; font-weight: 500; margin-bottom: 15px; line-height: 1.6'>
                                    $name
                                </p>
                                <div class='feed-back'>
                                    <span class='rating'>";
                                        for ($i=0; $i < $rating; $i++) { 
                                            echo "<i class='fas fa-star'></i>";
                                        }

                echo "
                                    </span>
                                    <span class='sold'>
                                        Đã bán $sold
                                    </span>
                                </div>
                                <div style='padding: 5px; border-radius:5px; color: #808089; border:1px solid rgba(128, 128, 137, 0.5); margin-top: 15px; font-size: 14px; width:fit-content' class='quantity-color'>
                                    $quantityColor Màu
                                </div>
                            </div>
                        </a>
                    </div>
                ";
            }
        }

        $product = array(
            [
                'img' => 'https://salt.tikicdn.com/cache/280x280/ts/product/99/6e/cd/f43196af3ef325263663b03045211afb.png.webp  ',
                'name' => 'Điện thoại Samsung Galaxy A05s (4GB/128GB) - Đã kích hoạt bảo hành điện tử - Hàng chính hãng',
                'cost' => '7.690.000',
                'perSale' => 18,
                'brand' => 'Samsung',
                'rating' => 5,
                'sold' => 1000,
                'quantityColor' => 3

            ],
            [
                'img' => 'https://salt.tikicdn.com/cache/280x280/ts/product/99/6e/cd/f43196af3ef325263663b03045211afb.png.webp  ',
                'name' => 'Điện thoại Samsung Galaxy A05s (4GB/128GB) - Đã kích hoạt bảo hành điện tử - Hàng chính hãng',
                'cost' => '7.690.000',
                'perSale' => 18,
                'brand' => 'Samsung',
                'rating' => 5,
                'sold' => 1000,
                'quantityColor' => 3

            ],
            [
                'img' => 'https://salt.tikicdn.com/cache/280x280/ts/product/99/6e/cd/f43196af3ef325263663b03045211afb.png.webp  ',
                'name' => 'Điện thoại Samsung Galaxy A05s (4GB/128GB) - Đã kích hoạt bảo hành điện tử - Hàng chính hãng',
                'cost' => '7.690.000',
                'perSale' => 18,
                'brand' => 'Samsung',
                'rating' => 5,
                'sold' => 1000,
                'quantityColor' => 3

            ],
            [
                'img' => 'https://salt.tikicdn.com/cache/280x280/ts/product/99/6e/cd/f43196af3ef325263663b03045211afb.png.webp  ',
                'name' => 'Điện thoại Samsung Galaxy A05s (4GB/128GB) - Đã kích hoạt bảo hành điện tử - Hàng chính hãng',
                'cost' => '7.690.000',
                'perSale' => 18,
                'brand' => 'Samsung',
                'rating' => 5,
                'sold' => 1000,
                'quantityColor' => 3

            ],
            [
                'img' => 'https://salt.tikicdn.com/cache/280x280/ts/product/99/6e/cd/f43196af3ef325263663b03045211afb.png.webp  ',
                'name' => 'Điện thoại Samsung Galaxy A05s (4GB/128GB) - Đã kích hoạt bảo hành điện tử - Hàng chính hãng',
                'cost' => '7.690.000',
                'perSale' => 18,
                'brand' => 'Samsung',
                'rating' => 5,
                'sold' => 1000,
                'quantityColor' => 3

            ],
            [
                'img' => 'https://salt.tikicdn.com/cache/280x280/ts/product/99/6e/cd/f43196af3ef325263663b03045211afb.png.webp  ',
                'name' => 'Điện thoại Samsung Galaxy A05s (4GB/128GB) - Đã kích hoạt bảo hành điện tử - Hàng chính hãng',
                'cost' => '7.690.000',
                'perSale' => 18,
                'brand' => 'Samsung',
                'rating' => 5,
                'sold' => 1000,
                'quantityColor' => 3

            ],
            
            );
        
        foreach ($product as $key => $value) {
            $product = new product();
            $product->showProduct($value['img'], $value['name'], $value['cost'], $value['perSale'], $value['brand'], $value['rating'], $value['sold'], $value['quantityColor']);
        }
    ?>

    <script>

        let main = document.querySelector('.main');
        let container = document.querySelectorAll('.container');
        for(let i=0; i<container.length; i++) {
            main.appendChild(container[i]);
        }

    </script>
</body>
</html>