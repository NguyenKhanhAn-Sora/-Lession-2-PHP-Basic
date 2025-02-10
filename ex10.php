<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class camera {
            public $img;
            public $name;
            public $saleCost;
            public $originCost;
            public $sale;

            public function infoProduct($img, $name, $saleCost, $originCost, $sale) {
                $this->img = $img;
                $this->name = $name;
                $this->saleCost = $saleCost;
                $this->originCost = $originCost;
                $this->sale = $sale;
            }

            public function showProduct($img, $name, $saleCost, $originCost, $sale) {
                
                echo "
                    <div class='container' style='width: 320px;height=auto'>
                        <img src=$img style='width:100%'>
                        <h2>$name</h2>
                        <span style= 'font-size:24px;font-weight:700; padding-right:10px'>$saleCost ₫</span>
                        <span style='text-decoration:line-throught; font-size:16px;color:#aaa; padding-right: 10px'>$originCost ₫</span>
                        <span style='color:red; font-size:16px; font-weight: 800'> $sale %</span>
                    </div>
                    ";
            }
        }

        $product = array(
            [
                'img' => './photo.jpg',
                'name' => 'Máy ảnh Canon SX730 HS',
                'saleCost' => '7.690.000',
                'originCost' => '9.370.000',
                'sale' => '-18'
            ],
            [
                'img' => './photo.jpg',
                'name' => 'Máy ảnh Canon SX720 HS',
                'saleCost' => '6.290.000',
                'originCost' => '7.870.000',
                'sale' => '-20'
            ],
            [
                'img' => './photo.jpg',
                'name' => 'Máy ảnh Canon SX620 HS',
                'saleCost' => '4.890.000',
                'originCost' => '6.240.000',
                'sale' => '-22'
            ],
            [
                'img' => './photo.jpg',
                'name' => 'Máy ảnh Canon SX730 HS',
                'saleCost' => '9.170.000',
                'originCost' => '10.620.000',
                'sale' => '-14'
            ],
            [
                'img' => './photo.jpg',
                'name' => 'Máy ảnh Canon PowerShot G3X',
                'saleCost' => '16.990.000',
                'originCost' => '22.500.000',
                'sale' => '-24'
            ],
            [
                'img' => './photo.jpg',
                'name' => 'Máy ảnh Canon G9X Mark II',
                'saleCost' => '9.490.000',
                'originCost' => '11.990.000',
                'sale' => '-21'
            ]
            );
        
        for($i=0; $i<count($product); $i++) {
            $camera = new camera();
            $camera->showProduct($product[$i]['img'], $product[$i]['name'], $product[$i]['saleCost'], $product[$i]['originCost'], $product[$i]['sale']);
        }
        
    ?>

    <script>
        let container = document.querySelectorAll('.container');
        let body = document.querySelector('body');
        body.style.display = 'grid';
        body.style.gridTemplateColumns = '1fr 1fr 1fr';
        body.style.gridGap = '20px';
        body.style.rowGap = '80px';
        body.style.fontFamily = 'Arial, sans-serif';
    </script>
</body>
</html>