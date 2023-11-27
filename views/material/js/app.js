
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
  $('#changePasswordButton').click(function(){
    $('#wrapper2').addClass('open-account');
  })
})



$('.text').click(function(){
  $(this).addClass('fade')
})

var btn = document.getElementsByClassName("danhgia-modal danhgia-dg");
    for (let i = 0; i < btn.length; i++) {
        btn[i].addEventListener("click", function() {
            $('.modal-dg').addClass('open-account');
        })
        btn[i].addEventListener("click", function() {
            for (let j = 0; j < btn.length; j++) {
                if (j == i) {
                    $('.js-submit').click(function() {
                        $('.modal-dg').removeClass('open-account');
                        btn[j].classList.add('close-account');
                    })
                }
            }
            return true;
        })

        $('.dg-danhan').click(function() {
            $(this).addClass('close-account');
            return false;
        })
        $('#submit-dg').click(function() {
            $('.modal-dg').removeClass('open-account');
        })
    }
