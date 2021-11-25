//selecting Ui elms
var form=$('#signForm');
const fname=$('#name1');
const lname=$('#name2');
const email=$('#mail');
const ID=$('#iNo');
const mobile=$('#mobl');
const password=$('#pwd');
const Cpassword=$('#pwd2');

//variable to count error
let errCount=0;

//function to showerror
        //takes the id and the message
const displayError=(errorID, errorMsg)=>{
        //displays error in html
    errorID.html(errorMsg);
        //increment if errors found
    errCount+=1;
}


//checking required fields
const checkReq =(inputArray)=>{

    //on each iteration take array
    inputArray.forEach(function(input){
                //get value
                if(input.val()===''){
        //check if error exists and move to next element and select id
                    displayError(input.next(), `${input.attr('id')} field is required`);
                }


    })
}

//check input length
const checkInputLength=(input, min, max)=>{
    if(input.val().length <= min){
        displayError(input.next(), `${input.attr('id')} must be more than ${min} characters long` );

    }else if(input.val().length >= max){
        displayError(input.next(), `${input.attr('id')} must be less than ${max} characters long` );


    }
}

//valid email check
const checkEmail=(input)=>{
    const Mailregex= /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/; 

    //compare input with regex
    if(!Mailregex.test(input.val())){
        displayError(input.next(), 'Invalid email');
    }
}

//valid password 
const checkPasswordContains=(input)=>{
    const passRegex= /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/;

    //compare password with regex 
    if(!passRegex.test(input.val())){
        displayError(input.next(), 'Invalid password elements');
    }
}


//password match
const checkPasswordMatch=(password1, password2)=> {
    if(password1.val() !=password2.val()){
        displayError(password2.next(), "Passwords do not match");
    }

}

// document.getElementById("#signForm").addEventListener("submit", function(e){
    // if(!isValid){
    //     e.preventDefault();    //stop form from submitting
    // }
  	//do whatever an submit the form
      //clearing error messages
    // $('small').html('');
    // errCount=0; //to set errors to 0 without refresh


    //input validation Not empty
    // checkReq([fname,lname, email, ID, mobile, password, Cpassword]);

    //fname length
    // checkInputLength(fname, 2, 10);

    //lname length 
    // checkInputLength(lname, 2, 20);

    //id length
    // checkInputLength(ID, 5, 10); //additional 2 numbers for faculty

    //mobile no length
    // checkInputLength(mobile, 9, 15);

    
    //email
    // checkEmail(email);

    // //password length
    // checkInputLength(password, 7, 18);


    //password contains
    // checkPasswordContains(password);

    //password match
    // checkPasswordMatch(password, Cpassword);


    // if(errCount===0){
    //     $('#success').html('Correct Inputs!');
        // break;
//     }
// });


//when form is submit
form.submit(function(e){

    // clearing error messages
    $('small').html('');
    errCount=0; //to set errors to 0 without refresh


    // input validation Not empty
    checkReq([fname,lname, email, ID, mobile, password, Cpassword]);

    // fname length
    checkInputLength(fname, 2, 10);

    // lname length 
    checkInputLength(lname, 2, 20);

    // id length
    checkInputLength(ID, 5, 10); //additional 2 numbers for faculty

    // mobile no length
    checkInputLength(mobile, 9, 15);

    
    // email
    checkEmail(email);

    // password length
    checkInputLength(password, 7, 18);


    // password contains
    checkPasswordContains(password);

    // password match
    checkPasswordMatch(password, Cpassword);


    if(errCount===0){
        $('#success').html('Correct Inputs!');
    
    }
    e.preventDefault(); //prevent it from submitting

    
});








