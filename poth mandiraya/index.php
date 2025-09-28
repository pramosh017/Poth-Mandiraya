<?php 
// 📚 පොත් දත්ත Array එක
$books = [
    [
        'id' => 1,
        'title' => "සාර්ථකත්වයේ රහස",
        'description' => "ජීවිතයේ සාර්ථකත්වය ළඟා කරගැනීමට අවශ්‍ය පියවර සහ උපක්‍රම. සරල සිංහලෙන්.",
        'price' => 499,
        'cover_img' => "cover1.jpg", 
        'buy_link' => "YOUR_GUMROAD_LINK_BOOK1"
    ],
    [
        'id' => 2,
        'title' => "නව තාක්ෂණික ලෝකය",
        'description' => "කෘත්‍රිම බුද්ධිය (AI) සහ ඩිජිටල් මාකටින් ගැන දැනගත යුතු සියල්ල.",
        'price' => 599,
        'cover_img' => "cover2.jpg",
        'buy_link' => "YOUR_GUMROAD_LINK_BOOK2"
    ],
    [
        'id' => 3,
        'title' => "නිවැරදි ආයෝජන මඟ",
        'description' => "මුල්‍යමය නිදහස ළඟා කරගැනීමට අනුගමනය කළ යුතු ප්‍රායෝගික උපදෙස්.",
        'price' => 399,
        'cover_img' => "cover3.jpg",
        'buy_link' => "YOUR_GUMROAD_LINK_BOOK3"
    ]
];

// Header එක (Nav Bar සහිතයි) කැඳවීම
include 'header.php';
?>

<div class="hero">
    <h1>ඩිජිටල් පොත්පත් වලින් ඔබේ ජීවිතය වෙනස් කරගන්න!</h1>
    <p>ක්ෂණිකව Download කරගන්න! ඕනෑම තැනක සිට කියවන්න!</p>
    <a href="#book-section" class="hero-btn">අදම පොත් මිලදී ගන්න</a>
</div>

<div class="container" id="book-section">
    <h2 class="section-title">අපගේ ජනප්‍රියතම පොත් එකතුව</h2>

    <div class="book-list">
        
        <?php 
        // සෑම පොතක් සඳහාම Book Card එකක් නිර්මාණය කිරීම
        foreach ($books as $book) {
            include 'book_card.php'; 
        }
        ?>

    </div>
</div>

<?php 
// Footer එක කැඳවීම
include 'footer.php';
?>