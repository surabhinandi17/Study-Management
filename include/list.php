<?php
function abc2($a,$b)
{
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="#"><?php echo $a?></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $b?></li>
  </ol>
</nav>
<?php
}
?>