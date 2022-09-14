<?php

    if(isset($_POST['create_article'])) 
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $category = $_POST['category'];
        
        $image = $_FILES['img'];
        $img_name = $_FILES['img']['name'];
        $img_tmp_name = $_FILES['img']['tmp_name'];
        $img_size = $_FILES['img']['size'];
        

        $articleModel = new AddArticle($title, $description, $image, $category);

    }

    $catModel = new Categories;

    $categories = $catModel->getCategories();
?>


<div class="add_article_conatiner">
    <div class="add_article_wrapper">
        <div class="head">
            <h4>Add Article</h4>
        </div>
        <?php if(isset($_GET['err'])){ ?>
            <div class="err-msg">
                <?php echo $_GET['err']; ?>       
            </div>
        <?php } ?>

        <?php if(isset($_GET['article'])){ ?>
            <div class="helper-box success" id="msgBox" >
                <?php echo $_GET['article']; ?>
            </div>
        <?php } ?>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="article-group">
                <label for="title">Title</label><br>
                <input type="text" name="title" class="input-field" placeholder="Article Title" required>
            </div>
            <div class="article-group">
                <label for="description">Description</label><br>
                <textarea name="description" class="description" id="description" cols="40" rows="5" required></textarea>
            </div>
            <div class="article-group">
                <select name="category" id="category"required>
                    <option value="" selected hidden disabled>Select Category</option>
                    <?php foreach($categories as $category) : ?>
                        <option value="<?php echo $category['id']; ?>"><?php echo $category['cat_name']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="article-group">
                <label for="image">Image</label><br>
                <input type="file" accept="image/*" class="input-file" name="img" id="img" required>
            </div>
            <button type="submit" name="create_article" class="btn btn-blue">Publish Article</button>
        </form>
    </div>
</div>


<!-- <script>
    
    const msgBox = document.getElementById('msgBox');

    if(msgBox.style.display == 'block')
    {
        setTimeout(hideMsgBox, 4000);
    }

    function hideMsgBox()
    {
        msgBox.style.display == 'none';
    }
</script> -->