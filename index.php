<?php include("header.php"); ?>


<section class="mybootstrap-section overlay bg-image" style="background-image: url(https://uicookies.com/demo/theme/health/images/bg_1.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="text-white display-4">We have the Specialists in <br> Family Healthcare</h2>
                <p class="text-white mb-5 lead">Far far away, behind the word mountains, far from the countries Vokalia.</p>
                <div class="row justify-content-center mb-5">
                    <div class="col-md-4"><a href="appointment.php" class="btn btn-primary btn-block">Appointment <span class="icon-arrow-right"></span></a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mybootstrap-section bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h2 class="h1">Our Doctors</h2>
                <p class="lead text-secondary">Far far away, behind the word mountains, far from the countries Vokalia.</p>
                <div class="row justify-content-center mb-5">
                    <!-- <div class="col-md-3"><a href="#" class="btn btn-secondary btn-block">Join Us</a></div> -->
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 prbootstrap-team">
                <img src="https://uicookies.com/demo/theme/health/images/person_1.jpg" alt="Free Template by uicookies.com" class="img-fluid">
                <div class="mybootstrap-person-text">
                    <span class="title">Medical Doctor</span>
                    <span class="name">Dr. Abbey Smith</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 prbootstrap-team">
                <img src="https://uicookies.com/demo/theme/health/images/person_2.jpg" alt="Free Template by uicookies.com" class="img-fluid">
                <div class="mybootstrap-person-text">
                    <span class="title">Medical Doctor</span>
                    <span class="name">Dr. Ben Carpio</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 prbootstrap-team">
                <img src="https://uicookies.com/demo/theme/health/images/person_3.jpg" alt="Free Template by uicookies.com" class="img-fluid">
                <div class="mybootstrap-person-text">
                    <span class="title">Medical Doctor</span>
                    <span class="name">Dr. Louisa Westwood</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 prbootstrap-team">
                <img src="https://uicookies.com/demo/theme/health/images/person_4.jpg" alt="Free Template by uicookies.com" class="img-fluid">
                <div class="mybootstrap-person-text">
                    <span class="title">Cardiac Surgeon</span>
                    <span class="name">Dr. Mark Sebastian</span>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.getElementById('home').classList.add('active');
    document.getElementById('app').classList.remove('active');
    document.getElementById('about').classList.remove('active');
    document.getElementById('contact').classList.remove('active');
</script>

<?php include("footer.php"); ?>