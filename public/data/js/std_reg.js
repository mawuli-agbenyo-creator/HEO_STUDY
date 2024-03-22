// const form = document.querySelector("form"),
//         nextBtn = form.querySelector(".nextBtn"),
//         backBtn = form.querySelector(".backBtn"),
//         allInput = form.querySelectorAll(".first input");


// nextBtn.addEventListener("click", ()=> {
//     allInput.forEach(input => {
//         if(input.value != ""){
//             form.classList.add('secActive');
//         }else{
//             form.classList.remove('secActive');
//         }
//     })
// })

// backBtn.addEventListener("click", () => form.classList.remove('secActive'));



// const form = document.querySelector("form"),
//     nextBtn = form.querySelector(".nextBtn"),
//     backBtn = form.querySelector(".backBtn"),
//     submitBtn = form.querySelector(".submit"),
//     allInput = form.querySelectorAll(".first input");

// nextBtn.addEventListener("click", () => {
//     allInput.forEach((input) => {
//         if (input.value !== "") {
//             form.classList.add('secActive');
//         } else {
//             form.classList.remove('secActive');
//         }
//     });
// });

// backBtn.addEventListener("click", () => {
//     form.classList.remove('secActive');
// });

// submitBtn.addEventListener("click", () => {
//     form.submit(); // This triggers the form submission
// });


const form = document.querySelector("form"),
    nextBtn = form.querySelector(".nextBtn"),
    backBtn = form.querySelector(".backBtn"),
    submitBtn = form.querySelector(".submit"),
    allInput = form.querySelectorAll(".first input");

nextBtn.addEventListener("click", () => {
    allInput.forEach((input) => {
        if (input.value !== "") {
            form.classList.add('secActive');
        } else {
            form.classList.remove('secActive');
        }
    });
});

backBtn.addEventListener("click", () => {
    form.classList.remove('secActive');
});

submitBtn.addEventListener("click", async () => {
    // Perform any additional logic before form submission if needed

    // Get the CSRF token from the meta tag
    const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

    // This triggers the form submission
    const response = await fetch('{{route("reg_submit")}}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken,
        },
        body: JSON.stringify(Object.fromEntries(new FormData(form))),
    });

    if (response.ok) {
        // Form submission was successful
        const responseData = await response.json();
        console.log('Success:', responseData);

        // Redirect after successful form submission
        window.location.href = '/your-redirect-url';
    } else {
        // Form submission failed
        console.error('Error:', response.statusText);
    }
});




function openModal(clickedRow) {
    // Get the data attributes from the clicked row
    console.log('hi');
    const name = clickedRow.getAttribute('data-name');
    const email = clickedRow.getAttribute('data-email');

    // Set the modal content based on the clicked row's data
    document.getElementById('modalName').value = name;
    document.getElementById('modalEmail').value = email;

    // Open the modal
    document.getElementById('userModal').classList.add('modal-active');
}