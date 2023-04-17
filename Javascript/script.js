function getTime(){
    let date = new Date();
    document.getElementById("time").innerHTML= date.toLocaleTimeString();
    document.getElementById("time").style.color="white"
    document.getElementById("time").style.float="right"
    document.getElementById("time").style.padding="10px"
    document.getElementById("time").style.paddingTop="10px"
    document.getElementById("time").style.fontSize="24px";
    setTimeout(getTime,1000);
}
function showAlert(){
    alert("Disclaimer: Use this website at your own risk, your privacy may be leaked!");
}
function underConstruction(){
    alert("This webpage is currently under construction. Thank you for your patience.")
}
// const formArray = Array.from(form.elements);
function checkCheckboxes(){
  // const form = document.getElementById("findForm");
  const boxes = document.FindForm.Other_dogs.checked||document.FindForm.Other_cats.checked||
  document.FindForm.Small_Children.checked||document.FindForm.Does_not_matter2.checked;
  if(boxes == true){
    
  }
  else{
    alert("Please fill check at least one box");
  }
}




/*event registering for radio buttons, assigning it to an attribute
// */

function petChoiceCheck(dom1,typePet){
  const dom=dom1;
  let count = 0;
  dom.pet.forEach(element => {
    if(element.checked){
      count+=1;
    }
  });
  if(count==0){
    alert("Please choose preferred pet.");
    typePet.style.textDecoration="underline red";
    return false;
  } 
  return true;
}
// function petChoice(){ //register pets and 
//   for(let i =0;i<dom.pet.length;i++){
//     if(dom.pet[i].checked){
//       return dom.pet[i].value;
//     }
//   }
// }

function checkGender(){
  const gender = document.getElementById("gender") 
  if(gender.selectedIndex == 0){
    alert("Please choose a preferred pet gender.");
    gender.style.borderColor="red";
    return false;
  }
  return true;
}

function checkAge(form){
  if(form.age.selectedIndex == ""){
    alert("Please choose a preferred pet age.");
    document.getElementById("age").style.borderColor="red";
    return false;
  }
  return true;
}

function checkBreed(element){
  const breed = element;
  if(breed.selectedIndex==0){
    alert("Please select a preferred dog breed")
    breed.style.borderColor="red";
    return false;
  }
  return true;
}
function checkCompatibility(dom,destination){
  let count = 0;
  let dom1 = dom;
  let dest = destination;
    dom1.compatibility.forEach(element =>{
    if(element.checked){
      count++;
    }
   
  })
  if(count==0){
    alert("Please choose pet friendliness");

    dest.style.textDecoration="underline red";
    return false
  }
  return true;
}

// function validateFindPetForm(){
//   let err = false;
//   if(!petChoiceCheck(document.getElementById("findForm"),document.getElementById("petSelection"))){
//     err=true;
//   }
//   if(!checkBreed(document.getElementById("breed"))) err=true;
//   if(!checkAge(document.getElementById("findForm"))) err=true;
//   if(!checkGender()) err = true;
//   if(!checkCompatibility(document.getElementById("findForm"),document.getElementById("labelC"))) err=true;
//   return !err;
// }

// function checkSuitForFam(){
//   const form1 = document.getElementById("giveForm");
//   let count=0;
//   form1.option.forEach(element =>{
//     if(element.checked){
//       count+=1;
//     }
//   });
//   if(count==0){
//     alert("Choose if you want pet to be suitable for families.");
//     document.getElementById("fam").style.textDecoration="underline red";
//     return false;
//   }
//   return true;
// }

// function validateGiveForm1(){
//   let err = false;
//   // let a = petChoiceCheck(document.getElementById("giveForm"),document.getElementById("typeOfPet"));
//   let b = checkBreed(document.getElementById("breed"));
//  let c = checkAge(document.getElementById("giveForm"));
//  let d = checkGender();
//  let e = checkCompatibility(document.getElementById("giveForm"),document.getElementById("labelC1"));
//  let f = checkSuitForFam();
//  let g = checkName();
//  let h = checkEmail();
//  let i = checkText();
//  return b&&c&&d&&e&&f&&g&&h&&i;
// }
  // if(!petChoiceCheck(document.getElementById("giveForm"),document.getElementById("typeOfPet"))){
  //   err=true;

  // }
  // if(!check
  // (document.getElementById("breed"))){
  //    err=true;
  // }
  // if(!checkAge(document.getElementById("giveForm"))){
  //   err=true;
  // } 
  // if(!checkGender()){
  //   err=true;
  // }
  // if(!checkCompatibility(document.getElementById("giveForm"),document.getElementById("labelC1"))){
  //   err = true;
  // }
  // if(!checkSuitForFam()){
  //   err=true;
  // }
  // if(!checkName()){
  //   err=true;
  // }
  // if(!checkEmail()){
  //   err=true;
  // }
  // if(!checkText()){
  //   err=true;
  // }
  // return !err;

