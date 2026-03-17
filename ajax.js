// indexe.php code
document.getElementById("enquiryForm").addEventListener("submit", function (e) {
  e.preventDefault();

  let formData = new FormData(this);

  fetch(rr_ajax.ajax_url + "?action=save_enquiry", {
    method: "POST",
    body: formData,
  })
    .then((res) => res.json())
    .then((data) => {
      document.getElementById("formMessage").innerText =
        "Thanks for submission. Our team will contact you soon.";

      document.getElementById("enquiryForm").reset();
    });
});
document.getElementById("sing_up").addEventListener("submit", function (e) {
  let checkbox = document.getElementById("agreeTerms");

  if (!checkbox.checked) {
    e.preventDefault();
    alert(
      "Please accept the Privacy Policy and Terms of Service before submitting.",
    );
  }
});

// Contact form 
document.getElementById("contactForm").addEventListener("submit", function (e) {
  e.preventDefault();

  let name = document.getElementById("name").value.trim();
  let phone = document.getElementById("phone").value.trim();
  let email = document.getElementById("email").value.trim();
  let message = document.getElementById("message").value.trim();

  if (!name || !phone || !email || !message) {
    alert("All fields are required!");
    return;
  }

  let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
  if (!email.match(emailPattern)) {
    alert("Invalid email!");
    return;
  }

  let formData = new FormData();
  formData.append("action", "handle_contact_form");
  formData.append("name", name);
  formData.append("phone", phone);
  formData.append("email", email);
  formData.append("message", message);

  fetch(ajax_object.ajax_url, {
    method: "POST",
    body: formData,
  })
    .then((res) => res.text())
    .then((data) => {
      document.getElementById("responseMsg").innerText = data;
    })
    .catch((err) => console.log(err));
});