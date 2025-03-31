<?php

    include('./studentauth.php');


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>


    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" type="text/css">

    <style>
        .nav {
            height: 8vh;
        }

        .section {
            height: 92vh;
        }
    </style>
</head>

<body>
    <nav class="nav border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Welcome
                    <?php echo $row['name'] ?></span>
            </a>
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-10 h-10 rounded-full" src="<?php echo $row['img_path'] ?>" alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white"><?php echo $row['name'] ?></span>
                        <span
                            class="block text-sm  text-gray-500 truncate dark:text-gray-400"><?php echo $row['email'] ?></span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="logout.php"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                out</a>
                        </li>
                    </ul>
                </div>

                <button data-collapse-toggle="navbar-user" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>

            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

                    <!-- Modal toggle -->
                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                        class="block text-white text-2xl hover:text-blue-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center   "
                        type="button">
                        Feedback
                    </button>

                    <!-- Main modal -->
                    <div id="crud-modal" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        Feedback
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-toggle="crud-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <!-- my work -->
                                <form class="p-4 md:p-5" id="myForm" action="student_dashboard_check.php" method="POST">
                                    <div class="grid gap-4 mb-4 grid-cols-2">


                                        <div class="col-span-2">
                                            <input type="hidden" name="email" value="<?php echo $row['email'] ?>">
                                            <textarea id="description" rows="4" name="content"
                                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Write product experience here"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" name="submit"
                                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Submit
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>



                </ul>
            </div>


        </div>
    </nav>



    <section
        class="flex-col items-center justify-center section bg-white py-8 antialiased dark:bg-gray-900 md:py-16 flex justify-centern items-center">
        <div class="flex-col items-center justify-center mx-auto max-w-screen-xl px-4 lg:px-12">

                <?php
                $email = $row['email'];
                $sqll = "SELECT signup.dttm FROM signup WHERE email = '$email'";
                $result2 = mysqli_query($conn, $sqll);
                $row2 = mysqli_fetch_assoc($result2);


                echo '<ol class="items-center  sm:flex justify-between">
                <li class="relative w-72 mb-6 sm:mb-0">
                    <div class="flex items-center">
                        <div
                            class="z-10 flex items-center justify-center w-10 h-10 bg-green-600 rounded-full ring-0 ring-white dark:bg-green-600 sm:ring-8 dark:ring-gray-900 shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="25px" height="25px">
                                <path
                                    d="M 13 4 C 8.0414839 4 4 8.0414839 4 13 L 4 37 C 4 41.958516 8.0414839 46 13 46 L 37 46 C 41.958516 46 46 41.958516 46 37 L 46 13 C 46 8.0414839 41.958516 4 37 4 L 13 4 z M 13 6 L 37 6 C 38.131143 6 39.194802 6.2714581 40.138672 6.7441406 L 38.337891 9.6816406 L 38.337891 11.095703 C 39.348926 12.009139 42.125484 13.812936 44 14.589844 L 44 16.466797 C 42.471626 15.945496 39.59128 14.509475 37.654297 12.734375 C 36.571516 14.552087 34.743335 17.668472 33.019531 21 L 14 21 A 1.0001 1.0001 0 1 0 14 23 L 32.033203 23 C 31.369019 24.359903 30.742002 25.709888 30.222656 27 L 14 27 A 1.0001 1.0001 0 1 0 14 29 L 29.478516 29 C 28.907632 30.721475 28.604596 32.219208 28.740234 33.28125 L 28.648438 33.464844 C 27.949799 34.46645 26.135501 34.982551 25.009766 34.988281 C 24.027967 34.992981 23.571673 34.668783 22.904297 34.1875 C 22.236921 33.706217 21.333333 33 20 33 C 18.666667 33 17.768418 33.672995 16.986328 34.142578 C 16.204238 34.612161 15.46928 35 14 35 A 1.0001 1.0001 0 1 0 14 37 C 15.86872 37 17.132215 36.387839 18.015625 35.857422 C 18.899035 35.327005 19.333333 35 20 35 C 20.666667 35 21.019251 35.29483 21.734375 35.810547 C 22.449499 36.326264 23.50333 36.995565 25.019531 36.988281 C 25.792806 36.984355 26.743552 36.863238 27.667969 36.533203 A 1.0001165 1.0001165 0 0 0 29.400391 36.435547 L 30.279297 34.675781 C 34.043084 33.54361 43.099827 18.649383 44 17.158203 L 44 37 C 44 40.877484 40.877484 44 37 44 L 13 44 C 9.1225161 44 6 40.877484 6 37 L 6 13 C 6 9.1225161 9.1225161 6 13 6 z M 14 15 A 1.0001 1.0001 0 1 0 14 17 L 32 17 A 1.0001 1.0001 0 1 0 32 15 L 14 15 z" />
                            </svg>
                        </div>
                        <div class="hidden sm:flex w-full bg-green-400 h-0.5 dark:bg-green-400"></div>
                    </div>
                    <div class="mt-3 sm:pe-8">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Register Done</h3>
                        <time
                            class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">'.$row2['dttm'].'</time>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">'.$row['email'].'
                        </p>
                    </div>
                </li>';
                
                $sql2 = " SELECT * FROM signup WHERE email = '$email' and status = 'approved' ";
                $result1 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
                $row1 = mysqli_fetch_array($result1);

                if ($row1) {
                    echo ' 
                    <li class="relative w-72 mb-6 sm:mb-0">
                    <div class="flex items-center">
                        <div
                            class="z-10 flex items-center justify-center w-10 h-10 bg-yellow-600 rounded-full ring-0 ring-white dark:bg-green-600 sm:ring-8 dark:ring-gray-900 shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25"
                                viewBox="0 0 50 50">
                                <path
                                    d="M 11 4 C 7.101563 4 4 7.101563 4 11 L 4 39 C 4 42.898438 7.101563 46 11 46 L 39 46 C 42.898438 46 46 42.898438 46 39 L 46 15 L 44 17.3125 L 44 39 C 44 41.800781 41.800781 44 39 44 L 11 44 C 8.199219 44 6 41.800781 6 39 L 6 11 C 6 8.199219 8.199219 6 11 6 L 37.40625 6 L 39 4 Z M 43.25 7.75 L 23.90625 30.5625 L 15.78125 22.96875 L 14.40625 24.4375 L 23.3125 32.71875 L 24.09375 33.4375 L 24.75 32.65625 L 44.75 9.03125 Z">
                                </path>
                            </svg>
                        </div>
                        <div class="hidden sm:flex w-full bg-yellow-400 h-0.5 dark:bg-green-400"></div>
                    </div>
                    <div class="mt-3  sm:pe-8">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Approved</h3>
                        <time
                            class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Successfull</time>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">' . $row1['name'] . '</p>
                    </div>
                </li>
                
                <li class="relative w-72 mb-6 sm:mb-0">
                    <div class="flex items-center">
                        <div
                            class="z-10 flex items-center justify-center w-10 h-10 bg-yellow-600 rounded-full ring-0 ring-white dark:bg-green-600 sm:ring-8 dark:ring-gray-900 shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25"
                                viewBox="0 0 50 50">
                                <path
                                    d="M 24.962891 1.0546875 A 1.0001 1.0001 0 0 0 24.384766 1.2636719 L 1.3847656 19.210938 A 1.0005659 1.0005659 0 0 0 2.6152344 20.789062 L 4 19.708984 L 4 46 A 1.0001 1.0001 0 0 0 5 47 L 18.832031 47 A 1.0001 1.0001 0 0 0 19.158203 47 L 30.832031 47 A 1.0001 1.0001 0 0 0 31.158203 47 L 45 47 A 1.0001 1.0001 0 0 0 46 46 L 46 19.708984 L 47.384766 20.789062 A 1.0005657 1.0005657 0 1 0 48.615234 19.210938 L 41 13.269531 L 41 6 L 35 6 L 35 8.5859375 L 25.615234 1.2636719 A 1.0001 1.0001 0 0 0 24.962891 1.0546875 z M 25 3.3222656 L 44 18.148438 L 44 45 L 32 45 L 32 26 L 18 26 L 18 45 L 6 45 L 6 18.148438 L 25 3.3222656 z M 37 8 L 39 8 L 39 11.708984 L 37 10.146484 L 37 8 z M 20 28 L 30 28 L 30 45 L 20 45 L 20 28 z">
                                </path>
                            </svg>
                        </div>
                        <div class="hidden sm:flex w-full bg-yellow-400 h-0.5 dark:bg-green-400"></div>
                    </div>
                    <div class="mt-3 sm:pe-8">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Room Details</h3>
                        <time
                            class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Welcome to NIT Hostel.</time>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Room no: ' . $row1['room_no'] . '</p>
                    </div>

                </li>
                </ol>
                    </div>
                      
                    <a href="indexinvoice.php" onclick=fire("' .$row1['email'].'") class="mt-5 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Download Confirmation</a >';
                } else {
                    echo ' 
                    <li class="relative w-72 mb-6 sm:mb-0">
                    <div class="flex items-center">
                        <div
                            class="z-10 flex items-center justify-center w-10 h-10 bg-yellow-600 rounded-full ring-0 ring-white dark:bg-yellow-600 sm:ring-8 dark:ring-gray-900 shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25"
                                viewBox="0 0 50 50">
                                <path
                                    d="M 11 4 C 7.101563 4 4 7.101563 4 11 L 4 39 C 4 42.898438 7.101563 46 11 46 L 39 46 C 42.898438 46 46 42.898438 46 39 L 46 15 L 44 17.3125 L 44 39 C 44 41.800781 41.800781 44 39 44 L 11 44 C 8.199219 44 6 41.800781 6 39 L 6 11 C 6 8.199219 8.199219 6 11 6 L 37.40625 6 L 39 4 Z M 43.25 7.75 L 23.90625 30.5625 L 15.78125 22.96875 L 14.40625 24.4375 L 23.3125 32.71875 L 24.09375 33.4375 L 24.75 32.65625 L 44.75 9.03125 Z">
                                </path>
                            </svg>
                        </div>
                        <div class="hidden sm:flex w-full bg-yellow-400 h-0.5 dark:bg-yellow-400"></div>
                    </div>
                    <div class="mt-3  sm:pe-8">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">To be aproved</h3>
                        <time
                            class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500"></time>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">pending</p>
                    </div>
                </li>
                
                <li class="relative w-72 mb-6 sm:mb-0">
                    <div class="flex items-center">
                        <div
                            class="z-10 flex items-center justify-center w-10 h-10 bg-yellow-600 rounded-full ring-0 ring-white dark:bg-yellow-600 sm:ring-8 dark:ring-gray-900 shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25"
                                viewBox="0 0 50 50">
                                <path
                                    d="M 24.962891 1.0546875 A 1.0001 1.0001 0 0 0 24.384766 1.2636719 L 1.3847656 19.210938 A 1.0005659 1.0005659 0 0 0 2.6152344 20.789062 L 4 19.708984 L 4 46 A 1.0001 1.0001 0 0 0 5 47 L 18.832031 47 A 1.0001 1.0001 0 0 0 19.158203 47 L 30.832031 47 A 1.0001 1.0001 0 0 0 31.158203 47 L 45 47 A 1.0001 1.0001 0 0 0 46 46 L 46 19.708984 L 47.384766 20.789062 A 1.0005657 1.0005657 0 1 0 48.615234 19.210938 L 41 13.269531 L 41 6 L 35 6 L 35 8.5859375 L 25.615234 1.2636719 A 1.0001 1.0001 0 0 0 24.962891 1.0546875 z M 25 3.3222656 L 44 18.148438 L 44 45 L 32 45 L 32 26 L 18 26 L 18 45 L 6 45 L 6 18.148438 L 25 3.3222656 z M 37 8 L 39 8 L 39 11.708984 L 37 10.146484 L 37 8 z M 20 28 L 30 28 L 30 45 L 20 45 L 20 28 z">
                                </path>
                            </svg>
                        </div>
                        <div class="hidden sm:flex w-full bg-yellow-400 h-0.5 dark:bg-yellow-400"></div>
                    </div>
                    <div class="mt-3 sm:pe-8">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Room Details</h3>
                        <time
                            class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500"></time>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">pending</p>
                    </div>

                    </li>
                    </ol>
                    </div>';

                }
                ?>

                


    </section>




    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>
    <script src="jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <script>
        function fire(email) {

            // formData.append('_s', st);
            //Update Status
            $.ajax({
                type: "POST",
                url: "indexinvoice.php",
                data: { email: email },
                success: function (response) {
                    //data000 == json response

                },
                error: function () {
                    alert('An error occurred while processing your request.');
                }
            });

        }

    </script>
</body>

</html>