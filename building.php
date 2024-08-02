<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลกลุ่มวิชา</title>
    <link rel="stylesheet" href="building.css">
</head>
<body>

<div class="container">
    <h1>ข้อมูลอาคารเรียน</h1>
    
    <div class="form-group">
        <label for="subject-group">ชื่ออาคารเรียน</label>
        <input type="text" id="subject-group" name="subject-group">
        <button type="button">บันทึกข้อมูล</button>
    </div>
    
    <table>
        <thead>
            <tr>
                <th>กลุ่มวิชา</th>
                <th>การจัดการ</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>A</td>
                <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
            </tr>
            <tr>
                <td>B</td>
                <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
            </tr>
            <tr>
                <td>C</td>
                <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
            </tr>
            <tr>
                <td>D</td>
                <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>
