<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="./ckeditor/ckeditor.js"></script>
    <title>bai 4</title>
</head>

<body>
    <style>
    .line {
        width: 100%;
        border: 2px solid gray;
    }

    .form {
        width: 100%;

    }

    .report {
        position: absolute;
        right: 77%;
    }

    .country {
        position: absolute;
        right: 71.5%;
    }

    .empty {
        position: absolute;
        right: 70%;

    }

    .all {
        margin-bottom: 10px;

    }
    </style>
    <div class="size">
        <div class="form">

            <form action="">
                <label for="">Basic Info</label><br>
                <div class="line"></div>
                <label style="margin-top: 10px; ;" for="">Emplyee ID </label> <label style="margin-left: 125px;"
                    for="">9</label> <br>

                <label for="">Last Name</label> <label style="margin-left: 132px;" for="">Dodsworth</label> <br>
                <div class="firstname">
                    <label for="">First Name</label>
                    <input class="empty" placeholder="Anne" type="text" name="First Name" id=""><br>
                </div>


                <div style="display: flex;" class="sex">
                    <label for="">Gender</label>
                    <div class="select ">
                        <input type="radio" name="gender" id="">Male<br>
                        <input type="radio" name="gender" id="">Female<br>
                        <input type="radio" name="gender" id="">XXX<br>
                        <input style="margin-bottom: 10px;" type="radio" name="gender" id="">YYY<br>
                    </div>

                </div>
                <div class="all"><label for="">Title</label>
                    <input class="empty" type="text" name="" id="" placeholder="Sales Representative">
                </div>

                <div class="all"><label for="">Suffix</label>
                    <input class="empty" type="text" name="" id="" placeholder="Ms."><br>
                </div>
                <div class="all">
                    <label for="">Birthdate</label>
                    <input class="empty" type="text" name="" id="" placeholder="1969-07-02 00:00:00"><br>
                </div>
                <div class="all">
                    <label for="">HireDate</label>
                    <input class="empty" type="text" name="" id="" placeholder="1994-11-15 00:00:00"><br>
                </div>
                <div class="all">
                    <label for="">SSN # (if appicable)</label>
                    <input class="empty" type="text" name="" id=""><br>
                </div>
                <div class="all">
                    <label for="">Report To</label>
                    <?php
                    $reports = [
                        "Buchanan",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        "",
                        ""
                    ];
                    echo '<select class="report">';
                    foreach ($reports as $repo) {
                        echo "<option>$repo</option>";
                    }
                    echo '</select>';
                    ?>
                    <br>
                </div>
                <label for="">Contact Info</label><br>
                <div class="line"></div>

                <div class="all"><label for="">Email</label>
                    <input class="empty" style="margin-bottom: 10px;" type="text" name="" id=""
                        placeholder="name@example.com"><br>
                </div>
                <div class="all"> <label for="">Address</label>
                    <input class="empty" style="margin-bottom: 10px;" type="text" name="" id=""
                        placeholder="7 Houndstooth Rd"><br>
                </div>
                <div class="all"> <label for="">City</label>
                    <input class="empty" style="margin-bottom: 10px;" type="text" name="" id=""
                        placeholder="London"><br>
                </div>
                <div class="all"><label for="">Region</label>
                    <input class="empty" style="margin-bottom: 10px;" type="text" name="" id=""><br>
                </div>

                <div class="all"><label for="">Postal Code</label>
                    <input class="empty" style="margin-bottom: 10px;" type="text" name="" id=""
                        placeholder="WG2 7LT"><br>
                </div>



                <div class="all"><label for="">Country</label>

                    <?php
                    $countries = [
                        "Afghanistan",
                        "Albania",
                        "Algeria",
                        "Andorra",
                        "Angola",
                        "Anguilla",
                        "Antigua & Barbuda",
                        "Argentina",
                        "Armenia",
                        "Aruba",
                        "Australia",
                        "Austria",
                        "Azerbaijan",
                        "Bahamas",
                        "Bahrain",
                        "Bangladesh",
                        "Barbados",
                        "Belarus",
                        "Belgium",
                        "Belize",
                        "Benin",
                        "Bermuda",
                        "Bhutan",
                        "Bolivia",
                        "Bosnia & Herzegovina",
                        "Botswana",
                        "Brazil",
                        "British Virgin
                    Islands",
                        "Brunei",
                        "Bulgaria",
                        "Burkina Faso",
                        "Burundi",
                        "Vietnam"

                    ];
                    echo '<select class="country">';
                    foreach ($countries as $coun) {
                        echo '<option> ' . $coun . '</option>';
                    }
                    echo '</select>';
                    ?>
                </div>



                <div class="all"><label for="">US Home Phone</label>
                    <input class="empty" style="margin-bottom:10px;" type="text" name="" id=""
                        placeholder="(234)234-2342"><br>
                </div>

                <div class="all"><label for="">Photo</label>
                    <input class="empty" style="margin-bottom:10px;" type="text" name="" id=""
                        placeholder="EmpID9.bmp"><br>
                </div>

                <div class="all"><label for="">Optional Info</label>
                    <input class="empty" style="margin-bottom:10px;" type="text" name="" id=""><br>
                </div>


                <label for="">Notes</label><br>
                <textarea name="ckeditor" id="ckeditor" cols="30" rows="10"></textarea><br>
                <script>
                CKEDITOR.replace('ckeditor');
                </script>
                <div>
                    <label for="">Preferred Shift</label>
                    <input style="margin-bottom:10px;" type="checkbox" name="" id="">Regular<br>
                    <input style="margin-bottom:10px;" type="checkbox" name="" id="">Gravy Yard

                </div>




                <label for="">Active ?</label>
                <input style="margin-bottom:10px;" type="checkbox" name="" id=""><br>
                <label for="">Are you human?</label>
                <label class="empty" for="">Click to change</label><br>
                <input class="empty" style="margin-bottom:10px;" type="text" name="" id=""><br>

                <div style="margin-left: 260px; margin-top: 10px;">
                    <button type="submit">Submit</button>
                    <button type="reset">Cancel</button>
                </div>


            </form>
        </div>
    </div>
</body>

</html>