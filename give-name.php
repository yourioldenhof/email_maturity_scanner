<?php include 'header.php'; ?>

    <div class="container getname">
        <div class="row">
            <div class="col-12">
                <div class="contact-person">
                    <div class="person center">
                        <span id="balloon1" class="textballoon">
                            <p>Hallo, ik ben Joeri! Ik sta je tijdens de scan te woord en kan je helpen waar nodig! Je ontvangt jouw tips & tricks direct in je inbox, zodra je de scan hebt afgerond! Wie ben jij?</p>
                        </span>

                        <div class="photo" style="background-image: url('https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/JoeriSchipperen.jpg');"></div>
                        <div class="titles">
                            <span class="large-label">Joeri Schipperen</span>
                        </div>

                        <div class="inputfields">
                            <form id="givename">
                                <input name='firstname' type='text' field='customer.firstname' required='true' class='form-control' placeholder='Hoe heet je?'>
                                <input name='emailadress' type='email' field='customer.emailaddress' placeholder='E-mailadres' class='form-control' required='true' unique='true'>

                                <label class="optin" for="optin">
                                    <span class="check"><img src="https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/optin_check.svg" alt=""></span>
                                    <input name='opt-in' id='optin' type='checkbox' field='environment' required='true'>
                                    Ik sta toe dat Happy Horizon mij mails stuurt.
                                </label>
                                <a href="/nice-to-meet.php" class="btn submit full-width">Verder</a>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
<?php include 'footer.php'; ?>