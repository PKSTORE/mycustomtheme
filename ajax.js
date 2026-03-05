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
