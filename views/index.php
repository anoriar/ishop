<?php require_once '/views/layouts/header.php' ?>

<section class="catalog">
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
                                            <h4 class='panel-title'><a href='/category/". $item->getId() ."'>" . $item->getName() . "</a></h4>
                                        </div>
                                    </div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Последние товары</h2>
                    <?php
                    foreach ($lastProductList as $item) {
                        echo    "<div class='col-sm-4'>
                                    <div class='product-image-wrapper'>
                                        <div class='single-products'>
                                            <div class='productinfo text-center'>
                                                <div class='img-wrapper'>
                                                    <img src='" . $item->getImage() . "' alt='' />
                                                </div>
                                                <h2>" . number_format($item->getPrice(), 0, ',', ' ') . " RUB</h2>
                                                <a href='/product/" . $item->getId() . "'><p>" . $item->getName() . "</p></a>
                                                <a href='#' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>В корзину</a>
                                            </div>";
                                            if($item->is_new()){
                                               echo "<img src='images/views/index/new.png' class='new' alt=''>";
                                            }
                                        echo "</div>
                                    </div>
                                </div>";
                    }
                    ?>
                </div><!--features_items-->

                <div class="recommended_items"><!--recommended_items-->
                    <h2 class="title text-center">Рекомендуемые товары</h2>

                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php
                              for($i = 0; $i < count($recommendedProductList); $i += 3){
                                if($i == 0){
                                    echo "<div class='item active'>";
                                }
                                else{
                                    echo "<div class='item'>";
                                }
                                for($j = 0; $j < 3; $j++){
                                    $item = $lastProductList[$i + $j];
                                    echo "<div class='col-sm-4'>
                                            <div class='product-image-wrapper'>
                                                <div class='single-products'>
                                                    <div class='productinfo text-center'>
                                                        <div class='img-wrapper'>
                                                            <img src='" . $item->getImage() . "' alt='' />
                                                        </div>
                                                        <h2>" . number_format($item->getPrice(), 0, ',', ' ') . " RUB</h2>
                                                        <a href='/product/" . $item->getId() . "'><p>" . $item->getName() . "</p></a>
                                                        <a href='#' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>В корзину</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>";
                                }
                                echo "</div>";
                               
                            }
                            ?>
                        </div>
                        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>			
                    </div>
                </div><!--/recommended_items-->

            </div>
        </div>
    </div>
</section>


<?php require_once '/views/layouts/footer.php' ?>