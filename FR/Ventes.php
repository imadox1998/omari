<?php if(!isset($_GET['page'])){ header( "Location: ../ENG/" ); exit;} ?>
<?php require '../includes/CrudBD.inc.php'?>
<?php require '../includes/header.php'?>
    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">              
                            <?php if(!empty($_GET['page'])) { echo $_GET['page'];}else{ header( "Location: ../ENG/" ); exit;} ?>
                        </h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="../assets/index.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Ventes</a></li>
                                <li><?php echo $_GET['page']; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->
    
    <!-- PRODUCT DETAILS AREA START -->
    <div class="ltn__product-area ltn__product-gutter mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__shop-options">
                        <ul>
                            <li></li>
                            <li></li>
                            <li>
                               <div class="showing-product-number text-right">
                                    <span>Showing 9 of 20 results</span>
                                </div> 
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_product_grid">
                            <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                                <div class="row">
<?php
$cbd = new CrudBD();
$objects= $cbd->list("vente",$_GET['page']);
foreach($objects as $object){
?>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="../assets/product-details.html?id=<?php echo $object['idm'];?>"><img src="<?php echo $cbd->lastimg($object['idm']);?>" alt="#"></a>
                                                <div class="real-estate-agent">
                                                    <div class="agent-img">
                                                        <a href="#"><img src="../assets/img/blog/author.jpg" alt="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg">For <?php echo $object['Statu']?></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="../assets/product-details.html"><?php echo $object['titre']?></a></h2>
                                                <div class="product-img-location">
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="flaticon-pin"></i> <?php echo $object['Adresse']?></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                    <li><span><?php echo $object['bedrooms']?></span>
                                                        Bedrooms
                                                    </li>
                                                    <li><span><?php echo $object['bathrooms']?> </span>
                                                        Bathrooms
                                                    </li>
                                                    <li><span><?php echo $object['meters']?> </span>
                                                        Meters
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-info-bottom">
                                                <div class="product-price">
                                                    <span><?php echo $object['prix']?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

<?php
}


