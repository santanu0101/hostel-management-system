<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    .section {
      height: 150vh;
    }
  </style>

  <title>Register</title>
</head>

<body class="">
  <section class="section flex flex-col items-center justify-center bg-gray-50 dark:bg-gray-900">
    <div class="h-auto flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <a href="#" class="flex items-center mb-6 text-4xl font-semibold text-gray-900 dark:text-white">
        NIT Hostels.
      </a>
      <div
        class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
          <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
            Create an account
          </h1>

          <form class="max-w-md mx-auto" id="myForm" action="" method="post" enctype="multipart/form-data">
            <!-- Student Name  -->
            <div class="grid md:grid-cols-2 md:gap-6">
              <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="floating_first_name" id="floating_first_name"
                  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                  placeholder=" " required />
                <label for="floating_first_name"
                  class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First
                  name</label>
              </div>

              <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="floating_last_name" id="floating_last_name"
                  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                  placeholder=" " required />
                <label for="floating_last_name"
                  class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last
                  name</label>
              </div>
            </div>

            <!-- Email -->
            <div class="relative z-0 w-full mb-5 group mt-2">
              <input type="email" name="floating_email" id="floating_email"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required />
              <label for="floating_email"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email
                address</label>
            </div>

            <!-- Number -->
            <div class="relative z-0 w-full mb-5 group">
              <input type="number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " />
              <label for="floating_phone"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone
                number</label>
            </div>

            <div class="relative z-0 w-full mb-5 group mt-2">
              <h3 class="mb-4 text-gray-900 dark:text-gray-400">Gender</h3>
              <ul
                class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                  <div class="flex items-center ps-3">
                    <input id="horizontal-list-radio-license" type="radio" value="Male" name="list-radio"
                      class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                    <label for="horizontal-list-radio-license"
                      class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Male</label>
                  </div>
                </li>
                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                  <div class="flex items-center ps-3">
                    <input id="horizontal-list-radio-id" type="radio" value="Female" name="list-radio"
                      class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                    <label for="horizontal-list-radio-id"
                      class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Female</label>
                  </div>
                </li>
              </ul>
            </div>

            <!-- Address -->
            <div class="relative z-0 w-full mb-5 group">
              <input type="text" name="address" id="address"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required />
              <label for="address"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                Address</label>
            </div>

            <!-- cources -->

            <div class="relative z-0 w-full mb-5 group">
              <label for="underline_select" class="sr-only">Underline select</label>
              <select id="underline_select" name="course"
                class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-400 appearance-none dark:text-gray-400 dark:border-gray-600 focus:outline-none focus:ring-0 dark:focus:border-blue-500 focus:border-gray-300">
                <option selected class="text-gray-900">
                  Choose a course
                </option>
                <option value="B.Tech CSE" class="text-gray-900">
                  B.Tech CSE
                </option>
                <option value="B.Tech ECE" class="text-gray-900">
                  B.Tech ECE
                </option>
                <option value="B.Tech EIE" class="text-gray-900">
                  B.Tech EIE
                </option>
                <option value="B.Tech AIML" class="text-gray-900">
                  B.Tech AIML
                </option>
                <option value="B.Tech CSBS" class="text-gray-900">
                  B.Tech CSBS
                </option>
                <option value="BCA" class="text-gray-900">BCA</option>
                <option value="M.Tech " class="text-gray-900">M.Tech</option>
                <option value="MCA" class="text-gray-900">MCA</option>
              </select>
            </div>

            <div class="relative z-0 w-full mb-5 group">
              <input type="password" name="floating_password" id="floating_password"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required />
              <label for="floating_password"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
            </div>

            <div class="relative z-0 w-full mb-5 group">
              <input type="password" name="repeat_password" id="floating_repeat_password"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required />
              <label for="floating_repeat_password"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Confirm
                password</label>
            </div>



            <div class="mb-5 flex items-center justify-center w-full">
              <label for="dropzone-file"
                class="flex flex-col items-center justify-center w-full h-20 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                  <svg class="w-8 h-8 text-gray-500 dark:text-gray-400" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                  </svg>
                  <p class="text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span>
                    or drag and drop</p>
                  <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                </div>

                <input id="dropzone-file" class="hidden" type="file" name="filedata" accept="image/png, image/jpeg" />
              </label>
            </div>

            <span id="error-message" style="color: red; display: none;"></span>

            <button type="submit"
              class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              Submit
            </button>
            <a type="button" href="login.php"
              class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Login</a>
          </form>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
  <script src="jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

  <script>


