<?php

return array(
    'product/([0-9]+)' => 'product/details/$1',
    'category/([0-9]+)' => 'catalog/category/$1', //actionCategory в CatalogController с параметром 1
    'catalog' => 'catalog/index',
    'index.php' => 'ishop/index', // actionIndex в IshopController
    '' => 'ishop/index', // actionIndex в IshopController
);
