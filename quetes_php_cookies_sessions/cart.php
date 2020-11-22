<?php require 'inc/head.php'; 
require 'inc/data/products.php';
if (empty($_SESSION['loginname'])) {
    header('Location: login.php');
} 
$list = "";
if(!empty($_SESSION['cart'])) {
    foreach($_SESSION['cart'] as $item => $quantity){
        $list = $list . "<li> {$catalog[$item]['name']} : {$quantity}</li>";
    };
}
?>
<section class="cookies container-fluid">
    <div class="row">
        TODO : Display shopping cart items from $_SESSION here.
        <ul>
            <?= $list; ?>
        </ul>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
