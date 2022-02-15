<?php include("header.php"); ?>
<?php include("configs.php"); ?>

<div class="thankyou">
    <h1 class="h1" style="text-align: center;font-size:48px;margin-bottom:2rem">Thank You for Using our Service!</h1>
    <br><br>
    <h2>-- We will contact you within few hours --</h2>
</div>

<?php include("footer.php"); ?>

<?php
if (isset($_POST['submit'])) {

    $patient_name = ucwords($_POST['name']);
    $email = $_POST['email'];
    $date = $_POST['date'];
    $tp = $_POST['tele'];
    $doctor_id = $_POST['docid'];
    $query = "select name from doctors where id=$doctor_id";
    $res = mysqli_query($conn, $query);
    $doctor = mysqli_fetch_assoc($res);
    $doctor_name = $doctor['name'];
    echo "<h1>$doctor_name</h1>";
    $query = "insert into appointments set patient_name='$patient_name',email='$email',date='$date',tp='$tp',doctor='$doctor_name'";

    $res = mysqli_query($conn, $query);
}
