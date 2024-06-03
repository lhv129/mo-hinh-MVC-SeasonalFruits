<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="public/user-profile.css">
</head>

<body>
    <div class="container">
        <section class="main">
            <div class="profile-card">
                <div class="image">
                    <img src="uploads/author/profile-icon-design-free-vector.jpg" alt="" class="profile-pic">
                </div>
                <div class="data">
                    <h2><?= $_SESSION['user']['name']?></h2>
                    <span>
                        <?php
                            if($_SESSION['user']['role'] == 0){
                                echo "Member";
                            }else{
                                echo "Admin";
                            }
                        ?>
                    </span>
                </div>
                <div class="row">
                    <div class="info">
                        <h3>Following</h3>
                        <span>120</span>
                    </div>
                    <div class="info">
                        <h3>Followers</h3>
                        <span>5000</span>
                    </div>
                    <div class="info">
                        <h3>Posts</h3>
                        <span>209</span>
                    </div>
                </div>
                <div class="buttons">
                    <a href="#" class="btn">Edit Profile</a>
                    <a href="<?= BASE_URL  ?>" class="btn">Home</a>
                </div>
            </div>
        </section>
    </div>
</body>

</html>