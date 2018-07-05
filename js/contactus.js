$('document').ready(function(){
  
    $('#contactSend').click(function(){

        var Cemail = $('#contactEmail').val();
        var Cmessage = $('textarea#Cmessage').val();
        
        

      
        $.ajax({
           
            url:'data_operations/contact_mail.php',
            method:'POST',
            data:{
                Cemail:Cemail,
                Cmessage: CKEDITOR.instances['Cmessage'].getData()
            },

            success: function(data){
               $('#messageRelay').html(data);
               $('#contactEmail').val('');
               CKEDITOR.instances.Cmessage.setData("");
            }
            
           
        });
    });

});