<?php

use yii\helpers\Html; 

$this->title = 'Products Listing';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">

    <div class="body-content">

    <h1><?= Html::encode($this->title) ?></h1>
        <div class="row">                 
           <?php foreach ($products as $product): ?>           
            <div class="card m-1" style="width: 10rem;">
              <h5 class="card-title"><?php echo $product->name; ?></h5>
              <div><?= Html::img('images/'.$product->img,['class' => 'img-fluid']);?></div>
              <div class="card-body">               
                <p class="card-text">Desc:&nbsp;<?php echo $product->description; ?></p>
                <p class="card-text">Price:&nbsp;$<?php echo $product->price; ?></p>
                <a href="#" class="btn btn-primary">Buy Now</a>      
                 
              </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>
