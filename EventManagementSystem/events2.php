<!DOCTYPE html>
<html>
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
                    <h1>Our Upcoming Events</h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
			
            <div class="row"><!--event content-->
                <section>
                    <div class="container">
                        <div class="date col-md-1"><!--date holder with 1 grid column-->
                            <span class="month">MAR</span><br><!--month-->
                            <hr class="line"><!--css modified horizontal line-->
                            <span class="day">20</span><!--day-->
                        </div>
                        <div class="col-md-5"><!--image holder with 5 grid column-->
                            <img src="images/bdayevent.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                            <h1 class="title">Veda's 1st Birthday</h1><!--event content title-->
                            <p class="location"><!--event content location-->
                            Krishna Palace, Kalyan West
                            </p>
                            <p class="definition"><!--event content definition-->
                            March 20th is pre booked for the little girl Veda's first Birthday
                            </p>
                            <hr class="customline2"><!--css modified horizontal line-->
                            
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="date col-md-1"><!--date holder with 1 grid column-->
                            <span class="month">MAR</span><br><!--month-->
                            <hr class="line"><!--css modified horizontal line-->
                            <span class="day">25</span><!--day-->
                        </div>
                        <div class="col-md-5"><!--image holder with 5 grid column-->
                            <img src="images/fashevent.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                            <h1 class="title">Fashion Workshop BY SS School of Fashion</h1><!--event content title-->
                            <p class="location"><!--event content location-->
                            R-city mall, Ghatkopar East
                            </p>
                            <p class="definition"><!--event content definition-->
                           SS School of Fashion is hosting their fashion worshop for students at R-city mall
                            </p>
                            <hr class="customline2"><!--css modified horizontal line-->
                           
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="date col-md-1"><!--date holder with 1 grid column-->
                            <span class="month">APR</span><br><!--month-->
                            <hr class="line"><!--css modified horizontal line-->
                            <span class="day">02</span><!--day-->
                        </div>
                        <div class="col-md-5"><!--image holder with 5 grid column-->
                            <img src="images/wedevent.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                            <h1 class="title">Mr and Mrs Aaryal's 2nd Anniversary</h1><!--event content title-->
                            <p class="location"><!--event content location-->
                            Prasad Hotel, Thane East
                            </p>
                            <p class="definition"><!--event content definition-->
                           Mr and Mrs Aaryal are celebrating their 2nd Marriage Anniversary at Prasad Hotel, Thane East
                            </p>
                            <hr class="customline2"><!--css modified horizontal line-->
                           
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="date col-md-1"><!--date holder with 1 grid column-->
                            <span class="month">MAY</span><br><!--month-->
                            <hr class="line"><!--css modified horizontal line-->
                            <span class="day">22</span><!--day-->
                        </div>
                        <div class="col-md-5"><!--image holder with 5 grid column-->
                            <img src="images/meetevent.jpg" class = "img-responsive">
                        </div>
                        <div class="subcontent col-md-6"><!--event content holder with 6 grid column-->
                            <h1 class="title">Annual Fest of SHJP College</h1><!--event content title-->
                            <p class="location"><!--event content location-->
                            New Age hall, Dombivali West
                            </p>
                            <p class="definition"><!--event content definition-->
                            The S.H Jondhale college of Polytechnic and Engineering is hosting their 25th annual fest at New Age Hall, Dombivali West
                            </p>
                            <hr class="customline2"><!--css modified horizontal line-->
                            
                       </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
