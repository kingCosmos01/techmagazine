<?php 

    require './models/ArticleManager.php';
    

    
    $articleManager = new ArticleManager();
    $articles = $articleManager->getArticles();
    

    $catModel = new Categories;

    $categories = $catModel->getCategories();

?>

<div class="articles-box">
    <div class="articles-wrapper">
        <div class="head">
            <h4>All Articles</h4>
        </div>
        <div class="container">
            <table class="flow">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Article</th>
                        <th>Author</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="allContainer">
                    <?php foreach($articles as $article) : ?>
                        <tr>
                            <td><?php echo $article['cat_id']; ?></td>
                            <td class="article">
                                <a href="http://localhost/magazine/public/views/readmore.php?id=<?php echo $article['id']; ?>" target="_blank"><?php echo $article['title']; ?></a>
                            </td>
                            <td class="author"><?php echo $article['author']; ?></td>
                            <td class="cta">
                                <a href="#action=edit&id=<?php echo $article['id']; ?>" class="edit-btn" id="editBtn" onclick="showEditModal()" >Edit</a>
                                <a href="#action=delete&id=<?php echo $article['id']; ?>" class="del-btn" id="delBtn" onclick="showDeleteModal()">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <tr class="show-more-grp">
                        <td>
                            <button class="show-more-btn" id="showMoreBtn" >Show More</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Edit Article Modal -->
<div class="overlay" id="overlay"></div>
<div class="edit-modal" id="editModal">
    <div class="wrapper">
        <div class="head">
            <h4>Edit Article</h4>
            <div class="closeBtn" onclick="hideEditModal()">&times;</div>
        </div>
        <form action="" method="GET">
            <div class="input-group">
                <label>Title</label><br>
                <input type="text"class="input-field" value="" name="u_title" placeholder="Update Title">
            </div>
            <div class="input-group">
                <label>Desription</label><br>
                <textarea name="u_desc" class="description" value="" id="description" cols="40" rows="5" ></textarea>
            </div>
            <div class="input-group">
                <select name="category" id="category"required>
                    <option selected hidden disabled>Select Category</option>
                    <?php foreach($categories as $category) : ?>
                        <option value="<?php echo $category['id']; ?>"><?php echo $category['cat_name']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="input-group">
                <label>Title</label>
                <input type="file" class="input-field" name="u_file" >
            </div>
            <button type="submit" name="update_article" class="btn btn-blue">Update Article</button>
        </form>
    </div>
</div>


<!-- Delete Modal -->
<div class="delete-modal" id="deleteModal">
    <div class="wrapper">
       <div class="head">
            <h4>Confirm Delete?</h4>
            <div class="closeBtn" onclick="hideDeleteModal()">&times;</div>
       </div>
        <form action="" method="post">
            <input type="hidden" name="h_id" value="<?php echo $article['id']; ?>">
            <div class="btn-grp">
                <button class="cancel-btn" onclick="hideDeleteModal()">Cancel</button>
                <button type="submit" class="affirm-btn" name="delte_article">Delete</button>
            </div>
        </form>
    </div>
</div>









<script>               

    
    function showEditModal(){

        const overlay = document.getElementById('overlay');
        const editModal = document.getElementById('editModal');  

        overlay.style.display = 'block';
        editModal.style.transform = 'scale(1)';
    }

    function hideEditModal(){

        const overlay = document.getElementById('overlay');
        const editModal = document.getElementById('editModal');     
        
        overlay.style.display = 'none';
        editModal.style.transform = 'scale(0)';
    }

    // delete Modal
    function showDeleteModal(){

        const overlay = document.getElementById('overlay');
        const deleteModal = document.getElementById('deleteModal');  

        overlay.style.display = 'block';
        deleteModal.style.transform = 'scale(1)';
    }

    function hideDeleteModal(){

        const overlay = document.getElementById('overlay');
        const deleteModal = document.getElementById('deleteModal');     
        
        overlay.style.display = 'none';
        deleteModal.style.transform = 'scale(0)';
    }
    
</script>