function checkName(){ 
  const x = document.getElementById("giveForm").name1;
  if (x.value == "") {
    alert("Owner name must be filled out");
    document.getElementById("name1").style.border="1px solid red";
    return false;
  }
  return true;
}

function checkEmail(){
  const validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  const mail = document.getElementById("giveForm");
  if(mail.value==""){
    alert("please fill in email")
    mail.email.style.border="1px solid red";
    return false
  }
  else if(validRegex.test(mail.email.value)){
   return true;
  }
  alert("Invalid email format");
  mail.email.style.border="1px solid red";
  return false;
  
}
function checkText(){
  const text = document.getElementById("comments");
  if(text.value==""){
    alert("Please add comments.")
    text.style.borderColor="red";
    return false;
  }
  return true;
}

/**
 * Decides whether the form is submitted or not.
 * @returns true if the fields are in the right format
 */
function formSubmit(){ // this method basically determines whether a form is submitted or not.
  let username = document.getElementById("username");
  let password = document.getElementById("password");
  //pattern is specified in html
  return username.checkValidity()&& password.checkValidity();
}



function validateGiveForm() {
    // Get form input values
    var petType = document.querySelector('input[name="pet"]:checked').value;
    var breed = document.getElementById('breed').value;
    var age = document.getElementById('age').value;
    var gender = document.getElementById('gender').value;
    var compatibility = document.querySelectorAll('input[name="compatibility[]"]:checked');
    var compatibilityValues = [];
    for (var i = 0; i < compatibility.length; i++) {
        compatibilityValues.push(compatibility[i].value);
    }
    var family = document.querySelector('input[name="family"]:checked').value;
    var name1 = document.getElementById('name1').value;
    var email = document.getElementById('email').value;
    // Perform validation
    if (petType === '') {
        alert('Please select a pet type');
        return false;
    }

    if (breed === 'default') {
        alert('Please select a breed');
        return false;
    }

    if (age === '') {
        alert('Please select an age');
        return false;
    }

    if (gender === 'default') {
        alert('Please select a gender');
        return false;
    }

    if (compatibilityValues.length === 0) {
        alert('Please select at least one compatibility option');
        return false;
    }
    if (family === '') {
      alert('Please select a if the pet is suitable for families');
      return false;
  }
  if(name1 === ""){
    alert("Please enter the Owner's name");
    return false;
  }
  if(email === ""){
    alert("Please enter the Owner's email");
    return false;
  }
    return true;
}
function validateFindPetForm() {
  // Get form elements
  var pet = document.forms["findForm"]["pet"].value;
  var breed = document.forms["findForm"]["breed"].value;
  var age = document.forms["findForm"]["age"].value;
  var gender = document.forms["findForm"]["gender"].value;
  var compatibility = document.forms["findForm"]["compatibility[]"];

  // Perform validation
  if (pet === "") {
    alert("Please select a pet (cat or dog).");
    return false;
  }
  if (pet === "Dog" && breed === "") {
    alert("Please select a preferred dog breed.");
    return false;
  }
  if (age === "") {
    alert("Please select a preferred pet age.");
    return false;
  }
  if (gender === "") {
    alert("Please select a preferred gender.");
    return false;
  }
  var compatibilityChecked = false;
  for (var i = 0; i < compatibility.length; i++) {
    if (compatibility[i].checked) {
      compatibilityChecked = true;
      break;
    }
  }
  if (!compatibilityChecked) {
    alert("Please select at least one option for pet compatibility.");
    return false;
  }

  // If all validations pass, return true to submit the form
  return true;
}

















// const formLength= document.getElementById("findForm").getElementsByTagName('input').length;
// console.log(formLength);

