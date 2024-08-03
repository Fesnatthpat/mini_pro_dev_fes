<?php
session_start();
require_once 'config/db.php';

try {
    $stmt = $pdo->prepare("SELECT * FROM subject_group");
    $stmt->execute();
    $subjects = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

if (!isset($_SESSION['admin_login'])) {
    $_SESSION['error'] = 'คุณไม่มีสิทธิ์เข้าถึงหน้านี้';
    header("location: index.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลกลุ่มวิชา</title>
    <link rel="stylesheet" href="data-subject.css">
</head>

<body>

    <div class="container">
        <h1>ข้อมูลกลุ่มวิชา</h1>

        <form action="add_data_subject_db.php" method="POST" class="form-group">
            <label for="subject-group">กลุ่มวิชา</label>
            <input type="text" name="subject_group_name">
            <button type="submit" name="add_subject">บันทึกข้อมูล</button>
        </form>

        <?php if (isset($_SESSION['error'])) { ?>
            <div class="alert-danger" role="alert">
                <?php
                echo $_SESSION['error'];
                unset($_SESSION['error']);
                ?>
            </div>
        <?php } ?>
        <?php if (isset($_SESSION['success'])) { ?>
            <div class="alert-success" role="alert">
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </div>
        <?php } ?>

        <table>
            <thead>
                <tr>
                    <th>กลุ่มวิชา</th>
                    <th>การจัดการ</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($subjects as $subject) { ?>
                    <tr>
                        <td><?php echo htmlspecialchars($subject['subj_group_name']); ?></td>
                        <td>
                            <a href="#">Edit</a> | 
                            <a href="#">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>
