
    $(document).ready(function(){
        $(".play-animation").click(function(){
            $(".animated").css("animation-play-state", "running");
        });
        $(".stop-animation").click(function(){
            $(".animated").css("animation-play-state", "paused");
        });
    });
