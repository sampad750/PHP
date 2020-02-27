<?php
header('X-XSS-Protection:0');
include_once 'functions.php';
$fruits = [ 'apple', 'Mango', 'Banana','orange' ];
?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>HTML page by hasin</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
    <style>
        body {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h1 style="color: red;">Single value from</h1>
                <?php
                    $fname = "";
                    $lname = "";
                    $checked = '';
                if(isset($_REQUEST['cb1']) && $_REQUEST['cb1']==1 ){
                    $checked = 'checked';
                }
                ?>
                <?php if(isset( $_POST['fname']) && !empty($_POST['fname']) ){
                    //$fname = htmlspecialchars($_POST['fname']); // sanitize
                    $fname = filter_input( INPUT_POST, 'fname', FILTER_SANITIZE_STRING); // sanitize
                } ?>
                <?php if(isset( $_POST['lname'])  && !empty($_POST['lname']) ){
                    //$lname = htmlspecialchars($_POST['lname']); // sanitize
                    $lname = filter_input( INPUT_POST, 'lname', FILTER_SANITIZE_EMAIL); // sanitize
                } ?>
                <p>First Name: <?php echo $fname; ?></p>
                <p>Last Name: <?php echo $lname; ?></p>
            </div>
        </div>
        <!-- single value from -->
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="post">
                <?php
                // get/post call (http verb)
                // (get/post = request) method
                ?>
                <label for="fname">First name</label>
                <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>"><br>
                <label for="lname">Last name</label>
                <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>">
                <div>
                    <input type="checkbox" name="cb1" id="cb1" value="1" <?php echo $checked; ?>>
                    <label for="cb1" class="label-inline">Some Check Box</label>
                </div>
                <label class="label">Select some foods</label>
                <!-- Multiple valu check box-->
                <input type="checkbox" name="fruits[]" value="orange" <?php isFruitChecked('orange')?>>
                <label class="label-inline">Orange</label></br>
                <input type="checkbox" name="fruits[]" value="mango" <?php isFruitChecked('orange')?>>
                <label class="label-inline">Mango</label></br>
                <input type="checkbox" name="fruits[]" value="banana" <?php isFruitChecked('orange')?>>
                <label class="label-inline">Banana</label></br>
                <input type="checkbox" name="fruits[]" value="lemon" <?php isFruitChecked('orange')?>>
                <label class="label-inline">Lemon</label></br>

                <button type="submit">Submit</button>
                </form>
            </div>
        </div>

        <!-- multiple value from -->
        <div class="row">
            <div class="column column-60 column-offset-20">
                <?php
                    /*
                     * single value select
                     * if(isset($_POST['fruits']) && $_POST['fruits'] != ''){
                        printf("You have selected: %s", filter_input(INPUT_POST, 'fruits', FILTER_SANITIZE_STRING)); //sanitize input content field.
                    }
                    */
                    // multiple value select
                    $sfruits = isset($_POST['fruits']) ? $_POST['fruits'] : array();
                    //$sfruits = $_POST['fruits'] ?? array(); //php 7.0
                    //$sfruits = filter_input(INPUT_POST, 'fruits', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY); // sanitize array input value
                    if(count($sfruits) > 0){
                        echo "You have selected: " . join(', ', $sfruits);
                    }
                ?>
                <h1 style="color: red;">Multiple value from</h1>
                <form method="post">
                    <label for="fruits">Select Some Fruits</label>
                    <select style="height: 200px;" name="fruits[]" id="fruits" multiple> <!-- multiple value nite chaile name ta array hisebe nite hobe -->
                        <option value="" disabled selected>Select Fruits</option>
                        <?php displayOptions($fruits, $sfruits); ?>
                    </select>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>

        <!-- file upload form  -->
        <?php
            $allowedTypes = array(
                'image/png',
                'image/jpg',
                'image/jpeg'
            );
            /*
             * single file upload
             * if($_FILES['photo']){
                if(in_array($_FILES['photo']['type'], $allowedTypes) !== false && $_FILES['photo']['size'] < 5000){
                    move_uploaded_file($_FILES['photo']['tmp_name'], "files/". $_FILES['photo']['name']);
                }
            }
             *
             * multi file upload
             * */
            if($_FILES['photo']){
                $totalFiles = count($_FILES['photo']['name']);
                    for($i=0; $i < $totalFiles; $i++){
                    if(in_array($_FILES['photo']['type'][$i], $allowedTypes) !== false && $_FILES['photo']['size'][$i] < 5000){
                        move_uploaded_file($_FILES['photo']['tmp_name'][$i], "files/". $_FILES['photo']['name'][$i]);
                    }
                }

            }
        ?>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h1 style="color: red;">File upload form</h1>
                <form method="post" enctype="multipart/form-data"> <!-- enctype="multipart/form-data" for input type file-->

                    <label for="photo">Photo</label>
                    <input type="file" name="photo[]" id="photo"><br/>
                    <input type="file" name="photo[]" id="photo"><br/>
                    <input type="file" name="photo[]" id="photo"><br/>

                    <button type="submit" name="submit" value="submit">Submit</button>
                </form>
            </div>
        </div>

    </div>
</body>
</html>