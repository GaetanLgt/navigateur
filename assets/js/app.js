$(document).ready(function() {

    $.post("suggestions.php",{chemin: "/."}, function(data, status){
     $('#poney').html(data);
     $('#path').val(chemin);
     console.log(data);
    })
    
    $('body').on('click','button', function(e){
    e.preventDefault();
    let currentValue = $(this).attr('value');
    console.log(currentValue);
    $.post("suggestions.php",{chemin: currentValue}, function(data, status){
     $('#poney').html(data);
     $('#path').val(currentValue);
     
    })
  })
    
    
  
    
})
  
