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
<div class="border-2 rounded-md mx-5 my-3">
            <div class="border-b-2 p-2 flex items-center justify-between ">
                <strong>Level 1</strong>
                <?php if(1==1):?>
                    <i class="fa-solid fa-code transition-all cursor-pointer hover:bg-gray-300 px-3 py-1 rounded-full"></i>
                <?php else:?>
                <i class="fa-solid fa-eye"></i>
                <?php endif; ?>
            </div>
            <div class="pt-2">
                <section>
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
                </section>
                <section>
                    <ul class="pl-7 list-disc">
                        <li>Simple Calculator :</li>
                    </ul>
                    <div class="px-4 mt-2">
                        <form method="post" action="index.php">
                            <div class="grid grid-cols-2 gap-4 mb-3">
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
                                    <div class="flex flex-col mt-6 ">
                                        <input class="border-2 border-green-700 text-green-700 rounded-md h-full cursor-pointer" name="submit" type="submit" value="Calculate"/>
                                    </div>
                                </div> 
                            </div>
                            <?php 
                                if(isset($_POST['submit'])){
                                    if(!empty($_POST['number1']) && !empty($_POST['number2'])){
                                        $total = 0;
                                        $_POST['operation']==0 && $total = $_POST['number1'] + $_POST['number2'];
                                        $_POST['operation']==1 && $total = $_POST['number1'] - $_POST['number2'];
                                        $_POST['operation']==2 && $total = $_POST['number1'] * $_POST['number2'];
                                        $_POST['operation']==3 && $total = $_POST['number1'] / $_POST['number2'];
                                        
                                        echo ' <div class="mb-3 py-2 rounded-sm bg-gray-200 px-3">
                                                    <span>Total : </span>
                                                    <span>'.$total.'</span>
                                                </div>'
                                        ;
                                    }
                                    else{
                                        echo ' <div class="mb-3 py-2 bg-red-200 rounded-sm  px-3">
                                                    <span class="mt-4 text-red-900">* Required filed text number 1 , number 2</span>
                                                </div>';
                                        
                                        
                                    }
                                    
                                };
                            ?>
                        </form>
                        

                    </div>
                </section>
                <section>
                    <ul class="pl-7 list-disc">
                        <li>Form Submission :</li>
                    </ul>
                    <div class="px-4 mt-2 grid 
                        <?php echo isset($isDisplayed) && $isDisplayed ? 'grid-cols-2' : 'grid-cols-1'; ?>">
                        <form method="post" action="index.php">
                            <div class="flex flex-col ">
                            <span>Name</span>
                            <input class="border-2 p-2" name="txtname" type="text" />
                            </div>
                            <div class="flex flex-col ">
                            <span>Email</span>
                            <input class="border-2 p-2" name="txtemail" type="text" />
                            </div>
                                <div class="flex flex-col my-6">
                                    <input class="border-2 border-gray-700 py-2 text-gray-700 rounded-md h-full cursor-pointer" name="submitcard" type="submit" value="Get Card"/>
                                </div>
                            </form>
                        <?php 
                        $isDisplayed = false;
                        if(isset($_POST['submitcard'])){
                        if(!empty($_POST['txtname']) && !empty($_POST['txtemail'])){
                            $isDisplayed = true ;  
                            $nameSecured = htmlspecialchars($_POST['txtname']);
                            $emailSecured = htmlspecialchars($_POST['txtemail']);        
                            echo '
                                <div class="w-auto mb-6 bg-gray-200 p-3 rounded-md flex  flex-col gap-3 items-center transition-all">
                                    <i class="fa-solid fa-user text-5xl text-gray-800"></i>
                                    <strong>'.$nameSecured.'</strong>
                                    <span>'.$emailSecured.'</span>
                                </div>
                            ';
                            

                        } 
                        }
                    
                        ?>
                    </div>
                </section>
                <section>
                    <ul class="pl-7 list-disc">
                        <li>Even or Odd Checker :</li>
                    </ul>
                    <form action="" method="post">
                        <div class="flex flex-col px-4">
                            <span>Number</span>
                            <div class="grid grid-cols-2 gap-3">
                                <input class="border-2 p-2" name="nb" type="number" />
                                <input class="border-2 border-gray-700 py-2 text-gray-700 rounded-md h-full cursor-pointer" name="submitnb" type="submit" value="Check"/>
                            </div>
                            <?php 
                            if(isset($_POST['submitnb']) && !empty($_POST['nb'])){
                                $nb_value = $_POST['nb'];
                               
                                echo '
                                <div class="my-4 bg-gray-200 rounded-md px-3 py-1">
                                ';
                                    if($nb_value % 2 == 0) echo 'Even' ;
                                    else echo 'Odd';
                                echo '
                                </div>
                                ';
                            }
                            ?>
                        </div>
                    </form>
                </section>
                <section>
                    <ul class="pl-7 list-disc">
                        <li>Basic Looping :</li>
                    </ul>
                </section>
            </div>
        </div>
        <script src="https://kit.fontawesome.com/ff84f079ef.js" crossorigin="anonymous"></script>

</body>
</html>