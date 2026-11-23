<?php
$tenWebsite = "Lab 7 - PHP";
$thongBao = "PHP đang hoạt động trên website!";
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $tenWebsite; ?></title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            min-height: 100vh;
            color: #222;
        }

        header {
            background: rgba(255, 255, 255, 0.95);
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #6c3cff;
        }

        nav a {
            text-decoration: none;
            color: #333;
            margin-left: 25px;
            font-weight: bold;
        }

        .hero {
            min-height: 75vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 40px 20px;
        }

        .card {
            background: white;
            max-width: 750px;
            width: 100%;
            padding: 55px 40px;
            border-radius: 25px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.2);
        }

        .icon {
            font-size: 60px;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 42px;
            margin-bottom: 15px;
            color: #5b3fd4;
        }

        .description {
            font-size: 18px;
            color: #666;
            line-height: 1.7;
            margin-bottom: 30px;
        }

        .success {
            background: #e8f8ee;
            color: #16803c;
            border: 1px solid #a9dfbb;
            padding: 18px;
            border-radius: 12px;
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 30px;
        }

        .features {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .feature {
            background: #f4f1ff;
            padding: 15px 25px;
            border-radius: 12px;
            color: #5b3fd4;
            font-weight: bold;
        }

        footer {
            text-align: center;
            color: white;
            padding: 20px;
        }
    </style>
</head>

<body>

<header>
    <div class="logo"><?php echo $tenWebsite; ?></div>

    <nav>
        <a href="#">Trang chủ</a>
        <a href="#">Giới thiệu</a>
    </nav>
</header>

<section class="hero">
    <div class="card">

        <div class="icon">🚀</div>

        <h1>PHP Auto Deploy</h1>

        <p class="description">
            Website PHP được triển khai tự động thông qua
            GitHub Actions lên hosting InfinityFree.
        </p>

        <div class="success">
            ✓ <?php echo $thongBao; ?>
        </div>

        <div class="features">
            <div class="feature">PHP</div>
            <div class="feature">GitHub</div>
            <div class="feature">GitHub Actions</div>
            <div class="feature">InfinityFree</div>
        </div>

    </div>
</section>

<footer>
    Lab 7 - Deploy tự động ứng dụng
</footer>

</body>
</html>