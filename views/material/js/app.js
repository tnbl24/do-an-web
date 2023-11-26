
$(document).ready(function(){
  $('#eye').click(function(){
    $(this).toggleClass('open');
    $(this).children('i').toggleClass('bi-eye-slash bi-eye');
    if($(this).hasClass('open')) {
        $(this).prev().attr('type', 'text');
    } else{
        $(this).prev().attr('type', 'password');
    }
  });

});

$(document).ready(function(){
  $('#eye2').click(function(){
    $(this).toggleClass('open');
    $(this).children('i').toggleClass('bi-eye-slash bi-eye');
    if($(this).hasClass('open')) {
        $(this).prev().attr('type', 'text');
    } else{
        $(this).prev().attr('type', 'password');
    }
  });
});


$(document).ready(function(){
  $('#eye3').click(function(){
    $(this).toggleClass('open');
    $(this).children('i').toggleClass('bi-eye-slash bi-eye');
    if($(this).hasClass('open')) {
        $(this).prev().attr('type', 'text');
    } else{
        $(this).prev().attr('type', 'password');
    }
  });
});

$(document).ready(function(){
  $('#changePasswordButton').on(click,function(){
    $('#wrapper2').addClass('open-account');
  })
})

