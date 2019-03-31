<?php include_once('header.php') ?>

<h3 class="title"><?php echo $data['title'] ?></h3>
<form>
    <input type="text" id="amount">
    <select name="" id="from">
    </select>
    <select name="" id="to">
    </select>
    <input type="submit" value="Convert">
</form>
<div class="results">
    <div id="result">

    </div>
</div>            

<?php include_once('footer.php') ?>
