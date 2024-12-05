<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>level 1</title>
    <link rel="stylesheet" href="../Css/input.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="border-2 rounded-md mx-5">
            <div class="border-b-2 p-2">
                <strong>Level 1</strong>
            </div>
            <ul class="pl-7 list-disc">
                <li>Display Current Date and Time :</li>
            </ul>
            <div class="p-2">
                <div class="pl-5">
                    <strong>Date : </strong>
                    <span>
                        <?php 
                        $date = date_create("2013-03-15");
                        echo  date('Y/m/d') ?>
                    </span>
                </div>
                <div class="pl-5">
                    <strong>Time : </strong>
                    <span>
                        <?php 
                        $date = date_create("2013-03-15");
                        echo  date('h:m:s') ?>
                    </span>
                </div>
            </div>
            <ul class="pl-7 list-disc">
                <li>Simple Calculator :</li>
            </ul>
            <div class="px-4 mt-2">
                <form method="post" action="index.php">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="">
                            <div class="flex flex-col ">
                                <span>Number 1</span>
                                <input class="border-2 p-2" name="number1" type="number" />
                            </div>
                            <div class="flex flex-col ">
                                <span>Number 2</span>
                                <input class="border-2 p-2" name="number2" type="number" />
                            </div>
                        </div>
                        <div class="grid grid-cols-1">
                            <div class="flex flex-col">
                                <span>Operation</span>
                                <select class=" border-2 h-full" name="operation">
                                    <option value="0">Plus</option>
                                    <option value="1">Minus</option>
                                    <option value="2">Times</option>
                                    <option value="3 by">Divided By</option>
                                </select>
                            </div>
                            <div class="flex flex-col mt-6">
                                <input class="border-2 border-green-700 text-green-700 rounded-md h-full cursor-pointer" name="submit" type="submit" value="Calculate"/>
                            </div>
                        </div> 
                    </div>
                    <?php 
                        if(isset($_POST['submit'])){
                            if($_POST['number1'] != '' && $_POST['number2'] != ''){
                                $total = 0;
                                $_POST['operation']==0 && $total = $_POST['number1'] + $_POST['number2'];
                                $_POST['operation']==1 && $total = $_POST['number1'] - $_POST['number2'];
                                $_POST['operation']==2 && $total = $_POST['number1'] * $_POST['number2'];
                                $_POST['operation']==3 && $total = $_POST['number1'] / $_POST['number2'];
                                
                                echo ' <div class="my-3 py-2 rounded-sm bg-gray-200 px-3">
                                            <span>Total : </span>
                                            <span>'.$total.'</span>
                                        </div>'
                                ;
                            }
                            else{
                                echo ' <div class="my-3 py-2 bg-red-200 rounded-sm  px-3">
                                            <span class="mt-4 text-red-900">* Required filed text number 1 , number 2</span>
                                        </div>';
                                
                                
                            }
                            
                        };
                    ?>
                </form>
                

            </div>
        </div>
</body>
</html>