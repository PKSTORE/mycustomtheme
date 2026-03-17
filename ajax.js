// index code 
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

document.getElementById("contactForm").addEventListener("submit", function (e) {
  e.preventDefault();

  let formData = new FormData(this);

  fetch("/wp-admin/admin-ajax.php", {
    method: "POST",
    body: formData,
  })
    .then((res) => res.json())
    .then((data) => {
      if (data.success) {
        alert("Message sent successfully!");
        document.getElementById("contactForm").reset();
      } else {
        alert(data.message);
      }
    })
    .catch((err) => {
      alert("Something went wrong!");
    });
});