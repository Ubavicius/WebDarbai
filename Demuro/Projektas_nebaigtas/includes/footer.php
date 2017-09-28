<!-- IDEA: FOOTER -->
        <footer>
            <div class="row footerRow">
                  <div class="col-md-6 footBG1 ">
                      <div id="kontaktai" class="uzklausa">
                          <form class="uzklausosForma" action="./lib/siusti.php" method="post">
                              <div class="prisijungimas d-flex flex-row">
                                  <input class="formaEmail" type="email" name="elpastas" value="" placeholder="El.paštas">
                                  <input class="formosVardas" type="text" name="antraste" value="" maxlength="100" placeholder="Jūsų vardas">
                              </div>
                              <div class="zinuteBut">
                                  <textarea class="formosZinute" name="zinute" rows="8" cols="60" placeholder="Sudidomėjei? Paklausk, mielai atsakysime!"></textarea>
                                  <!-- <button type="submit" value="klausti" href="#" class="btn btn-outline-primary formaBut">Klausti</button> -->
                              </div>
                              <input class="formaBut" type="submit" name="send" value="Klausti">

<!-- ++++++++++++++++++++++++++++++++ DUOMENU PADAVIMAS I DUOMENU BAZE +++++++++++++++++++++++++++++  -->
                              <?php
                                //   $duomenys = $_POST;
                                //   // print_r($duomenys); //isveda masyva su visais ivestais duomeniis
                                //   $vardas = $duomenys['vardas'];
                                //   $elpastas = $duomenys['elpastas'];
                                //   $klausimas = $duomenys['zinute'];
                                //
                                //
                                // //   if($slaptazodis === $slaptazodis2){
                                //       createQuery($vardas, $elpastas, $klausimas);
                                //       echo '<h1 class="text-center">Ačiū už Jūsų klausimą. Atsakysime kaip galima ggreičiau!</h1>';
                                //   }   else {
                                //       echo '<h2 class="text-center alert-danger">Klausimo išsiųsti nepavyko. Bandykite dar kartą!</h2>';
                                //   }
                              ?>
 <!-- ++++++++++++++++++++++++++++++++ DUOMENU PADAVIMAS I DUOMENU BAZE +++++++++++++++++++++++++++++  -->

                          </form>
                      </div>
                  </div>
                  <div class="col-md-6 footBG2 ">
                      <div id="apieMusId" class="apieMus" >
                          <div class="google">
                              <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2382.2895755149007!2d23.88758865708674!3d54.93283143962876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1slt!2slt!4v1506515856139" width="600" height="300" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                          </div>
                          <div class=" text-uppercase text-center text-light">

                          </div>
                      </div>
                  </div>
            </div>
            <div class="copyRight row">
                <div class="col-md-12 text-center mt-4">

                    <small class="text-secondary">Visos teisės saugomos &copy; 2017, EdgeDesign</small>
                </div>
            </div>
        </footer>
<!-- IDEA: END FOOTER -->
    </div>
<!-- IDEA: END WRAPPER -->
<!-- IDEA: END CONTAINER -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
<script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="./js/lightbox-plus-jquery.min.js"></script>
<script src="./js/wow.min.js"></script>
<script src="./js/main.js" ></script>

<!-- <script src="http://code.jquery.com/jquery-latest.js"></script> -->
</body>
</html>
