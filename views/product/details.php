<?php require_once '/views/layouts/header.php' ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">
                        <?php
                        foreach ($catList as $item) {
                            echo "<div class='panel panel-default'>
                                        <div class='panel-heading'>
                                            <h4 class='panel-title'><a href='/category/" . $item->getId() . "'>" . $item->getName() . "</a></h4>
                                        </div>
                                    </div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-4">
                        <div class="view-product">
                            <div class='img-wrapper'>
                                <img src=<?php echo $product->getImage() ?> alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="product-information"><!--/product-information-->
                            <?php 
                                if($product->is_new()) {
                                  echo " <img src='/images/product-details/new.jpg' class='newarrival' alt=''/>";
                                }
                            ?>
                            <h2><?php echo $product->getName()?></h2>
                            <p>ID: <?php echo $product->getId()?></p>
                            <img src="images/product-details/rating.png" alt="" />
                            <span>
                                <span>RUB <?php echo number_format($product->getPrice(), 0, ',', ' ') ?></span>
                                <label>Количество:</label>
                                <input type='text' value=' <?php echo $product->getAvailability() ?> ' />
                                <button type="button" class="btn btn-fefault cart">
                                    <i class="fa fa-shopping-cart"></i>
                                    Добавить в корзину
                                </button>
                            </span>
                            <p><b>Код:</b> <?php echo $product->getCode() ?></p>
                            <p><b>Бренд:</b> <?php echo $product->getBrand() ?></p>
                            <p><b>Описание:</b> <?php echo $product->getDescription() ?></p>
                            
                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->
            </div>
        </div>
    </div>
</section>


<?php require_once '/views/layouts/footer.php' ?>