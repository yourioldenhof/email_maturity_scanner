$(function() {

    // Toggle class on button click to show more information in text balloon
    $(".help-container").click(function() {
        $(this).find('.help-baloon').toggleClass('active');
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
    });

    $(".answeranders").click(function(){
        $(".answer").removeClass("checked");
        $(".answer input[type='radio']").removeClass("checked");
        
        $('.answer input[type="radio"]').prop("checked", false);
        $('.answeranders input[type="radio"]').prop("checked", true);
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



    // INSERT VALUES IN HIDDEN INPUT FIELDS FOR SUBMITTING USER TO DATABASE
    $(function(){
        let score = $(".values #score").text(); 
        let firstname = $(".values #firstname").text(); 

        $(".inputfields #score").attr('value', score);
        $(".inputfields #firstname").attr('value', firstname);
    });

});