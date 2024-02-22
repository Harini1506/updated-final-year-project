// Validate form input on submit
document.getElementById("registrationForm").addEventListener("submit", function(event) {
  // Get form elements
  var companyName = document.getElementById("companyName");
  var contactName = document.getElementById("contactName");
  var companyAddress = document.getElementById("companyAddress");
  var companyWebsite = document.getElementById("companyWebsite");
  var jobPosition = document.getElementById("jobPosition");
  var description = document.getElementById("description");
  var interviewPreferences = document.getElementById("interviewPreferences");
  var eligibility = document.getElementById("eligibility");

  // Check if form elements are empty
  if (companyName.value === "" || contactName.value === "" || companyAddress.value === "" || companyWebsite.value === "" || jobPosition.value === "" || description.value === "" || interviewPreferences.value === "" || eligibility.value === "") {
    // If form elements are empty, prevent form submission and show error message
    event.preventDefault();
    alert("Please fill in all form fields.");
  }
});