$(document).ready(function () {
  $('#myForm').submit(function (event) {
    event.preventDefault();
    
    // Clear previous error messages
    $('#error-message').hide().text('');

    let isValid = true;
    let errorMessage = '';

    // Validate first name
    const firstName = $('#floating_first_name').val().trim();
    const namePattern = /^[A-Za-z\s]+$/; // Regular expression for alphabets and spaces
    if (firstName === '' || !namePattern.test(firstName)) {
      isValid = false;
      errorMessage += 'First name is required and must contain only letters.\n';
    }

    // Validate last name
    const lastName = $('#floating_last_name').val().trim();
    if (lastName === '' || !namePattern.test(lastName)) {
      isValid = false;
      errorMessage += 'Last name is required and must contain only letters.\n';
    }

    // Validate email
    const email = $('#floating_email').val().trim();
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === '' || !emailPattern.test(email)) {
      isValid = false;
      errorMessage += 'A valid email address is required.\n';
    }

    // Validate phone number
    const phone = $('#floating_phone').val().trim();
    const phonePattern = /^[0-9]{10}$/; // Pattern for exactly 10 digits
    if (phone === '' || !phonePattern.test(phone)) {
      isValid = false;
      errorMessage += 'Phone number must be exactly 10 digits.\n';
    }

    // Validate password
    const password = $('#floating_password').val();
    const confirmPassword = $('#floating_repeat_password').val();
    const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/; // Strong password pattern
    if (password === '' || confirmPassword === '') {
      isValid = false;
      errorMessage += 'Password and confirm password are required.\n';
    } else if (!passwordPattern.test(password)) {
      isValid = false;
      errorMessage += 'Password must be at least 8 characters long, include at least one uppercase letter, one lowercase letter, one number, and one special character.\n\n';
    } else if (password !== confirmPassword) {
      isValid = false;
      errorMessage += 'Passwords do not match.\n';
    }
    
    // Validate address
    if ($('#address').val().trim() === '') {
      isValid = false;
      errorMessage += 'Address is required.\n';
    }

    // Validate course selection
    if ($('#underline_select').val() === 'Choose a course') {
      isValid = false;
      errorMessage += 'Please select a course.\n';
    }

    // Show error messages if validation fails
    if (!isValid) {
      $('#error-message').text(errorMessage).show();
    } else {
      // If valid, proceed with form submission
      const formData = new FormData(document.getElementById("myForm"));
      console.log(formData);

      $.ajax({
        type: "POST",
        url: "signup_check.php",
        data: formData,
        dataType: "json",
        processData: false,
        contentType: false,
        cache: false,
      }).done(function (data) {
        alert(data.message);
        if (data.status == 1) {
          location.reload();
        }
      });
    }
  });
});
    // $(document).ready(function () {
    //   // Add event listener to the submit button
    //   $('#myForm').submit(function (event) {
    //     // Prevent the default form submission
    //     event.preventDefault();

    //     const formData = new FormData(document.getElementById("myForm"));
    //     console.log(formData);

    //     $.ajax({
    //       type: "POST",
    //       url: "signup_check.php",
    //       data: formData,
    //       dataType: "json",
    //       processData: false,
    //       contentType: false,
    //       cache: false,

    //       //in data variable get ta backend response
    //     }).done(function (data) {
    //       //data == json response

    //       //In data variable get a json data
    //       alert(data.message);
    //       if (data.status == 1) {
    //         //Page Reload
    //         location.reload();
    //       }
    //     });

    //   })
    // })
  </script>

</body>

</html>