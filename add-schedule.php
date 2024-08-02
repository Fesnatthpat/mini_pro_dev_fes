<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มตารางสอน</title>
    <link rel="stylesheet" href="add-subject2.css">
</head>

<body>

    <div class="form-container">
        <div class="box1">
            <div class="box2">
                <h1 class="text-teacher">ข้อมูลตารางสอน</h1>
                <hr>
                <div>
                    <div class="form-group">
                        <label for="name">ภาคเรียนที่1</label>
                        <select id="level" name="level">
                            <option value="">เลือกภาคเรียน</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="level">ปีการศึกษา</label>
                        <select id="level" name="level">
                            <option value="">เลือกปีการศึกษา</option>
                            <option value="2567">2567</option>
                            <option value="2566">2566</option>
                            <option value="2565">2565</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">วิชา</label>
                        <select id="level" name="level">
                            <option value="">เลือกวิชา</option>
                            <option value="">ภาษา</option>
                            <option value="">คณิตศาสตร์</option>
                            <option value="">เคมี</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">ระดับชั้น</label>
                        <select id="level" name="level">
                            <option value="">เลือกภาคเรียน</option>
                            <option value="2567">2567</option>
                            <option value="2566">2566</option>
                            <option value="2565">2565</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">ภาคเรียนที่1</label>
                        <select id="level" name="level">
                            <option value="">เลือกภาคเรียน</option>
                            <option value="2567">2567</option>
                            <option value="2566">2566</option>
                            <option value="2565">2565</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">ภาคเรียนที่1</label>
                        <select id="level" name="level">
                            <option value="">เลือกภาคเรียน</option>
                            <option value="2567">2567</option>
                            <option value="2566">2566</option>
                            <option value="2565">2565</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">ภาคเรียนที่1</label>
                        <select id="level" name="level">
                            <option value="">เลือกภาคเรียน</option>
                            <option value="2567">2567</option>
                            <option value="2566">2566</option>
                            <option value="2565">2565</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="photo">รูปห้องเรียน</label>
                        <input type="file" id="photo" name="photo">
                    </div>
                    <div class="btn-con">
                        <div class="btn-submit">
                            <button type="submit">บันทึกข้อมูล</button>
                        </div>
                        <div class="btn-out">
                            <button onclick="window.location.href='data-classroom.php'">ออก</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>