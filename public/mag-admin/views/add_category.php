<div class="add-category-container" id="addCatContainer">
    <div class="wrapper">
        <div class="head">
            <h4>Add Category</h4>
        </div>
        <?php if(isset($_GET['err'])) { ?>
            <div class="msg msg-danger" id="msg">
                <?php echo $_GET['err']; ?>
            </div>
        <?php } ?>
        <?php if(isset($_GET['success'])) { ?>
            <div class="msg msg-success" id="msg">
                <?php echo $_GET['success']; ?>
            </div>
        <?php } ?>
        <div class="container">
            <form action="" method="POST">
                <div class="grp">
                    <input type="text" name="category" placeholder="Enter New Category" required><br>
                    <button type="submit" class="btn submit-btn" name="createCategory">Create Category</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php 

    if(isset($_POST['createCategory']))
    {
        $category = $_POST['category'];

        $categoryOBJ = new CreateCategory($category);
    }

?>

<script>

    const msg = document.getElementById('msg');

    setTimeout(() => {
        msg.style.display = 'none';
    }, 6000);

</script>