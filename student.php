<?php
    include('multiple_array.php')
?>
<!DOCTYPE html>
<html lang="eng">
<head>Student</head>
<body>
    <table border="2">
    <thead>
    <th>№</th>
    <th>FIO</th>
    <th>Guruh</th>
    <th>Yoshi</th>
    <th>Yosh Farqi</th>    
    </thead>
    <tbody>
        <!-- <?php foreach($studets as $key => $studet) { ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $studet['fio']; ?></td>
                <td><?php echo $studet['group']; ?></td>
                <td><?php echo $studet['age']; ?></td>
               <td>
                <?php if($studet['age'] <= 18): ?>
                   Yosh
                <?php elseif($studet['age'] <= 20): ?>
                    Yoshroq
                <?php else: ?>
                    O'rta
               </td>
                </tr>
                <?php endif; ?>
            <?php } ?> -->
            <!-- <?php foreach($studets as $key => $studet): ?>
                <tr>-
                <td><?= ++$key ?></td>    
                <td><?= $studet['fio'] ?></td>
                <td><?= $studet['group'] ?></td>
                <td><?= $studet['age'] ?></td>
                <td>
                    <?php if($studet['age'] <= 18): ?>
                        Yosh
                    <?php elseif($studet['age'] <= 20): ?>
                        Yoshroq
                    <?php else: ?>
                        O'rta
                </td>    
            </tr>
                    <?php endif; ?>
            <?php endforeach; ?>
    </tbody> -->
</table>
</body>
</html>