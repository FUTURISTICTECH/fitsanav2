$(document).ready(function(){

    $('#form').submit(function(e){
        
        e.preventDefault();

        var yourname = $('input[name=yourname]').val();
        var phonenumber = $('input[name=phonenumber]').val();
        var emailaddress = $('input[name=emailaddress]').val();
        var mycity = $('input[name=mycity').val();
        var regpassword = $('input[name=regpassword]').val();

        $.ajax({
            method:'POST',
            url:'pages/register.php',
            data:{
                yourname:yourname,
                phonenumber:phonenumber,
                emailaddress:emailaddress,
                mycity:mycity,
                regpassword:regpassword
            },

            success: function(data){
              $('#message').html(data);
              console.log(data);
              $('input[name=yourname]').val("");
              $('input[name=phonenumber]').val("");
              $('input[name=emailaddress]').val("");
              $('input[name=mycity').val("");
              $('input[name=regpassword]').val("");

            }
        })

    })
})