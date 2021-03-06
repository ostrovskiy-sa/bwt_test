<script type="text/javascript">
    function validateForm(){
        var name = document.forms["form"]["name"].value;
        var email = document.forms["form"]["email"].value;
        var norobot = document.forms["form"]["norobot"].value;
        var lblname = document.getElementById("name");
        var lblemail = document.getElementById("email");
        var lblnorobot = document.getElementById("norobot");

        checkName = isName(name);
        if (checkName == false) {
            lblname.innerHTML = "Use only latin letters!";
            return false;
        } else {
            lblname.innerHTML = "";
        }
        checkEmail = isEmail(email);
        if (checkEmail == false) {
            lblemail.innerHTML = "Bad format!";
            return false;
        } else {
            lblemail.innerHTML = "";
        }
        if (norobot != 'BWT') {
            lblnorobot.innerHTML = "Try again!";
            return false;
        } else {
            lblemail.innerHTML = "";
        }
        
        function isName(name)
        {
            var nameReg = /^[a-zA-Z ]+$/;
            return nameReg.test(name);
        }
        function isEmail(email)
        {
            var emailReg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return emailReg.test(email);
        }
    }
</script>

<?php
if (isset($_SESSION['addcomment'])) {
    $smsg = "You've added comment!";
    $_SESSION['addcomment'] = null;
}
?>

<div class="container">
    <div class="row">
        <div class="block">
            <h2>Add comment</h2>

            <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"><?php echo $smsg; ?></div><?php } ?>
            
            <form name="form" method="POST" onsubmit="return validateForm()">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Name *" required minlength="2"><label style="color:red;" id="name"></label>
                </div>
                <div class="form-group">
                    <input type="text" name="email" class="form-control" placeholder="example@gmail.com *" required><label style="color:red;" id="email"></label>
                </div>
                <div class="form-group">
                    <input type="text" name="comment" class="form-control" placeholder="Your comment *" required minlength="10"><label style="color:red;" id="email"></label>
                </div>
                <div>
                    <input type="text" name="norobot" class="form-control" placeholder="Please type: BWT" required><label style="color:red;" id="norobot"></label>
                </div>
                <button type="submit" class="btn btn-primary">Add comment</button>
                <button type="reset" class="btn btn-primary">Reset</button>
                <a href="/" class="btn btn-primary">Registration</a>
                <a href="/weather" class="btn btn-primary">Get Weather</a>
            </form>
        </div>
    </div>
</div>
