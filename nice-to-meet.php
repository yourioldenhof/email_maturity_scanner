<?php include 'header.php'; ?>

        <div class="container nice-to-meet">
            <div class="row">
                <div class="col-12">
                    <div class="contact-person info">
                        <span id="balloon2" class="textballoon">
                            <p>
                                Aangenaam {firstname}!
                                Kom je ergens niet uit of wil je meer informatie? Klik dan op het i‘tje en ik voorzie je van meer context en informatie.
                            </p>
                        </span>
                        <div class="person">
                            <div class="photo info" style="background-image: url('https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/JoeriSchipperen.jpg');">
                                <span class="info-icon" style="background-image:url('https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/info.svg');"></span>
                            </div>
                            <div class="titles">
                                <span class="large-label name">Joeri Schipperen</span>
                            </div>
                            
                            <p class="text">Voordat we beginnen stellen we eerst wat algemene vragen</p>
                            
                            <div class="inputfields">
                                <div class="values">
                                    <input type="checkbox" name="opt-in" value="{{campaign_option|htmlentities campaignid='3781' field='F29'}}" class="hidden" checked>
                                    <input type="email" name="email" id="email" value="{{customer|htmlentities field='emailaddress'}}" class="hidden">
                                </div>
                                
                                <a href="/question1.php" class="btn">Brand los!</a>
                                <a href="javascript:history.back()" class="btn-cancel">Terug</a>
                           
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    
<?php include 'footer.php'; ?>