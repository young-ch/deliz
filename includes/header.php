<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
    <title><?php echo isset($page_title) ? $page_title . ' - Deliz' : 'Deliz'; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #00b894;
            --secondary-color: #00cec9;
            --accent-color: #6c5ce7;
            --text-color: #2d3436;
            --light-bg: #f8f9fa;
            --white: #ffffff;
            --logo-bg: #e74c3c;
            --logo-hover: #c0392b;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Noto Sans KR', sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            background-color: var(--light-bg);
        }

        .header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            color: var(--text-color);
            padding: 1.5rem;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
        }

        .header-content {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--white);
            text-decoration: none;
            letter-spacing: -0.5px;
            transition: all 0.3s ease;
            position: relative;
            padding: 0.4rem 1.2rem;
            background-color: var(--logo-bg);
            border-radius: 4px;
            box-shadow: 0 2px 10px rgba(231, 76, 60, 0.2);
        }

        .logo:hover {
            color: var(--white);
            background-color: var(--logo-hover);
            box-shadow: 0 4px 15px rgba(231, 76, 60, 0.3);
            transform: translateY(-1px);
        }

        .logo::after {
            display: none;
        }

        .nav-menu {
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        .nav-menu a {
            text-decoration: none;
            color: var(--text-color);
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 30px;
            transition: all 0.3s ease;
        }

        .nav-menu a:hover,
        .nav-menu a.active {
            color: var(--primary-color);
            background-color: rgba(0, 184, 148, 0.1);
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--text-color);
            cursor: pointer;
            padding: 0.5rem;
        }

        @media (max-width: 768px) {
            .header-content {
                padding: 0 1rem;
            }

            .logo {
                font-size: 1.8rem;
            }

            .mobile-menu-btn {
                display: block;
            }

            .nav-menu {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: var(--white);
                padding: 1rem;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1);
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }

            .nav-menu.active {
                display: flex;
            }

            .nav-menu a {
                width: 100%;
                padding: 0.8rem 1rem;
            }
        }
    </style>
    <?php if (isset($additional_styles)) echo $additional_styles; ?>
</head>
<body>
    <header class="header">
        <div class="header-content">
            <a href="index.php" class="logo">Deliz</a>
            <button class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </button>
            <nav class="nav-menu">
                <a href="index.php" <?php echo ($current_page == 'home') ? 'class="active"' : ''; ?>>홈</a>
                <a href="about.php" <?php echo ($current_page == 'about') ? 'class="active"' : ''; ?>>회사소개</a>
                <a href="history.php" <?php echo ($current_page == 'history') ? 'class="active"' : ''; ?>>연혁</a>
                <a href="products.php" <?php echo ($current_page == 'products') ? 'class="active"' : ''; ?>>상품소개</a>
                <a href="contact.php" <?php echo ($current_page == 'contact') ? 'class="active"' : ''; ?>>문의하기</a>
            </nav>
        </div>
    </header>
    <div class="main-wrapper"> 