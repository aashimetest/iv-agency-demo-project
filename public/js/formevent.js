let form = document.getElementById('contact-form');
let submitBtn = document.getElementById('submit-btn');

submitBtn.addEventListener('click', (e) => {
  e.preventDefault();
  
  let name = document.getElementById('name').value;
  let email = document.getElementById('email').value;
  let phone = document.getElementById('phone').value;
  let subject = document.getElementById('subject').selectedOptions[0].value;
  let message = document.getElementById('message').value;
  
  axios.post('/contact/submit', {
    name: name,
    email: email,
    phone: phone,
    subject: subject,
    message: message
  })
  .then(response => {
    if (response && response.data && response.data.success) {
        console.log(response.data.message);
        form.reset();
        document.getElementById('response-message').innerHTML = response.data.message;
        document.querySelectorAll('.invalid-feedback').forEach(e => e.innerHTML = '');
        alert('hello world');
    } else if (response && response.data && response.data.errors) {
        let errors = response.data.errors;
        Object.keys(errors).forEach(key => {
            let element = document.getElementById(key);
            let errorElement = element.nextElementSibling;
            errorElement.innerHTML = errors[key][0];
        });
        // form.reset();
    } else {
        console.log('Unexpected server response:', response.data);
    }
  })
  .catch(error => console.log(error));
});