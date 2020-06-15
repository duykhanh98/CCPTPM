<?php
    $sql = "SELECT * FROM Product ORDER BY ID DESC limit 0,4";
    $run = mysqli_query($conn, $sql); 

    $sql_Nam = "SELECT * FROM Product WHERE ID_LOAI = 1 ORDER BY ID DESC LIMIT 0,4";
    $run_Nam = mysqli_query($conn, $sql_Nam);
 ?>

<!--content-->
        <div class="content">
            <!--banner-bottom-->
                <div class="ban-bottom-w3l">
                    <div class="container">
                        <div class="col-md-6 ban-bottom">
                            <div class="ban-top">
                                <img src="images/p1.jpg" class="img-responsive" alt=""/>
                                <div class="ban-text">
                                    <h4>Men’s Clothing</h4>
                                </div>
                                <div class="ban-text2 hvr-sweep-to-top">
                                    <h4>50% <span>Off/-</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ban-bottom3">
                            <div class="ban-top">
                                <img src="images/p2.jpg" class="img-responsive" alt=""/>
                                <div class="ban-text1">
                                    <h4>Women's Clothing</h4>
                                </div>
                            </div>
                            <div class="ban-img">
                                <div class=" ban-bottom1">
                                    <div class="ban-top">
                                        <img src="images/p3.jpg" class="img-responsive" alt=""/>
                                        <div class="ban-text1">
                                            <h4>T - Shirt</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="ban-bottom2">
                                    <div class="ban-top">
                                        <img src="images/p4.jpg" class="img-responsive" alt=""/>
                                        <div class="ban-text1">
                                            <h4>Hand Bag</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            <!--banner-bottom-->
            <!--new-arrivals-->
                <div class="new-arrivals-w3agile">
                    <div class="container">
                        <h2 class="tittle">Sản phẩm mới</h2>
                        <div class="arrivals-grids">
                            <?php   
                        while ($result = mysqli_fetch_array($run))
                                {
                                ?>
                            <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                                <div class="grid-arr">
                                    <div  class="grid-arrival">
                                        <figure>        
                                            <a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
                                                <div class="grid-img">
                                                    <img  src="<?php echo $result['HinhAnh'] ?>" class="img-responsive" alt="">
                                                </div>
                                                <div class="grid-img">
                                                    <img  src="<?php echo $result['HinhAnh1'] ?>" class="img-responsive"  alt="">
                                                </div>          
                                            </a>        
                                        </figure>   
                                    </div>
                                    <div class="ribben">
                                        <p>NEW</p>
                                    </div>
                                    <div class="ribben1">
                                        <p>SALE</p>
                                    </div>
                                    <div class="block">
                                        <div class="starbox small ghosting"> </div>
                                    </div>
                                    <div class="women">
                                        <h6><a href="single.html"><?php echo $result['TenSP'] ?></a></h6>
                                        <span class="size"><?php echo $result['Size'] ?></span>
                                        <p ><del><?php echo number_format($result['GiaCu']) ." " ."VNĐ" ?></del> <em class="item_price"><?php echo number_format($result['Gia']) ." " ."VNĐ" ?></em></p>
                                        <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Thêm vào giỏ</a>
                                    </div>
                                </div>
                            </div>
                            <?php 
                                    }
                                ?>
                            
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            <!--new-arrivals-->
                <!--accessories-->
            <div class="accessories-w3l">
                <div class="container">
                    <h3 class="tittle">20% Discount on</h3>
                    <span>TRENDING DESIGNS</span>
                    <div class="button">
                        <a href="#" class="button1"> Shop Now</a>
                        <a href="#" class="button1"> Quick View</a>
                    </div>
                </div>
            </div>
            <!--accessories-->
            <!--Products-->
                <div class="product-agile">
                    <div class="container">
                        <h3 class="tittle1">Trang phục nam</h3>
                        <div class="slider">
                            <div class="callbacks_container">
                                <ul class="rslides" id="slider">
                                    
                                    <li>     
                                        <div class="caption">
                                            <?php   
                                            while ($result_Nam = mysqli_fetch_array($run_Nam))
                                            {
                                        ?>
                                            <div class="col-md-3 cap-left simpleCart_shelfItem">
                                                <div class="grid-arr">
                                                    <div  class="grid-arrival">
                                                        <figure>        
                                                            <a href="single.html">
                                                                <div class="grid-img">
                                                                    <img  src="<?php echo $result_Nam['HinhAnh'] ?>" class="img-responsive" alt="">
                                                                </div>
                                                                <div class="grid-img">
                                                                    <img  src="<?php echo $result_Nam['HinhAnh1'] ?>" class="img-responsive"  alt="">
                                                                </div>          
                                                            </a>        
                                                        </figure>   
                                                    </div>
                                                    <div class="block">
                                                        <div class="starbox small ghosting"> </div>
                                                    </div>
                                                    <div class="women">
                                                        <h6><a href="single.html"><?php echo $result_Nam['TenSP'] ?></a></h6>
                                                        <span class="size"><?php echo $result_Nam['Size']?></span>
                                                        <p><del><?php echo number_format($result_Nam['GiaCu']) ." " ."VNĐ" ?> </del><em class="item_price"><?php echo number_format($result_Nam['Gia']) ." " ."VNĐ" ?></em></p>
                                                        <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Thêm vào giỏ</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                                } 
                                             ?>
                                            <div class="clearfix"></div>
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <!--Products-->
            <div class="latest-w3">
                <div class="container">
                    <h3 class="tittle1">Xu hướng thời trang</h3>
                    <div class="latest-grids">
                        <div class="col-md-4 latest-grid">
                            <div class="latest-top">
                                <img  src="images/l1.jpg" class="img-responsive"  alt="">
                                <div class="latest-text">
                                    <h4>Men</h4>
                                </div>
                                <div class="latest-text2 hvr-sweep-to-top">
                                    <h4>-50%</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 latest-grid">
                            <div class="latest-top">
                                <img  src="images/l2.jpg" class="img-responsive"  alt="">
                                <div class="latest-text">
                                    <h4>Shoes</h4>
                                </div>
                                <div class="latest-text2 hvr-sweep-to-top">
                                    <h4>-20%</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 latest-grid">
                            <div class="latest-top">
                                <img  src="images/l3.jpg" class="img-responsive"  alt="">
                                <div class="latest-text">
                                    <h4>Women</h4>
                                </div>
                                <div class="latest-text2 hvr-sweep-to-top">
                                    <h4>-50%</h4>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="latest-grids">
                        <div class="col-md-4 latest-grid">
                            <div class="latest-top">
                                <img  src="images/l4.jpg" class="img-responsive"  alt="">
                                <div class="latest-text">
                                    <h4>Watch</h4>
                                </div>
                                <div class="latest-text2 hvr-sweep-to-top">
                                    <h4>-45%</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 latest-grid">
                            <div class="latest-top">
                                <img  src="images/l5.jpg" class="img-responsive"  alt="">
                                <div class="latest-text">
                                    <h4>Bag</h4>
                                </div>
                                <div class="latest-text2 hvr-sweep-to-top">
                                    <h4>-10%</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 latest-grid">
                            <div class="latest-top">
                                <img  src="images/l6.jpg" class="img-responsive"  alt="">
                                <div class="latest-text">
                                    <h4>Cameras</h4>
                                </div>
                                <div class="latest-text2 hvr-sweep-to-top">
                                    <h4>-30%</h4>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
                <div class="new-arrivals-w3agile">
                    <div class="container">
                        <h3 class="tittle1">Bán chạy - HOT Sale</h3>
                        <div class="arrivals-grids">
                            <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                                <div class="grid-arr">
                                    <div  class="grid-arrival">
                                        <figure>        
                                            <a href="single.html">
                                                <div class="grid-img">
                                                    <img  src="images/p28.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="grid-img">
                                                    <img  src="images/p27.jpg" class="img-responsive"  alt="">
                                                </div>          
                                            </a>        
                                        </figure>   
                                    </div>
                                    <div class="ribben">
                                        <p>NEW</p>
                                    </div>
                                    <div class="ribben1">
                                        <p>SALE</p>
                                    </div>
                                    <div class="block">
                                        <div class="starbox small ghosting"> </div>
                                    </div>
                                    <div class="women">
                                        <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                                        <span class="size">XL / XXL / S </span>
                                        <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                                        <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                                <div class="grid-arr">
                                    <div  class="grid-arrival">
                                        <figure>        
                                            <a href="single.html">
                                                <div class="grid-img">
                                                    <img  src="images/p30.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="grid-img">
                                                    <img  src="images/p29.jpg" class="img-responsive"  alt="">
                                                </div>          
                                            </a>        
                                        </figure>   
                                    </div>
                                    <div class="ribben2">
                                        <p>OUT OF STOCK</p>
                                    </div>
                                    <div class="block">
                                        <div class="starbox small ghosting"> </div>
                                    </div>
                                    <div class="women">
                                        <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                                        <span class="size">XL / XXL / S </span>
                                        <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                                        <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                                <div class="grid-arr">
                                    <div  class="grid-arrival">
                                        <figure>        
                                            <a href="single.html">
                                                <div class="grid-img">
                                                    <img  src="images/s2.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="grid-img">
                                                    <img  src="images/s1.jpg" class="img-responsive"  alt="">
                                                </div>          
                                            </a>        
                                        </figure>   
                                    </div>
                                    <div class="ribben1">
                                        <p>SALE</p>
                                    </div>
                                    <div class="block">
                                        <div class="starbox small ghosting"> </div>
                                    </div>
                                    <div class="women">
                                        <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                                        <span class="size">XL / XXL / S </span>
                                        <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                                        <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                                <div class="grid-arr">
                                    <div  class="grid-arrival">
                                        <figure>        
                                            <a href="single.html">
                                                <div class="grid-img">
                                                    <img  src="images/s4.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="grid-img">
                                                    <img  src="images/s3.jpg" class="img-responsive"  alt="">
                                                </div>          
                                            </a>        
                                        </figure>   
                                    </div>
                                    <div class="ribben">
                                        <p>NEW</p>
                                    </div>
                                    <div class="block">
                                        <div class="starbox small ghosting"> </div>
                                    </div>
                                    <div class="women">
                                        <h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
                                        <span class="size">XL / XXL / S </span>
                                        <p ><del>$100.00</del><em class="item_price">$70.00</em></p>
                                        <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            <!--new-arrivals-->
        </div>