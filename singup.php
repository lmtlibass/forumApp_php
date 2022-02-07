<?php require('actions/singupAction.php'); ?>
<!DOCTYPE html>
<html lang="en">

    <?php include 'includes/head.php'; ?>
<body>
  
        <form class="container p-3" method = "POST">
            <?php 
                if(isset($errorMsg)){echo '<p>'. $errorMsg. '</p>';}
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">
                    pseodo
                </label>
                <input 
                    type="text" 
                    class="form-control" 
                    id="exampleInputEmail1" 
                    aria-describedby="name"
                    name = "pseodo"
                />
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">
                    nom
                </label>
                <input 
                    type="text"
                    class="form-control" 
                    id="exampleInputEmail1" 
                    aria-describedby="emailHelp"
                    name = "name"
                />
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">
                    Votre mail
                </label>
                <input
                    type="email" 
                    class="form-control" 
                    id="exampleInputEmail1" 
                    aria-describedby="emailHelp"
                    name = "email"
                />
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">
                    Password
                </label>
                <input 
                    type="password" 
                    class="form-control" 
                    id="exampleInputPassword1"
                    name = "pwd"
                />
            </div>
                <button type="submit" class="btn btn-primary" name = "submit">
                    S'inscrire
                </button>
        </form>
            
  
</body>
</html>
