<?php include 'header.php'; ?>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="question-navigation">
                        <div class="button-back">
                            <a href="javascript:history.back()" class="btn-back"><img src="https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/arrow-left.svg" alt="" class="arrow"></a>
                        </div>
                        <!-- Progress water can -->
                        <div class="process" id="q1">
                            <div class="process-watercan contain-photo" style="background-image: url('https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/watercan-icon.svg');">
                                <div class="progression">
                                    <div class="wave"><img src="https://cdn.msdp1.com/public/files/1513/1/happyhorizon/maturity_campaign/img/water-wave.svg"></div>
                                    <div class="water"></div>
                                </div>
                            </div>
                            <div class="process-text">
                                <span class="current">1</span> van <span class="total">10</span> vragen
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
                                <p>Ben jij al bezig met e-mailmarketing? Verricht jij werkzaamheden die betrekking hebben op het versturen, beheren of opstellen van mails?</p>
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
                        <h1 class="question">Doe je al iets met e-mailmarketing?</h1>

                        <!-- Answer options container -->
                        <div class="anwer-options yesno">
                            <form name='question1'>
                                <label class="answer">
                                    <input name='answerq1' type='radio' field='environment' required='true' value='2'>
                                    Ja
                                </label>
                                <label class="answer">
                                    <input name='answerq1' type='radio' field='environment' required='true' value='1'>
                                    Nee
                                </label>
                                
                                <!-- If a tool as Deployteq is used, use this input submit field to submit the form and redirect to the next page on submit. -->
                                <!-- <input name='submitq1' type='submit' value='Verder' class="btn submit"> -->

                                <!-- Else, when a local server is used, use an <a></a>. Values won't work correctly. -->
                                <a class="btn submit" href="/question2.php">Verder</a>
                            </form>

                            <form name='weetikniet'>
                                <!-- If a tool as Deployteq is used, use this input submit field to submit the form and redirect to the next page on submit. -->
                                <!-- <input name='weetikniet' type='submit' value='Weet ik niet' class='btn-cancel'> -->

                                <!-- Else, when a local server is used, use an <a></a>. Values won't work correctly. -->
                                <a name="weetikniet" class="btn-cancel" href="/question2.php">Weet ik niet</a>
                            </form>
                        </div>
                        <!-- End answer options container -->

                    </div>
                </div>
            </div>
        </div>
    
<?php include 'footer.php'; ?>