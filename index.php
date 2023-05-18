
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERSONAL DETAILS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="ajax.php" id="signupForm" method = "post">
            <h2 class = "text-center">Personal Details</h2>
            <div class="mb-3 row">
                <label for="staticName" class="col-sm-2 col-form-label">NAME</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="staticName" name="staticName">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">EMAIL</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" id="staticEmail" name="staticEmail">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticmobile" class="col-sm-2 col-form-label">MOBILE</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="staticmobile" name="staticmobile">
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

                <input class="form-check-input" type="radio" id="male" name="gender" value="male">
                <label class="form-check-label" for="male">MALE</label><br>
                <input class="form-check-input" type="radio" id="female" name="gender" value="female">
                <label class="form-check-label" for="female">FEMALE</label><br>
                </div>
            </div>        
           


            <div class="mb-3 row">
                <label for="staticage" class="col-sm-2 col-form-label">AGE</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="staticage" name ="staticage">
                </div>
            </div>

            <div class="mb-3 row ">
            <label for="staticQualification" class="col-sm-2 col-form-label">QUALIFICATION</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name ="quali">
                        <option selected>select qualification</option>
                        <option value="x">X</option>
                        <option value="xii">XII</option>
                        <option value="be">BE</option>
                        <option value="bca">BCA</option>
                        <option value="diploma">DIPLOMA</option>
                    </select>
                </div>
            </div>

                <!-- <div class="mb-3 row">
                    <label for="staticQualification" class="col-sm-2 col-form-label">QUALIFICATION</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticQualification">
                    </div>
                </div> -->

            <!-- <div class="mb-3 row">
                <label for="staticstate" class="col-sm-2 col-form-label">STATE</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="staticstate">
                </div>
            </div> -->


            <div class="mb-3 row">
            <label for="staticQualification" class="col-sm-2 col-form-label">STATE</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name ="state">
                        <option selected>select state</option>
                        <option value="tamilnadu">Tamilnadu</option>
                        <option value="andhra">Andhra </option>
                        <option value="delhi">Delhi</option>
                    </select>
                </div>
            </div>


            <div class="mb-3 row">
            <label for="staticQualification" class="col-sm-2 col-form-label">DISTRICT</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name ="district">
                        <option selected>select District</option>
                        <option value="thanjavur">Thanjavur</option>
                        <option value="thiruvarur">Thiruvarur</option>
                        <option value="sivakasi">Sivakasi</option>
                    </select>
                </div>
            </div>

            <!-- <div class="mb-3 row">
                <label for="inputdistrict" class="col-sm-2 col-form-label">DISTRICT</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputdistrict">
                </div>
            </div> -->
            <!-- <input class="btn btn-primary" type="submit" value="Submit"> -->
            <button type="submit" class="btn btn-primary text-right">submit</button>

        </form>
    </div>
    <script src="script.js"></script>

    <table class="table table-responsive-md" style="text-align: center;">
                                <thead>
                                <tr>
                                    <th class="width80"><strong>S.NO</strong></th>
                                    <th><strong>Name</strong></th> 
                                    <th><strong>email</strong></th>
                                    <th><strong>mobile</strong></th>
                                    
                                    <th><strong>age</strong></th>
                                    <th><strong>qualification</strong></th>
                                    <th><strong>state</strong></th>
                                    
                                    <th><strong>Action</strong></th>
                                </tr>
                                </thead>


                            
                                </table>

</body>
</html>
