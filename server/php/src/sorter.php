<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting</title>
</head>
<body>

    <?php
        if(isset($_GET['array']))
        {
            $str = $_GET['array'];
            $arrayBeforeSorting = explode(",", $str);
            $arrayAfterSorting = $arrayBeforeSorting;

            if(count($arrayBeforeSorting)==0){
                echo 'Zero array';
                exit(0);
            }

            for($i = 0; $i < count($arrayAfterSorting); $i++){
                $arrayAfterSorting[$i] = (int)$arrayAfterSorting[$i];
            }

            selectSort($arrayAfterSorting);

            echo 'Before sorting: ' . implode(',', $arrayBeforeSorting) . '<br>After sorting: ' . implode(',', $arrayAfterSorting);
        }        
        
        function selectSort(&$arr) {
            $size = count($arr);

            for ($i = 0; $i < $size-1; $i++)
            {
                $min = $i;

                for ($j = $i + 1; $j < $size; $j++)
                {
                    if ($arr[$j] < $arr[$min])
                    {
                        $min = $j;
                    }
                }

                $temp = $arr[$i];
                $arr[$i] = $arr[$min];
                $arr[$min] = $temp;
            }
        }
    ?>
</body>
</html>