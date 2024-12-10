<!DOCTYPE html>
<html lang="en" dir="ltr">
  <body>
    <?php
      $name = "YUVANESH A/L SHANMUGAM";
      $matric = "CI230123";
      $course = "Bachelor In Web Technology";
      $yearOfStudy = "2nd Year";
      $address = "NO. 193, JALAN ANGGERIK 2, TAMAN AMAN, 28700 BENTONG, PAHANG";
     ?>

    <table>
      <tr>
        <td>Name : </td>
        <td><?php echo "$name"; ?></td>
      </tr>
      <tr>
        <td>Matric Number : </td>
        <td><?php echo "$matric"; ?></td>
      </tr>
      <tr>
        <td>Course : </td>
        <td><?php echo "$course"; ?></td>
      </tr>
      <tr>
        <td>Year Of Study : </td>
        <td><?php echo "$yearOfStudy"; ?></td>
      </tr>
      <tr>
        <td>Address : </td>
        <td><?php echo "$address"; ?></td>
      </tr>
    </table>
  </body>
</html>
