//  mắt
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

//  đổi mật khẩu
$(document).ready(function(){
  $('#changePasswordButton').click(function(){
    $('#wrapper2').addClass('open-account');
  })
})

// hide/ show đánh giá
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


    

    // tăng số lượng giỏ hàng ở header
    function addToCart() {
        incrementCartCount();
    }

    function incrementCartCount() {
        var currentCount = parseInt($(".cart-notice").text());
        var newCount = currentCount + 1;
        $(".cart-notice").text(newCount);
    }

    function redirectToHome() {
        window.location.href = "../web/home.php";
    }

    function redirectToDog() {
        window.location.href = "../web/dog.php";
    }

//modal success
$('.btn-outline-success').click(function(){
    $('.modal-success').addClass('open-modal')

    $('.modal-success').click(function(){
        $(this).removeClass('open-modal')
    })

    setTimeout(()=>{
        $('.modal-success').removeClass('open-modal');
    },2000)
    return false;
})
