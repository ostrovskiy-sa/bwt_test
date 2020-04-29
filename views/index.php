<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>GetWeather</title>
  </head>
<body>
<script type="text/javascript">
    function validateForm(){
        var name = document.forms["form"]["name"].value;
        var surname = document.forms["form"]["surname"].value;
        var email = document.forms["form"]["email"].value;
        var lblname = document.getElementById("name");
        var lblsurname = document.getElementById("surname");
        var lblemail = document.getElementById("email");

        checkName = isName(name);
            if(checkName == false){
                lblname.innerHTML = "Use only latin letters!";
                return false;
            }
            else{
                lblname.innerHTML = "";
            }
        checkSurname = isSurname(surname);
            if(checkSurname == false){
                lblsurname.innerHTML = "Use only latin letters!";
                return false;
            }
            else{
                lblsurname.innerHTML = ""; 
            }
        checkEmail = isEmail(email);
            if(checkEmail == false){
                lblemail.innerHTML = "bad format!";
                return false;
            }
            else{
                lblemail.innerHTML = "";
            }

        function isName(name){
            var nameReg = /^[a-zA-Z]+$/;
            return nameReg.test(name);
        }
        function isSurname(surname){
            var surnameReg = /^[a-zA-Z]+$/;
            return surnameReg.test(surname);
        }
        function isEmail(email){
            var emailReg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return emailReg.test(email);
        }


    }
</script>
    <h2 align="center">Form registration</h2>
    <div class="container">
    <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm-5">
        <form name="form" method="POST" onsubmit="return validateForm()">
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Name *" required minlength="2"><label style="color:red;" id="name"></label>
        </div>
        <div class="form-group">
            <input type="text" name="surname" class="form-control" placeholder="Surname *" required minlength="2"><label style="color:red;" id="surname"></label>
        </div>
        <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="example@gmail.com *" required><label style="color:red;" id="email"></label>
        </div>
        <div class="form-group">
            <input type="text" name="birthday" class="form-control" placeholder="DD.MM.YYYY">
        </div>
        <div class="form-group">
        <span>Gender: </span>
            <input type="radio" name="gender" value="Female"/>Female
            <input type="radio" name="gender" value="Male"/>Male
        </div>
        <button type="submit" class="btn btn-primary">Registration</button>
        <a href='/login' class="btn btn-primary">Login</a>
        </form>
        </div>
        <div class="col-sm">
        </div>
    </div>
    </div>

</body>
</html>