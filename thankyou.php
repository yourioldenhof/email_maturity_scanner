<?php include 'header.php'; ?>

    <div class="thankyou-animation">
        <img class="bg desktop" src="https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/party_once.gif">
        <img class="bg mobile" src="https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/party_mobile_once.gif">
        <img class="bg mobile_small" src="https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/party_mobile_small_once.gif">
    </div>

    <!-- Getting preferred personal contact (for examample 'mail') -->
    <?php $option = 'mail'; ?>

    <div class="container thankyou-content">
        <div class="row">
            <div class="col-12">
                <div class="contact-person thankyou">
                    <span id="balloon-thankyou" class="textballoon">
                        
                        <?php if($option == 'telefoon'){ ?>
                            <p>Bedankt {{customer|htmlentities field='firstname'}}! Ik zal jouw rapport in detail bekijken en neem zo snel mogelijk contact met je op via <span class="link">{{customer|htmlentities field='mobilephone' default='het opgegeven telefoonnummer'}}</span>.</p>
                        <?php } elseif ($option == 'mail'){ ?>
                            <p>Bedankt {{customer|htmlentities field='firstname'}}! Ik zal jouw rapport in detail bekijken en neem zo snel mogelijk contact met je op via <span class="link">{{customer|htmlentities field='emailaddress' default='het opgegeven e-mailadres'}}</span>.</p>
                        <?php } else { ?>
                            <p>Bedankt voor het afronden van de E-mail Maturity Scanner {{customer|htmlentities field='firstname'}}! Check snel je inbox voor jouw tips!</p>
                        <?php } ?>
                        
                        
                    </span>
                    <div class="person">
                        <div class="photo info" style="background-image: url('https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/JoeriSchipperen.jpg');"></div>
                        <div class="titles">
                            <span class="large-label">Joeri Schipperen</span>
                        </div>
                        
                        <div class="inputfields">
                            <a href="http://happyhorizon.com/?utm_campaign=maturity_scanner_email" class="btn">Naar de website</a>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
    
<?php include 'footer.php'; ?>