<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลนักเรียน</title>
    <link rel="stylesheet" href="data-student.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container">
        <div class="box-1">
            <div class="box-2">
                <div class="text-1">
                    <h1>ข้อมูลนักเรียน</h1>
                </div>
                <div class="search-form">
                    <div class="form-group">
                        <label for="search-name">ชื่อ-นามสกุล</label>
                        <input type="text" id="search-name" name="search-name">
                    </div>
                    <div class="form-group">
                        <label for="search-level">ระดับชั้น</label>
                        <select id="search-level" name="search-level">
                            <option value="">เลือกระดับชั้น</option>
                            <option value="1">ม.1</option>
                            <option value="2">ม.2</option>
                            <option value="3">ม.3</option>
                            <option value="3">ม.4</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="button">ค้นหา <i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </div>

                <div class="btn-con">
                    <button class="add-student-button" onclick="window.location.href='add-student.php'">+ เพิ่มนักเรียน</button>
                    <button class="out-student-button" onclick="window.location.href='home.php'">ออก</button>
                </div>

                <div class="group-form1">
                    <div class="group-form2">
                        <table>
                            <thead>
                                <tr>
                                    <th>รหัสประจำตัว</th>
                                    <th>ชื่อ-นามสกุล</th>
                                    <th>รูปถ่าย</th>
                                    <th>เบอร์โทร</th>
                                    <th>ระดับชั้น</th>
                                    <th>การจัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>S001</td>
                                    <td>ดช.มานะ เรียนดี</td>
                                    <td><img src="https://plus.unsplash.com/premium_photo-1675130119373-61ada6685d63?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="รูปถ่าย"></td>
                                    <td>081 123 4567</td>
                                    <td>ม.1</td>
                                    <td><a href="#"><i class="fa-solid fa-pen"></i></a> | <a href="#"><i class="fa-solid fa-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <td>S002</td>
                                    <td>ดญ.สวยงาม ศรีสง่า</td>
                                    <td><img src="https://plus.unsplash.com/premium_photo-1675130119373-61ada6685d63?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="รูปถ่าย"></td>
                                    <td>081 253 4785</td>
                                    <td>ม.3</td>
                                    <td><a href="#"><i class="fa-solid fa-pen"></i></a> | <a href="#"><i class="fa-solid fa-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <td>S003</td>
                                    <td>ดช.เลิศศักดิ์ สุขเกิน</td>
                                    <td><img src="https://plus.unsplash.com/premium_photo-1675130119373-61ada6685d63?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="รูปถ่าย"></td>
                                    <td>086 425 0054</td>
                                    <td>ม.4</td>
                                    <td><a href="#"><i class="fa-solid fa-pen"></i></a> | <a href="#"><i class="fa-solid fa-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <td>S003</td>
                                    <td>ดช.เลิศศักดิ์ สุขเกิน</td>
                                    <td><img src="https://plus.unsplash.com/premium_photo-1675130119373-61ada6685d63?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="รูปถ่าย"></td>
                                    <td>086 425 0054</td>
                                    <td>ม.5</td>
                                    <td><a href="#"><i class="fa-solid fa-pen"></i></a> | <a href="#"><i class="fa-solid fa-trash"></i></a></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>