<div class="navbar">
    <div class="nav-wrapper">
        <div class="left">
            <form action="" method="get">
                <input type="search" name="admin_search" id="" placeholder="Search...">
                <button type="submit" class="searchBtn">Search</button>
            </form>
        </div>
        <div class="right">
            <div class="cta notifications">
                <span>3</span>
            </div>
            <div class="cta messages">
                <span>4</span>
            </div>
            <div class="admin">
                <p onclick="showAdminCta()"><?php if(isset($_SESSION['admin-user'])) { echo $_SESSION['admin-user']; } ?></p>
                <img src="./images/1.jpg" alt="">
                <div class="admin-cta" id="adminCta">
                    <a href="">Profile</a>
                    <a href="http://localhost/magazine/public/mag-admin/?logout=1">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- adminCta -->
<script>

    const adminCta = document.getElementById('adminCta');

    adminCta.onclick(showAdminCta());

    function showAdminCta()
    {
        
        if(adminCta.style.display == 'none')
        {
            adminCta.style.display = 'inline';
            adminCta.style.transform = 'scale(1)';
        }
        else 
        {
            adminCta.style.display = 'none';
            adminCta.style.transform = 'scale(0)';
        }
    }

</script>