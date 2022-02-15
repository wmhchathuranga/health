<?php include("header.php"); ?>
<?php include("configs.php"); ?>


<div class="appointment-form col-md-12 p-md-5 p-3 mybootstrap-aside-stretch-right">

    <form method="POST" action="thankyou.php">
        <h2 class="h1" style="text-align: center;">Make an Appointment</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label" for="name">Name</label>
                    <input id="name" name="name" type="text" placeholder="Name with initials" class="form-control input-md" required style="text-transform: capitalize;">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label" for="email">E-mail Address (optional)</label>
                    <input id="email" name="email" type="email" placeholder="email@example.com" class="form-control input-md">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label" for="date">Appointment Date</label>
                    <input id="date" name="date" type="date" placeholder="Preferred Date" class="form-control input-md" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label" for="time">Contact Number</label>
                    <input id="tele" name="tele" type="text" placeholder="*Appointment time will be informed to this number*" class="form-control input-md" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label" for="appointmentfor">Doctor</label>
                    <select id="appointmentfor" name="docid" class="form-control" style="text-transform: capitalize;">
                        <?php
                        $query = "select id,name,special from doctors";
                        $res = mysqli_query($conn, $query);
                        if ($res == TRUE) {
                            $count = mysqli_num_rows($res);
                            if ($count > 0) {
                                while ($rows = mysqli_fetch_assoc($res)) {
                                    $id = $rows['id'];
                                    $name = $rows['name'];
                                    $special = $rows['special'];
                                    echo "<option style=\"text-transform: capitalize;\" value=$id>Dr. $name | $special</option>";
                                }
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <br>
                <div class="submit-btn form-group">
                    <button id="singlebutton" name="submit" class="btn btn-secondary">Make An Appointment</button>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="clearfix"></div>
<script>
    document.getElementById('home').classList.remove('active');
    document.getElementById('app').classList.add('active');
    document.getElementById('about').classList.remove('active');
    document.getElementById('contact').classList.remove('active');
</script>
<?php include("footer.php"); ?>

<?php
