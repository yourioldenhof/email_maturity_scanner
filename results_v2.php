<?php include 'header.php'; ?>

<?php /*

    // Getting result score out of CRM system. 
    {{$result = {{campaign_option|htmlentities campaignid='3781' field='F28'}}}}

    // If the result (total points ($result)) < 12. 
    {{if $result lt 12}} 
        {{$score_level = 0}}
        {{$result_img = 0}}
        {{$result_title = 'Het zaadje is geplant en staat op het punt te ontkiemen!'}}
    {{/if}}

    // If the result (total points ($result)) >= 12 and <= 18.
    {{if $result ge 12 && $result le 18}} 
        {{$score_level = 1}}
        {{$result_img = 1}}
        {{$result_title = 'Je bent ontkiemt en maakt je eerste blaadjes!'}}
    {{/if}}

    // If the result (total points ($result)) > 18 and < 23. 
    {{if $result ge 19 && $result le 22}} 
        {{$score_level = 2}}
        {{$result_img = 2}}
        {{$result_title = 'Jouw eerste blaadjes reiken naar de horizon!'}}
    {{/if}}

    // If the result (total points ($result)) >= 23.
    {{if $result ge 23}} 
        {{$score_level = 3}}
        {{$result_img = 3}}
        {{$result_title = 'Jouw inzet werpt zijn eerste vruchten af!'}}
    {{/if}}

    // For full documentation on the If statements: https://www.smarty.net/docsv2/en/language.function.if.tpl. 

*/ ?>


    <!-- Preloader animation -->
    <div id="results_preloader">
        <img class="animation" src="https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/scan_niveau1.gif" alt="Loading" />
        <h2>Bezig met het verwerken van jouw antwoorden</h2>
    </div>
    <!-- End preloader animation -->

    <div id="results" class="container">
        <div class="white-background"></div>
        <div class="row">
            <div class="col-12 col-lg-7">
                <div class="result">
                    <div class="result-top">
                        <div class="plants-result photo contain-photo" style="background-image: url('https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/result_1.svg');">
                            <img src="https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/result_1.svg" class="full-width hidden">
                        </div>
                    </div>
                    
                    <!-- If using with PHP and if-statements, use $result_title as content -->
                    <h2>Je bent ontkiemt en maakt je eerste blaadjes!</h2>

                    <div class="result-reportsend">
                        <div class="report photo desktop">
                            <img src="https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/report.png">
                        </div>
                        
                        <div class="content">
                            <span class="large-label desktop">Jouw persoonlijke tips zijn verzonden naar <span class="link">test@test.nl</span>. Check snel je inbox!</span>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            <div class="col-12 col-lg-5">
                <div class="contact-person center">
                    <div class="person">
                        <div class="photo" style="background-image: url('https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/JoeriSchipperen.jpg');">
                            <span id="balloon" class="textballoon">
                                <!-- Content text balloon -->
                                <div class="result-textballoon">
                                    <div class="text"><p>Wil je persoonlijk advies om je e-mailmarketing nog verder te laten groeien?</p></div>
                                </div>
                            </span>
                        </div>
                    </div>

                    <div class="inputfields">
                        <form name='personaladvice' class='personaladvice'>
                            <div class="options">
                                <label class="adviceoption">
                                    <input id='mail' name='personaladvice_option' type='radio' field='campaign_option.3781.F27' value='mail'>
                                    Mail mij
                                </label>

                                <label class="adviceoption">
                                    <input id='phone' name='personaladvice_option' type='radio' field='campaign_option.3781.F27' value='telefoon'>
                                    Bel mij
                                </label>
                            </div>

                            <div id="phoneadvice" class="phone-container">
                                <input id='phoneinput' name='telefoonnummer' type='tel' field='customer.mobilephone' class='form-control' placeholder='Telefoonnummer'>
                            </div>

                            <!-- Use input when using a developers tool line Deployteq -->
                            <!-- <input name='submit_personaladvice' type='submit' class='btn submit' value='Laat het ons weten!'> -->
                            <a name='submit_personaladvice' href="/thankyou.php" class="btn submit">Laat het ons weten!</a>
                        </form>

                        <form name='noadvice' class='noadvice'>
                            <!-- Use input when using a developers tool line Deployteq -->
                            <!-- <input name='submit_personaladvice' type='submit' class='btn submit' value='Laat het ons weten!'> -->
                            <input id='geenadvies' name='submit_personaladvice' type='submit' class='link submit' value='Nee, ik wil geen persoonlijk advies'>
                        </form>
                    </div>
                
                </div>

            </div>
        </div>
    </div>
    
<?php include 'footer.php'; ?>