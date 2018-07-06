

   
   function validation(){
    var date = document.getElementsByName("date").item(0).value;
    var placeOfMarriage =document.getElementsByName("placeOfMarriage").item(0).value  ;
    var surName1 = document.getElementsByName("Party1Surname").item(0).value;
    var givenName1 = document.getElementsByName("party1GivenName").item(0).value;
    var maidenNameSurName1 = document.getElementsByName("party1MaidenSurName").item(0).value;
    var surName2 = document.getElementsByName("Party2Surname").item(0).value;
    var givenName2 = document.getElementsByName("party2GivenName").item(0).value;
    var maidenNameSurName2 = document.getElementsByName("party2MaidenSurName").item(0).value;
    var fullName  = document.getElementsByName("fullName").item(0).value;
    var postalAddress = document.getElementsByName("address").item(0).value;
    var suburb = document.getElementsByName("suburb").item(0).value;
    var state = document.getElementsByName("state").item(0).value;
    var postCode = document.getElementsByName("postCode").item(0).value;
    var relationship = document.getElementsByName("relationShipToThePerson").item(0).value;
    var phoneNumber = document.getElementsByName("phoneNumber").item(0).value;
    var email = document.getElementsByName("email").item(0).value;
    var reason = document.getElementsByName("reason");
    for(a=0; a< reason.length; a++)
    {   
        if(reason.item(a).checked)
        {
            reason = document.getElementsByName("reason").item(a);
        }
    }
    
    var reasonOther = document.getElementsByName("other").item(0).value;
    var declearation;
    var declearation = document.getElementsByName("decelaration").item(0).value;
    
    //var reg1= /\d\W/;    
    var reg1 = /(\W|\d)/g;
    var reg2 = /[!@#$%^&*()_+=|}{:"\?><\][';/.,`~	/.]/g;
    
         
        /*
        if(surName1.search(reg1) !== -1)
        {
            var validation1 = document.getElementsByName("validation1").item(0).innerHTML += "<br/><b>Party 1’s surname: </b>Please Enter alphabetic characters Only";
            return false;
            
        }
        else
        {
            var validation1 = document.getElementsByName("validation1").item(0).innerHTML = "";
        }
        
        if(givenName1.search(reg1) !== -1)
        {
            var validation1 = document.getElementsByName("validation1").item(0).innerHTML += "<br/><b>Party 1’s given name(s): </b>Please Enter alphabetic characters Only";
            return false;
        }
        else
        {
            var validation1 = document.getElementsByName("validation1").item(0).innerHTML = "";
        }
        
        if(maidenNameSurName1.search(reg1) !== -1)
        {   
            var validation1 = document.getElementsByName("validation1").item(0).innerHTML += "<br/><b>Maiden surname if different(s): </b>Please Enter alphabetic characters Only";
            return false;
        }
        else
        {
            var validation1 = document.getElementsByName("validation1").item(0).innerHTML = "";
        }
        
        if(postalAddress.search(reg2) != -1)
        {
            
            var validation2 = document.getElementsByName("validation2").item(0).innerHTML += "<br/><b>Address: </b>Please Enter Number, alphabetic, space [ ], hyphen [-], and slash [/] characters only";
            return false;
        }
        
        if(suburb.search(reg1) != -1)
        {
            var validation2 = document.getElementsByName("validation2").item(0).innerHTML += "<br/><b>Suburb / Town: </b>Please Enter Alphabetic characters only";
            return false;
        }
        
        if(state == "Choose State")
        {
            return false;
        }
        
        if(postCode.length < 4 || postCode.length > 4)
        {
            var validation2 = document.getElementsByName("validation2").item(0).innerHTML += "<br/><b>PostCode: </b>4 Numeric Digits Only ";
            return false;
        }
        
        if(phoneNumber.length < 8 || phoneNumber.length > 10 || phoneNumber.length == 9)
        {
            
            var validation2 = document.getElementsByName("validation2").item(0).innerHTML += "<br/><b>Phone Number: </b>8 or 10 numeric digits Only ";
            return false;
        }
        
       */
      var declearation1 = document.getElementsByName("decelaration").item(0);
      if(declearation1.checked){
          return true;
      }
      {
          var validation2 = document.getElementsByName("validation2").item(0).innerHTML += "<br/><b>Declearation: </b>Agree Terms And Condition ";
          var validation2 = document.getElementsByName("validation2").item(0).style.display = "block";
          return false
      }
        
        
    }
    
    
    function surnameValidation(){
    var surName1 = document.getElementsByName("Party1Surname").item(0).value;   
    var reg1 = /(\W|\d)/g;
    var reg2 = /[!@#$%^&*()_+=|}{:"\?><\][';/.,`~	/.]/g;
    var validation1 = document.getElementsByName("validation1").item(0);     
        if(surName1.search(reg1) !== -1)
        {
            validation1.style.display = "block";
            validation1.innerHTML = "<b>Party 1’s surname: </b>Please Enter alphabetic characters Only";   
        }
        else
        {
            validation1.innerHTML = "";
            validation1.style.display = "none";
        }
    }
    
    function givenNameValidation()
    {
        var givenName1 = document.getElementsByName("party1GivenName").item(0).value;
        var reg1 = /(\W|\d)/g;
        var validation1 = document.getElementsByName("validation1").item(0); 
        if(givenName1.search(reg1) !== -1)
        {
            validation1.style.display = "block";
            validation1.innerHTML = "<b>Party 1’s given name(s) </b>Please Enter alphabetic characters Only";   
        }
        else
        {
            validation1.innerHTML = "";
            validation1.style.display = "none";
        }
    }
    
    function maidNameValidation()
    {
        var maidenNameSurName1 = document.getElementsByName("party1MaidenSurName").item(0).value;
        var reg1 = /(\W|\d)/g;
        var validation1 = document.getElementsByName("validation1").item(0); 
       if(maidenNameSurName1.search(reg1) !== -1)
        {   
            validation1.style.display = "block";
            validation1.innerHTML = "<b>Party 1’s given name(s) </b>Please Enter alphabetic characters Only";   
        }
        else
        {
            validation1.innerHTML = "";
            validation1.style.display = "none";
        }
    }
    
        function addressValidation()
    {
        var postalAddress = document.getElementsByName("address").item(0).value;
        var reg2 = /[!@#$%^&*()_+=|}{:"\?><\][';/.,`~	/.]/g;
        var validation2 = document.getElementsByName("validation2").item(0); 
       if(postalAddress.search(reg2) != -1)
        {  
            validation2.style.display = "block";
            validation2.innerHTML  = "<b>Address: </b>Please Enter Number, alphabetic, space [ ], hyphen [-], and slash [/] characters only";   
        }
        else
        {
            validation2.innerHTML = "";
            validation2.style.display = "none";
        }
    }
    
     function suburbValidation()
    {
       var suburb = document.getElementsByName("suburb").item(0).value;
        var reg1 = /(\W|\d)/g;
        var validation2 = document.getElementsByName("validation2").item(0); 
        if(suburb.search(reg1) != -1)
        {
            validation2.style.display = "block";
            validation2.innerHTML  = "<b>Suburb / Town: </b>Please Enter Alphabetic characters only";   
        }
        else
        {
            validation2.innerHTML = "";
            validation2.style.display = "none";
        }
    }
    
    function postCodeValidation()
    {
       var postCode = document.getElementsByName("postCode").item(0).value;
       var validation2 = document.getElementsByName("validation2").item(0); 
       
        if(postCode.length < 4 || postCode.length > 4)
        {
            validation2.style.display = "block";
            validation2.innerHTML  = "<b>PostCode: </b>Please Enter 4 numeric digits Only";   
        }
        else
        {
            validation2.innerHTML = "";
            validation2.style.display = "none";
        } 
    }
    
    function phoneNumberValidation()
    {
       var phoneNumber = document.getElementsByName("phoneNumber").item(0).value;
       var validation2 = document.getElementsByName("validation2").item(0); 
       
        if(phoneNumber.length < 8 || phoneNumber.length > 10 || phoneNumber.length == 9)
        {
            validation2.style.display = "block";
            validation2.innerHTML  = "<b>Phone Number: </b>Please Enter 8 or 10 numeric digits Only";   
        }
        else
        {
            validation2.innerHTML = "";
            validation2.style.display = "none";
        } 
    }
    
    function reasonValidation(){
        
    var date = document.getElementsByName("date").item(0).value;
    var placeOfMarriage =document.getElementsByName("placeOfMarriage").item(0).value  ;
    var surName1 = document.getElementsByName("Party1Surname").item(0).value;
    var givenName1 = document.getElementsByName("party1GivenName").item(0).value;
    var maidenNameSurName1 = document.getElementsByName("party1MaidenSurName").item(0).value;
    var surName2 = document.getElementsByName("Party2Surname").item(0).value;
    var givenName2 = document.getElementsByName("party2GivenName").item(0).value;
    var maidenNameSurName2 = document.getElementsByName("party2MaidenSurName").item(0).value;
    var fullName  = document.getElementsByName("fullName").item(0).value;
    var postalAddress = document.getElementsByName("address").item(0).value;
    var suburb = document.getElementsByName("suburb").item(0).value;
    var state = document.getElementsByName("state").item(0).value;
    var postCode = document.getElementsByName("postCode").item(0).value;
    var relationship = document.getElementsByName("relationShipToThePerson").item(0).value;
    var phoneNumber = document.getElementsByName("phoneNumber").item(0).value;
    var email = document.getElementsByName("email").item(0).value;
    var reason = document.getElementsByName("reason");
    for(a=0; a< reason.length; a++)
    {   
        if(reason.item(a).checked)
        {
            reason = document.getElementsByName("reason").item(a);
        }
    }
    
    var reasonOther = document.getElementsByName("other").item(0).value;

        
        if(!reason.checked  && reasonOther == "")
        {
            var validation2 = document.getElementsByName("validation2").item(0).innerHTML = "";
            var validation2 = document.getElementsByName("validation2").item(0).innerHTML += "<br/><b>Reason: </b>Please Select Max of 1 Reason or otherwise fill the other Field ";
            var validation2 = document.getElementsByName("validation2").item(0).style.display = "block";
            var declearation = document.getElementsByName("decelaration").item(0).checked = false;
        }
                
        else if(reason.checked  && reasonOther !== "")
        {
            var validation2 = document.getElementsByName("validation2").item(0).innerHTML = "";
            var validation2 = document.getElementsByName("validation2").item(0).innerHTML += "<br/><b>Reason: </b>You Can Only Select Either Max of 1 Reason or Fill in the <b>Other</b> Field ";
            var validation2 = document.getElementsByName("validation2").item(0).style.display = "block";
            var declearation = document.getElementsByName("decelaration").item(0).checked = false;
        }
        
        else
        {
            var validation2 = document.getElementsByName("validation2").item(0).innerHTML = "";
            var validation2 = document.getElementsByName("validation2").item(0).style.display = "none";
           // var declearation = document.getElementsByName("decelaration").item(0).checked = true;
        }
        
if( date == "" || placeOfMarriage == "" || surName1 == "" || givenName1 =="" || (!reason.checked && reasonOther == "") )
{
        
        var validation1 = document.getElementsByName("validation1").item(0);    
        validation1.style.display = "block";
        validation1.innerHTML = "Please Fill The Required Fields";
        var declearation = document.getElementsByName("decelaration").item(0).checked = false;
        return false
}
else
        {
            var validation1 = document.getElementsByName("validation1").item(0);
            validation1.innerHTML = "";
            validation1.style.display = "none";
        }
        
    }
    
    
    