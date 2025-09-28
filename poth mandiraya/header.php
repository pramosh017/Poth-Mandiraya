<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>📚 පොත් මන්දිරය - PDF පොත් අලෙවිය</title>
    <style>
        /* 🎨 නවීන CSS Styles */
        :root {
            --primary-color: #007bff; /* ප්‍රධාන වර්ණය: දීප්තිමත් නිල් */
            --secondary-color: #ff5722; /* ද්විතීයික වර්ණය: තැඹිලි-රතු */
            --text-color: #333;
            --light-bg: #f8f9fa;
        }

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--light-bg);
            color: var(--text-color);
        }

        /* ------------------ Header & Navigation ------------------ */
        header {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky; 
            top: 0;
            z-index: 1000;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 5%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo a {
            font-size: 1.8em;
            font-weight: 700;
            color: var(--primary-color);
            text-decoration: none;
            transition: color 0.3s;
        }
        .logo a:hover {
            color: var(--secondary-color);
        }

        .nav-links {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .nav-links li a {
            text-decoration: none;
            color: var(--text-color);
            padding: 10px 15px;
            margin: 0 5px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
            font-weight: 500;
            position: relative;
        }

        .nav-links li a:hover {
            background-color: var(--primary-color);
            color: white;
        }
        
        /* ------------------ Hero Section ------------------ */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('hero-bg.jpg') no-repeat center center/cover;
            min-height: 400px;
            color: white;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .hero h1 {
            font-size: 3.2em;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .hero p {
            font-size: 1.3em;
            margin-bottom: 30px;
        }

        .hero-btn {
            background-color: var(--secondary-color);
            color: white;
            padding: 15px 40px;
            text-decoration: none;
            border-radius: 30px;
            font-weight: bold;
            font-size: 1.1em;
            transition: background-color 0.3s, transform 0.3s;
        }

        .hero-btn:hover {
            background-color: #e64a19;
            transform: translateY(-3px);
        }

        /* ------------------ පොදු Styles ------------------ */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }
        
        .section-title {
            text-align: center;
            color: var(--primary-color);
            font-size: 2.2em;
            margin-bottom: 40px;
            padding-bottom: 5px;
            position: relative;
        }
        .section-title::after {
            content: '';
            width: 80px;
            height: 4px;
            background-color: var(--secondary-color);
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .book-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .book-card {
            background-color: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.4s, box-shadow 0.4s;
            text-align: center;
        }

        .book-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 18px 30px rgba(0, 0, 0, 0.2);
        }

        .book-cover {
            height: 350px;
            background-color: #ccc;
            background-size: cover;
            background-position: center;
            border-bottom: 5px solid var(--secondary-color);
        }
        
        /* පොත් පින්තූර සඳහා */
        #cover-1 { background-image: url('cover1.jpg'); } 
        #cover-2 { background-image: url('cover2.jpg'); } 
        #cover-3 { background-image: url('cover3.jpg'); } 

        .book-info {
            padding: 25px;
        }

        .book-info h3 {
            color: var(--primary-color);
            margin-top: 0;
            font-size: 1.7em;
            height: 50px; /* උස නියතව තබා ගැනීමට */
        }

        .price {
            font-size: 2.2em;
            color: var(--secondary-color);
            font-weight: 700;
            margin: 15px 0;
        }

        .buy-btn {
            background-color: var(--secondary-color);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 30px;
            cursor: pointer;
            font-size: 1.1em;
            font-weight: bold;
            transition: background-color 0.3s;
            display: inline-block;
            text-decoration: none;
            margin-top: 15px;
        }

        .buy-btn:hover {
            background-color: #e64a19;
        }

        footer {
            background-color: var(--primary-color);
            color: white;
            text-align: center;
            padding: 30px 0;
            margin-top: 50px;
        }
    </style>
</head>
<body>

    <header>
        <div class="navbar">
            <div class="logo">
                <a href="index.php">පොත් මන්දිරය 📖</a>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">මුල් පිටුව</a></li>
                <li><a href="#book-section">පොත් එකතුව</a></li>
                <li><a href="contact.php">අප අමතන්න</a></li>
                <li><a href="login.php" class="hero-btn" style="padding: 5px 15px; margin-left: 15px;">පිවිසෙන්න</a></li>
            </ul>
        </div>
    </header>