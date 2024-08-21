<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>

<body class="light" data-barba="wrapper">

  

    <!-- Mouse Cursor -->
    <div id="mouseCursor" class="circle"> </div>
    <!--/ Mouse Cursor -->

    <!-- Page -->
    <div id="page">

        <div class="menu-overlay"></div>

       <?php include 'include/header.php'; ?>

        <!-- Fullscreen Menu (for mobile) -->
        <div id="site-navigation" class="fullscreen_menu fullscreen dark">

            <div class="wrapper fullscreen-menu-wrapper">

                <div class="c-col-6 sm-12">

                    <ul class="menu main-menu">

                        <li><a href="#why">Why Hightable</a></li>
                        <li><a href="#how">How it works?</a></li>
                        <li><a href="#kudos">Kudos</a></li>
                        <li><a href="#curiosity">Curiosity Corner</a></li>
                        <li><a href="#connect">Let's Connect</a></li>


                    </ul>

                </div>

                <!-- Fullscreen Menu Bottom -->
                <div class="fullscreen-menu-wrap-bottom">

                    <div class="c-col-3 sm-12 has-anim fadeDown" data-delay=.4>

                        <!-- Button -->
                        <div class="nayla-button underline icon-right" data-icon="arrow_outward">

                            <a href="#">hello@hightable.com</a>

                        </div>
                        <!--/ Button -->

                    </div>

                </div>
                <!--/ Fullscreen Menu Bottom -->

            </div>

        </div>
        <!-- Fullscreen Menu (for mobile) -->

        <main id="primary" class="site-main" data-barba="container">

            <!-- Page Content -->
            <div id="content" class="page-content">

                <div class="section">

                    <div class="wrapper">

                        <div class="c-col-8 sm-12">

                            <!-- Text -->
                            <div class="text-wrapper">

                                <p class="text-h1 no-margin">Get in touch.
                                    <br> <a href="mailto:admin@hightable.ai">admin@hightable.ai</a>
                                </p>

                            </div>
                            <!--/ Text -->

                        </div>

                    </div>

                    <div class="wrapper">

                        <div class="c-col-3 sm-12">

                            <!-- Text -->
                            <div class="text-wrapper">

                                <p>India</p>

                                <p class="text-h6">
                                Adya 13 & 14, No. 04,<br>
6th Cross, 9th Main,<br>
Srinivagilu Vivekanagar,<br>
Bangalore North,<br>
Bangalore - 560047<br>
                                </p>



                            </div>
                            <!--/ Text -->

                        </div>

                      

                        <!-- Empty Column (For Spacing) -->
                        <div class="c-col-3 hide-mobile"></div>
                        <!--/ Empty Column (For Spacing) -->
                           <!-- Empty Column (For Spacing) -->
                           <div class="c-col-3 hide-mobile"></div>
                        <!--/ Empty Column (For Spacing) -->

                        <div class="c-col-3 sm-12">

                            <!-- Text -->
                            <div class="text-wrapper align-right">

                                <p>ASISTANCE HOURS</p>

                                <p class="text-h6">
                                    Monday – Friday
                                    <br>10 am to 7 pm IST
                                </p>

                            </div>
                            <!--/ Text -->

                        </div>

                    </div>

                    <div class="wrapper">

                        <div class="c-col-4 sm-12">

                           

                        </div>

                        <!-- Empty Column (For Spacing) -->
                        <div class="c-col-2 hide-mobile"></div>
                        <!--/ Empty Column (For Spacing) -->

                        <div class="c-col-6 sm-12">

                            <!-- Text -->
                            <div class="text-wrapper">

                                <p class="text-h6">FOR INQUIRIES</p>
                            </div>
                            <!--/ Text -->

                            <!-- Empty Space -->
                            <span class="empty-space hide-mobile" style="height: 35px"></span>
                            <!--/ Empty Space -->

                            <!-- Contact Form -->
<div class="nayla-form">
    <form id="contactForm" action="contact_form.php" method="post">
        <!-- Form Field -->
        <div class="field-wrap">
            <label>Your Name</label>
            <input type="text" name="name" required autocomplete="off">
        </div>
        <!--/ Form Field -->

        <!-- Form Field -->
        <div class="field-wrap">
            <label>Phone number</label>
            <input type="tel" name="phone" required autocomplete="off">
        </div>
        <!--/ Form Field-->

        <!-- Form Field -->
        <div class="field-wrap">
            <label>E-mail</label>
            <input type="email" name="email" required autocomplete="off">
        </div>
        <!--/ Form Field-->

        <!-- Form Field (Textarea)-->
        <div class="message-wrap">
            <label>Your message</label>
            <textarea name="message" rows="8" required></textarea>
        </div>
        <!--/ Form Field (Textarea)-->

        <!-- Button -->
        <div class="send-wrap">
            <button type="submit" class="button button-block">Submit</button>
        </div>
        <!--/ Button -->

        <!-- Message Display -->
        <div id="formMessage"></div>
    </form>
</div>
<!--/Contact Form -->

<!-- Include jQuery (required for AJAX) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('#contactForm').on('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                // Check if the response contains 'success' or 'error' with details
                if (response.startsWith('error')) {
                    $('#formMessage').html('<p>' + response + '</p>').css('color', 'red');
                } else {
                    $('#formMessage').html('<p>Thank you for your message. It has been sent.</p>').css('color', 'green');
                    $('#contactForm')[0].reset(); // Optionally reset the form
                }
            },
            error: function(xhr, status, error) {
                $('#formMessage').html('<p>There was an error sending your message. Please try again later.</p>').css('color', 'red');
                console.error('AJAX Error:', status, error); // Log AJAX errors to the console
            }
        });
    });
});
</script>



                        </div>

                    </div>

                </div>

            </div>
            <!--/ Page Content -->
            
        </main>

       <?php include 'include/footer.php'; ?>

    </div>
    <!--/ Page -->


    <script>
        AOS.init({
            offset: 0 // default is 120, this sets it to start at the top of the viewport
        });
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/barba.min.js"></script>
    <script src="js/gsap.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/lottie.js"></script>
    <script src="js/custom.js"></script>

</body>