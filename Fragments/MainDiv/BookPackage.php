
<h1 class="pull-left BannMsg">Flight Packages</h1><br><br><br><br>
<!-- FIRST ROW OF PACKAGES -->
<script>
     function confirmed_checkout(){
          alert('Success');
     }
</script>
<div class="row" align="center">

     <div class="col-md-4" align="center">
          <div class="card " style="width: 25rem; margin: 20px;">
               <img class="card-img-top cardImage" src="../img/pack1.jpg" alt="Card image cap">
               <div class="card-block">
                    <h5 class="card-title" align="center">Henann Regency Resort And Spa</h5>
                    <p class="card-text">Good for 4 person</p>
                    <p class="card-text">3 Days, 2 Nights</p>
               </div>

               <ul class="list-group list-group-flush">
                    <li class="list-group-item listClassHead">
                         <span class="glyphicon glyphicon-plane HeadGlyph"></span>Iloilo (ILO)</li>
                    <li class="list-group-item listClass">Location: Boracay Island</li>
                    <li class="list-group-item listClass">Roundtrip</li>
                    <li class="list-group-item listClass">
                         <span>Hotel + Transportation</span>
                    </li>
                    <li class="list-group-item listClass">July 1 2017 - July 3 2017</li>
                    <li class="list-group-item listClass">P19,000.00</li>
                    <li class="list-group-item listClass">
                         <form method="post" action="MainDiv/BookPackage_Enter.php">
                              <input type="hidden" name="BP_title1" value="Henann Regency Resort And Spa"/>
                              <input type="hidden" name="BP_pax1" value="4"/>
                              <input type="hidden" name="BP_days1" value="3 Days, 2 Nights"/>
                              <input type="hidden" name="BP_airport1" value="Iloilo (ILO)"/>
                              <input type="hidden" name="BP_location1" value="Boracay Island"/>
                              <input type="hidden" name="BP_trip1" value="Roundtrip"/>
                              <input type="hidden" name="BP_pack1" value="Hotel + Transportation"/>
                              <input type="hidden" name="BP_sched1" value="July 1 2017 - July 3 2017"/>
                              <input type="hidden" name="BP_price1" value="19000"/>
                              <div id="divFrom" class="form-group">
                                   <label> Origin</label>
                                   <select style="width: 100%;" id="descFrom" name="orig1">		<!-- name="descFromS"  -->
                                        <?php include'BookFlight-Destinations.php'; ?>
                                   </select>
                              </div>
                              <div class="form-group ">
               				<label> Number of Passenger</label>
               				<input class="form-control " type="number" placeholder="PASSENGER"
                                        min="1" max="10" name="passenger" required>
               			</div>
                              <div class="form-group">
                                   <input type="submit" class="btn btn-primary" name="checkout_out1"/>
                              </div>
                         </form>
                    </li>
               </ul>
          </div>
     </div>

     <div class="col-md-4" align="center">
          <div class="card " style="width: 25rem; margin: 20px;">
               <img class="card-img-top cardImage" src="../img/pack2.jpg" alt="Card image cap">
               <div class="card-block">
                    <h5 class="card-title" align="center">Paradise Island Park & Beach Resort</h5>
                    <p class="card-text">Good for 6 person</p>
                    <p class="card-text">3 Days, 2 Nights</p>
               </div>

               <ul class="list-group list-group-flush">
                    <li class="list-group-item listClassHead">
                         <span class="glyphicon glyphicon-plane HeadGlyph"></span>Davao (DVO)</li>
                    <li class="list-group-item listClass">Location: Samal Island</li>
                    <li class="list-group-item listClass">One-way Trip</li>
                    <li class="list-group-item listClass">
                         <span>Hotel + Transportation</span>
                    </li>
                    <li class="list-group-item listClass">July 14 2017 - July 16 2017</li>
                    <li class="list-group-item listClass">P24,000.00</li>
                    <li class="list-group-item listClass">
                         <form method="post" action="MainDiv/BookPackage_Enter.php">
                              <input type="hidden" name="BP_title1" value="Paradise Island Park & Beach Resort"/>
                              <input type="hidden" name="BP_pax1" value="6"/>
                              <input type="hidden" name="BP_days1" value="3 Days, 2 Nights2"/>
                              <input type="hidden" name="BP_airport1" value="Davao (DVO)"/>
                              <input type="hidden" name="BP_location1" value="Samal Island"/>
                              <input type="hidden" name="BP_trip1" value="One-way Trip"/>
                              <input type="hidden" name="BP_pack1" value="Hotel + Transportation"/>
                              <input type="hidden" name="BP_sched1" value="July 14 2017 - July 16 2017"/>
                              <input type="hidden" name="BP_price1" value="24000.00"/>
                              <div id="divFrom" class="form-group">
                                   <label> Origin</label>
                                   <select style="width: 100%;" id="descFrom" name="orig1">
                                        <?php include'BookFlight-Destinations.php'; ?>
                                   </select>
                              </div>
                              <div class="form-group ">
               				<label> Number of Passenger</label>
               				<input class="form-control " type="number" placeholder="PASSENGER"
                                        min="1" max="10" name="passenger" required>
               			</div>
                              <div class="form-group">
                                   <input type="submit" class="btn btn-primary" name="checkout_out2"/>
                              </div>
                         </form>
                    </li>
               </ul>
          </div>
     </div>

     <div class="col-md-4" align="center">
          <div class="card " style="width: 25rem; margin: 20px;">
               <img class="card-img-top cardImage" src="../img/pack3.jpg" alt="Card image cap">
               <div class="card-block">
                    <h5 class="card-title" align="center">Best Western Plus The Ivywall Hotel</h5>
                    <p class="card-text">Good for 2 person</p>
                    <p class="card-text">3 Days, 2 Nights</p>
               </div>

               <ul class="list-group list-group-flush">
                    <li class="list-group-item listClassHead">
                         <span class="glyphicon glyphicon-plane HeadGlyph"></span>Puerto Princesa (PPS)</li>
                    <li class="list-group-item listClass">Location: Puerto Princesa</li>
                    <li class="list-group-item listClass">Roundtrip</li>
                    <li class="list-group-item listClass">
                         <span>Hotel + Transportation</span>
                    </li>
                    <li class="list-group-item listClass">July 28 2017 - July 30 2017</li>
                    <li class="list-group-item listClass">P9,000.00</li>
                    <li class="list-group-item listClass">
                         <form method="post" action="MainDiv/BookPackage_Enter.php">
                              <input type="hidden" name="BP_title1" value="Best Western Plus The Ivywall Hotel"/>
                              <input type="hidden" name="BP_pax1" value="2"/>
                              <input type="hidden" name="BP_days1" value="3 Days, 2 Nights2"/>
                              <input type="hidden" name="BP_airport1" value="Puerto Princesa (PPS)"/>
                              <input type="hidden" name="BP_location1" value="Puerto Princesa, Palawan"/>
                              <input type="hidden" name="BP_trip1" value="Roundtrip"/>
                              <input type="hidden" name="BP_pack1" value="Hotel + Transportation"/>
                              <input type="hidden" name="BP_sched1" value="July 28 2017 - July 30 2017"/>
                              <input type="hidden" name="BP_price1" value="9000.00"/>
                              <div id="divFrom" class="form-group">
                                   <label> Origin</label>
                                   <select style="width: 100%;" id="descFrom" name="orig1">
                                        <?php include'BookFlight-Destinations.php'; ?>
                                   </select>
                              </div>
                              <div class="form-group ">
               				<label> Number of Passenger</label>
               				<input class="form-control " type="number" placeholder="PASSENGER"
                                        min="1" max="10" name="passenger" required>
               			</div>
                              <div class="form-group">
                                   <input type="submit" class="btn btn-primary" name="checkout_out3"/>
                              </div>
                         </form>
                    </li>
               </ul>
          </div>
     </div>
