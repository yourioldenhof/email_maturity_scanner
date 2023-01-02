<?php include 'header.php'; ?>

<?php /*

    <div class="container">
        <div class="row">
            <div class="col-12">
                
                <div class="question-navigation">
                    <div class="button-back">
                        <a href="javascript:history.back()" class="btn-back"><img src="https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/arrow-left.svg" alt="" class="arrow"></a>
                    </div>
                    <div class="process">
                        <div class="process-watercan contain-photo" style="background-image: url('https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/watercan-icon.svg');">
                            <div class="progression"></div>
                        </div>
                        <div class="process-text">
                            <span class="current">1</span> van <span class="total">10</span> vragen
                        </div>
                    </div>
                    <div class="help-container">
                        <button class="help">
                            <div class="contain-photo photo" style="background-image: url('https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/JoeriSchipperen.jpg');">
                                <span class="info-icon" style="background-image:url('https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/info.svg');"></span>
                            </div>
                        </button>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="question-container">
                    <h1 class="question choice">Ik verzamel e-mailadressen</h1>
                    <p>Kies één antwoord dat het meest van toepassing is.</p>
                    
                    <div class="anwer-options">

                    <form action="" >
                        <label class="answer">
                            <input type="radio" name="radio" value="2"/>
                            Ja, daar ben ik actief mee bezig
                        </label>

                        <label class="answer">
                            <input type="radio" name="radio" value="1"/>
                            Ja, maar daar moet ikmeer aandacht aan besteden
                        </label>

                        <div class="answeranders">
                            <input type="radio" name="radio" value="1" class="inputanders"/>
                            <input type="text" minlength="5" class="form-control answer-anders" value placeholder="Anders, namelijk...">
                        </div>

                        <a href="/scanning.php" class="btn">Verder</a>

                        <input type="submit" class="btn-cancel" value="Weet ik niet">
                    </form>
                        

                        
                    </div>

                </div>
            </div>
        </div>
    </div>

    */ ?>


<div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="question-navigation">
                        <div class="button-back">
                            <a href="javascript:history.back()" class="btn-back"><img src="https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/arrow-left.svg" alt="" class="arrow"></a>
                        </div>
                        <!-- Progress water can -->
                        <div class="process" id="q3">
                            <div class="process-watercan contain-photo" style="background-image: url('https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/watercan-icon.svg');">
                                <div class="progression">
                                    <div class="wave"><img src="https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/water-wave.svg"></div>
                                    <div class="water"></div>
                                </div>
                            </div>
                            <div class="process-text">
                                <span class="current">3</span> van <span class="total">10</span> vragen
                            </div>
                        </div>
                        <!-- End progress water can -->

                        <!-- Help container with photo trigger -->
                        <div class="help-container">
                            <button class="help">
                                <div class="contain-photo photo" style="background-image: url('https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/JoeriSchipperen.jpg');">
                                    <span class="info-icon" style="background-image:url('https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/info.svg');"></span>
                                </div>
                            </button>
                            
                            <div class="help-baloon textballoon small">
                                <p>Ben jij bezig met het verzamelen van unieke e-mailadressen waar mails naar verstuurd kunnen worden?</p>
                            </div>
                        </div>
                        <!-- End help container -->
                    </div>
                </div> 
            </div>
            
            <div class="row">
                <div class="col-12">
                    <div class="question-container">
                        <!-- Formulated question to answer -->
                        <h1 class="question choice">Ik verzamel e-mailadressen</h1>
                        <p>Kies één antwoord dat het meest van toepassing is.</p>

                        <!-- Answer options container -->
                        <div class="anwer-options">
                            <form name='question1'>
                                <label class="answer">
                                    <input name='answerq1' type='radio' field='environment' required='true' value='3'>
                                    Ja, daar ben ik actief mee bezig
                                </label>
                                <label class="answer">
                                    <input name='answerq1' type='radio' field='environment' required='true' value='2'>
                                    Ja, maar daar moet ik meer aandacht aan besteden
                                </label>
                                <label class="answer">
                                    <input name='answerq1' type='radio' field='environment' required='true' value='1'>
                                    Nee
                                </label>

                                <div class="answeranders">
                                    <input name='answerq3' type='radio' field='environment' required='true' value='1' class="inputanders">
                                    <input class='form-control answer-anders' minlength="5" name='answerq3anders' type='text' field='environment' placeholder='Anders, namelijk...'>
                                </div>
                                
                                <!-- If a tool as Deployteq is used, use this input submit field to submit the form and redirect to the next page on submit. -->
                                <!-- <input name='submitq1' type='submit' value='Verder' class="btn submit"> -->

                                <!-- Else, when a local server is used, use an <a></a>. Values won't work correctly. -->
                                <a class="btn submit" href="/results.php">Verder</a>
                            </form>

                            <form name='weetikniet'>
                                <!-- If a tool as Deployteq is used, use this input submit field to submit the form and redirect to the next page on submit. -->
                                <!-- <input name='weetikniet' type='submit' value='Weet ik niet' class='btn-cancel'> -->

                                <!-- Else, when a local server is used, use an <a></a>. Values won't work correctly. -->
                                <a name="weetikniet" class="btn-cancel" href="/results.php">Weet ik niet</a>
                            </form>
                        </div>
                        <!-- End answer options container -->

                    </div>
                </div>
            </div>
        </div>
  
<?php include 'footer.php'; ?>