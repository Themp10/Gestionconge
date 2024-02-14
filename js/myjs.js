function getDateDiff(){
    var dated = new Date(document.getElementsByClassName('js-datepicker')[0].value);
    var datef = new Date(document.getElementsByClassName('js-datepicker')[1].value);
    var diffDays = NbjOuv(dated, datef);
    if(diffDays<=0){
        document.getElementsByClassName('js-datepicker')[1].value=""
        document.getElementById('nombreJour').value=""
        alert('Merci de choisir une date de reprise supérieure à la date de départ !')
    }else{
        if(checksolde(diffDays)){
            document.getElementById('nombreJour').value=diffDays
        }else{
            document.getElementsByClassName('js-datepicker')[0].value=""
            document.getElementsByClassName('js-datepicker')[1].value=""
            document.getElementById('nombreJour').value=""
            alert('Votre solde est insuffisant !');
        }
        
    }   
}

function checkStartDate(){

}

$(document).ready(function(){
    document.getElementsByClassName('js-datepicker')[0].value=""

    $(".js-datepicker").change(function(){
        var now = new Date(Date.now());
        if(document.getElementsByClassName('js-datepicker')[0].value!="" && 
        document.getElementsByClassName('js-datepicker')[1].value!=""){
                getDateDiff()    
        }

        if (document.getElementsByClassName('js-datepicker')[0].value!=""){
            var dated = new Date(document.getElementsByClassName('js-datepicker')[0].value);
            var diffDays = dated - now; 
            if(diffDays/1000/86400<7){
                document.getElementsByClassName('js-datepicker')[0].value=""
                document.getElementById('nombreJour').value=""
                alert('Merci de choisir une date de départ supérieure de au moins 7 jours de la date actuelle !')
            }
        }
        
      }); 
  });

  function NbjOuv(startDate, endDate){
    var daysOuv=[];
    if (endDate < startDate){
        return 0;
    }
        
    var millisecondsPerDay = 86400 * 1000; // Day in milliseconds

    var diff = endDate - startDate;  // Milliseconds between datetime objects    
    var days = Math.ceil(diff / millisecondsPerDay);
    for(i=0;i<days;i++){
        daysOuv.push(startDate.getDay());
        startDate.setDate(startDate.getDate()+1)
        
    }
    console.log(daysOuv)
    console.log(daysOuv.filter(el=>(el<6&&el>0)))
    return daysOuv.filter(el=>(el<6&&el>0)).length;
  }


  function joursOuvrables(startDate, endDate){
    if (endDate < startDate)
        return 0;
    
    // Calculate days between dates
    var millisecondsPerDay = 86400 * 1000; // Day in milliseconds

    var diff = endDate - startDate;  // Milliseconds between datetime objects    
    var days = Math.ceil(diff / millisecondsPerDay);
   
    // Subtract two weekend days for every week in between
    var weeks = Math.floor(days / 7);
    days = days - (weeks * 2);
    
    // Handle special cases
    var startDay = startDate.getDay();
    var endDay = endDate.getDay();
    
    // Remove weekend not previously removed.   
    if (startDay - endDay > 1)         
        days = days - 2;      
    
    // Remove start day if span starts on Sunday but ends before Saturday
    if (startDay == 0 && endDay != 6) {
        days = days - 1;  
    }
    
    // Remove end day if span ends on Saturday but starts after Sunday
    if (endDay == 6 && startDay != 0) {
        days = days - 1;
    }
    return days;
}


function checksolde(diffDays){

    var solde =parseInt(document.getElementById('nbjsolde').textContent.split(' ')[2]);
    if(solde>=diffDays){
        return true;
    }else{
        return false;
    }
    
}