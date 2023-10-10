<html>
<body>
<?php
if(isset($_COOKIE["lang"])){
    if ($_COOKIE["lang"] == "en") {
        echo "Welcome";
    } elseif ($_COOKIE["lang"] == "th") {
        echo "ยินดีต้อนรับจร้า";
    }
} 
?>
</body>
</html>
