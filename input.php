<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracker</title>
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
                #make cookie to save name
                $name = $_POST["name"];
                echo "<p id='greetName'> Hello, " . $name . "! This is your " . "<span id='foodLogTitle'>Food log:</span>" . "</p>";
            ?>
        </div>

        <div>
            <div class="foodForm">
                <form action="" method="post">
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
                    <label class="foodInput" for="macros">Macronutrients</label>
                    <select class="foodInputLength" name="macros" id="macros">
                        <option value="carbohydrates">Carbohydrates</option>
                        <option value="proteins">Proteins</option>
                        <option value="fats">Fats</option>
                    </select>
                    <br>
                    <label class="foodInput" for="measurement">Measurement</label>
                    <input class="foodInputLength" type="text" id="measurement" name="measurement" placeholder="e.g., 100g or 100oz">
                    <div class="registrationElements buttonPosition">
                        <button style="color:white" class="btn btn-4" type="submit" name="submit" id="sumbit" onclick="return isEmpty()">Add</button>
                    <script src="./isEmpty.js"></script>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="timestamp.js"></script>
</body>
</html>