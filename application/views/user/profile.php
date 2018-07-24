<div class="container">
    
    <!-- <div class="col-lg-4"> -->
        <div class="jumbotron" style="margin-top:5px">
            <h3>Profile</h3><br>
                <?php if (isset($_SESSION['success'])) {?>
                    <div class="alert alert-success"><?php echo $_SESSION['success'];?></div>
                <?php } ?>
                <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
                hello, <?php echo $_SESSION['username'];?>
        </div>
    <!-- </div>                -->
</div>
</body>
</html>
        
