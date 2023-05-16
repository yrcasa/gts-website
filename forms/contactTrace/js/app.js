//Radio button values
const employee = document.getElementById('employee');
const applicant = document.getElementById('applicant');
const pickup = document.getElementById('pickup');
const delivery = document.getElementById('delivery');
const collection = document.getElementById('collection');
const personalVisit = document.getElementById('personalVisit');

//Forms values
const temp = document.getElementById('temp');
const completeName = document.getElementById('completeName');
const age = document.getElementById('age');
const sex = document.querySelectorAll('input[name="sex"]');
const presentAddress = document.getElementById('presentAddress');
const mobileNum = document.getElementById('mobileNum');
//Form that gets the nature of vists value
const form = document.getElementById('formLogin').natureOfVisit;
const internalField = document.getElementById('formLogin').internal;

//Hidden forms for internale and Pickup, Delivery, Collection values
const internalForm = document.getElementById('internalForm');
const companyNameForm = document.getElementById('companyNameForm');
const companyAddressForm = document.getElementById('companyAddressForm');

// const tiger = document.getElementById('tiger');
// const gtags = document.getElementById('gtags');

let internal;
console.log(internal);

function checkNatureOfVisit(val) {

    // console.log(val)

    switch(val) {
        case "Employee":
            internalForm.style.display = 'contents';
            companyNameForm.style.display = 'none';
            companyAddressForm.style.display = 'none';
            break;
        case "Pickup":
            internalForm.style.display = 'none';
            companyNameForm.style.display = 'contents';
            companyAddressForm.style.display = 'contents';
            break;
        case "Delivery":
            internalForm.style.display = 'none';
            companyNameForm.style.display = 'contents';
            companyAddressForm.style.display = 'contents';
            break;
        case "Collection":
            internalForm.style.display = 'none';
            companyNameForm.style.display = 'contents';
            companyAddressForm.style.display = 'contents';
            break;
        case "Applicant":
            internalForm.style.display = 'none';
            companyNameForm.style.display = 'none';
            companyAddressForm.style.display = 'none';
        case "Personal Visit":
            internalForm.style.display = 'none';
            companyNameForm.style.display = 'none';
            companyAddressForm.style.display = 'none';
    }

}


//Multi step form

let currentTab = 0;
const x = document.getElementsByClassName("tab");
showTab(currentTab);

function showTab (n) {
    // This function will display the specified tab of the form ...

    const x = document.getElementsByClassName("tab");
    x[n].style.display = "block";

     // ... and fix the Previous/Next buttons:

     if(n == 0) {
         document.getElementById('prevBtn').style.display = "none";
         document.querySelector('.form-part').innerHTML = "Person Details"
     } else {
        document.getElementById('prevBtn').style.display = "inline";
     }

     if (n == (x.length - 1)){ 
        document.querySelector('.form-part').innerHTML = "Health Declaration / Health History"
        document.getElementById('nextBtn').innerHTML = "Submit";
     } else {
         document.getElementById('nextBtn').innerHTML = "Next";
     }
};

const nextPrev = n => {
    // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");

    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;

    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
   // Hide the current tab:
   x[currentTab].style.display = "none";
   // Increase or decrease the current tab by 1:
   currentTab = currentTab + n;

   // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("formLogin").submit();
    if(document.getElementById("formLogin").submit()) {
        document.getElementById("formLogin").innerHTML = `
        <div class="text-center"><div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
            </div>
          </div>`;
    }
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}


//Health Declarations
const coughForm = document.getElementById('formLogin').cough;
const fatigueForm = document.getElementById('formLogin').fatigue;
const coldsForm = document.getElementById('formLogin').colds;
const soreThroatForm = document.getElementById('formLogin').soreThroat;
const fluSymptomsForm = document.getElementById('formLogin').fluSymptoms;
const feverForm = document.getElementById('formLogin').fever;
const covidHistoryForm = document.getElementById('formLogin').covidHistory;
const closeCovidContactForm = document.getElementById('formLogin').closeCovidContact;
const contactPast2WeeksForm = document.getElementById('formLogin').contactPast2Weeks;
const publicTranspoForm = document.getElementById('formLogin').publicTranspo;

//Setting internal
function setInternal(val) {
    internal = val;
}

function validateForm (){
    // This function deals with validation of the form field
   let valid = true;
   let i;
   let j;
   let isChecked = false;
   let isEmployee = false;
   let isVisitor = false;

    //Form validation here
    for (i = 0; i < form.length; i +=1 ) {
        
        if (form[i].checked) {
          
            isChecked = true;

            if (form[i].value === "Employee"){
                isEmployee = true;
                break;
            }
            if (form[i].value === "Pickup" || form[i].value === "Delivery" || form[i].value === "Collection"){
                isVisitor = true;
                break;
            }


            break;
        }
    }


    if (temp.value === '' || completeName.value === '' || presentAddress.value === '' || mobileNum.value === '') {
        temp.className += ' is-invalid';
        completeName.className += ' is-invalid';
        presentAddress.className += ' is-invalid';
        mobileNum.className += ' is-invalid';
        document.getElementById('error-message').innerHTML = `   
        <div class="alert alert-warning alert-danger fade show" role="alert">
        <strong>Please!</strong> Fill up the required fields
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>`
        valid = false;
    } 
 
        if(!isChecked) {
            alert("Please select one 'NATURE OF VISIT'");
            valid = false;
        }

        if(isEmployee){
            if(internal !== undefined){
                // console.log(internal)
            }
             else {
                    valid = false;
                    alert('Please indicate what company are you in')
                }
            
        }

        if(isVisitor){
            if(companyName.value === '' || companyAddress.value === ''){
                valid = false;
                alert('Please indicate your company name & address');
            }
           
        }


    return valid;


   
}


