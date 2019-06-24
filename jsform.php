<html> 
<head> 
<script> 
function formvali()                                    
{ 

    var name = document.forms["RegForm"]["Name"];               
    var email = document.forms["RegForm"]["EMail"];    
    var phone = document.forms["RegForm"]["Telephone"];  
    var what =  document.forms["RegForm"]["Subject"];  
    var password = document.forms["RegForm"]["Password"];  
    var address = document.forms["RegForm"]["Address"]; 
    var Comment  = document.forms["RegForm"]["Comment"]; 
    var address = document.forms["RegForm"]["Address"]; 
    var file = document.forms["RegForm"]["file"];
   
   
    if (name.value == "")                                  
    { 
        window.alert("Please enter your name."); 
        name.focus(); 
        return false; 
    } 
	
	if ( ( RegForm.gender[0].checked == false ) && ( RegForm.gender[1].checked == false ) ) 
{
alert ( "Please choose your Gender: Male or Female" ); 
return false;
}
   
    if (address.value == "")                               
    { 
        window.alert("Please enter your address."); 
        name.focus(); 
        return false; 
    } 
       
    if (email.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (phone.value == "")                           
    { 
        window.alert("Please enter your telephone number."); 
        phone.focus(); 
        return false; 
    } 
   
    if (password.value == "")                        
    { 
        window.alert("Please enter your password"); 
        password.focus(); 
        return false; 
    } 
   
    if (what.selectedIndex < 0)                  
    { 
        alert("Please enter your course."); 
        what.focus(); 
        return false; 
    } 
	
	  if (Comment.value =="")                        
    { 
        window.alert("Please enter your Comment"); 
        Comment.focus(); 
        return false; 
    } 
     if (file.value =="")                        
    { 
        window.alert("Please put file"); 
        Comment.focus(); 
        return false; 
    } 
   



    return true; 
}</script> 
  
<style> 
GEEKFORGEEKS {                                         
    margin-left: 70px; 
    font-weight: bold ; 
    float: left; 
    clear: left; 
    width: 100px; 
    text-align: left; 
    margin-right: 10px; 
    font-family:sans-serif,bold, Arial, Helvetica; 
    font-size:14px; 
} 
   
div {  
    box-sizing: border-box; 
    width: 100%; 
    border: 100px solid black; 
    float: left; 
    align-content: center; 
    align-items: center; 
} 
   
form {                                         
    margin: 0 auto; 
    width: 600px; 
}</style></head> 
   
<body> 
<h1 style="text-align: center"> REGISTRATION FORM </h1>           
<form name="RegForm"  onsubmit="return formvali()" method="post">  
      
    <p>Name: <input type="text" size=65 name="Name"> </p><br> 
  <p>Your Gender: <input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female </p>	
    <p> Address: <input type="text" size=65 name="Address">  </p><br> 
    <p>E-mail Address: <input type="text" size=65 name="EMail">  </p><br> 
     <p>Password: <input type="text" size=65 name="Password"> </p><br> 
    <p>Telephone: <input type="text" size=65 name="Telephone"> </p><br>   
           
    <p>SELECT YOUR COURSE    
        <select type="text" value="" name="Subject"> 
            <option>BTECH</option> 
            <option>BBA</option> 
            <option>BCA</option> 
            <option>B.COM</option> 
            <option>GEEKFORGEEKS</option> 
        </select></p><br><br> 
    <p>Comments:  <input type="text" size=65 name="Comment">  </p> 
	<p> upload file:   <input id="file" type="file" name="file" /><script>var uploadField = document.getElementById("file");

uploadField.onchange = function() {
    if(this.files[0].size > 307200){
       alert("File is too big!");
       this.value = "";
    };
}; </script>
    <p><input type="submit" value="send" name="Submit">      
        <input type="reset" value="Reset" name="Reset">   
    </p>          
</form> 
</body> 
</html> 
