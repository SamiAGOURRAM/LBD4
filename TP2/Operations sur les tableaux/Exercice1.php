<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php
        $array_ = array(
            1,
            0,
            3,
            3,
            5,
            6,
            0,
            5,
            9,
            1
        );

        sort($array_);
        print_r($array_);

        $array2 = [];
        for($i=0; $i<count($array_)-1; $i++){
            if($array_[$i] != $array_[$i+1]){
                array_push($array2, $array_[$i]);
            }

        }
        if($array_[count($array_)-1]!= $array_[count($array_)-2] ){
            array_push($array2, $array_[count($array_) - 1]);
        }

        print_r($array2);



        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>