</div>

<div class="row" align="center">
     <div class="col-md-4 ">
          <div class="card " style="width: 25rem; margin: 20px;">
               <img class="card-img-top cardImage" src="../img/sample.jpg" alt="Card image cap">
               <div class="card-block">
                    <h4 class="card-title">Happy Family Four in Cebu!</h4>
                    <p class="card-text">A perfect bundle for a Family of four!</p>
               </div>

               <ul class="list-group list-group-flush">
                    <li class="list-group-item listClassHead">
                         <span class="glyphicon glyphicon-plane HeadGlyph"></span>Manila - Cebu</li>
                    <li class="list-group-item listClass">Roundtrip</li>
                    <li class="list-group-item listClass">
                         <span>Hotel + Transportation</span>
                    </li>
                    <li class="list-group-item listClass">P000000</li>
                    <li class="list-group-item">
                         <center>
                              <input type="submit" name="" value="Checkout" class="btn btn-primary">
                         </center>
                    </li>
               </ul>
          </div>
     </div>

     <div class="col-md-4 ">
          <div class="card " style="width: 25rem; margin: 20px;">
               <img class="card-img-top cardImage" src="../img/sample.jpg" alt="Card image cap">
               <div class="card-block">
                    <h4 class="card-title">Happy Family Four in Cebu!</h4>
                    <p class="card-text">A perfect bundle for a Family of four!</p>
               </div>

               <ul class="list-group list-group-flush">
                    <li class="list-group-item listClassHead">
                         <span class="glyphicon glyphicon-plane HeadGlyph"></span>Manila - Cebu</li>
                    <li class="list-group-item listClass">Roundtrip</li>
                    <li class="list-group-item listClass">
                         <span>Hotel + Transportation</span>
                    </li>
                    <li class="list-group-item listClass">P000000</li>
                    <li class="list-group-item">
                         <center>
                              <input type="submit" name="" value="Checkout" class="btn btn-primary">
                         </center>
                    </li>
               </ul>
          </div>
     </div>

     <div class="col-md-4 ">
          <div class="card " style="width: 25rem; margin: 20px;">
               <img class="card-img-top cardImage" src="../img/sample.jpg" alt="Card image cap">
               <div class="card-block">
                    <h4 class="card-title">Happy Family Four in Cebu!</h4>
                    <p class="card-text">A perfect bundle for a Family of four!</p>
               </div>

               <ul class="list-group list-group-flush">
                    <li class="list-group-item listClassHead">
                         <span class="glyphicon glyphicon-plane HeadGlyph"></span>Manila - Cebu</li>
                    <li class="list-group-item listClass">Roundtrip</li>
                    <li class="list-group-item listClass">
                         <span>Hotel + Transportation</span>
                    </li>
                    <li class="list-group-item listClass">P000000</li>
                    <li class="list-group-item">
                         <center>
                              <input type="submit" name="" value="Checkout" class="btn btn-primary">
                         </center>
                    </li>
               </ul>
          </div>
     </div>
</div>
