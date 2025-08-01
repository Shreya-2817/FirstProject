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
                    <h1>Our Venues</h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
			
            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/urbanxchange.jpg" class="img-responsive">
                        </div>
                        <div class="modal fade" id="urbanxchange" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">Krishna Palace</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/urbanxchange.jpg" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>EXPERIENCE THE GREATNESS</h5><!--content title-->
                                                <p>
                                                Krishna Palace is a majestic wedding destination nestled in the heart of Kalyan West.
                                                 This stunning palace is inspired by the ancient Indian architecture of Krishna's kingdom, 
                                                 with intricate carvings, ornate chandeliers, and grandiose columns. The palace boasts sprawling lawns, 
                                                 perfect for outdoor weddings and receptions, and a lavish banquet hall that can accommodate up to 1,000 guests.

                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                As you step inside, you'll be greeted by the opulent décor, 
                                                complete with crystal chandeliers, marble floors, and intricate woodwork. 
                                                The palace's interior design is a perfect blend of traditional Indian architecture
                                                 and modern luxury, creating a truly regal atmosphere for your special day.

                                                </p>

                                                <p>
                                                Krishna Palace offers a range of amenities and services, 
                                                including luxurious accommodations for out-of-town guests,
                                                 a team of expert event coordinators, and a variety of catering options to 
                                                 suit every taste and budget. Whether you're planning an intimate gathering or a grand 
                                                 celebration, Krishna Palace is the perfect venue for your wedding or special event.

                                                </p>
                                            </div>
                                        </div><!--modal body-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p><!--close button-->
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div><!--modal div-->
                        <div class="subcontent col-md-8"><!--location non modal content -->
                            <h1 class="title">Krishna Palace
                            </h1><!--location title-->
                            <p class="location"><!--location secondary content-->
                            Kalyan West
                            </p>
                            <p class="definition"><!--content body-->
                            Krishna Palace is a majestic wedding destination nestled in the heart of Kalyan West.
                                                 This stunning palace is inspired by the ancient Indian architecture of Krishna's kingdom, 
                                                 with intricate carvings, ornate chandeliers, and grandiose columns. The palace boasts sprawling lawns, 
                                                 perfect for outdoor weddings and receptions, and a lavish banquet hall that can accommodate up to 1,000 guests.
                            </p>
                            <hr class="customline3"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#urbanxchange"><!--button for modal trigger-->
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span><!--glyphicon--> 
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/ananasbar.jpg" class="img-responsive">
                        </div>
                        <div class="modal fade" id="ananasbar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">R-City Mall</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/ananasbar.jpg" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>YOUR ULTIMATE STOP</h5><!--content title-->
                                                <p>
                                                R-City Mall is a modern and trendy shopping and entertainment destination
                                                 located in the heart of Ghatkopar East. This sleek and sophisticated mall 
                                                 offers a range of event spaces, including a rooftop lounge with breathtaking views 
                                                 of the city, a spacious atrium, and a state-of-the-art auditorium.

                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                The mall's rooftop lounge is perfect for hosting cocktail parties, product launches, 
                                                and other corporate events, with its chic décor, comfortable seating, and stunning views 
                                                of the city. The atrium is ideal for hosting exhibitions, fashion shows, and other events 
                                                that require a large, open space. The auditorium is equipped with state-of-the-art sound and 
                                                lighting systems, making it the perfect venue for concerts, theater productions, and other performing arts events.

                                                </p>

                                                <p>
                                                R-City Mall offers a range of amenities and services, including valet
                                                 parking, Wi-Fi connectivity, and a team of expert event coordinators. 
                                                 Whether you're planning a corporate event, a fashion show, or a concert, 
                                                 R-city Mall is the perfect venue for you.

                                                </p>
                                            </div>
                                        </div><!--modal body-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div><!--modal div-->
                        <div class="subcontent col-md-8"><!--location non modal content -->
                            <h1 class="title">R-City Mall</h1><!--location title-->
                            <p class="location">Ghatkopar West</p><!--location secondary content-->
                            <p class="definition">
                            R-City Mall is a modern and trendy shopping and entertainment destination
                                                 located in the heart of Ghatkopar East. This sleek and sophisticated mall 
                                                 offers a range of event spaces, including a rooftop lounge with breathtaking views 
                                                 of the city, a spacious atrium, and a state-of-the-art auditorium.

                            </p>
                            <hr class="customline3"><!--css modified horizontal line--> 
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#ananasbar"><!--button for modal trigger-->
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span><!--glyphicon--> 
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/argyle.jpg" class="img-responsive">
                        </div>    
                        <div class="modal fade" id="argyle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">Prasad Hotel</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/argyle.jpg" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>THE RICHNESS</h5><!--content title-->
                                                <p>
                                                Prasad Hotel is a charming and elegant boutique hotel located in the heart of
                                                 Thane West. This family-run hotel exudes warmth and hospitality, with beautifully
                                                  appointed rooms, a rooftop restaurant, and a cozy banquet hall.


                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                The hotel's rooftop restaurant offers stunning views of the city, 
                                                along with a range of delicious cuisine options to suit every taste and budget.
                                                 The banquet hall is perfect for hosting intimate gatherings, such as birthday parties, anniversaries,
                                                  and family reunions, with its cozy décor, comfortable seating, and personalized service.


                                                </p>

                                                <p>
                                                Prasad Hotel offers a range of amenities and services, including luxurious accommodations, 
                                                a team of expert event coordinators, and a variety of catering options to suit every taste and 
                                                budget. Whether you're planning a family gathering, a corporate event, or a romantic getaway, 
                                                Prasad Hotel is the perfect destination for you.

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subcontent col-md-8">
                            <h1 class="title">Prasad Hotel</h1>
                            <p class="location">Thane West</p>
                            <p class="definition">Prasad Hotel is a charming and elegant boutique hotel located in the heart of Thane West. 
                                This family-run hotel exudes warmth and hospitality, with beautifully appointed rooms, a rooftop restaurant, 
                                and a cozy banquet hall.</p>
                            <hr class="customline3">   
                            <button type="button" class="btn btn-default btn-md" data-toggle = "modal" data-target = "#argyle">
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> 
                            </button>
                        </div>
                    </div>
                </section>
            </div>
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="images/munich.jpg" class = "img-responsive">
                        </div>
                        <div class="modal fade" id="munich" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">New Age Hall</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="images/munich.jpg" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>CHARMING DELIGHT</h5>
                                                <p>
                                                New Age Hall offers a range of amenities and services, 
                                                including valet parking, Wi-Fi connectivity, and a team of expert event 
                                                coordinators. Whether you're planning a corporate event, a wedding, or a cultural program, 
                                                New Age Hall is the perfect venue for you.
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                New Age Hall is a modern and versatile event space located in the heart 
                                                of Dombivli West. This sleek and sophisticated hall is perfect for hosting a wide
                                                 range of events, including weddings, receptions, conferences, and cultural programs.


                                                </p>
                                                
                                                <p>
                                                The hall features a spacious event area, a separate dining space, 
                                                and a state-of-the-art sound and lighting system. The event area is 
                                                equipped with comfortable seating, modern décor, and ample natural light, 
                                                making it the perfect space for conferences, seminars, and other corporate events. 
                                                The dining space is perfect for hosting wedding receptions, birthday parties, and other social
                                                 gatherings, with its elegant décor, comfortable seating, and personalized service.

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subcontent col-md-8">
                            <h1 class="title">New Age Hall</h1>
                            <p class="location">Dombivali West</p>
                            <p class="definition">New Age Hall is a modern and versatile event space located in the heart
                                 of Dombivli West. This sleek and sophisticated hall is perfect for hosting a wide range of events, 
                                 including weddings, receptions, conferences, and cultural programs.</p>
                            <hr class="customline3">   
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#munich">
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> 
                            </button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php require 'utils/footer.php'; ?>
    </body>
</html>
