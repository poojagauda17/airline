<?php for($i = 0; $i < $_GET['count']; $i++ ): ?>
<hr>

<!-- <div class="row">
	<div class="col-md-6">
		<label class="control-label">Name</label>
		<input type="text" name="name[]" class="form-control">
	</div>
	<div class="col-md-6">
		<label class="control-label">Contact Number</label>
		<input type="text" name="contact[]" class="form-control">
	</div>
</div>

<div class="row">
<div class="form-group col-md-12">
	<label class="control-label">Address</label>
	<textarea name="address[]" id="" cols="30" rows="2" class="form-control"></textarea>
</div>
</div> -->
    <form  id="create-account-form" action="payment.php" method="POST" class="card-body">
        <!-- USERNAME -->
        <div class="input-group">
            <label for="username">Name</label>
            <input type="text" id="username" class="form-control" placeholder="'Name" name="username">
            <p>Error Message</p>
        </div>
        <div class="input-group">
            <label for="cardnumber">Phone Number</label>
            <input type="text" id="cardnumber" class="form-control" placeholder="Phone Number" name="cardnumber">
            <p>Error Message</p>
        </div>
        <div class="input-group">
            <label for="expirydate">Email Id</label>
            <input type="email" id="expirydate" class="form-control" placeholder="Email Id" name="expirydate">
            <p>Error Message</p>
        </div>
        <!-- PASSWORD -->
        <div class="input-group">
            <label for="password">Address</label>
            <input type="text" id="password" class="form-control" placeholder="Address" name="password">
            <p>Error Message</p>
        </div>

        <button type="submit" class="btn">Save</button>
    </form>
<?php endfor; ?>
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
    }else if(usernameInput.value.trim().length <5 || usernameInput.value.trim().length > 40){
        setError(usernameInput, 'Name must be min 5 and max 15 charecters');
    }else {
        setSuccess(usernameInput);
    }
       //CARD NUMBER
       if(cardnumberInput.value.trim()==''){
        setError(cardnumberInput, 'Phone Number can not be empty');
    }else if(cardnumberInput.value.trim().length <10 || cardnumberInput.value.trim().length > 14){
        setError(cardnumberInput, 'Number must be min 10 and max 12 charecters');
    }else {
        setSuccess(cardnumberInput);
    }
       //EXPIRY DATE
       if(expirydateInput.value.trim()==''){
        setError(expirydateInput, 'Email Id can not be empty');
    }else if(expirydateInput.value.trim().length <10 || expirydateInput.value.trim().length > 100){
        setError(expirydateInput, 'Please Enter Valid Email Id');
    }else {
        setSuccess(expirydateInput);
    }
    //PASSWORD
    if(passwordInput.value.trim()==''){
        setError(passwordInput, 'Address can not be empty');
    }else if(passwordInput.value.trim().length <3 || passwordInput.value.trim().length >100){
        setError(passwordInput, 'Address min 3');
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
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

#create-account-form {
    width:485px;
    padding:20px;
    text-transform: uppercase;
    background-color: #fff;
    margin:auto;
}
.input-group {
    margin:5px 0; 
    position:relative;
	display: inline;
}

.input-group label {
    display:inline-block;
    margin-bottom: 5px;
}
.input-group > .form-control, .input-group > .form-control-plaintext, .input-group > .custom-select, .input-group > .custom-file {
    position: relative;
    flex: 1 1 auto;
    width: 100%;
    min-width: 0;
    margin-bottom: 0;
}

.input-group input {
    display:block;
    width:100%;
    padding:10px;   
    border-radius: 6px;
    border-color: #ced4da;
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
<style></style>