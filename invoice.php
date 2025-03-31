<?php

  include('./studentauth.php');
  $datenow = date('d-m-Y');

  $email = $row['email'];
  $sqll = "SELECT signup.student_id, signup.room_no FROM signup WHERE email = '$email'";
  $qri = mysqli_query($conn,$sqll) or die(mysqli_error($conn));
  $row1 = mysqli_fetch_array($qri);

?>


<div class="page-container">
  Page
  <span class="page"></span>
  of
  <span class="pages"></span>
</div>

<div class="logo-container">
  <h1>NIT Hostel.</h1>
</div>

<table class="invoice-info-container">
  <tr>
    <td rowspan="2" class="client-name">
      <?php
        echo $row['name']
      ?>
    </td>
    <td>
      <!-- Anvil Co -->
    </td>
  </tr>
  <tr>
    <td>
      <!-- 123 Main Street -->
    </td>
  </tr>
  <tr>
    <td>
      Confirmation Date: <strong><?php
        echo $datenow
      ?></strong>
    </td>
    <td>
      <!-- San Francisco CA, 94103 -->
    </td>
  </tr>
  <tr>
    <td>
      Student ID: <strong><?php
        echo $row1['student_id']
      ?></strong>
    </td>
    <td>
    </td>
  </tr>
</table>




<h4>Subject: Confirmation of Room Allotment – NIT Hostel</h4>

<p>We are pleased to inform you that a room has been successfully allotted to you at NIT Hostel. We are thrilled to welcome you as part of our hostel community and are committed to making your stay comfortable and enriching.
<br>
<br>
  <b>Room Details:
<br>
  Hostel Name: NIT Hostel
  <br>
  Room Number: <?php
        echo $row1['room_no']
      ?>
  </b>
  <br>
  <br>
  We look forward to welcoming you and wish you a successful and enjoyable time here.
  
  <br>
  <br>
  <b>Hostel Administration</b>
  <br>
  <b>NIT Hostel</b>
</p>

<!-- <table class="line-items-container has-bottom-border">
  <thead>
    <tr>
      <th>Payment Info</th>
      <th>Due By</th>
      <th>Total Due</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="payment-info">
        <div>
          Account No: <strong>123567744</strong>
        </div>
        <div>
          Routing No: <strong>120000547</strong>
        </div>
      </td>
      <td class="large">May 30th, 2024</td>
      <td class="large total">$105.00</td>
    </tr>
  </tbody>
</table> -->


