<?php
session_start();
require_once 'config/db.php';

if (!isset($_SESSION['user_login'])) {
    $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ';
    header("location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <h2 class="text-1">ระบบตารางสอน นักเรียน</h2>
        <nav class="nav-con">
            <!-- <ul class="menu-con">
                <li><a href="teacher.php">ข้อมูลคุณครู</a></li>
                <li><a href="data-student.php">ข้อมูลนักเรียน</a></li>
                <li><a href="data-subject2.php">ข้อมูลรายวิชา</a></li>
                <li><a href="data-classroom.php">ข้อมูลห้องเรียน</a></li>
                <li><a href="Tutorial-Schedule.php">ข้อมูลตารางสอน</a></li>
                <li><a href="data-subject.php">ข้อมูลกลุ่มวิชา</a></li>
                <li><a href="building.php">ข้อมูลอาคารเรียน</a></li>
            </ul> -->
        </nav>

        <div class="profile-container">
            <div class="profile-con1">
                <div class="profile-con2">
                    <div class="profile-img">
                        <img src="https://plus.unsplash.com/premium_photo-1678197937465-bdbc4ed95815?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                        <div class="profile-detail">
                            <?php
                            if (isset($_SESSION['user_login'])) {
                                $user_login = $_SESSION['user_login'];
                            }

                            try {
                                $stmt = $pdo->prepare("SELECT * FROM teacher WHERE t_id = ?");
                                $stmt->execute([$user_login]);
                                $userData = $stmt->fetch(PDO::FETCH_ASSOC);

                                // var_dump($adminData);
                                // var_dump($stmt);
                                // var_dump($admin_login);

                                if ($userData) {
                                    echo "<h3>" . "ชื่อ-นามสกุล: " . htmlspecialchars($userData['fullname']) . "</h3>";
                                    echo "<h3>" . "รหัสประจำตัว: " . htmlspecialchars($userData['t_code']) . "</h3>";
                                    echo "<h3>" . "บทบาท: " . htmlspecialchars($userData['urole']) . "</h3>";
                                } else {
                                    echo "<h3>ไม่พบข้อมูล</h3>";
                                }
                            } catch (PDOException $e) {
                                echo "Error: " . $e->getMessage();
                            }
                            ?>
                            <form action="logout.php" method="post">
                                <button type="submit" class="btn-logout"><i class="fa-solid fa-right-from-bracket"></i> Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>