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

$sqll = "SELECT signup.id, signup.student_id,signup.name,signup.gender,signup.address,signup.course,signup.phone,signup.email,signup.room_no FROM signup WHERE status = 'approved' $srch";
$qr1 = mysqli_query($conn, $sqll) or die(mysqli_error($conn));
$numrow = mysqli_num_rows($qr1);
$output = "";

if ($numrow > 0) {
    while ($row = mysqli_fetch_array($qr1)) {
        $output .='<tr class="border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">'.$row['student_id'].'</th>
                                <td class="px-4 py-3">' . $row['name'] . '</td>
                                <td class="px-4 py-3">' . $row['gender'] . '</td>
                                <td class="px-4 py-3">' . $row['address'] . '</td>
                                <td class="px-4 py-3">' . $row['course'] . '</td>
                                <td class="px-4 py-3">' . $row['email'] . '</td>
                                <td class="px-4 py-3">' . $row['phone'] . '</td>
                                <td class="px-4 py-3">' . $row['room_no'] . '</td>
                               
                            </tr>';

    }
    echo $output;

}else {
    echo '<tr>no record found</tr>';
}


?>


<!-- // <td class="px-4 py-3 flex items-center justify-end">
                                //     <button id="apple-imac-27-dropdown-button"
                                //         data-dropdown-toggle="apple-imac-27-dropdown"
                                //         class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                                //         type="button">
                                //         <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                //             xmlns="http://www.w3.org/2000/svg">
                                //             <path
                                //                 d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                //         </svg>
                                //     </button>
                                //     <div id="apple-imac-27-dropdown"
                                //         class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                //         <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                //             aria-labelledby="apple-imac-27-dropdown-button">
                                //             <li>
                                //                 <a href="#"
                                //                     class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                //             </li>
                                //             <li>
                                //                 <a href="#"
                                //                     class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                //             </li>
                                //         </ul>
                                //         <div class="py-1">
                                //             <a href="#"
                                //                 class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                //         </div>
                                //     </div>
                                // </td> -->