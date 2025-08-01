<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>PHP MICROPROJECT</title>
    <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
    <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
</head>
<body>
    <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
    <div class="content"><!--body content holder-->
        <div class="container">
            <div class="col-md-12"><!--body content title holder with 12 grid columns-->
                <h1>Contact Us</h1><!--body content title-->
            </div>
        </div>

        <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
        </div>

        <div class="container">
            <div class="col-md-6 contacts">
                <h1><span class="glyphicon glyphicon-user"></span> Owners: Anuja and Shreya</h1>
                <p>
                    <span class="glyphicon glyphicon-envelope"></span> Email: anujashreyaevents@gmail.com<br>
                    <span class="glyphicon glyphicon-link"></span> Facebook: www.facebook.com/AnujaShreyaEventsAndCo.<br>
                    <span class="glyphicon glyphicon-phone"></span> Mobile: 9971234567
                </p>
            </div>

            <div class="col-md-6">
                <h2>Book Your Event or Venue</h2>
                <form action="submit_booking.php" method="post" id="bookingForm">
                    <!-- Option to select the service type (Venue or Event) -->
                    <div class="form-group">
                        <label for="serviceType">Select Service:</label>
                        <select name="service_type" id="serviceType" class="form-control" required>
                            <option value="" disabled selected>Select a Service</option>
                            <option value="venue">Venue Booking</option>
                            <option value="event">Event Booking</option>
                        </select>
                    </div>
                    <!-- Input for selecting the date -->
                    <div class="form-group">
                        <label for="bookingDate">Select Date:</label>
                        <input type="date" name="booking_date" id="bookingDate" class="form-control" required>
                    </div>
                    <!-- Submit button to book -->
                    <button type="submit" class="btn btn-default pull-right">Book Now <span class="glyphicon glyphicon-send"></span></button>
                </form>
            </div>
        </div>
    </div><!--body content div-->
    
    <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
</body>
</html>
