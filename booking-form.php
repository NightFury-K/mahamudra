<?php include("includes/header.php") ?>
<section class="breadcrumb">
    <img src="images/breadcrumb.png" alt="">
    <div class="page-title">Booking Form</div>
</section>
<div class="booking-form container">
    <div class="info">
        <h2>Lead traveler information</h2>
        <div class="row">
            <div class="col-6">
                <p>Full Name*</p>
                <input type="text">
            </div>
            <div class="col-6">
                <p>Phone</p>
                <input type="text">
            </div>
            <div class="col-6">
                <p>Email Adderss*</p>
                <input type="email">
            </div>
            <div class="col-6">
                <p>Location*</p>
                <input type="Location">
            </div>

        </div>

    </div>
    <div class="details">
        <h2>Trip details</h2>
        <div class="row">
            <div class="col-12 mb-4">
                <p>Select Trip*</p>
                <select name="select" id="select">
                    <option value="">Mardi Himal Trip</option>
                    <option value="">Ama Yangri Himal Trip</option>
                    <option value="">Pachpokhari Trip</option>
                </select>
            </div>
            <div class="col-6">
                <p>Number of Travellers*</p>
                <input type="text">
            </div>
            <div class="col-6">
                <p>Approx. Date of Travel*</p>
                <input type="text">
            </div>
        </div>
    </div>
    <div class="more-info">
        <h2>More Information</h2>
        <input type="message" name="message" id="message" placeholder="Your personal message">
        <p> <i class="bi bi-square me-3"></i> I accept all the <a href="">Terms & Conditions</a></p>

    </div>
    <div class="book">
        <a href="booking-form.php">Book Now <i class="bi bi-arrow-up-right"></i></a>

    </div>
</div>




<?php include("includes/footer.php") ?>