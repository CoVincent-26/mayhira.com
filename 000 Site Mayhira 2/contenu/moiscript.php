<script>   

    $("#moipicbutton").click(function(e){ 
        var base = 1500;                    
        var fadeout = base;            
        var fadein = base*2;                     
                                    
        e.preventDefault();
        // alert("test click");

        $("#picdefaut").fadeOut(fadeout);                        
        $("#picfadein").fadeIn(fadein);
        
        $("#moipicbutton").fadeOut(fadeout); // La partie quifait disparaitre le bouton et apparaitre le texte
        $("#moipictext").fadeIn(fadein);                    
        $("#moipictext").css("display", "flex");
        
    });

</script>
