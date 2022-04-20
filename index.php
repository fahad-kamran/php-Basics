<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php
    // for loop

    // for($a=1; $a<=10; $a++){
    //     echo"Hello World".$a ;
    //     echo "<br />";
    // }

    // function

    // function my_function($first_name, $last_name){
    //     echo "hello " .$first_name. " " .$last_name;
    // }
    // my_function("fahad","kamran");

    // Condition
    // $age = 18;

    // if($age < 18){
    //     echo "less than 18";
    // }
    // elseif($age === 18){
    //     echo "equal to 18";
    // }
    // else{
    //     echo "greater than 18";
    // }

    $posts = array(
        [
            'title' => 'Card_1',
            'discription' => 'Discription 1',
            'image' => 'https://dummyimage.com/300x200/bcb8c4/000000.png&text=1'
        ],
        [
            'title' => 'Card_2',
            'discription' => 'Discription 2',
            'image' => 'https://dummyimage.com/300x200/bcb8c4/000000.png&text=2'
        ],
        [
            'title' => 'Card_3',
            'discription' => 'Discription 3',
            'image' => 'https://dummyimage.com/300x200/bcb8c4/000000.png&text=3'
        ],
        [
            'title' => 'Card_4',
            'discription' => 'Discription 4',
            'image' => 'https://dummyimage.com/300x200/bcb8c4/000000.png&text=4'
        ],
        [
            'title' => 'Card_5',
            'discription' => 'Discription 5',
            'image' => 'https://dummyimage.com/300x200/bcb8c4/000000.png&text=5'
        ],        
        [
            'title' => 'Card_6',
            'discription' => 'Discription 6',
            'image' => 'https://dummyimage.com/300x200/bcb8c4/000000.png&text=6'
        ]
    );
     // var_dump($posts);
    ?>
    <div class="container-lg border py-5">
        <div class="row">
            <?php
                foreach($posts as $post){
                    ?>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src=<?php echo $post['image']?> alt=<?php echo $post['title'] ?> />
                            <div class="card-body">
                                <h4><?php echo $post['title']?></h4>
                                <div class="card-title"><?php echo $post['discription'] ?></div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            ?>
        </div>
    </div>
</body>

</html>