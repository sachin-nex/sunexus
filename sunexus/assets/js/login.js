$(window, document, undefined).ready(function() {

  $('input').blur(function() {
    var $this = $(this);
    if ($this.val())
      $this.addClass('used');
    else
      $this.removeClass('used');
  });
});
$('#login_submit').on("click",function(){
   /* var passwd      = $('#passwd').val();
    var user_name   = $('#user_name').val();
    var param       = {"passwd": passwd, "uname": user_name};*/
    $.ajax({
        type    : 'POST',
        url     : "index.php/ajax/su_login_validation/",
        data    : $("#login_form").serialize(),
        timeout : 30000, 
        datatype: 'JSON',
        success : function(response){
            console.log(response);
        }
       
    })
    //console.log(passwd);
})