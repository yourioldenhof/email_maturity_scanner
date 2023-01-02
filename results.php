<?php include 'header.php'; ?>

<?php /*

{{capture assign='a1'}}{{manual field="page.answerq1"}}{{/capture}}
{{capture assign='a2'}}{{manual field="page.answerq2"}}{{/capture}}
{{capture assign='a3'}}{{manual field="page.answerq3"}}{{/capture}}
{{capture assign='a4'}}{{manual field="page.answerq4"}}{{/capture}}
{{capture assign='a5'}}{{manual field="page.answerq5"}}{{/capture}}
{{capture assign='a6'}}{{manual field="page.answerq6"}}{{/capture}}
{{capture assign='a7'}}{{manual field="page.answerq7"}}{{/capture}}
{{capture assign='a8'}}{{manual field="page.answerq8"}}{{/capture}}
{{capture assign='a9'}}{{manual field="page.answerq9"}}{{/capture}}
{{capture assign='a10'}}{{manual field="page.answerq10"}}{{/capture}}

// Calculate total points and save the number in variable $result. 
{{$result = $a1 + $a3 + $a4 + $a5 + $a6 + $a7 + $a8 + $a9 + $a10}}

// Calculate points per categorie of E-mailmarketing. These values won't be used yet.
{{$database = $a3 + $a5}}
{{$campagnes = $a4 + $a6}}
{{$content = $a7}}
{{$templating = $a8 + $a10}}
{{$analyses = $a9}}
  

// If the result (total points ($result)) < 12. 
{{if $result lt 12}} 

	{{$score_level = 0}} <!-- SCORE LEVEL -->
	{{$result_img = 0}} <!-- IMAGE ID FOR THIS LEVEL -->
	{{$total_tips = 6}} <!-- TOTAL NUMBER OF TIPS FOR THIS LEVEL -->

    <!-- TITLE AND TEXT UNDERNEETH PICTURE -->
	{{$result_title = 'Het zaadje is geplant en staat op het punt te ontkiemen!'}}
	{{$result_text = 'Het is belangrijk om goed voor jouw e-mail marketing te zorgen. Daarom hebben we alvast een aantal tips om jouw plant zijn eerste blaadjes te laten maken! Check ze hieronder door er op te klikken.'}}

    <!-- TITLE AND TEXT FOR TIP 1 -->
	{{$tip1_title = 'Zorg dat je toestemming vraagt of je een nieuwsbrief o.i.d. mag versturen.'}}
	{{$tip1_text = 'Het is wettelijk namelijk niet toegestaan om zonder toestemming mails naar bezoekers van jouw website te sturen. Door een zogenoemde opt-in te gebruiker worden deze ongewenste mails voorkomen.'}}

    <!-- TITLE AND TEXT FOR TIP 2 -->
	{{$tip2_title = 'Zorg dat jouw mails responsive zijn'}}
	{{$tip2_text = 'Het mag tegenwoordig wel duidelijk zijn dat iedereen aan zijn telefoon zit vastgeplakt. Hierdoor worden niet alleen veel websites via de smartphone bezocht, maar ook worden jouw mails daarop gelezen. Zorg er dus voor dat deze er, ook op mobiel en tablet, goed uit zien!'}}

{{/if}}




// If the result (total points ($result)) >= 12 and <= 18. 
{{if $result ge 12 && $result le 18}} 

	{{$score_level = 1}} <!-- SCORE LEVEL -->
	{{$result_img = 1}} <!-- IMAGE ID FOR THIS LEVEL -->
	{{$total_tips = 5}} <!-- TOTAL NUMBER OF TIPS FOR THIS LEVEL -->

    <!-- TITLE AND TEXT UNDERNEETH PICTURE -->
    {{$result_title = 'Je bent ontkiemt en maakt je eerste blaadjes!'}}
    {{$result_text = 'Het is belangrijk om goed voor jouw e-mail marketing te zorgen. Daarom hebben we alvast een aantal tips om jouw plant nog meer blaadjes te laten maken! Check ze hieronder door er op te klikken.'}}

    <!-- TITLE AND TEXT FOR TIP 1 -->
    {{$tip1_title = 'Stuur mails aan de hand van een plan of strategie'}}
    {{$tip1_text = 'Ad hoc mails versturen is verleden tijd. Werk aan de hand van een contentkalender en test je mails voordat je ze stuurt. Een contentkalender geeft je namelijk inzicht en structuur, wat zorgt voor consistentie. Daarnaast kun je inspelen op repeterende evenementen, acties of feestdagen.'}}

    <!-- TITLE AND TEXT FOR TIP 2 -->
    {{$tip2_title = 'Maak gebruik van een uitschrijfpagina'}}
    {{$tip2_text = 'Mochten jouw gebruikers zich toch willen uitschrijven op jouw mails, doe dit dan via een uitschrijfpagina. Daar kan de gebruiker aangeven welke mails hij/zij niet meer wilt ontvangen. Misschien willen ze nog wel jouw maandelijkse nieuwsbrief ontvangen. Zo voorkom je dat men snel op al jouw gestuurde mails kan uitschrijven.'}}

{{/if}}




// If the result (total points ($result)) > 18 and < 23. 
{{if $result gt 18 && $result lt 23}} 

    {{$score_level = 2}} <!-- SCORE LEVEL -->
	{{$result_img = 2}} <!-- IMAGE ID FOR THIS LEVEL -->
	{{$total_tips = 9}} <!-- TOTAL NUMBER OF TIPS FOR THIS LEVEL -->

    <!-- TITLE AND TEXT UNDERNEETH PICTURE -->
    {{$result_title = 'Jouw eerste blaadjes reiken naar de horizon!'}}
    {{$result_text = 'Het is belangrijk om goed voor jouw e-mail marketing te zorgen. Daarom hebben we alvast een aantal tips om jouw plant zijn eerste bloemen te laten maken! Check ze hieronder door er op te klikken.'}}

    <!-- TITLE AND TEXT FOR TIP 1 -->
    {{$tip1_title = 'Ga aan de slag met personalisatie'}}
    {{$tip1_text = 'Voeg in je database nieuwe velden aan waar je meer informatie over jouw klanten kunt opslaan. Probeer in je mails deze data te verrijken, bijvoorbeeld een adres, woonplaats, interesses, gezinssituatie, etc. Deze persoonlijke gegevens zijn erg waardevol voor gerichte campagnes en personalisatie!'}}

    <!-- TITLE AND TEXT FOR TIP 2 -->
    {{$tip2_title = 'Start met het gebruik van dynamische blokken (denk aan verlaten winkelwagen blok)'}}
    {{$tip2_text = 'Dynamische blokken zijn elementen/objecten in een mail waarin data uit jouw database gebruikt kan worden. Een basic voorbeeld is een voornaam. Een meer geavanceerd voorbeeld is een blok dat producten weergeeft, welke de klant nog in zijn winkelwagen heeft staan op jouw website.'}}

{{/if}}




// If the result (total points ($result)) >= 23. 
{{if $result ge 23}} 

    {{$score_level = 3}} <!-- SCORE LEVEL -->
	{{$result_img = 3}} <!-- IMAGE ID FOR THIS LEVEL -->
	{{$total_tips = 9}} <!-- TOTAL NUMBER OF TIPS FOR THIS LEVEL -->

    <!-- TITLE AND TEXT UNDERNEETH PICTURE -->
    {{$result_title = 'Jouw inzet werpt zijn eerste vruchten af!'}}
    {{$result_text = 'Het is belangrijk om goed voor jouw e-mail marketing te zorgen. Daarom hebben we alvast een aantal tips om jouw plant volop te laten bloeien! Check ze hieronder door er op te klikken.'}}

    <!-- TITLE AND TEXT FOR TIP 1 -->
    {{$tip1_title = 'Verzamel nog meer data!'}}
    {{$tip1_text = 'Jouw website slaat al veel data op. Deze kun je koppelen aan jouw e-mail database, waardoor je deze data in je mails kunt gebruiken. Denk hierbij aan de historie van aankopen, downloads van whitepapers van jouw site of productpagina’s die zijn bezocht. Maar ook externe data kun je gebruiken om jouw mails te optimaliseren.'}}

    <!-- TITLE AND TEXT FOR TIP 2 -->
    {{$tip2_title = 'Werk vanuit een overzichtelijk dashboard (CDP)'}}
    {{$tip2_text = 'Wanneer je vanuit een dashboard werkt, kun je veel beter anticiperen op de resultaten die je al hebt behaald. Alles staat op een dashboard namelijk overzichtelijk bij elkaar. Hierdoor kan je campagne makkelijker gestuurd worden.'}}

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
        <div class="row">
            <div class="col-12 col-md-3 col-lg-3 offset-lg-1">
                <div class="person">
                    <div class="photo cover-photo" style="background-image: url('https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/JoeriSchipperen.jpg');">
                        <img src="https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/JoeriSchipperen.jpg" class="full-width hidden">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-9 col-lg-8">
                <div class="result">
                    <div class="result-top">
                        <div class="photo specialist cover-photo" style="background-image: url('https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/JoeriSchipperen.jpg');">
                            <img src="https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/JoeriSchipperen.jpg" class="full-width hidden">
                        </div>
                        <div class="plants-result photo contain-photo" style="background-image: url('https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/result_1.svg');">
                            <img src="https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/result_1.svg" class="full-width hidden">
                        </div>
                    </div>
                    
                    <!-- If using with PHP and if-statements, use $result_title as content -->
                    <h2>Je bent ontkiemt en maakt je eerste blaadjes!</h2>
                    <!-- If using with PHP and if-statements, use $result_text as content -->
                    <p>Het is belangrijk om goed voor jouw e-mail marketing te zorgen. Daarom hebben we alvast een aantal tips om jouw plant nog meer blaadjes te laten maken! Check ze hieronder door er op te klikken.</p>


                    <div id="accordion" class="tips">
                        <div id="card" class="tip-item">
                            <div class="card-header" id="heading1">
                                <button data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1" class="collapsed">
                                    <div class="heading-top">
                                        <img class="arrow" src="https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/chevron.png"> 
                                        <!-- If using with PHP and if-statements, use $tip1_title as content -->
                                        <div class="text">Stuur mails aan de hand van een plan of strategie</div>
                                    </div>
                                </button>
                            </div>

                            <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion">
                                <!-- If using with PHP and if-statements, use $tip1_text as content -->
                                <div class="card-body">Ad hoc mails versturen is verleden tijd. Werk aan de hand van een contentkalender en test je mails voordat je ze stuurt. Een contentkalender geeft je namelijk inzicht en structuur, wat zorgt voor consistentie. Daarnaast kun je inspelen op repeterende evenementen, acties of feestdagen.</div>
                            </div>
                        </div>


                        <div id="card" class="tip-item">
                            <div class="card-header" id="heading2">
                                <button data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2" class="collapsed">
                                    <div class="heading-top">
                                        <img class="arrow" src="https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/chevron.png"> 
                                        <!-- If using with PHP and if-statements, use $tip2_title as content -->
                                        <div class="text">Maak gebruik van een uitschrijfpagina</div>
                                    </div>
                                </button>
                            </div>

                            <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                                <!-- If using with PHP and if-statements, use $tip2_text as content -->
                                <div class="card-body">Mochten jouw gebruikers zich toch willen uitschrijven op jouw mails, doe dit dan via een uitschrijfpagina. Daar kan de gebruiker aangeven welke mails hij/zij niet meer wilt ontvangen. Misschien willen ze nog wel jouw maandelijkse nieuwsbrief ontvangen. Zo voorkom je dat men snel op al jouw gestuurde mails kan uitschrijven.</div>
                            </div>
                        </div>
                    </div>


                    <div class="report-cta">
                        <div class="report photo desktop">
                            <img src="https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/report.png">
                        </div>
                        
                        <div class="content">
                            <div class="report-mobile">
                                <div class="report photo">
                                    <img src="https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/report.png">
                                </div>
                                <span class="large-label">Je hebt nu 2 van de <!-- Use $total_tips if using PHP, instead of '6' -->6 tips bemachtigd. Ontvang ze allemaal in je inbox en laat jouw e-mailmarketing groeien!</span>
                            </div>

                            <span class="large-label desktop">Je hebt nu 2 van de <!-- Use $total_tips if using PHP, instead of '6' -->6 tips bemachtigd. Ontvang ze allemaal in je inbox en laat jouw e-mailmarketing groeien!</span>
                            
                            <div class="inputfields">
                                <!-- Hidden input fields for sending $firstname and $emailscore to Hubspot.com. -->
                                <input type="text" name="firstname" id="firstname" value="" class="hidden">
                                <input type="text" name="emailscore" id="score" value="" class="hidden">

                                <input type="text" class="form-control" placeholder="E-mailadres" name="email">

                                <label class="optin" for="optin">
                                    <input name='opt-in' id='optin' type='checkbox' field='environment' required='true'>
                                    Ik sta toe dat Happy Horizon mij mails verstuurd.
                                </label>

                                <!-- If a tool as Deployteq is used, use this input submit field to submit the form and redirect to the next page on submit. -->
                                <!-- <input type="submit" class="btn" value="Stuur al mijn tips!"> -->

                                <!-- Else, when a local server is used, use an <a></a>. Values won't work correctly. -->
                                <a class="btn" href="/final_cta.php">Stuur al mijn tips!</a>

                                
                            </div>

                            <div class="values">
                                <span id="firstname">Youri</span>
                                <span id="score">16</span>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
    
<?php include 'footer.php'; ?>