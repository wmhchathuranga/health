<?php include("header.php"); ?>
<?php include("configs.php"); ?>

<div class="appointment-form col-md-12 p-md-5 p-3 mybootstrap-aside-stretch-right">
    <span id="hidden-success" class="alert alert-success" style="visibility:hidden;">New Doctor Added</span>

    <form method="POST" action="">
        <h2 class="h1" style="text-align: center;">Add a New Doctor</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label" for="name">Name</label>
                    <input id="name" name="fname" type="text" placeholder="John Smith" class="form-control input-md" required style="text-transform: capitalize;">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label" for="uname">Username</label>
                    <input id="uname" name="uname" type="uname" placeholder="uname" class="form-control input-md" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label " for="passwd">Password</label>
                    <input id="passwd" name="passwd" type="password" placeholder="Password" class="form-control input-md passwd" pattern=".{8,}" title="Password should contain at least 8 characters" onkeyup="isSame()" onfocusout="isSame()" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label " for="confirm-passwd">Confirm Password</label>
                    <input id="confirm-passwd" name="confirm-passwd" type="password" placeholder="Repeat Password" class="form-control input-md passwd" pattern=".{8,}" title="Password should contain at least 8 characters" onkeyup="isSame()" onfocusout="isSame()" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label" for="Special">Special</label>
                    <input id="special" name="special" type="special" placeholder="Cadiology" class="form-control input-md" required style="text-transform: capitalize;">
                </div>
            </div>

            <div class="col-md-12">
                <br>
                <div class="submit-btn form-group">
                    <button id="addDoctor" name="submit" class="btn btn-secondary">Add Doctor</button>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="clearfix"></div>

<script src="./js/passvalidate.js"></script>
<script>
    document.getElementById('home').classList.remove('active');
    document.getElementById('app').classList.remove('active');
    document.getElementById('about').classList.remove('active');
    document.getElementById('contact').classList.remove('active');
</script>
<?php include("footer.php"); ?>

<?php
if (isset($_POST['submit'])) {

    $fname = ucwords($_POST['fname']);
    $uname = $_POST['uname'];
    $passwd = md5($_POST['passwd']);
    $special = $_POST['special'];

    $query = "insert into doctors set name='$fname',uname='$uname',passwd='$passwd',special='$special'";
?>
    <script>
        document.getElementById('hidden-success').style.visibility = "visible";
        setTimeout(() => {
            document.getElementById('hidden-success').style.visibility = "hidden";
            document.getElementById('hidden-success').style.display = "none";
        }, 5000);
    </script>
<?php
    $res = mysqli_query($conn, $query);
}
