<?php
include('./config/congig.php');

$srch = '';
$scr_data = '';

if (isset($_POST['inputvalue'])) {
    $scr_data = $_POST['inputvalue'];
    $srch .= " AND name like '%$scr_data%'";
}

if (isset($_POST["selectedValue"]) && $_POST["selectedValue"] != "") {
    $course = $_POST['selectedValue'];
    $srch .= "AND course = '$course'";
}

$sqll = "SELECT signup.id, signup.student_id,signup.name,signup.gender,signup.address,signup.course,signup.phone,signup.email FROM signup WHERE status = '0' $srch";
$qr1 = mysqli_query($conn, $sqll) or die(mysqli_error($conn));
$numrow = mysqli_num_rows($qr1);
$output = "";
if ($numrow > 0) {
    while ($row = mysqli_fetch_array($qr1)) {
        //echo '<pre>';
        //print_r($row); 
        $output .= '<tr class="border-b dark:border-gray-700">
        <th scope="row"
        class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">' . $row['student_id'] . '</th>
        <td>' . $row['name'] . '</td>
        <td>' . $row['gender'] . '</td>
        <td>' . $row['address'] . '</td>
        <td>' . $row['course'] . '</td>
        <td>' . $row['email'] . '</td>
        <td>' . $row['phone'] . '</td>
        <td class="px-4 py-3 ">

        <!-- Modal toggle -->
        <button id="myButton" data-modal-target="static-modal' . $numrow. '" data-modal-toggle="static-modal' . $numrow. '"
            class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
            type="button" data-value="'.$row['email'].'"  >
            Accept
        </button>

        <button type="button" onclick=app_rej("'.$row['email'].'")
            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">cancel</button>



        <!-- Main modal -->
        <div id="static-modal' . $numrow. '" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div
                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Select Room
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="static-modal' . $numrow. '">
                            <svg class="w-3 h-3" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>

                    <form id="roomSelectionForm" action="approve.php" method="POST">
                    
                    <!-- Modal body -->
                    <input id="myInput" type="hidden" name="email" value=""> 
                    <div class="p-4 md:p-5 flex-wrap">

                        <div
                            class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="bordered-radio-1" type="radio" value="101"
                                name="bordered-radio"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bordered-radio-1"
                                class=" py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">101</label>
                        </div>
                        <div
                            class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                            <input checked id="bordered-radio-2" type="radio" value="101"
                                name="bordered-radio"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bordered-radio-2"
                                class=" py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">102</label>
                        </div>
                        <div
                            class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="bordered-radio-3" type="radio" value="103"
                                name="bordered-radio"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bordered-radio-3"
                                class=" py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">103</label>
                        </div>
                        <div
                            class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                            <input checked id="bordered-radio-4" type="radio" value="104"
                                name="bordered-radio"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bordered-radio-4"
                                class=" py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">104</label>
                        </div>
                        <div
                            class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                            <input id="bordered-radio-5" type="radio" value="105"
                                name="bordered-radio"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bordered-radio-5"
                                class=" py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">105</label>
                        </div>
                        <div
                            class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                            <input checked id="bordered-radio-6" type="radio" value="106"
                                name="bordered-radio"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bordered-radio-6"
                                class=" py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">106</label>
                        </div>


                    </div>
                    <!-- Modal footer -->
                    <div
                        class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="static-modal' . $numrow. '" type="submit" 
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">submit</button>
                        <button data-modal-hide="static-modal' . $numrow. '" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Back</button>
                    </div>

                  </form>
                </div>

            </div>
        </div>
    

    </td>
        </tr>
        
        ';
    }
    echo $output;
} else {
    echo '<tr>no record found</tr>';
}

?>