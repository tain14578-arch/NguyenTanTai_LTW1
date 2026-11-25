<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test 1 - Lab 2</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f6f9;
            padding: 20px;
            color: #333;
        }
        nav {
            background: rgb(4, 40, 94);
            margin-bottom: 30px;
            border-radius: 5px;
            overflow: hidden;
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav li {
            flex: 1;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            display: block;
            padding: 15px;
            text-align: center;
            transition: background 0.3s;
        }

        nav ul li:hover {
            background: #084298;
        }

        section {
            background: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            margin: 0 auto 30px auto;
        }

        section h3 {
            color: #0d6efd;
            margin-bottom: 20px;
        }

    
        .s1 {
            max-width: 550px;
        }

        .s1 h3 {
            text-align: center;
        }

        .s1 ul {
            list-style: none;
        }

        .s1 li {
            padding: 12px;
            margin-bottom: 10px;
            background: #e7f1ff;
            border-left: 5px solid #0d6efd;
            border-radius: 5px;
            transition: 0.3s;
        }

        .s1 li:hover {
            background: #cfe2ff;
            transform: translateX(5px);
        }

        .s1 .total {
            margin-top: 15px;
            font-weight: bold;
            text-align: right;
            color: #555;
        }

        .s2 {
            max-width: 800px;
        }

        .s2 table {
            width: 100%;
            border-collapse: collapse;
        }

        .s2 th, .s2 td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #dee2e6;
        }

        .s2 th {
            background-color: #0d6efd;
            color: white;
        }

        .s2 tr:hover td {
            background-color: #e7f1ff;
        }

        .s3 {
            max-width: 600px;
        }

        .s3 h3 {
            text-align: center;
        }

        .s3 .form-group {
            margin-bottom: 15px;
        }

        .s3 .form-label {
            display: block;
            font-weight: bold;
            margin-bottom: 6px;
        }

        .s3 input[type="text"],
        .s3 select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            font-size: 14px;
        }

        .s3 .option-group label {
            margin-right: 15px;
            font-weight: normal;
            cursor: pointer;
            display: inline-block;
            margin-bottom: 5px;
        }

        .s3 .btn-group {
            margin-top: 20px;
            text-align: center;
        }

        .s3 button {
            padding: 10px 25px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            margin: 0 5px;
            color: white;
        }

        .s3 button[type="submit"] {
            background-color: #0d6efd;
        }

        .s3 button[type="submit"]:hover {
            background-color: #0b5ed7;
        }

        .s3 button[type="reset"] {
            background-color: #6c757d;
        }

        .s3 button[type="reset"]:hover {
            background-color: #5c636a;
        }
    </style>
</head>
<body>

<?php
    
    $menus = ["Trang chu", "Tin tuc", "Lien he", "Gioi thieu"];

    
    $subjects = ["HTML", "CSS", "JavaScript", "PHP", "MySQL"];

   
    $students = [
        [
            "id" => "SV001",
            "name" => "Nguyen Van An",
            "gender" => "Nam",
            "class" => "CNTT1"
        ],
        [
            "id" => "SV002",
            "name" => "Tran Thi Binh",
            "gender" => "Nu",
            "class" => "CNTT2"
        ],
        [
            "id" => "SV003",
            "name" => "Le Van Cuong",
            "gender" => "Nam",
            "class" => "CNTT1"
        ],
        [
            "id" => "SV004",
            "name" => "Pham Thi Dung",
            "gender" => "Nu",
            "class" => "CNTT3"
        ]
    ];

    // 4. Khoi tao cac mang cho Form dang ky
    $faculties = [
        "Cong nghe thong tin",
        "Quan tri kinh doanh",
        "Ke toan",
        "Ngon ngu Anh"
    ];

    $classes = [
        "A1" => "CNTT1",
        "A2" => "CNTT2",
        "A3" => "CNTT3",
        "A4" => "CNTT4"
    ];

    $genders = ["Nam", "Nu", "Khac"];

    $hobbies = [
        "LT" => "Lap trinh",
        "DS" => "Doc sach",
        "AN" => "Am nhac",
        "DL" => "Du lich",
        "TT" => "The thao"
    ];
?>

    <!-- 1. Hien thi Menu -->
    <nav>
        <ul>
            <?php foreach ($menus as $menu) { ?>
                <li><a href="#"><?= $menu ?></a></li>
            <?php } ?>
        </ul>
    </nav>

    <!-- 2. Hien thi danh sach mon hoc -->
    <section class="s1">
        <h3>Danh sach ngon ngu su dung trong mon hoc</h3>
        <ul>
            <?php
            foreach ($subjects as $subject) {
                echo "<li>$subject</li>";
            }
            ?>
        </ul>
        <p class="total">Tong so mon hoc: <?= count($subjects) ?></p>
    </section>

    <!-- 3. Hien thi danh sach sinh vien -->
    <section class="s2">
        <h3>Danh sach sinh vien</h3>
        <table>
            <tr>
                <th>STT</th>
                <th>Ma sinh vien</th>
                <th>Ho va ten</th>
                <th>Gioi tinh</th>
                <th>Lop</th>
            </tr>
            <?php foreach ($students as $index => $student) { ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $student["id"] ?></td>
                    <td><?= $student["name"] ?></td>
                    <td><?= $student["gender"] ?></td>
                    <td><?= $student["class"] ?></td>
                </tr>
            <?php } ?>
        </table>
    </section>

    <!-- 4. Tao Form dang ky thong tin sinh vien -->
    <section class="s3">
        <h3>DANG KY THONG TIN SINH VIEN</h3>
        <form action="#" method="post">
            <div class="form-group">
                <label class="form-label">Ho va ten</label>
                <input type="text" name="fullname" placeholder="Nhap ho va ten...">
            </div>

            <div class="form-group">
                <label class="form-label">Khoa</label>
                <select name="faculty">
                    <?php foreach ($faculties as $faculty) { ?>
                        <option value="<?= $faculty ?>"><?= $faculty ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label class="form-label">Lop</label>
                <select name="class">
                    <?php foreach ($classes as $key => $class) { ?>
                        <option value="<?= $key ?>"><?= $class ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group option-group">
                <label class="form-label">Gioi tinh</label>
                <?php foreach ($genders as $gender) { ?>
                    <label>
                        <input type="radio" name="gender" value="<?= $gender ?>">
                        <?= $gender ?>
                    </label>
                <?php } ?>
            </div>

            <div class="form-group option-group">
                <label class="form-label">So thich</label>
                <?php foreach ($hobbies as $key => $hobby) { ?>
                    <label>
                        <input type="checkbox" name="hobbies[]" value="<?= $key ?>">
                        <?= $hobby ?>
                    </label>
                <?php } ?>
            </div>

            <div class="btn-group">
                <button type="submit">Dang ky</button>
                <button type="reset">Lam moi</button>
            </div>
        </form>
    </section>

</body>
</html>
