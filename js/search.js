$(document).ready(function(){
   
    $('#formSearch').submit(function(e){
        e.preventDefault();
        var myCountry = $('input[name=myCountry]').val();
        
        window.open('index.php?get_title='+myCountry+'','_self');
        
        
    })

});