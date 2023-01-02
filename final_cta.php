<?php include 'header.php'; ?>

<section id="final_cta">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="final-cta-content">
                    <!-- Comformation that e-mail is send succesfully. -->
                    <h5>Jouw rapport is gemaild naar <span class="link">test@test.nl</span>!</h5>
                    <h2>Wil je nog meer tips?</h2>

                    <div class="content">
                        <!-- Content empty water can. -->
                        <img src="https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/empty-watercan.png" alt="">
                        <div class="text">
                            <strong>Jouw gieter is nu leeg...</strong>
                            <p>Vul je gieter met ons water en ontvang persoonlijk advies om jouw e-mail marketing te laten groeien!</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-5">
                <div class="contact-person center">
                    <span id="balloon-top" class="textballoon">
                        <!-- Content text balloon -->
                        <p>Bedankt {$firstname}! Mag ik jouw persoonlijk advies geven om nog verder te groeien? Dan neem ik z.s.m. contact met je op.</p>
                    </span>

                    <div class="person">
                        <div class="photo" style="background-image: url('https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/JoeriSchipperen.jpg');"></div>
                        <span class="large-label">Joeri Schipperen</span>

                        <div class="inputfields">
                            <form name='personal_advice'>
                                <!-- Hidden input fields for sending $firstname and $emailscore to Hubspot.com. -->
                                <input type="text" name="firstname" id="firstname" value="" class="hidden">
                                <input type="text" name="emailscore" id="score" value="" class="hidden">
                                <input type="text" name="emailscore" id="score" value="" class="hidden">

                                <input name='telefoonnummer' type='tel' field='environment' class='form-control' placeholder='Telefoonnummer'>

                                <!-- If a tool as Deployteq is used, use this input submit field to submit the form and redirect to the next page on submit. -->
                                <!-- <input type="submit" class="btn" value="Laat Joeri er naar kijken!"> -->

                                <!-- Else, when a local server is used, use an <a></a>. Values won't work correctly. -->
                                <a class="btn" href="/thankyou.php">Laat Joeri er naar kijken!</a>                                
                            </form>

                            <!-- Alternative if user don't want to give their phonenumber. -->
                            <a href="/thankyou_no_tel.php" class="text-btn">Nu even niet</a>
                            
                            <div class="values hidden">
                                <span id="firstname">Youri</span>
                                <span id="score">16</span>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
</section>
    
<?php include 'footer.php'; ?>