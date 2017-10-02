<div id="wrapper">
<!-- IDEA: SECOND PAGE -->
    <section>
        <?php
            include_once('./lib/function-users.php');
         ?>
        <div id="paslaugos" class="row secBG1 ">
            <div class="col-lg-2">

            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 secPageTopLeft wow slideInLeft  " data-wow-duration="1s" data-wow-offset="10" >
                <div class="pt-5">
                    <h1>Dekoras</h1>
                    <div class="dekoras ">
                        <?php
                        $users = getUsers(1);
                        $user = mysqli_fetch_assoc($users);
                        echo "<p>" . $user['straipsnis'] . "</p>";
                        ?>
                        <a class="text-uppercase" href="./gallery.php">Pamatyk daugiau...</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 secPageTopRight">
                    <img class="dekorasCover img-fluid img-thumbnail" src="./img/dekoras.jpg" alt="">
            </div>
        </div>
        <div class="row secBG2 ">
            <div class="col-lg-7 col-md-6 col-sm-12 secPageBotLeft  ">
                <img class="ploksteCover float-right img-fluid img-thumbnail" src="./img/plokste.jpg" alt="">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 secPageBotRight wow slideInRight " data-wow-duration="1s" data-wow-offset="10">
                <div class="pt-5">
                    <h1>3d plokštės</h1>
                    <div class="dPlokstes">
                        <?php
                        $users = getUsers(2);
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
<!-- IDEA: END SECOND PAGE -->
