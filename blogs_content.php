<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="body_style.css">
<?php
require_once 'dbConfig.php'; 
$result = $db->query("SELECT * FROM blog"); 
?>

<?php if($result->num_rows > 0){ ?> 
   
    
        <?php while($row = $result->fetch_assoc()){ ?> 
            <div class='blogbody'>
        <div class='blogrow'>
            <div class='leftcolumn'>
                <div class='blogcard'>
            <h2 style='color: #b48404;'><?php echo ($row['header']); ?></h2>
            <h5><?php echo ($row['subheader']); ?></h5>
            <img style="height:600px;width:1200px;width:100%;height:auto;" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
            <p style='color: #b48404;'> <?php echo ($row['author']); ?>  |  <?php echo ($row['date']); ?>
            <p><?php echo ($row['description']); ?></p>
            </div> 
    </div> 
    </div> 
    </div> 
        <?php } ?> 
<?php } ?> 
  





