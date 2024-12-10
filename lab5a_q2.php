<!DOCTYPE html>
<html lang="en" dir="ltr">
  <body>
    <?php
      $student = [
        [
          'name' => 'YUVANESH',
          'program' => 'BIW',
          'age' => 22
        ],
        [
          'name' => 'VIKNESWARAN',
          'program' => 'BBZ',
          'age' => 22
        ],
        [
          'name' => 'KAVITHIVAN',
          'program' => 'BIP',
          'age' => 23
        ]
      ];
     ?>
     <table>
       <thead>
         <tr>
           <th>Name</th>
           <th>Program</th>
           <th>Age</th>
         </tr>
       </thead>
       <tbody>
         <?php foreach ($student as $students): ?>
           <tr>
             <td><?= htmlspecialchars($students['name']) ?></td>
             <td><?= htmlspecialchars($students['program']) ?></td>
             <td><?= htmlspecialchars($students['age']) ?></td>
           </tr>
         <?php endforeach; ?>
       </tbody>
     </table>
  </body>
</html>
