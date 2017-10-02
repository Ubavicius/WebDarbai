<!-- IDEA: THIRD PAGE -->
        <section>
            <div class="row secBG3">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 secPageTopLeft wow slideInLeft  " data-wow-duration="1s" data-wow-offset="10">
                    <div class="pt-5">
                        <h1>Gipso liejiniai</h1>
                        <div class="dekoras">
                            <?php
                            $users = getUsers(3);
                            $user = mysqli_fetch_assoc($users);
                            echo "<p>" . $user['straipsnis'] . "</p>";
                             ?>
                            <a class="text-uppercase" href="./gallery.php">Pamatyk daugiau...</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 secPageTopRight ">
                    <img class="gipsasCover img-fluid img-thumbnail" src="./img/gipsoliejiniai.png" alt="">
                </div>
            </div>
            <div class="row secBG4">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <img class="stalaiCover float-right img-fluid img-thumbnail" src="./img/stalas1.jpg" alt="">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 secPageBotRight wow slideInRight" data-wow-duration="1s" data-wow-offset="10">
                    <div class="pt-5">
                        <h1>Epoksidiniai stalai</h1>
                        <div class="dPlokstes">
                            <?php
                            $users = getUsers(4);
                            $user = mysqli_fetch_assoc($users);
                            echo "<p>" . $user['straipsnis'] . "</p>";
                             ?>
                            <a class="text-uppercase" href="./gallery.php">Pamatyk daugiau...</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                </div>
            </div>
        </section>
<!-- IDEA: END THIRD PAGE -->
