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

$sql = "SELECT signup.student_id,signup.name,signup.gender,signup.address,signup.course,signup.phone,signup.email, feedback.content FROM signup 
        JOIN feedback ON signup.email = feedback.email WHERE 1=1 $srch";

$qr1 = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$numrow = mysqli_num_rows($qr1);
$output = "";

if ($numrow > 0) {
    while ($row = mysqli_fetch_array($qr1)) {
        $output .=' <tr class="border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    ' . $row['student_id'] . '
                                </th>
                                <td class="px-4 py-3">' . $row['name'] . '</td>
                                <td class="px-4 py-3">' . $row['gender'] . '</td>
                                <td class="px-4 py-3">' . $row['address'] . '</td>
                                <td class="px-4 py-3">' . $row['course'] . '</td>
                                <td class="px-4 py-3">' . $row['email'] . '</td>
                                <td class="px-4 py-3">' . $row['phone'] . '</td>
                                <td class="px-4 py-3 ">

                                    <!-- Modal toggle -->
                                   ' . $row['content'] . '
                                </td>
                            </tr>';

    }
    echo $output;

}else {
    echo '<tr>no record found</tr>';
}


?>