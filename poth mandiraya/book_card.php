<?php 
if (isset($book)) { 
?>
    <div class="book-card">
        <div class="book-cover" id="cover-<?php echo $book['id']; ?>"></div> 
        <div class="book-info">
            <h3><?php echo $book['title']; ?></h3> 
            <p><?php echo $book['description']; ?></p> 
            <div class="price">රු. <?php echo number_format($book['price'], 2); ?>/-</div>
            <a href="<?php echo $book['buy_link']; ?>" target="_blank" class="buy-btn" onclick="buyAlert('<?php echo $book['title']; ?>')">දැන්ම Download කරන්න</a>
        </div>
    </div>
<?php 
} 
?>