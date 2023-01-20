$(function() {

    // Toggle class on button click to show more information in text balloon
    $(".help-container").click(function() {
        $(this).find('.help-baloon').toggleClass('active');
    });

    $(".optin input[type='checkbox']").click(function() {
        $(this).parent().toggleClass('checked');
    });
    
    // Give selected answer background colour
    $(".answer input[type='radio']").click(function(){
        let radioValue = $("input:checked").val();
        if(radioValue){
            $("input[type='radio']").removeClass("checked");
            $(this).toggleClass("checked");

            $("input[type='radio']").parent().removeClass("checked");
            $(this).parent().toggleClass("checked");
        }

        let selectedvalue = parseInt(radioValue);
        let subresult = parseInt($(".values #sub-result").val());
        
        let result = selectedvalue + subresult;
        $(".values #total").attr('value', result);
        $(".values #maturityscore").attr('value', result);

        // Calculate maturity score
        let maturityscore; 
        if(result < 12){
            maturityscore = 0;
            console.log(maturityscore);
        }
        if(result >= 12 && result <= 18){
            maturityscore = 1;
            console.log(maturityscore);
        }
        if(result >= 19 && result <= 22){
            maturityscore = 2;
            console.log(maturityscore);
        }
        if(result > 22){
            maturityscore = 3;
            console.log(maturityscore);
        }
        $("form #emailscore").attr('value', maturityscore);

    });

    $(".answeranders").click(function(){
        $(".answer").removeClass("checked");
        $(".answer input[type='radio']").removeClass("checked");
        
        $('.answer input[type="radio"]').prop("checked", false);
        $('.answeranders input[type="radio"]').prop("checked", true);


        let selectedvalue = parseInt($('.answeranders input[type="radio"]').val());
        let subresult = parseInt($(".values #sub-result").val());
        
        let result = selectedvalue + subresult;
        $(".values #total").attr('value', result);
        $(".values #maturityscore").attr('value', result);
        
        // Calculate maturity score
        let maturityscore; 
        if(result < 12){
            maturityscore = 0;
            console.log(maturityscore);
        }
        if(result >= 12 && result <= 18){
            maturityscore = 1;
            console.log(maturityscore);
        }
        if(result >= 19 && result <= 22){
            maturityscore = 2;
            console.log(maturityscore);
        }
        if(result > 22){
            maturityscore = 3;
            console.log(maturityscore);
        }
        $("form #emailscore").attr('value', maturityscore);
    });


    // If cross at the right top is clicked, open comformation container to close application. 
    $("#close-scanner span").click(function(){
        $(this).parent().toggleClass("active");
    });

    $("#close-scanner .buttons .doorgaan").click(function(){
        $('#close-scanner').removeClass("active");
    });

    // Result page preloader with animation
    $(function() {
        setTimeout(function() { 
            $("#results_preloader").fadeOut(500, function() {
                $("#results").fadeIn(500);        
            });
        }, 3000);
    });

    $(".adviceoption input[type='radio']").click(function(){
        let radioValue = $("input:checked").val();
        if(radioValue){
            $("input[type='radio']").removeClass("checked");
            $(this).toggleClass("checked");

            $("input[type='radio']").parent().removeClass("checked");
            $(this).parent().toggleClass("checked");
        }

        if ($(".adviceoption #phone").hasClass("checked")) {
            $("#phoneadvice").addClass("active");
        } else {
            $("#phoneadvice").removeClass("active");
        }
    });

    // INSERT VALUES IN HIDDEN INPUT FIELDS FOR SUBMITTING USER TO DATABASE
    $(function(){
        let score = $(".values #score").text(); 
        let firstname = $(".values #firstname").text(); 

        $(".inputfields #score").attr('value', score);
        $(".inputfields #firstname").attr('value', firstname);
    });
});