<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERSONAL DETAILS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="">
            <h2>Personal Details</h2>
            <div class="mb-3 row">
                <label for="staticName" class="col-sm-2 col-form-label">NAME</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="staticName">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">EMAIL</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" id="staticEmail">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticmobile" class="col-sm-2 col-form-label">MOBILE</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="staticmobile">
                </div>
            </div>
            <!-- <div class="mb-3 row">
                <label for="staticgender" class="col-sm-2 col-form-label">gender	</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="staticEmail">
                </div>
            </div> -->

            <!-- <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Default radio
                </label>
            </div> -->

            <div class="mb-3 row">
            <label for="staticgender" class="col-sm-2 col-form-label">GENDER</label>
            <div class="form-check">

                <input class="form-check-input" type="radio" id="html" name="fav_language" value="HTML">
                <label class="form-check-label" for="html">MALE</label><br>
                <input class="form-check-input" type="radio" id="css" name="fav_language" value="CSS">
                <label class="form-check-label" for="css">FEMALE</label><br>
                </div>
            </div>        
           


            <div class="mb-3 row">
                <label for="staticage" class="col-sm-2 col-form-label">AGE</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="staticage">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticQualification" class="col-sm-2 col-form-label">QUALIFICATION</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="staticQualification">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticstate" class="col-sm-2 col-form-label">STATE</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="staticstate">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputdistrict" class="col-sm-2 col-form-label">DISTRICT</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputdistrict">
                </div>
            </div>
            <input class="btn btn-primary" type="submit" value="Submit">

        </form>
    </div>
</body>
</html>