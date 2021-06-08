$(document).ready(()=>{
    $(document).on("click","#login",(e) => {
        e.preventDefault();
        $(".login-left-wrapper").css({
            "transition":"1.2s all ease-in",
            "transform":"translateX(-97%)",
        });
        $(".login-right-wrapper").css({
            "transition":"1.2s all ease-in",
            "transform":"translateX(97%)",
        });
        setTimeout(()=>{
            $(".loginform").removeClass("sendback-1");
        },1000);
    });
});