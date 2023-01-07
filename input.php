<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Log</title>
    <link rel="icon" href="./Images/favicon.ico">
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/908d424872.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        Dietary Reference Report <span class="automator">Automator</span>
    </header>

    <div style="margin-top: 50px" class="container">
        <div>
            <p id="greeting"></p>
            <?php
                $name = $_POST["name"];
                #cookie will save the user's name
                session_start();
                $setName = "username";
                $name_value = $name;
                setcookie($setName, $name_value, time()+12*60*60,"/");

                if (isset($_COOKIE[$setName])){
                    $cookieName = $_COOKIE[$setName];
                    setcookie($setName, $cookieName);
                    echo "<p id='greetName'> Hello, " . $cookieName . "! This is your " . "<span id='foodLogTitle'>Food log:</span>" . "</p>";
                }
                else{
                    $cookieName = $name;
                    setcookie($setName, $cookieName);
                    $_COOKIE[$setName] = $cookieName;
                    echo "<p id='greetName'> Hello, " . $cookieName . "! This is your " . "<span id='foodLogTitle'>Food log:</span>" . "</p>";
                }
            ?>
        </div>

        <div>
            <div class="foodForm">
                <form name="foodLog" action="" method="post">
                    <p id="foodNameErrorMessage"></p>
                    <label class="foodInput" for="type">Type:</label>
                    <select class="foodInputLength" id="type" name="type">
                        <option value="breakfast">Breakfast</option>
                        <option value="lunch">Lunch</option>
                        <option value="dinner">Dinner</option>
                        <option value="snack">Snack</option>
                        <option value="drinks">Drinks</option>
                    </select>
                    <br>
                    <label class="foodInput" for="foodName">Enter food/drink</label>
                    <input class="foodInputLength" type="text" id="foodName" name="foodName" placeholder="e.g., apple">
                    <br>
                    <label class="foodInput" for="carbohydrates">Carbohydrates</label>
                    <input class="foodInputLength" type="text" id="carbohydrates" name="carbohydrates" placeholder="e.g., 100g">
                    <label class="foodInput" for="proteins">Proteins</label>
                    <input class="foodInputLength" type="text" id="proteins" name="proteins" placeholder="e.g., 100g">
                    <label class="foodInput" for="fats">Fats</label>
                    <input class="foodInputLength" type="text" id="fats" name="fats" placeholder="e.g., 100g">
                    <label class="foodInput" for="water">Water (if applicable)</label>
                    <input class="foodInputLength" type="text" id="water" name="water" placeholder="e.g., 100ml">
                    <div class="registrationElements buttonPosition addButton">
                        <button style="color:white" class="btn btn-4" type="button" name="add" id="add" onclick="log();">Add</button>
                        <script src="./isEmpty.js"></script>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div id=results>
        <p id=breakfastLog></p>
        <script>
            function log(){
                const breakfastFoods = [];
                const lunchFoods = [];
                const dinnerFoods = [];
                const snackFoods = [];
                const waterCount = [];
                if (document.getElementById("type").value == "breakfast"){
                    breakfastFoods.push(document.getElementById("foodName").value);
                }
                else if (document.getElementById("type").value == "lunch"){
                    lunchFoods.push(document.getElementById("foodName").value)
                }
                else if (document.getElementById("type").value == "dinner"){
                    dinnerFoods.push(document.getElementById("foodName").value)
                }
                else if (document.getElementById("type").value == "snack"){
                    snackFoods.push(document.getElementById("foodName").value)
                }
        
                for (i = 0; i < breakfastFoods.length; i++){
                    console.log("breakfast " + breakfastFoods[i]);
                }
                for (i = 0; i < lunchFoods.length; i++){
                    console.log("lunch " + lunchFoods[i]);
                }
                for (i = 0; i < dinnerFoods.length; i++){
                    console.log("dinner " + dinnerFoods[i]);
                }
                for (i = 0; i < snackFoods.length; i++){
                    console.log("snack " + snackFoods[i]);
                }
                macros();
                //document.getElementById("breakfastLog").innerHTML = document.getElementById("foodName").value;
            }

            function macros(){
                let carbs = 0;
                let pro = 0;
                let fats = 0;
                let total = 0;
            }
        </script>
        
    </div>
    <script src="./timestamp.js"></script>
</body>
</html>