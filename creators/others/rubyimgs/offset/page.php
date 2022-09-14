<?php 
include 'pageController.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="./assets/css/navbar-top-fixed.css"> -->
    <link rel="stylesheet" href="./syting.css">
</head>
<body>
    <div class="container w-50">
      <div class="text-center mt-3 align-content-center">
        <div class="justify-content-center">
            <?php  foreach($pageData['post'] as $result):?>
            <div class="item-center mb-4">
              <h3 class="px-4 py-1  bg-white rounded shadow"><?= $result['topics'];?></h3>
            </div>
            <?php endforeach; ?>
        </div>
      </div>

      <div class="mt-5 align-content-center">
          <div class="d-flex justify-content-between">
            <?php if($pageData['prevPg']):  ?>
                <div class="item-center  mb-4">
                    <a href="page.php?page=<?= $pageData['prevPg'] ?>" class="px-4 py-1 btn btn-dark text-white rounded shadow">Previous</a>
                </div>
            <?php else: ?>
                <div></div>
            <?php endif; ?>

            <?php if($pageData['nextPg']): ?>
                <div class="item-center  mb-4">
                    <a href="page.php?page=<?= $pageData['nextPg'] ?>" class="px-4 py-1 btn btn-dark text-white rounded shadow">Next</a>
                </div>
            <?php else: ?>
                <div></div>
            <?php endif; ?>
           
          </div>
      </div>
    </div>
</body>
</html>