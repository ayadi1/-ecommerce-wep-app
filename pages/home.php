<article class='container'>
    <section class='slider mt-5'>
        <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <!-- Inner -->
            <div class="carousel-inner">
                <!-- Single item -->
                <div class="carousel-item active">
                    <img src="assets/images/s-img.jpg" class="d-block w-100" alt="..." />
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item">
                    <img src="assets/images/s-img-2.jpg" class="d-block w-100" alt="..." />
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item">
                    <img src="assets/images/s-img-3.jpg" class="d-block w-100" alt="..." />
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
            </div>
            <!-- Inner -->

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- search -->
    <section class='search mt-5'>
        <div class="row">
            <form method="get">
                <div class="row mb-4 d-flex justify-content-center">
                    <div class="col-md-3 col-xs-5">
                        <div class="form-outline">
                            <input type="text" name="item" id="form3Example1" class="form-control" />
                            <label class="form-label" for="form3Example1">item name</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-5">
                        <div class="form-outline">
                            <button type="submit" class="btn btn-primary btn-block mb-4">Search</button>
                        </div>
                    </div>
                </div>
            </form>
    </section>
    <section class='search-Results'>
        <?php
        if (isset($_GET) && !empty($_GET['item'])) {
            require_once 'method/produit.php';
            $search = produit::searchForItemByName($_GET['item']);

        ?>
            <?php if ($search == null) { ?>
                <h2>no search results</h2>

            <?php } else { ?>
                <h2>search results</h2>
                <div class="container row mt-5 mb-5">
                    <?php foreach ($search as $b) { ?>
                        <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                            <div class="card">
                                <img class="card-img" src="assets/images/uploads/<?= $b['img'] ?>" alt="<?= $b['nom'] ?>">

                                <div class="card-body">
                                    <h4 class="card-title"><?= $b['nom'] ?></h4>
                                    <h6 class="card-subtitle mb-2 text-muted">category: <?= $b['category'] ?></h6>
                                    <p class="card-text">
                                        <?= $b['discription'] ?>
                                    </p>

                                    <div class="buy d-flex justify-content-between align-items-center">
                                        <div class="price text-success">
                                            <h5 class="mt-4">$<?= $b['prix'] ?></h5>
                                        </div>
                                        <a href="action/AddToOrderList.php?id_p=<?= $b['id_produit']  ?>" class="btn btn-danger mt-3 mb-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

        <?php }
        } ?>
    </section>
    <section class='random-item'>
        <?php
        require_once 'method/produit.php';
        $randomItem = produit::getRandomItem();
        ?>
        <div class="container row mt-5 mb-5">

            <?php foreach ($randomItem as $a) { ?>
                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img" src="assets/images/uploads/<?= $a['img'] ?>" alt="<?= $a['nom'] ?>">

                        <div class="card-body">
                            <h4 class="card-title"><?= $a['nom'] ?></h4>
                            <h6 class="card-subtitle mb-2 text-muted">category: <?= $a['category'] ?></h6>
                            <p class="card-text">
                                <?= $a['discription'] ?>
                            </p>

                            <div class="buy d-flex justify-content-between align-items-center">
                                <div class="price text-success">
                                    <h5 class="mt-4">$<?= $a['prix'] ?></h5>
                                </div>
                                <a href="action/AddToOrderList.php?id_p=<?= $a['id_produit']  ?>" class="btn btn-danger mt-3 mb-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
</article>