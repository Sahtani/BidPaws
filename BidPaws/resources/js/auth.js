// $(document).ready(function () {
//      // switch between login form and sign up form
//      $(".switch-sign").click(function() {
//         $(".sign-up-form").removeClass("hidden");
//         $(".log-in-form").addClass("hidden");
//     });
//     $(".switch-log").click(function(){
//         $(".log-in-form").removeClass("hidden");
//         $(".sign-up-form").addClass("hidden");
//     });
// });
// function changeTab(ref) {
//     try {
//         var formBody = document.getElementById("form-body");
//         var parentNode = ref.parentNode;

//         if (ref.getAttribute("data-tab") == "login") {
//             formBody.style.display = "none";
//             // ou formBody.style.visibility = "hidden";
//             parentNode.classList.remove('signup');
//         } else {
//             formBody.style.display = "block";
//             // ou formBody.style.visibility = "visible";
//             parentNode.classList.add('signup');
//         }
//     } catch (msg) {
//         console.log(msg);
//     }
// }
$('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
    var $this = $(this),
        label = $this.prev('label');
  
        if (e.type === 'keyup') {
              if ($this.val() === '') {
            label.removeClass('active highlight');
          } else {
            label.addClass('active highlight');
          }
      } else if (e.type === 'blur') {
          if( $this.val() === '' ) {
              label.removeClass('active highlight'); 
              } else {
              label.removeClass('highlight');   
              }   
      } else if (e.type === 'focus') {
        
        if( $this.val() === '' ) {
              label.removeClass('highlight'); 
              } 
        else if( $this.val() !== '' ) {
              label.addClass('highlight');
              }
      }
  
  });
  
  $('.tab a').on('click', function (e) {
    
    e.preventDefault();
    
    $(this).parent().addClass('active');
    $(this).parent().siblings().removeClass('active');
    
    target = $(this).attr('href');
  
    $('.tab-content > div').not(target).hide();
    
    $(target).fadeIn(600);
    
  });
