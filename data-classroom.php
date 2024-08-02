<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลห้องเรียน</title>
    <link rel="stylesheet" href="data-classroom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container">
        <div class="box-1">
            <div class="box-2">
                <div class="text-1">
                    <h1>ข้อมูลห้องเรียน</h1>
                </div>
                <div class="search-form">
                    <div class="form-group">
                        <label for="search-name">หมายเลขห้อง</label>
                        <input type="text" id="search-name" name="search-name">
                    </div>
                    <div class="form-group">
                        <label for="search-level">อาคาร</label>
                        <select id="search-level" name="search-level">
                            <option value="">เลือกอาคาร</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="search-level">ชั้น</label>
                        <select id="search-level" name="search-level">
                            <option value="">เลือกชั้น</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="button">ค้นหา <i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </div>

                <div class="btn-con">
                    <button class="add-student-button" onclick="window.location.href='add-classroom.php'">+ เพิ่มห้องเรียน</button>
                    <button class="out-student-button" onclick="window.location.href='home.php'">ออก</button>
                </div>

                <div class="group-form1">
                    <div class="group-form2">
                        <table>
                            <thead>
                                <tr>
                                    <th>หมายเลขห้อง</th>
                                    <th>รูปถ่ายห้องเรียน</th>
                                    <th>อาคารเรียน</th>
                                    <th>ชั้น</th>
                                    <th>การจัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>A001</td>
                                    <td><img width="40px" src="https://plus.unsplash.com/premium_photo-1675130119373-61ada6685d63?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="รูปถ่าย"></td>
                                    <td>A</td>
                                    <td>2</td>
                                    <td><a href="#"><i class="fa-solid fa-pen"></i></a> | <a href="#"><i class="fa-solid fa-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <td>A002</td>
                                    <td><img width="40px" src="https://plus.unsplash.com/premium_photo-1675130119373-61ada6685d63?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="รูปถ่าย"></td>
                                    <td>B</td>
                                    <td>3</td>
                                    <td><a href="#"><i class="fa-solid fa-pen"></i></a> | <a href="#"><i class="fa-solid fa-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <td>A003</td>
                                    <td><img width="40px" src="https://plus.unsplash.com/premium_photo-1675130119373-61ada6685d63?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="รูปถ่าย"></td>
                                    <td>C</td>
                                    <td>1</td>
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