?>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="../assets/product-details.html"><img src="../assets/img/product-3/3.jpg" alt="#"></a>
                                                <div class="real-estate-agent">
                                                    <div class="agent-img">
                                                        <a href="../assets/team-details.html"><img src="../assets/img/blog/author.jpg" alt="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg">For Rent</li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="../assets/product-details.html">New Apartment Nice View</a></h2>
                                                <div class="product-img-location">
                                                    <ul>
                                                        <li>
                                                            <a href="../assets/locations.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                    <li><span>3 </span>
                                                        Bedrooms
                                                    </li>
                                                    <li><span>2 </span>
                                                        Bathrooms
                                                    </li>
                                                    <li><span>3450 </span>
                                                        square Ft
                                                    </li>
                                                </ul>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                <i class="flaticon-expand"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                <i class="flaticon-heart-1"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="../assets/product-details.html" title="Product Details">
                                                                <i class="flaticon-add"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info-bottom">
                                                <div class="product-price">
                                                    <span>$34,900<label>/Month</label></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="../assets/product-details.html"><img src="../assets/img/product-3/4.jpg" alt="#"></a>
                                                <div class="real-estate-agent">
                                                    <div class="agent-img">
                                                        <a href="../assets/team-details.html"><img src="../assets/img/blog/author.jpg" alt="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg">For Rent</li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="../assets/product-details.html">New Apartment Nice View</a></h2>
                                                <div class="product-img-location">
                                                    <ul>
                                                        <li>
                                                            <a href="../assets/locations.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                    <li><span>3 </span>
                                                        Bedrooms
                                                    </li>
                                                    <li><span>2 </span>
                                                        Bathrooms
                                                    </li>
                                                    <li><span>3450 </span>
                                                        square Ft
                                                    </li>
                                                </ul>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                <i class="flaticon-expand"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                <i class="flaticon-heart-1"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="../assets/product-details.html" title="Product Details">
                                                                <i class="flaticon-add"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info-bottom">
                                                <div class="product-price">
                                                    <span>$34,900<label>/Month</label></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="../assets/product-details.html"><img src="../assets/img/product-3/5.jpg" alt="#"></a>
                                                <div class="real-estate-agent">
                                                    <div class="agent-img">
                                                        <a href="../assets/team-details.html"><img src="../assets/img/blog/author.jpg" alt="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg">For Rent</li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="../assets/product-details.html">New Apartment Nice View</a></h2>
                                                <div class="product-img-location">
                                                    <ul>
                                                        <li>
                                                            <a href="../assets/locations.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                    <li><span>3 </span>
                                                        Bedrooms
                                                    </li>
                                                    <li><span>2 </span>
                                                        Bathrooms
                                                    </li>
                                                    <li><span>3450 </span>
                                                        square Ft
                                                    </li>
                                                </ul>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                <i class="flaticon-expand"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                <i class="flaticon-heart-1"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="../assets/product-details.html" title="Product Details">
                                                                <i class="flaticon-add"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info-bottom">
                                                <div class="product-price">
                                                    <span>$34,900<label>/Month</label></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="../assets/product-details.html"><img src="../assets/img/product-3/6.jpg" alt="#"></a>
                                                <div class="real-estate-agent">
                                                    <div class="agent-img">
                                                        <a href="../assets/team-details.html"><img src="../assets/img/blog/author.jpg" alt="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg">For Rent</li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="../assets/product-details.html">New Apartment Nice View</a></h2>
                                                <div class="product-img-location">
                                                    <ul>
                                                        <li>
                                                            <a href="../assets/locations.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                    <li><span>3 </span>
                                                        Bedrooms
                                                    </li>
                                                    <li><span>2 </span>
                                                        Bathrooms
                                                    </li>
                                                    <li><span>3450 </span>
                                                        square Ft
                                                    </li>
                                                </ul>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                <i class="flaticon-expand"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                <i class="flaticon-heart-1"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="../assets/product-details.html" title="Product Details">
                                                                <i class="flaticon-add"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info-bottom">
                                                <div class="product-price">
                                                    <span>$34,900<label>/Month</label></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_product_list">
                            <div class="ltn__product-tab-content-inner ltn__product-list-view">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- Search Widget -->
                                        <div class="ltn__search-widget mb-30">
                                            <form action="#">
                                                <input type="text" name="search" placeholder="Search your keyword...">
                                                <button type="submit"><i class="fas fa-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5">
                                            <div class="product-img">
                                                <a href="../assets/product-details.html"><img src="../assets/img/product-3/1.jpg" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge-price">
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badg">For Rent</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$34,900<label>/Month</label></span>
                                                    </div>
                                                </div>
                                                <h2 class="product-title"><a href="../assets/product-details.html">New Apartment Nice View</a></h2>
                                                <div class="product-img-location">
                                                    <ul>
                                                        <li>
                                                            <a href="../assets/locations.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                    <li><span>3 </span>
                                                        Bedrooms
                                                    </li>
                                                    <li><span>2 </span>
                                                        Bathrooms
                                                    </li>
                                                    <li><span>3450 </span>
                                                        square Ft
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-info-bottom">
                                                <div class="real-estate-agent">
                                                    <div class="agent-img">
                                                        <a href="../assets/team-details.html"><img src="../assets/img/blog/author.jpg" alt="#"></a>
                                                    </div>
                                                    <div class="agent-brief">
                                                        <h6><a href="../assets/team-details.html">William Seklo</a></h6>
                                                        <small>Estate Agents</small>
                                                    </div>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                <i class="flaticon-expand"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                <i class="flaticon-heart-1"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="../assets/product-details.html" title="Product Details">
                                                                <i class="flaticon-add"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5">
                                            <div class="product-img">
                                                <a href="../assets/product-details.html"><img src="../assets/img/product-3/2.jpg" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge-price">
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badg">For Rent</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$34,900<label>/Month</label></span>
                                                    </div>
                                                </div>
                                                <h2 class="product-title"><a href="../assets/product-details.html">New Apartment Nice View</a></h2>
                                                <div class="product-img-location">
                                                    <ul>
                                                        <li>
                                                            <a href="../assets/locations.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                    <li><span>3 </span>
                                                        Bedrooms
                                                    </li>
                                                    <li><span>2 </span>
                                                        Bathrooms
                                                    </li>
                                                    <li><span>3450 </span>
                                                        square Ft
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-info-bottom">
                                                <div class="real-estate-agent">
                                                    <div class="agent-img">
                                                        <a href="../assets/team-details.html"><img src="../assets/img/blog/author.jpg" alt="#"></a>
                                                    </div>
                                                    <div class="agent-brief">
                                                        <h6><a href="../assets/team-details.html">William Seklo</a></h6>
                                                        <small>Estate Agents</small>
                                                    </div>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                <i class="flaticon-expand"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                <i class="flaticon-heart-1"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="../assets/product-details.html" title="Product Details">
                                                                <i class="flaticon-add"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5">
                                            <div class="product-img">
                                                <a href="../assets/product-details.html"><img src="../assets/img/product-3/3.jpg" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge-price">
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badg">For Rent</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$34,900<label>/Month</label></span>
                                                    </div>
                                                </div>
                                                <h2 class="product-title"><a href="../assets/product-details.html">New Apartment Nice View</a></h2>
                                                <div class="product-img-location">
                                                    <ul>
                                                        <li>
                                                            <a href="../assets/locations.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                    <li><span>3 </span>
                                                        Bedrooms
                                                    </li>
                                                    <li><span>2 </span>
                                                        Bathrooms
                                                    </li>
                                                    <li><span>3450 </span>
                                                        square Ft
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-info-bottom">
                                                <div class="real-estate-agent">
                                                    <div class="agent-img">
                                                        <a href="../assets/team-details.html"><img src="../assets/img/blog/author.jpg" alt="#"></a>
                                                    </div>
                                                    <div class="agent-brief">
                                                        <h6><a href="../assets/team-details.html">William Seklo</a></h6>
                                                        <small>Estate Agents</small>
                                                    </div>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                <i class="flaticon-expand"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                <i class="flaticon-heart-1"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="../assets/product-details.html" title="Product Details">
                                                                <i class="flaticon-add"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5">
                                            <div class="product-img">
                                                <a href="../assets/product-details.html"><img src="../assets/img/product-3/4.jpg" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge-price">
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badg">For Rent</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$34,900<label>/Month</label></span>
                                                    </div>
                                                </div>
                                                <h2 class="product-title"><a href="../assets/product-details.html">New Apartment Nice View</a></h2>
                                                <div class="product-img-location">
                                                    <ul>
                                                        <li>
                                                            <a href="../assets/locations.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                    <li><span>3 </span>
                                                        Bedrooms
                                                    </li>
                                                    <li><span>2 </span>
                                                        Bathrooms
                                                    </li>
                                                    <li><span>3450 </span>
                                                        square Ft
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-info-bottom">
                                                <div class="real-estate-agent">
                                                    <div class="agent-img">
                                                        <a href="../assets/team-details.html"><img src="../assets/img/blog/author.jpg" alt="#"></a>
                                                    </div>
                                                    <div class="agent-brief">
                                                        <h6><a href="../assets/team-details.html">William Seklo</a></h6>
                                                        <small>Estate Agents</small>
                                                    </div>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                <i class="flaticon-expand"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                <i class="flaticon-heart-1"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="../assets/product-details.html" title="Product Details">
                                                                <i class="flaticon-add"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5">
                                            <div class="product-img">
                                                <a href="../assets/product-details.html"><img src="../assets/img/product-3/5.jpg" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge-price">
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badg">For Rent</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$34,900<label>/Month</label></span>
                                                    </div>
                                                </div>
                                                <h2 class="product-title"><a href="../assets/product-details.html">New Apartment Nice View</a></h2>
                                                <div class="product-img-location">
                                                    <ul>
                                                        <li>
                                                            <a href="../assets/locations.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                    <li><span>3 </span>
                                                        Bedrooms
                                                    </li>
                                                    <li><span>2 </span>
                                                        Bathrooms
                                                    </li>
                                                    <li><span>3450 </span>
                                                        square Ft
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-info-bottom">
                                                <div class="real-estate-agent">
                                                    <div class="agent-img">
                                                        <a href="../assets/team-details.html"><img src="../assets/img/blog/author.jpg" alt="#"></a>
                                                    </div>
                                                    <div class="agent-brief">
                                                        <h6><a href="../assets/team-details.html">William Seklo</a></h6>
                                                        <small>Estate Agents</small>
                                                    </div>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                <i class="flaticon-expand"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                <i class="flaticon-heart-1"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="../assets/product-details.html" title="Product Details">
                                                                <i class="flaticon-add"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ltn__pagination-area text-center">
                        <div class="ltn__pagination">
                            <ul>
                                <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">10</a></li>
                                <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT DETAILS AREA END -->

    <!-- CALL TO ACTION START (call-to-action-6) -->
    <div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom" data-bg="img/1.jpg--">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg text-center---">
                        <div class="coll-to-info text-color-white">
                            <h1>Looking for a dream home?</h1>
                            <p>We can help you realize your dream of a new home</p>
                        </div>
                        <div class="btn-wrapper">
                            <a class="btn btn-effect-3 btn-white" href="../assets/contact.html">Explore Properties <i class="icon-next"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CALL TO ACTION END -->

    <!-- FOOTER AREA START -->
    <?php require '../includes/footer.php'?>
    <!-- FOOTER AREA END -->

    <!-- MODAL AREA START (Quick View Modal) -->
    <div class="ltn__modal-area ltn__quick-view-modal-area">
        <div class="modal fade" id="quick_view_modal" tabindex="-1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <!-- <i class="fas fa-times"></i> -->
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="modal-product-img">
                                            <img src="../assets/img/product/4.png" alt="#">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="modal-product-info">
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                                </ul>
                                            </div>
                                            <h3>Brake Conversion Kit</h3>
                                            <div class="product-price">
                                                <span>$149.00</span>
                                                <del>$165.00</del>
                                            </div>
                                            <div class="modal-product-meta ltn__product-details-menu-1">
                                                <ul>
                                                    <li>
                                                        <strong>Categories:</strong> 
                                                        <span>
                                                            <a href="#">Parts</a>
                                                            <a href="#">Car</a>
                                                            <a href="#">Seat</a>
                                                            <a href="#">Cover</a>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="ltn__product-details-menu-2">
                                                <ul>
                                                    <li>
                                                        <div class="cart-plus-minus">
                                                            <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="theme-btn-1 btn btn-effect-1" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span>ADD TO CART</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="ltn__product-details-menu-3">
                                                <ul>
                                                    <li>
                                                        <a href="#" class="" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                            <i class="far fa-heart"></i>
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="" title="Compare" data-toggle="modal" data-target="#quick_view_modal">
                                                            <i class="fas fa-exchange-alt"></i>
                                                            <span>Compare</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <hr>
                                            <div class="ltn__social-media">
                                                <ul>
                                                    <li>Share:</li>
                                                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                                    <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL AREA END -->

    <!-- MODAL AREA START (Add To Cart Modal) -->
    <div class="ltn__modal-area ltn__add-to-cart-modal-area">
        <div class="modal fade" id="add_to_cart_modal" tabindex="-1">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="modal-product-img">
                                            <img src="../assets/img/product/1.png" alt="#">
                                        </div>
                                         <div class="modal-product-info">
                                            <h5><a href="../assets/product-details.html">Brake Conversion Kit</a></h5>
                                            <p class="added-cart"><i class="fa fa-check-circle"></i>  Successfully added to your Cart</p>
                                            <div class="btn-wrapper">
                                                <a href="../assets/cart.html" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                                                <a href="../assets/checkout.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                                            </div>
                                         </div>
                                         <!-- additional-info -->
                                         <div class="additional-info d-none">
                                            <p>We want to give you <b>10% discount</b> for your first order, <br>  Use discount code at checkout</p>
                                            <div class="payment-method">
                                                <img src="../assets/img/icons/payment.png" alt="#">
                                            </div>
                                         </div>
                                    </div>
                                </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL AREA END -->

    <!-- MODAL AREA START (Wishlist Modal) -->
    <div class="ltn__modal-area ltn__add-to-cart-modal-area">
        <div class="modal fade" id="liton_wishlist_modal" tabindex="-1">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="modal-product-img">
                                            <img src="../assets/img/product/7.png" alt="#">
                                        </div>
                                         <div class="modal-product-info">
                                            <h5><a href="../assets/product-details.html">Brake Conversion Kit</a></h5>
                                            <p class="added-cart"><i class="fa fa-check-circle"></i>  Successfully added to your Wishlist</p>
                                            <div class="btn-wrapper">
                                                <a href="../assets/wishlist.html" class="theme-btn-1 btn btn-effect-1">View Wishlist</a>
                                            </div>
                                         </div>
                                         <!-- additional-info -->
                                         <div class="additional-info d-none">
                                            <p>We want to give you <b>10% discount</b> for your first order, <br>  Use discount code at checkout</p>
                                            <div class="payment-method">
                                                <img src="../assets/img/icons/payment.png" alt="#">
                                            </div>
                                         </div>
                                    </div>
                                </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL AREA END -->

</div>
<!-- Body main wrapper end -->

    <!-- All JS Plugins -->
    <script src="../assets/js/plugins.js"></script>
    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>
  
</body>

<!-- Mirrored from maelectrics.com/tf/html/quarter-preview/quarter/shop-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jun 2021 00:41:36 GMT -->
</html>

