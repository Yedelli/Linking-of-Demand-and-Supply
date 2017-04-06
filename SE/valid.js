

$(document).ready(function() {	

	
	
	$("form").validate({

      rules: {
		  
										 userid:{
											  required:true,
											  
											  
										  },

										  name:{
										  		required:true,
										  		minlength:3,
										  },
										 
										 age:{
										  	   required:true,
										  	   digits:true,
										  },

										  gender: {
										  	   required:true
										  },
										  
										  city:{
											  required:true,
											  
										  },
										  
										  aadharNo:{
											  required:true,
											  digits:true,
											  minlength:12										  
										  },
										  
										  
										   contactNo:{
											    required:true,
											    digits:true,
										        minlength:10,
										        maxlength:10
										  },
										
										  
										  Languages:{
											  	required:true,
											   			  
										  },

										  image:{
											  	required:true,
											   	
											   		  
										  },
										  
										  skill:{
											  	required:true,
											   	

										  },
										  
										  experience:{
											  	required:true,
											   	
											   		  
										  }
										  
										
										 
										  
										
										  
         },
         messages: {
										name:{
										  required: "Please enter your name",
										  minlength:"Name should be at least 3 character long"
									  },
										
									  age: {
										  required: "Please enter your age"
									  },
								
									  gender: {
										  required: "Please Select your Gender"
									  },

									  Languages: {
										  required: "Please enter your Languages"
									  },
									  
									  city:{
										  required: "Please enter your City name",
										  
									  },
									  
									  aadharNo:{
										  required: "Please enter your aadhar-number",
										  digits:"Please enter a valid aadhar number",
										  minlength:"aadhar number should be exactly 12 digits",
										   
									  },
									  
									   contactNo:{
										  required: "Please enter your Contact-number",
										  digits:"Please enter a valid Contact number",
										  minlength:"Phone number should be exactly 10 digits",
										  maxlength:"Phone number should be exactly 10 digits"
									  },
									  
									  
									  userid:{
										  required: "Please enter your userid",										
										   
									  },

									  image:{
										  required: "Please enter your image",										
										   
									  },

									   skill:{
										  required: "Please enter your skill",										
										   
									  },

									   experience:{
										  required: "Please enter your experience",										
										   
									  },
									  
									 
									  
									
		  
         },
		 
		 
		 
		
   });
   
   
   
});





