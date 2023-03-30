
<!DOCTYPE html>
<html lang="en">
<head>,
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <script src="https://kit.fontawesome.com/2bbac3a66c.js" crossorigin="anonymous" ></script>
</head>
<body>
    <form  id="create-account-form" action="invoice.php" method="POST" class="card-body">
        
        <div class="title">
            <h2>Credit Card Payment</h2>
            
        </div>
        <hr>
        <!-- USERNAME -->
        <div class="input-group">
            <label for="username">Card Holder's Name</label>
            <input type="text" id="username" class="form-control" placeholder="Card Holder's Name" name="username">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <p>Error Message</p>
        </div>
        <div class="input-group">
            <label for="cardnumber">Card Number</label>
            <input type="text" id="cardnumber" class="form-control" placeholder="Card Number" name="cardnumber">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <p>Error Message</p>
        </div>
        <div class="input-group">
            <label for="expirydate">Expiry Date</label>
            <input type="text" id="expirydate" class="form-control" placeholder="MM/YY" name="expirydate">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <p>Error Message</p>
        </div>
        <!-- PASSWORD -->
        <div class="input-group">
            <label for="password">CVV</label>
            <input type="password" id="password" class="form-control" placeholder="CVV" name="password">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <p>Error Message</p>
        </div>

        <button type="submit" class="btn">Pay</button>
    </form>


    <!-- JAVASCRIPT -->
    <script src="app.js"></script>
</body>
</html>

<!-- 

    <i class="fas fa-check-circle"></i>
    <i class="fas fa-exclamation-circle"></i>

 -->
 <script>
  const form = document.querySelector('#create-account-form');
const usernameInput = document.querySelector('#username');
const cardnumberInput = document.querySelector('#cardnumber');
const expirydateInput = document.querySelector('#expirydate');
const emailInput = document.querySelector('#email');
const passwordInput = document.querySelector('#password');
const confirmPasswordInput = document.querySelector('#confirm-password');

form.addEventListener('submit', (event)=>{
    
    validateForm();
    console.log(isFormValid());
    if(isFormValid()==true){
        form.submit();
     }else {
         event.preventDefault();
     }

});

function isFormValid(){
    const inputContainers = form.querySelectorAll('.input-group');
    let result = true;
    inputContainers.forEach((container)=>{
        if(container.classList.contains('error')){
            result = false;
        }
    });
    return result;
}

function validateForm() {
    //USERNAME
    if(usernameInput.value.trim()==''){
        setError(usernameInput, 'Name can not be empty');
    }else if(usernameInput.value.trim().length <5 || usernameInput.value.trim().length > 15){
        setError(usernameInput, 'Name must be min 5 and max 15 charecters');
    }else {
        setSuccess(usernameInput);
    }
       //CARD NUMBER
       if(cardnumberInput.value.trim()==''){
        setError(cardnumberInput, 'Card Number can not be empty');
    }else if(cardnumberInput.value.trim().length <16 || cardnumberInput.value.trim().length > 20){
        setError(cardnumberInput, 'Number must be min 16 and max 18 charecters');
    }else {
        setSuccess(cardnumberInput);
    }
       //EXPIRY DATE
       if(expirydateInput.value.trim()==''){
        setError(expirydateInput, 'Expiry Number can not be empty');
    }else if(expirydateInput.value.trim().length <5 || expirydateInput.value.trim().length > 5){
        setError(expirydateInput, 'Number must be min 4');
    }else {
        setSuccess(expirydateInput);
    }
    //PASSWORD
    if(passwordInput.value.trim()==''){
        setError(passwordInput, 'Password can not be empty');
    }else if(passwordInput.value.trim().length <3 || passwordInput.value.trim().length >20){
        setError(passwordInput, 'Password min 3');
    }else {
        setSuccess(passwordInput);
    }
}

function setError(element, errorMessage) {
    const parent = element.parentElement;
    if(parent.classList.contains('success')){
        parent.classList.remove('success');
    }
    parent.classList.add('error');
    const paragraph = parent.querySelector('p');
    paragraph.textContent = errorMessage;
}

function setSuccess(element){
    const parent = element.parentElement;
    if(parent.classList.contains('error')){
        parent.classList.remove('error');
    }
    parent.classList.add('success');
}





 </script>
 <style>
  * {
    padding:0;
    margin:0;
    box-sizing: border-box;
}
*{
  font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
}

body {
    display:flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

#create-account-form {
    width:485px;
    padding:20px;
    text-transform: uppercase;
    background-color: #fff;
    margin-top: 60px;
}
.card-body{
  position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: 0.25rem;
}
.title {
    margin-bottom: 20px;
}

.input-group {
    margin:5px 0; 
    position:relative;
}

.input-group label {
    display:inline-block;
    margin-bottom: 5px;
}

.input-group input {
    display:block;
    width:100%;
    padding:10px;   
    border-radius: 6px;
    border-color: #ced4da;
}
hr{
  border-color: #dfdfdf;
  margin-bottom: 20px;
}

.error input {
    border:3px red solid;
}

.success input {
    border:3px green solid;
}
.form-control{
  display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
 .input-group i {
     position:absolute;
     right:10px;
     top:35px;
     visibility: hidden;
 }


 .success i.fa-check-circle{
     visibility: visible;
     color:green;
 }

 .error i.fa-exclamation-circle {
    visibility: visible;
    color:red;
}


 .input-group p {
     font-size: 15px;
     color:red;
     visibility: hidden;
 }

 .error p {
     visibility: visible;
 }

 .btn {
     width:100%;
     padding:10px;
     font-size: 20px;
     background-color: #007bff;
     color:#fff;
     text-transform: uppercase;
     border:none;
 }











 </style>