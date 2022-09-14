<div class="sidebar" id="sidebar">
    <div class="side-container">
        <div class="head">
            <h4>ADMIN DASHBOARD</h4>
        </div>
        <hr>
        <ul class="navs">
            <li class="alone">
                <a href="?url=overview">Overview</a>
            </li>

            <li class="grp-1">
                <span class="faint">INTERFACE</span>
                <br>
                <a id="catDropDownBtn" onclick="showCatContainer()">Categories</a>
                <div class="content" id="catContainer">
                    <ul>
                        <li>
                            <a href="?url=all_categories">All Categories</a>
                        </li>
                        <li>
                            <a href="?url=add_category">Add Category</a>
                        </li>
                    </ul>
                </div>
                <br>
                <a id="postDropDownBtn" onclick="showPostContainer()">Articles</a>
                <div class="post-content" id="postContainer">
                    <ul>
                        <li>
                            <a href="?url=all_articles">All Articles</a>
                        </li>
                        <li>
                            <a href="?url=add_article">Add Article</a>
                        </li>
                    </ul>
                </div>
            </li>
            <hr>

            <li class="no-border">
                <a href="?url=income">Income</a>
            </li>
            <li class="no-border">
                <a href="?url=users">Users</a>
            </li>
        </ul>
    </div>
</div>