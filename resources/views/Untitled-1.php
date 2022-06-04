<?php
   // config
   include("config.php");
   
   session_start();
   
   if (isset($_GET['lang'])) {
   	if (isset($_GET['lang']) && $_GET['lang'] == 'en') {
   		$_SESSION['lang'] = 'en';
   	} else if (isset($_GET['lang']) && $_GET['lang'] == 'de') {
   		$_SESSION['lang'] = 'de';
   	}
   }
   
   if (isset($_SESSION['lang'])) {
   	include_once('language/' . $_SESSION['lang'] . '.php');
   } else {
   	$_SESSION['lang'] = 'en';
   	include_once('language/en.php');
   }
   ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>BloodyARK - Evolve or Die</title>
      <!-- Bootstrap 4 -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <!-- Offcanvas -->
      <link rel="stylesheet" type="text/css" href="https://unpkg.com/js-offcanvas@1.2.0/dist/_css/prefixed/js-offcanvas.css">
      <!-- FontAwesome 5 Pro -->
      <link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.css">
      <!-- OWL Slider -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />
      <!-- AOS -->
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <!-- Animate.css -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
      <!-- Website icon -->
      <link rel="shortcut icon" href="assets/images/favicon.webp" />
   </head>
   <body>
      <section class="header-slider">
         <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="d-block w-100" src="images/island_bg1.jpg" alt="1 slide">
                  <div style="background: none;" class="carousel-caption d-none d-md-block">
                     <a href="#"><img src="images/logo.png" alt="BloodyARK" style="max-width:300px"></br></a>
                     </br>
                     <a href="http://portal.bloody-ark.com" target="_blank"><button type="button" class="btn btn-danger">Online Players <span class="badge badge-light"><?php echo $allplayers; ?></span></button></a></br>
                     <a href="https://discord.gg/bloody"><img src="https://discordapp.com/api/guilds/356693332623228928/widget.png?style=banner2" alt="BloodyARK Discord" style="max-width:250px"></a>
                     <a href="https://steamcommunity.com/groups/bloodyark"><img src="https://i.imgur.com/Tup1W62l.png" alt="BloodyARK Steam Group" style="max-width:0px"></a>
                     <div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="images/bg_header.jpg" alt="2 slide">
                  <div style="background: none;" class="carousel-caption d-none d-md-block">
                     <a href="#"><img src="images/logo.png" alt="BloodyARK" style="max-width:300px"></br></a>
                     </br>
                     <a href="http://portal.bloody-ark.com" target="_blank"><button type="button" class="btn btn-danger" style="max-width:220px">Online Players <span class="badge badge-light"><?php echo $allplayers; ?></span></button></a></br>
                     <a href="https://discord.gg/bloody"><img src="https://discordapp.com/api/guilds/356693332623228928/widget.png?style=banner2" alt="BloodyARK Discord" style="max-width:250px"></a>
                     <a href="https://steamcommunity.com/groups/bloodyark"><img src="https://i.imgur.com/Tup1W62l.png" alt="BloodyARK Steam Group" style="max-width:0px"></a>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="images/aberration_bg1.jpg" alt="3 slide">
                  <div style="background: none;" class="carousel-caption d-none d-md-block">
                     <a href="#"><img src="images/logo.png" alt="BloodyARK" style="max-width:300px"></br></a>
                     </br>
                     <a href="http://portal.bloody-ark.com" target="_blank"><button type="button" class="btn btn-danger" style="max-width:220px">Online Players <span class="badge badge-light"><?php echo $allplayers; ?></span></button></a></br>
                     <a href="https://discord.me/bloody"><img src="https://discordapp.com/api/guilds/356693332623228928/widget.png?style=banner2" alt="BloodyARK Discord" style="max-width:250px"></a>
                     <a href="https://steamcommunity.com/groups/bloodyark"><img src="https://i.imgur.com/Tup1W62l.png" alt="BloodyARK Steam Group" style="max-width:0px"></a>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="images/dungeon_bg1.jpg" alt="4 slide">
                  <div style="background: none;" class="carousel-caption d-none d-md-block">
                     <a href="#"><img src="images/logo.png" alt="BloodyARK" style="max-width:300px"></br></a>
                     </br>
                     <a href="http://portal.bloody-ark.com" target="_blank"><button type="button" class="btn btn-danger" style="max-width:220px">Online Players <span class="badge badge-light"><?php echo $allplayers; ?></span></button></a></br>
                     <a href="https://discord.gg/bloody"><img src="https://discordapp.com/api/guilds/356693332623228928/widget.png?style=banner2" alt="BloodyARK Discord" style="max-width:250px"></a>
                     <a href="https://steamcommunity.com/groups/bloodyark"><img src="https://i.imgur.com/Tup1W62l.png" alt="BloodyARK Steam Group" style="max-width:0px"></a>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="images/boot_bg3.jpg" alt="5 slide">
                  <div style="background: none;" class="carousel-caption d-none d-md-block">
                     <a href="#"><img src="images/logo.png" alt="BloodyARK" style="max-width:300px"></br></a>
                     </br>
                     <a href="http://portal.bloody-ark.com" target="_blank"><button type="button" class="btn btn-danger" style="max-width:220px">Online Players <span class="badge badge-light"><?php echo $allplayers; ?></span></button></a></br>
                     <a href="https://discord.gg/bloody"><img src="https://discordapp.com/api/guilds/356693332623228928/widget.png?style=banner2" alt="BloodyARK Discord" style="max-width:250px"></a>
                     <a href="https://steamcommunity.com/groups/bloodyark"><img src="https://i.imgur.com/Tup1W62l.png" alt="BloodyARK Steam Group" style="max-width:0px"></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="navbar">
         <!-- Navbar -->
         <nav class="navbar navbar-expand-lg navbar-light bg-bloody" id="banner">
            <div class="container">
               <a class="navbar-brand d-none d-xs-block d-sm-block d-md-none" href="index.php">
               <img class="img-fluid" src="assets/images/logo1.png">
               </a>
               <button class="navbar-toggler js-offcanvas-toggler" data-button-options='{"wrapText":false}' aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarsExampleDefault" data-set="bs">
                  <!--	<form class="form-inline">
                     <a href="" data-toggle="modal" data-target="#login" class="btn btn-steam"><i class="fab fa-steam-symbol"></i> Steam</a>
                     </form> -->
                  <ul class="navbar-nav mx-md-auto js-append-around">
                     <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="fas fa-home"></i> <?php echo $l['home']; ?></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="http://portal.bloody-ark.com/servers"><i class="fas fa-tachometer-alt-slowest"></i> <?php echo $l['portal']; ?></a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-server"></i> <?php echo $l['servers']; ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item" href="pvpve.php">Main Cluster (PVPVE)</a>
                           <a class="dropdown-item" href="pvp.php">Small Tribes (PVP)</a>
                           <a class="dropdown-item" href="pve.php">Survival (PVE)</a>
                        </div>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="https://discord.gg/bloody"><i class="fas fa-life-ring"></i> <?php echo $l['support']; ?></a>
                     </li>
                     <!--
                        <li class="nav-item">
                        		<a class="nav-link" href="https://forum.bloody-ark.com/"><i class="fas fa-comments-alt"></i> <?php echo $l['forum']; ?></a>
                        </li> -->
                     <li class="nav-item">
                        <a class="nav-link" href="https://shop.bloody-ark.com/"><i class="fas fa-store-alt"></i> <?php echo $l['store']; ?></a>
                     </li>
                     <!-- 
                        <li class="nav-item">
                        		<a class="nav-link" href=""><i class="fas fa-box-usd"></i> <?php echo $l['donate']; ?></a>
                        </li> -->
                     <li class="nav-item">
                        <a class="nav-link" href="https://discord.gg/bloody"><i class="fab fa-discord"></i> Discord</a>
                     </li>
                     <!--	<?php if (isset($_GET['lang']) && $_GET['lang'] == 'de') { ?>
                        <li class="nav-item">
                        	<a class="nav-link" href="?lang=en"><img src="assets/images/us.webp"></a>
                        </li>
                        <?php } else { ?>
                        <li class="nav-item">
                        	<a class="nav-link" href="?lang=de"><img src="assets/images/de.webp"></a>
                        </li>
                        <?php } ?> -->
                  </ul>
               </div>
            </div>
         </nav>
         <div class="c-offcanvas is-hidden" id="left" role="complementary">
            <div class="navbar">
               <!-- container for appendAround -->
               <div class="offcanvas-nav d-block d-md-none" data-set="bs">
                  <!--<a class="lang" href=""><img src="assets/images/de.webp"> Deutschland</a>-->
               </div>
            </div>
         </div>
      </section>
      <div class="news-feed-body">
      <div class="container">
      <section class="news-feed">
         <div class="news-feed-img text-center">
            <h1 class="display-6">ANNOUNCEMENT</h1>
            <img class="card-img-top" src="https://i.ibb.co/8Xv3Tgh/ajaja.png">
         </div>
         <div class="news-feed-body">
         <p style="font-weight:bold"> VoidwyrmAPI, soars with us!</p>
         </br>
         </br>
         <p><span style="text-decoration: underline;"><strong><img src="https://voidwyrmapi.com/assets/VoidwyrmIco.png" width="300"/></strong></span></p>
         <h3>Voidwyrm API</h3>
         <p>The bloody ARK team is working on an amazing project called Voidwyrm API with the mod creator Lynix Zenial! This project allows the Bloody ARK servers to be more flexible and provides possibilitys to add new features in newer seasons!</p>
         <p>Want to dig deeper into Voidwyrm API and let us know what you'd like to see?</p>
         <p>Visit our website! <a href="https://voidwyrmapi.com">https://voidwyrmapi.com</a>
         <p>&nbsp;</p>
         <p>&nbsp;</p>
         <hr/>
         <div class="news-feed-body">
         <p style="font-weight:bold"> GENESIS PART 2 ANNOUNCEMENT</p>
         </br>
         </br>
         <p><span style="text-decoration: underline;"><strong><img src="https://cdn.discordapp.com/attachments/433187876398694401/844255698308956210/gen2banner.jpg" width="535" height="301" /></strong></span></p>
         <p>Due to Wild Card delaying the release of genesis 2 by another week (June 2 Is The New Release Day), we have decided to change the wipe days of our clusters:</p>
         <ul>
            <li>PVPVE Main Cluster will now wipe on the <strong>2nd of June at 9 PM CEST</strong> | 02/06/2021 | The Exact time of wipe may change depending on when Wildcard Releases it</li>
            <li>PVP Smalls Cluster Will Wipe As Planned Before, on the <strong>28 th Of May at 8PM CEST</strong> | 28/05/2021</li>
            <li>PVE Cluster Will Have The Map Introduced As Planned Before, <strong>2nd of June</strong> | 02/06/2021</li>
         </ul>
         <ul style="list-style-type: square;">
            <li>OFFICIAL AND COMMUNITY POLL PVPVE CLUSTER START 18.05 - 21.05</li>
            <li>OFFICIAL AND COMMUNITY POLL PVP CLUSTER START 24.05 - 27.05</li>
         </ul>
         <ul>
            <li>Brand New Quest System Plugin - We are developing a mod</li>
            <li>S+ Update to latest version</li>
         </ul>
         <p><span style="text-decoration: underline;"><strong>PVE CLUSTER:</strong></span></p>
         <ul style="list-style-type: circle;">
            <li><strong>Genesis II will be released right away</strong></li>
            <li>New Maps! Scorched Earth and The Center. Center will have open world pvp active.</li>
            <li>We will be re-adding Aberration and Valguero</li>
            <li>Custom Map with Custom Creatures, Custom Dungeons, Boss Raids</li>
         </ul>
         <p>&nbsp;</p>
         <p>&nbsp;</p>
         <hr/>
         <div class="news-feed-body">
         <p style="font-weight:bold">WIPE ANNOUNCEMENT FOR MAINCLUSTER (PVPVE) AND START OF SEASON 26 </p>
         <p class="text-left">Dear players of Bloody Ark, we’re happy to announce that Season 26 of our Maincluster will start on April 16. at 20:00 CEST</p>
         </br>
         </br>
         <div tabindex="-1" role="listitem" data-list-item-id="chat-messages___chat-messages-832331454036836402">
            <div role="document">
               <div><u><strong>Season 26 Change Log</strong></u></div>
               <div>Here are the new changes for the 26th Season of our Main/PVPVE/<em>12</em>-man Cluster! The new things will be listed down below. At the end there will be a link to the spreedsheet with a detailed list! The big changes will be listed here!</div>
               <div>
                  <hr />
               </div>
               <div><strong>New Shop overhaul/Interface</strong></div>
               <div>This season the old F1 Shop will be disabled and a new shop with a nice interface will be released!</div>
               <div>
                  <hr />
                  <strong>Physical lootboxes</strong>
               </div>
               <div>Like on the smalltribes cluster boxes will now be a item you can store in your inventory or structures!</div>
               <div>
                  <hr />
               </div>
               <div><strong>PVE-Changes</strong></div>
               <ul>
                  <li>ONLY 12hrs of pve buyable on weekends</li>
                  <li>PVE needs 4 hrs to activate<time datetime="2021-04-15T20:37:53.090Z" aria-label="Yesterday at 22:37">(edited)</time></li>
                  <li>20% reduced harvest on weekends if in pve</li>
               </ul>
            </div>
         </div>
         <div tabindex="-1" role="listitem" data-list-item-id="chat-messages___chat-messages-832331485867933737">
            <div role="document">
               <div>
                  <hr />
               </div>
               <div><strong>New Root</strong>&nbsp;</div>
               <div>We will add another root server to our cluster for better preformance</div>
               <div>
                  <hr />
                  <strong>Hitlist</strong>
               </div>
               <div>Yes, for the long time players here. ITS BACK! A hitlist system will be released with a alpha system with rewards for the alpha and raiders of the alpha. <em>More Infos will follow</em></div>
               <div>
                  <hr />
               </div>
               <div><strong>Dino Changes</strong></div>
               <div>Basilosaurus will be buffed&nbsp;</div>
               <div>Carbos will be buffed</div>
               <div>Megachelon Resistance will be increased</div>
               <div>Current status of Stegos, Velos and Racers will stay the same</div>
               <div>C4 can be placed on Carbos</div>
               <div>
                  <hr />
                  <strong>Other Changes</strong>
               </div>
               <ul>
                  <li>Renaming dinos now possible with /dn ( Example /dn Bloody 55Damage = Dino will be named Bloody 55Damage ) - Level 1 Dinos will be fixed</li>
                  <li>Lootboxes will be removed from the webshop - OSDS will be changed (loot)</li>
                  <li>Bola timer will be 15s</li>
                  <li>Stack Mods will be 2.5k</li>
                  <li>RTA will be modified</li>
                  <li>Cannon nerf will be decreased</li>
                  <li>Gigas in rebuildkits will be lvl 202</li>
                  <li>Structure limit will be 20.000 per map</li>
               </ul>
            </div>
            <div>
               <div aria-label="Message Actions"></div>
            </div>
         </div>
         <div tabindex="-1" role="listitem" data-list-item-id="chat-messages___chat-messages-832331575176855554">
            <div role="document">
               <div>
                  <hr />
               </div>
               <div><strong>Full Sheet And Details:</strong> <a tabindex="0" title="https://docs.google.com/spreadsheets/d/1z07Zz2_WEhonV8XFoAYMvvYOj1pOfxbSSqMonrArkQk/edit?usp=sharing" role="button" href="https://docs.google.com/spreadsheets/d/1z07Zz2_WEhonV8XFoAYMvvYOj1pOfxbSSqMonrArkQk/edit?usp=sharing" target="_blank" rel="noreferrer noopener">https://docs.google.com/spreadsheets/d/1z07Zz2_WEhonV8XFoAYMvvYOj1pOfxbSSqMonrArkQk/edit?usp=sharing</a></div>
               <div>
                  <hr />
                  <p><strong>TIMELINE&nbsp;</strong></p>
                  <p><strong>------------------------------ Season 26 Timeline ------------------------------- </strong></p>
                  <p>16/4 @ 20:00 CEST Season 26 Starts</p>
                  <p>17/4 @ 12:00 CEST Starter Kits</p>
                  <p>18/4 @ 20:00 CEST</p>
                  <p>Enabled for taming:</p>
                  <ul>
                     <li>Managarmr</li>
                     <li>Crystal Wyvern</li>
                     <li>Snow Owl - Golem</li>
                     <li>Gacha - Griffin</li>
                     <li>Gas Bag</li>
                     <li>Megachelon</li>
                     <li>Bloodstalker</li>
                     <li>Stegosaurus enabled for taming</li>
                  </ul>
                  <p>WebShop Enabled</p>
                  <p>Achievements Enabled</p>
                  <p>Full Ingame Shop enabled</p>
                  <p>1 week structure protection enabled for new players</p>
                  <p>All purchases made 2 weeks before wipe announcement will be re-sent automatically</p>
                  <p>19/4 @ 20:00 CET Season 25 donators receive a coupon for 20% of their total donations (open a ticket for it)</p>
                  <p>25/4 @ 20:00 CEST Season 25 Highlight rewards distributed</p>
               </div>
            </div>
         </div>
         <hr/>
         <div class="news-feed-body">
            <p style="font-weight:bold">SMALL TRIBES SEASON 10 (WIPE ANNOUNCEMENT) </p>
            </br>
            <div class="col-md-8">
               <img src="images/smalltribesnew.png" class="img-fluid" alt="bloody image">
            </div>
            <p style="text-align: justify;"><br />We are happy to announce that the Small Tribe Cluster(PVP) Will be wiping on 26/3/21 at 20:00 CET.</p>
            <div tabindex="-1" role="listitem" data-list-item-id="chat-messages___chat-messages-824774465853587457">
               <div role="document">
                  <div><strong>Small Tribes Season 10 Change Log</strong></div>
                  <div>Alot of testing has gone into the following changes and we hope that they encourage and help balance pvp during the wipe.</div>
                  <div>&nbsp;</div>
                  <div><strong>New Root Server</strong></div>
                  <div>Due to performance issues caused by high pop, we have decided it is in our best interest to add another server. This should help prevent performance issues, please leave feedback about the performance</div>
                  <div>&nbsp;</div>
                  <div><strong>Element Changes</strong></div>
                  <div>Element we believe has become too easy to acquire on certain maps and not viable on other maps, due to element grinding and other features we have decided to change element gains from bosses, extinction along with genesis.</div>
                  <div>&nbsp;</div>
                  <div>Genesis - 0.65x Before it was extremely easy to farm large amounts of element with relatively low risk and investment. With this change element will still be viable but it wont be as strong as before.</div>
                  <div>&nbsp;</div>
                  <div>Extinction - 0.7x We believe this will encourage more players to run element veins and therefore lead to more pvp.</div>
                  <div>&nbsp;</div>
                  <div><strong>Boss Element Changes: </strong></div>
                  <ul>
                     <li>Island Bosses - Unchanged</li>
                     <li>Scorched Earth Manticore - Unchanged</li>
                     <li>Center: - Gamma Unchanged - Beta 30% increase (216 Element) - Alpha 30% increase (452 Element)</li>
                     <li>Ragnarok: - Gamma Unchanged - Beta 40% Increase (280 Element) - Alpha 40% increase (574 Element)</li>
                     <li>Valguero: - Gamma Unchanged - Beta 30% increase (331 Element) - Alpha 30% Increase (676 Element)</li>
                  </ul>
               </div>
               <div>
                  <div aria-label="Message Actions">
                     <div>&nbsp;</div>
                  </div>
               </div>
            </div>
            <div tabindex="-1" role="listitem" data-list-item-id="chat-messages___chat-messages-824774612256555079">
               <div role="document">
                  <div><strong>Additional Changes:</strong></div>
                  <div>Dino's Will Now Spawn Inside Cryopods When Bought From Shop</div>
                  <div>Bola Timer Reduced to 15 Seconds</div>
                  <div>Alpha Boss Kits Will Now Be Available In The Ingame Shop After 1 Week</div>
                  <div>More Vip 3 Purchase Options Available</div>
                  <div>Adjusted Road To Alpha Requirements Added 2 New Commands</div>
                  <div>- /dn will now include the target dino's base stats into its name</div>
                  <div>- /ds will show target dino's base stats Pickup Gun Replacement, Press Alt + G to pickupStructures (Currently Testing)</div>
                  <div>&nbsp;</div>
                  <div><strong>Loot Changes:</strong></div>
                  <div>Adjusted OSD Loot Table (Available After Sunday)</div>
                  <div>Drops Can now Spawn With 2 Rings For Rare Mystery Loot (Available After Sunday)</div>
                  <div>Adjusted Ark Shop (Available After Sunday)</div>
                  <div>&nbsp;</div>
                  <div><strong>Banned Spot Changes</strong></div>
                  <div>The following locations have been changed and are allowed to be built at:</div>
                  <ul>
                     <li>The Center: Pearl Cave,North Ice, Underworld Cave</li>
                     <li>Valguero: Spider Cave</li>
                     <li>The Island: Ice Cave</li>
                     <li>Scorched Earth: Central Cave</li>
                     <li>Aberration: Shadow Cave&nbsp;</li>
                  </ul>
                  <div><strong>Tribe Manager</strong></div>
                  <div>We have also added a new tribe manager. This plugin will allow you to view invite and join tribes with commands.</div>
                  <div>We have also integrated this with discord so it can also be done through there! Please see server settings for the ingame commands!</div>
               </div>
            </div>
            <div tabindex="-1" role="listitem" data-list-item-id="chat-messages___chat-messages-824774719404376074">
               <div role="document">
                  <br />
                  <div><strong>Content Creator's Will Now Recieve Free VIP Tier's For Content Creation And Streaming</strong></div>
                  <div>&nbsp;</div>
                  <div><strong>Suggestions:</strong></div>
                  <ul>
                     <li>Carbo Resistance Increassed To 1.3</li>
                     <li>C4 Carbo Enabled Basilosaurus Resistance Increased To 1.3</li>
                     <li>Megachelon Resistance Inreased To 1.3</li>
                     <li>Racer Resistance Increased To 1.4</li>
                     <li>Velonasaur Tamed Damage Increased To 1.3</li>
                     <li>Cannon Damage Reduction Changed to 50%</li>
                     <li>Hatchery And Cloner Limit Removed</li>
                     <li>Wolves Now Able To Detect Sleeping Bags</li>
                     <li>Stack Size Increaed to 1000</li>
                     <li>Metal Cliff Plat Limit Increased To 50</li>
                  </ul>
               </div>
            </div>
            <div tabindex="-1" role="listitem" data-list-item-id="chat-messages___chat-messages-824774795057037384">
               <div role="document">&nbsp;</div>
            </div>
            <div tabindex="-1" role="listitem" data-list-item-id="chat-messages___chat-messages-824774719404376074">
               <div role="document">
                  <div><strong>Full Sheet And Details:</strong> <a tabindex="0" title="https://docs.google.com/spreadsheets/d/15bdNMRMoWJOIbJeH7dG5hscW4un3gF1iok8IucYAB-I/edit?usp=sharing" role="button" href="https://docs.google.com/spreadsheets/d/15bdNMRMoWJOIbJeH7dG5hscW4un3gF1iok8IucYAB-I/edit?usp=sharing" target="_blank" rel="noreferrer noopener">https://docs.google.com/spreadsheets/d/15bdNMRMoWJOIbJeH7dG5hscW4un3gF1iok8IucYAB-I/edit?usp=sharing</a></div>
               </div>
            </div>
            <div tabindex="-1" role="listitem" data-list-item-id="chat-messages___chat-messages-824774795057037384">
               <div role="document">
                  <br />
                  <div><strong>Season 10 Timeline</strong></div>
                  <div>26/3 @ 20:00 CET Season 10 Starts</div>
                  <div>27/3 @ 12:00 CET Tribe ranks Starter kit&nbsp;</div>
                  <div>28/3 @ 20:00 CET Enabled for taming:</div>
                  <div>- Managarmr</div>
                  <div>- Crystal Wyvern</div>
                  <div>- Snow Owl</div>
                  <div>- Golem</div>
                  <div>- Gacha</div>
                  <div>- Griffin</div>
                  <div>- Gas Bag</div>
                  <div>- Megachelon</div>
                  <div>- Stegosaurus enabled for taming WebShop Enabled Achievements Enabled Full Ingame Shop enabled 72h structure protection enabled for new players All purchases made 2 weeks before wipe announcement will be re-sent automatically</div>
                  <div>29/3 @ 20:00 CET Season 9 donators receive a coupon for 20% of their total donations (open a ticket for it)</div>
                  <div>04/4 @ 20:00 CET Season 9 Highlight rewards distributed</div>
               </div>
            </div>
            <hr/>
         </div>
         <div class="news-feed-body">
         <p style="font-weight:bold">WIPE ANNOUNCEMENT FOR MAINCLUSTER (PVPVE) AND START OF SEASON 25 </p>
         </br>
         <p style="text-align: justify;"><br />We are happy to announce that the PvPvE Cluster (Main) Will be wiping on 12/3/21 at 20:00 CET.</p>
         <p style="text-align: justify;">All donations from 21/2 - 11/03 will be resent after the first bloody weekend</p>
         <p style="text-align: justify;">We look forward to seeing all of your suggestions and the votes on the Official Poll.</p>
         <p style="text-align: justify;">Further changes will be announced closer to the wipe!</p>
         <hr />
         <p style="text-align: justify;"><br /><span style="text-decoration: underline;"><strong>NEW TRIBE INVITER</strong></span><br />We are happy to release our new Tribe Inviter. This can be used ingame and through discord!</p>
         <p>This will allow you to open tribe requests ingame. This will post a message in discord where people can request to join.</p>
         <p>You will get a dm from the bot with some information about the player. Once you have decided they can join you can react to the message. This will invite them to your tribe ingame! No more meeting at an obi or finding eachother in the middle of no where being eaten by PVE.</p>
         <p>One the player is in the tribe they will have a 5 minute window to teleport to the tribe owner.</p>
         <p>We hope you all enjoy this new feature and we look forward to hearing your feedback!!</p>
         <p>A big thanks to Sly for all the work he has put into this!</p>
         <hr />
         <p style="text-align: justify;"><br /><span style="text-decoration: underline;"><strong>NEW TICKET BOT</strong></span><br />We are aware of many of you having to wait too long for responses on tickets. As we are running 3 clusters it can be very difficult to manage all the issues quickly.</p>
         <p style="text-align: justify;">In order to reduce wait times for everyone we have been working hard on a new ticket bot! A lot of tickets are opened with little to no information slowing down the process.</p>
         <p style="text-align: justify;">All the information that is required will either be retrieved by the bot or it will request it from you. You will have to provide this to proceed. This will allow our team to immediately begin dealing with the issue rather than having to ask for more information. We hope that automating this process will allow us to be able to quickly respond and resolve most issues.</p>
         <p style="text-align: justify;">We are hoping to have this ready for the wipe and will let you all know when the bot goes live!</p>
         <p style="text-align: justify;">We look forward to hearing your feedback!</p>
         <p style="text-align: justify;">A big thanks to Browne for all his hard work on this bot!</p>
         <hr />
         <p><br /><span style="text-decoration: underline;"><strong>Cave Changes</strong></span><br />We have been working very hard on changing the caves in order enable more locations and balance existing ones.</p>
         <p>We are happy to announce that the following caves have all been modified:</p>
         <ul>
            <li>&nbsp;Island - Ice Cave<br /><a href="https://steamcommunity.com/sharedfiles/filedetails/?id=2347946415">https://steamcommunity.com/sharedfiles/filedetails/?id=2347946415</a></li>
            <li>&nbsp;Center - North Ice - Pearl Cave<br /><a href="https://steamcommunity.com/sharedfiles/filedetails/?id=2414357277">https://steamcommunity.com/sharedfiles/filedetails/?id=2414357277</a></li>
            <li>Valguero - Spider Cave<br /><a href="https://steamcommunity.com/sharedfiles/filedetails/?id=2354848362">https://steamcommunity.com/sharedfiles/filedetails/?id=2354848362</a></li>
            <li>Aberration - Shadow Cave<br /><a href="https://steamcommunity.com/sharedfiles/filedetails/?id=2412486444">https://steamcommunity.com/sharedfiles/filedetails/?id=2412486444</a></li>
            <li>Scorched Earth - Central Cave<br /><a href="https://steamcommunity.com/sharedfiles/filedetails/?id=2414792605">https://steamcommunity.com/sharedfiles/filedetails/?id=2414792605</a></li>
         </ul>
         <p>We also have changes to the crouch on Center Underworld cave being worked on and we will bring you updates on this soon.</p>
         <hr />
         <p><br /><span style="text-decoration: underline;"><strong>Root Server</strong></span><br />We are aware of the growing issues of lag and crashes that many people have had issues with. We have seen many tickets about people losing things to these crashes.</p>
         <p>Even though we do not provide support for this, we have been actively working on resolving this.</p>
         <p>Our best option seems to be to increase the numbers of servers from our host. We hope that this will reduce the amount of lag and crashes you are all experiencing. We will let you all know when this change is happening and please leave feedback on how it performs in our feedback channel.</p>
         <hr/>
         <div class="news-feed-body">
         <p style="font-weight:bold">WIPE ANNOUNCEMENT: SMALL TRIBES - SEASON 7 - START FRIDAY 09.10.2020 </p>
         <p class="text-left">Dear players of Bloody Ark, We want to remind you that our SMALLTRIBES CLUSTER will go into season 7 on friday! Be ready for a fresh wipe 20 November at 19:00 CET.</p>
         </br>
         <div class="col-md-5">
            <img src="assets/images/BANNERsmall7.jpg" class="img-fluid" alt="bloody image">
         </div>
         </br>
         <p  style="font-weight:bold" class="text-left">Season 7 Changelist</p>
         <p style="font-weight:bold">New ORP Settings</p>
         <p class="text-left">Pillars added to restricted zones (no ORP, no PvP-Protection).</P>
         <p class="text-left">Most of the caves and pillars are now blacklisted in our plugin so it is not possible to place an ORP in these places. Open a ticket if you find a spot which should not have an ORP according to our rules and is not already blacklisted.</p>
         <p class="text-left">You are now able to see your own ORP with the command /showorp</p>
         <p  style="font-weight:bold" class="text-left">Rebuild-Kit application with ingame commands</p>
         <li>Tickets are not needed anymore.</li>
         <li>/rebuild gamma, /rebuild beta, /rebuild alpha, /rebuild prot</li>
         <li>Only ingame tribe owner can apply for a rebuild kit.</li>
         <li>Requests will be checked by an admin. Abuses will get punished.</li>
         <li>Check with /kits if your rebuild kit got approved.</li>
         <p>	</p>
         <p  style="font-weight:bold" class="text-left">New AntiStructureMesh Plugin</p>
         <p class="text-left">This plugin will detect and delete structures which are placed inside the mesh.</p>
         <p  style="font-weight:bold" class="text-left">Bloody Structures Mod</p>
         <p class="text-left">Modified Version of S+</p>
         <p  style="font-weight:bold" class="text-left">Remove S+ Generator</p>
         <p  style="font-weight:bold" class="text-left">Raft Structure limit has been raised to 150 (yes you can build a battle ship)</p>
         <p  style="font-weight:bold" class="text-left">Artefact caves can be taken immediately after server wipe</p>
         <p  style="font-weight:bold" class="text-left">PvP-Protection will be available from Sunday 22. November at 20:00 CET. Please refer to the information in our wipe announcement.</p>
         <p  style="font-weight:bold" class="text-left">Transferable Tributs </p>
         <p  style="font-weight:bold" class="text-left">AutoEngrams</p>
         <p  style="font-weight:bold" class="text-left">/upload < slotname > - Upload current inventory items to < slotname ></p>
         <p  style="font-weight:bold" class="text-left">/download < slotname > - Download items from < slotname ></p>
         <p  style="font-weight:bold" class="text-left">The /upload command is active for 60 seconds after opening the tribute inventory. This is a measure to prevent abuse and uploading all over the map at will.</p>
         <p  style="font-weight:bold" class="text-left">Once you complete the transfer to a new server the items will automatically be added back to your inventory.</p>
         </br>
         <p  style="font-weight:bold" class="text-left">New Plugin Tribe Enforcer</p>
         <p  style="font-weight:bold" class="text-left">Tribe Enforcer aims to provide consistent tribe members across a cluster including the same Tribe ID on all servers.</p>
         <ul>
            <ol>A tribe created on a map will automatically be created on any other map when a tribe member joins the new map on the cluster.</ol>
            <ol>A tribe member invited on Server A will be auto added to the Tribe on Server B upon joining the map. No, longer do tribes have to invite players on every map to be in the same tribe.</ol>
            <ol>Kicking a player from the tribe will kick them cluster wide from the tribe.</ol>
            <ol>Renaming the tribe will happen cluster wide on any active map your tribe is currently logged into and inactive maps (no players online) once a tribe member logs into that server.</ol>
            <ol>Handles merging tribes with structures on other maps even if invited on another map when the "owning" player joins back to that server and is added to the new tribe.</ol>
            <ol>This will also handle enforcing tribe size cluster wide preventing having different players on different maps.</ol>
            <ol>Tribe names are now reserved cluster wide upon tribe creation so it may not be used on another map by another tribe.</ol>
         </ul>
         </br>
         <p  style="font-weight:bold" class="text-left">Time Line</p>
         <p class="text-left">20/November @ 19:00 CET: Season 7 starts</p>
         <p class="text-left">22/November @ 20:00 CET: Managarmr/Crystal Wyvern /Snow Owl/Golem/Gacha/Griffin/Gas Bag/Megachelon enabled for taming</p>
         <p class="text-left">22/November @ 20:00 CET: WebShop enabled</p>
         <p class="text-left">22/November @ 20:00 CET: Road to Alpha Achievement enabled</p>
         <p class="text-left">During Week 2: Season 6 donators receive a coupon for 20% od their total donations</p>
         <p class="text-left">During Week 2: Season 6 Highlight rewards distributed</p>
         <hr/>
         <div class="news-feed-body">
         <p style="font-weight:bold">WIPE ANNOUNCEMENT FOR MAINCLUSTER (PVPVE) AND START OF SEASON 23 </p>
         <p class="text-left">Dear players of Bloody Ark, we’re happy to announce that Season 23 of our Maincluster will start on December 18. at 20:00 CET</p>
         </br>
         <div class="col-md-5">
            <img src="assets/images/bloody_Season23.jpg" class="img-fluid" alt="bloody image">
         </div>
         </br>
         <p  style="font-weight:bold" class="text-left">All new changes about the upcoming season will be announced on 14 December.</p>
         </br>
         <p  style="font-weight:bold" class="text-left">Time Line</p>
         <p class="text-left">10/December@ 20:00 CET: Community Votes open</p>
         <p class="text-left">11/December@ 20:00 CET: Peform Bloody Purge Week (Disable ORP and PVE until server shutdown)</p>
         <p class="text-left">13/December@ 20:00 CET: Public Season 22 Highlights and Media</p>
         <p class="text-left">14/December@ 20:00 CET: Season 23 full change list</p>
         <p class="text-left">15/December@ 10:30 CET: Cluster shutdown to prepare for new season</p>
         <p class="text-left">16/December@ 00:00 CET: Webshop closed and december special offer ends</p>
         <p class="text-left">18/December@ 20:00 CET: Season 23 starts</p>
         <p class="text-left">20/December@ 20:00 CET: Managarmr/Crystal Wyvern /Snow Owl/Golem/Gacha/Griffin/Gas Bag/Megachelon enabled for taming</p>
         <p class="text-left">20/December@ 20:00 CET: WebShop, Achievements, Lootboxes, full Ingame Shop enabled</p>
         <p class="text-left">20/December@ 20:00 CET: All purchases made 2 weeks before wipe announcement will be re-sent automatically </p>
         <p class="text-left">21/December: Season 22 donators receive a coupon for 20% of their total donations (open a ticket for it)</p>
         <p class="text-left">27/December: Season 22 Highlight rewards distributed</p>
         </br>
         <p style="font-weight:bold">PRE-SALE 10% DISCOUNT</p>
         <p class="text-left">WE OFFER A DISCOUNT OF 10% ON ALL OUR PVPVE PACKAGES UNTIL 16.12.2020</P>
         <p class="text-left">ALL PACKAGES CAN BE REDEEMED IN THE CURRENT SEASON AND WILL BE AUTOMATICALLY SENT OUT AGAIN ON SUNDAY AT 20:00 (CET)</p>
         <p class="text-left">YOU CAN NOW PURCHASE WHITELIST IN THE VIP SECTION TO JOIN A FULL MAP</p>
         <p class="text-left">AFTER THE SHOP IS CLOSED, YOU WILL NOT BE ABLE TO GET WHITELISTED UNTIL 20.12.20. </p>
         <a href="https://bloody-ark.com/pvpve.php">PVPVE INFO	</a>
         </br>
         <a href="https://shop.bloody-ark.com/">WEB SHOP	</a>
         <hr/>
         <div class="news-feed-body">
         <p style="font-weight:bold">WIPE ANNOUNCEMENT: SMALL TRIBES - SEASON 7 - START FRIDAY 09.10.2020 </p>
         <p class="text-left">Dear players of Bloody Ark, We want to remind you that our SMALLTRIBES CLUSTER will go into season 7 on friday! Be ready for a fresh wipe 20 November at 19:00 CET.</p>
         </br>
         <div class="col-md-5">
            <img src="assets/images/BANNERsmall7.jpg" class="img-fluid" alt="bloody image">
         </div>
         </br>
         <p  style="font-weight:bold" class="text-left">Season 7 Changelist</p>
         <p style="font-weight:bold">New ORP Settings</p>
         <p class="text-left">Pillars added to restricted zones (no ORP, no PvP-Protection).</P>
         <p class="text-left">Most of the caves and pillars are now blacklisted in our plugin so it is not possible to place an ORP in these places. Open a ticket if you find a spot which should not have an ORP according to our rules and is not already blacklisted.</p>
         <p class="text-left">You are now able to see your own ORP with the command /showorp</p>
         <p  style="font-weight:bold" class="text-left">Rebuild-Kit application with ingame commands</p>
         <li>Tickets are not needed anymore.</li>
         <li>/rebuild gamma, /rebuild beta, /rebuild alpha, /rebuild prot</li>
         <li>Only ingame tribe owner can apply for a rebuild kit.</li>
         <li>Requests will be checked by an admin. Abuses will get punished.</li>
         <li>Check with /kits if your rebuild kit got approved.</li>
         <p>	</p>
         <p  style="font-weight:bold" class="text-left">New AntiStructureMesh Plugin</p>
         <p class="text-left">This plugin will detect and delete structures which are placed inside the mesh.</p>
         <p  style="font-weight:bold" class="text-left">Bloody Structures Mod</p>
         <p class="text-left">Modified Version of S+</p>
         <p  style="font-weight:bold" class="text-left">Remove S+ Generator</p>
         <p  style="font-weight:bold" class="text-left">Raft Structure limit has been raised to 150 (yes you can build a battle ship)</p>
         <p  style="font-weight:bold" class="text-left">Artefact caves can be taken immediately after server wipe</p>
         <p  style="font-weight:bold" class="text-left">PvP-Protection will be available from Sunday 22. November at 20:00 CET. Please refer to the information in our wipe announcement.</p>
         <p  style="font-weight:bold" class="text-left">Transferable Tributs </p>
         <p  style="font-weight:bold" class="text-left">AutoEngrams</p>
         <p  style="font-weight:bold" class="text-left">/upload < slotname > - Upload current inventory items to < slotname ></p>
         <p  style="font-weight:bold" class="text-left">/download < slotname > - Download items from < slotname ></p>
         <p  style="font-weight:bold" class="text-left">The /upload command is active for 60 seconds after opening the tribute inventory. This is a measure to prevent abuse and uploading all over the map at will.</p>
         <p  style="font-weight:bold" class="text-left">Once you complete the transfer to a new server the items will automatically be added back to your inventory.</p>
         </br>
         <p  style="font-weight:bold" class="text-left">New Plugin Tribe Enforcer</p>
         <p  style="font-weight:bold" class="text-left">Tribe Enforcer aims to provide consistent tribe members across a cluster including the same Tribe ID on all servers.</p>
         <ul>
            <ol>A tribe created on a map will automatically be created on any other map when a tribe member joins the new map on the cluster.</ol>
            <ol>A tribe member invited on Server A will be auto added to the Tribe on Server B upon joining the map. No, longer do tribes have to invite players on every map to be in the same tribe.</ol>
            <ol>Kicking a player from the tribe will kick them cluster wide from the tribe.</ol>
            <ol>Renaming the tribe will happen cluster wide on any active map your tribe is currently logged into and inactive maps (no players online) once a tribe member logs into that server.</ol>
            <ol>Handles merging tribes with structures on other maps even if invited on another map when the "owning" player joins back to that server and is added to the new tribe.</ol>
            <ol>This will also handle enforcing tribe size cluster wide preventing having different players on different maps.</ol>
            <ol>Tribe names are now reserved cluster wide upon tribe creation so it may not be used on another map by another tribe.</ol>
         </ul>
         </br>
         <p  style="font-weight:bold" class="text-left">Time Line</p>
         <p class="text-left">20/November @ 19:00 CET: Season 7 starts</p>
         <p class="text-left">22/November @ 20:00 CET: Managarmr/Crystal Wyvern /Snow Owl/Golem/Gacha/Griffin/Gas Bag/Megachelon enabled for taming</p>
         <p class="text-left">22/November @ 20:00 CET: WebShop enabled</p>
         <p class="text-left">22/November @ 20:00 CET: Road to Alpha Achievement enabled</p>
         <p class="text-left">During Week 2: Season 6 donators receive a coupon for 20% od their total donations</p>
         <p class="text-left">During Week 2: Season 6 Highlight rewards distributed</p>
         <hr/>
         <div class="news-feed-body">
         <p style="font-weight:bold">WIPE ANNOUNCEMENT FOR MAINCLUSTER (PVPVE) AND START OF SEASON 22</p>
         <p class="text-left">Dear players of Bloody Ark, we’re happy to announce that Season 22 of our Maincluster will start on October 30. at 19:00 CET.</p>
         </br>
         <div class="col-md-5">
            <img src="assets/images/pvpvewipe2.png" class="img-fluid" alt="bloody image">
         </div>
         </br>
         <p  style="font-weight:bold" class="text-left">[Season 22 - The Big Change - 24/7 Raids]</p>
         <p style="font-weight:bold">We are happy to announce that we are making a big change to our Bloody Ark Maincluster with this new season.</p>
         <p class="text-left">With the start of the new season raiding is allowed at all times (24/7)!</P>
         <p class="text-left">But we are not giving up our concept of weekend raids and our support for people that are working or in school:</p>
         <li>But we are not giving up our concept of weekend raids and our support for people that are working or in school:</li>
         <li>Solo, Duo and Trio tribes are able to activate the 12h-PvP Protection during weekdays and can buy a PvP-Protection with ingame points for the weekend.</li>
         <li>Squad tribes are able to activate the 12h-PvP Protection during weekdays.</li>
         <li>Company and Division tribes are not able to activate the 12h-PvP Protection.</li>
         <li>You are able to place 2 ORP's on each map according to our restricted zones rule.</li>
         <li>PvP-Protection only works inside the ORP range.</li>
         <li>PvP-Protection can't be activated during active PvP.</li>
         <li>ORP settings - Weekdays: full ORP, infinite turret ammo, Bloody Weekend: 4x structure resistance, 4x turret damage.</li>
         <li>You can activate the 12h-PvP Protection with the ingame command /pve. This is only possible if you are the tribe owner, and is disabled during Bloody Weekend.</li>
         <li>If you disable your PvP-Protection, there will be a 6h cooldown to reactivate it.</li>
         <li>Abusing the system to gain PvP-Protection while not beeing allowed to will result in removing your tribes ability to have an ORP and further punishment.</li>
         <p>	</p>
         <p  style="font-weight:bold" class="text-left">Important note: Please make sure to place an ORP and activate the PvP-Protection if you are allowed to.</p>
         <p  style="font-weight:bold" class="text-left">If you forgot either of that it is your own fault when you are getting raided.</p>
         <p>	</p>
         <p  style="font-weight:bold" class="text-left">[Season 22 Changelist]</p>
         <p  style="font-weight:bold" class="text-left">Bloody Structures mod is here!</p>
         <p class="text-left">We will switch out Structures Plus with our own mod based on it.</p>
         <p  style="font-weight:bold" class="text-left">Nanny is back</p>
         <p class="text-left">We decided to bring back the Nanny to help you imprint your dinos (limit of 2 per map).</p>
         <p>	</p>
         <p  style="font-weight:bold" class="text-left">New command: /triberank "tribename"</p>
         <p class="text-left">Get information about an enemy tribe for example their tribe size, their protection and more.</p>
         <p class="text-left">This command will not be available on wipe and will follow during the season.</p>
         <p>	</p>
         <p  style="font-weight:bold" class="text-left">New Lootboxes</p>
         <p class="text-left">More infos will follow.</p>
         <p>	</p>
         <p  style="font-weight:bold" class="text-left">Quests are back</p>
         <p class="text-left">A new version of the quests will be back, starting with only a few quests.</p>
         <p>	</p>
         <p  style="font-weight:bold" class="text-left">More Restricted spots blocked to set ORP</p>
         <p class="text-left">We continuously add more spots to the plugin.</p>
         <p>	</p>
         <p  style="font-weight:bold" class="text-left">More Restricted spots blocked to set ORP</p>
         <p class="text-left">Bonus damage on turrets nerfed from +50% per player to +25%</p>
         <p>	</p>
         </br>
         <p  style="font-weight:bold" class="text-left">Time Line</p>
         <p class="text-left">30/October @ 19:00 CET: Season 22 starts</p>
         <p class="text-left">01/November @ 20:00 CET: Enable Crystal Wyvern / Griffin / Gasbag / Managarmr / Snow Owl / Gacha / Golem / Titan / Megachelon taming</p>
         <p class="text-left">01/November @ 20:00 CET: Artifact caves are allowed to be built</p>
         <p class="text-left">01/November @ 20:00 CET: Lootboxes and Achievements are available</p>
         <p class="text-left">01/November @ 20:00 CET: Webshop fully usable</p>
         <p class="text-left">From 08/November @ 20:00 - Season 21 Donators receive a coupon for 20% of their total donations</p>
         <p class="text-left">From 08/November @ 20:00 - Season 21 Highlight Rewards distributed</p>
         <p class="text-left">From 08/November @ 20:00 - All purchases done two weeks prior the wipe will be resent.</p>
         <p>	</p>
         <p  style="font-weight:bold" class="text-left">Community Suggestions are open from now until October 28. At 20:00 CET</p>
         <p class="text-left">Community Suggestions which are approved will be announced after they closed</p>
         <hr/>
         <div class="news-feed-body">
            <p style="font-weight:bold">WIPE ANNOUNCEMENT: SMALL TRIBES - SEASON 6 - START FRIDAY 09.10.2020 </p>
            <p class="text-left">Dear players of Bloody Ark, We want to remind you that our SMALLTRIBES CLUSTER will go into season 6 in friday! Be ready for a fresh wipe today on the 09 October at 19:00 CEST.</p>
            </br>
            <div class="col-md-5">
               <img src="assets/images/smbanner.png" class="img-fluid" alt="bloody image">
            </div>
            </br>
            <p  style="font-weight:bold" class="text-left">Season 6 Changelist</p>
            <p style="font-weight:bold">New ORP Settings</p>
            <p class="text-left">Double Turret Boost</P>
            <p class="text-left">Double Structure/Dino Damage Reduction</p>
            <p class="text-left">90% Passiv Dino Damage Reduction</p>
            <p>	</p>
            <p class="text-left">No changes between weekdays and weekend.</p>
            <p class="text-left">Most caves and other restricted areas got blacklisted. You will not be able to place an ORP in these location.</p>
            <p class="text-left">If you find a base that still should be classed restricted but has ORP open a ticket and it will get blacklisted.</p>
            <p>	</p>
            <p  style="font-weight:bold" class="text-left">Rebuild-Kit application with ingame commands</p>
            <li>Tickets are not needed anymore.</li>
            <li>/rebuild gamma, /rebuild beta, /rebuild alpha, /rebuild prot</li>
            <li>Only ingame tribe owner can apply for a rebuild kit.</li>
            <li>Requests will be checked by an admin. Abuses will get punished.</li>
            <li>Check with /kits if your rebuild kit got approved.</li>
            <p>	</p>
            <p  style="font-weight:bold" class="text-left">New AntiStructureMesh Plugin</p>
            <p class="text-left">This plugin will detect and delete structures which are placed inside the mesh.</p>
            <p  style="font-weight:bold" class="text-left">New Shop UI System</p>
            <p class="text-left">This brand new mod visualize our shop system with powerful features.</p>
            <p>	</p>
            <p  style="font-weight:bold" class="text-left">New Decay System</p>
            <p class="text-left">Chat Command: /decay</p>
            <li>Thatch = 28h</li>
            <li>Wood = 48h</li>
            <li>Stone = 76h</li>
            <li>Creatures / Metal = 96h</li>
            <li>Tek = 115h</li>
            <p  style="font-weight:bold" class="text-left">Re-Add Nanny with 100%</p>
            </br>
            <p  style="font-weight:bold"  class="text-left">These changes will be updated in the rules with the new wipe</p>
            </ui>
            </br>
            <p  style="font-weight:bold" class="text-left">Time Line</p>
            <p class="text-left">09/October @ 19:00 CEST: Season 6 starts</p>
            <p class="text-left">09/October @ 19:00 CEST: Starter kits and voting reward enabled</p>
            <p class="text-left">10/October @ 11:30 CEST: Crystal Wyvern enabled for taming</p>
            <p class="text-left">11/October @ 12:00 CEST: WebShop enabled</p>
            <p class="text-left">16/October @ 12:00 CEST: Managarmr/Snow Owl/Golem/Gacha/GasBag/Megachelon enabled for taming</p>
            <p class="text-left">16/October @ 12:00 CEST: Road to Alpha Achievement enabled</p>
            <p class="text-left">During Week 2: Season 5 donators receive a coupon for 20% od their total donations</p>
            <p class="text-left">During Week 2: Season 5 Highlight rewards distributed</p>
            <hr/>
         </div>
         <div class="news-feed-body">
            <p style="font-weight:bold">WIPE ANNOUNCEMENT FOR MAINCLUSTER (PVPVE) AND START OF SEASON 21</p>
            <p class="text-left">Dear players of Bloody Ark, we’re happy to announce that Season 21 of our Maincluster will start on September 18. at 19:00 CEST.</p>
            <p  style="font-weight:bold" class="text-left">Season 21 Changelist</p>
            <ui>
            <p class="font-weight-bold">Rebuild-Kit application with ingame commands.</p>
            <li>Tickets are not needed anymore.</li>
            <li>Adjusted Tribe Rank Bonus (new plugin for rate multiplier and dupe protection)</li>
            <li>/rebuild gamma, /rebuild beta, /rebuild alpha, /rebuild prot</li>
            <li>Only ingame tribe owner can apply for a rebuild kit.</li>
            <li>Requests will be checked by an admin. Abuses will get punished.</li>
            <li>Check with /kits if your rebuild kit got approved.</li>
            <p></p>
            <p class="font-weight-bold">Improved ORP plugin.</p>
            <li>Most caves and other restricted areas got blacklisted. You will not be able to place an ORP in these location.</li>
            <li>If you find a base that still should be classed restricted but has ORP open a ticket and it will get blacklisted.</li>
            <li>ORP will be active 24/7 outside of the Bloody Weekend to prevent illegal raids even if tribemembers are online.</li>
            <li>Standard ORP during Bloody Weekend. 4x turret damage and structure resistance.</li>
            <li>If you forgot to place an ORP it is your own fault and you are allowed to be raided.</li>
            <li>Dinos set to passive receive 90% less damage inside ORP.</li>
            <p></p>
            <p class="font-weight-bold">Dino Passive Protection Plugin removed.</p>
            <p class="font-weight-bold">RPS plugin removed (/quests).</p>
            <p class="font-italic">-- Will be coming back at a later time with an updated version (no ETA atm).</p>
            <p class="font-weight-bold">New and improved punish ranks for minor rule breaks.</p>
            <p class="font-italic">-- Different stages of punish rank with reduced rates and also reduced player stats (health, weight, speed and so on).</p>
            <p class="font-weight-bold">New AntiStructureMesh Plugin.</p>
            <p class="font-italic">-- This plugin will detect and delete structures which are placed inside the mesh.</p>
            <p class="font-weight-bold">Achievements rework.</p>
            <p class="font-italic">-- More achievements and more rewards for smaller tribes.</p>
            <p></p>
            <p class="font-weight-bold">Server Rules rework to match all the changes.</p>
            <p></p>
            <p  style="font-weight:bold" class="text-left">Time Line</p>
            <p class="text-left">18/September @ 19:00 CEST: Season 21 starts</p>
            <p class="text-left">19/September @ 11:30 CEST: Enable Crystal Wyvern taming</p>
            <p class="text-left">20/September @ 20:00 CEST: Enable Griffin / Gasbag / Managarmr / Snow Owl / Gacha / Golem / Titan / Megachelon taming</p>
            <p class="text-left">20/September @ 20:00 CEST: Managarmr/Snow Owl/Golem/Gacha/Griffin/Gas Bag/Megachelon/Skiff enabled for taming</p>
            <p class="text-left">20/September @ 20:00 CEST: Lootboxes and Achievements are available</p>
            <p class="text-left">20/September @ 20:00 CEST: Webshop fully usable</p>
            <p class="text-left">During Week 2: Season 20 Donators receive a coupon for 20% of their total donations</p>
            <p class="text-left">During Week 2: Season 20 Highlight Rewards distributed</p>
            <p></p>
            <p  style="font-weight:bold" class="text-left">Community Suggestions are open from now until September 16. At 20:00 CEST</p>
            <p class="text-left">Community Suggestions which are approved will be announced after they closed</p>
            <p></p>
            <p class="text-left">Cluster Purge: From the start of the next bloody weekend (September 11. at 20:00 CEST) we start our official purge week until the server are getting closed to prepare for the wipe. At this point we disable any Offline Raidprotection and PVP Protection. Raids are allowed 24/7 at all locations.</p>
            <p></p>
            <p  style="font-weight:bold">Changes are not final and can change! See you all in the next season!</p>
            <hr />
         </div>
         <div class="news-feed-body">
            <p style="font-weight:bold">WIPE ANNOUNCEMENT FOR SMALL TRIBES (PVP) AND START OF SEASON 5</p>
            <p class="text-left">Dear players of Bloody Ark, We want to remind you that our SMALLTRIBES CLUSTER will go into season 5 today! Be ready for a fresh wipe today on the 14th of August at 19:00 CEST.</p>
            <p  style="font-weight:bold" class="text-left">Season 5 Changelist</p>
            <ui>
               <li>Added Timed Permission Plugin (/rank ingame to check all ranks)</li>
               <li>Added Rebuild Kits back (boosted rates, new kits and structures and 72h of protection)</li>
               <li>Adjusted Tribe Rank Bonus (new plugin for rate multiplier and dupe protection)</li>
               <li>Woolly Rhino damage and resistance increased by 50% from their default values</li>
               <li>Managarmr breath damage reduced by 50% from their default values to players</li>
               <li>Element and Propellant grinding enabled in the S+ Industrial Grinder</li>
               <li>Blueprint Craft Limit plugin removed</li>
               <li>Multitool Kill Gun removed</li>
               <li>Rebuild Map removed</li>
               <li>Element reward for Bosses on all maps increased</li>
               <li>S+ Tek Generator disabled</li>
            </ui>
            <p  style="font-weight:bold" class="text-left">Vote Results for season 5</p>
            <li>Discord Rank for Alpha Tribe players</li>
            <li>Sleeping bag distance to enemy structures reduced from 26 to 8 foundations</li>
            <li>Road to Alpha enabled for all tribes (will be enabled one week after wipe)</li>
            <li>Cannon damage to structures reduced by 90%</li>
            <li>Cryosickness debuff reduced to 10sec</li>
            </br>
            <p class="text-left">Detailed vote results:</p>
            <a href="https://docs.google.com/spreadsheets/d/1GR6Y-7RszJ8QkjCA1_miVlCywtv62Y-11LMLNAg0Wxk/edit#gid=0" target="_blank" alt="voteresults">Google Docs Vote Results</a>
            </br>							
            <ui>
               </br>	
               <p  style="font-weight:bold" class="text-left">Rule Changes</p>
               <li>Trike-by-foot rule removed</li>
               <li>Pillars removed for spots where it is not allowed to have ORP</li>
               <li>Added pillars and spots not reachable on foot to restricted areas for Genesis, Aberration and the Valguero Aberration zone to the spots where it is not allowed to have ORP</li>
               <li>Added Extinction South Gate rathole and Extinction grapple ratehole (50/50) to the banned areas</li>
               </br>
               <p  style="font-weight:bold"  class="text-left">These changes will be updated in the rules with the new wipe</p>
            </ui>
            </br>
            <p  style="font-weight:bold" class="text-left">Time Line</p>
            <p class="text-left">14/August @ 19:00 CEST: Season 5 starts</p>
            <p class="text-left">14/August @ 19:00 CEST: Starter kits and voting reward enabled</p>
            <p class="text-left">15/August @ 11:30 CEST: Crystal Wyvern enabled for taming</p>
            <p class="text-left">16/August @ 20:00 CEST: Managarmr/Snow Owl/Golem/Gacha/Griffin/Gas Bag/Megachelon/Skiff enabled for taming</p>
            <p class="text-left">16/August @ 20:00 CEST: WebShop enabled</p>
            <p class="text-left">21/August @ 20:00 CEST: Road to Alpha Achievement enabled</p>
            <p class="text-left">During Week 2: Season 4 donators receive a coupon for 20% od their total donations</p>
            <p class="text-left">During Week 2: Season 4 Highlight rewards distributed</p>
            <hr />
            <div class="news-feed-body">
               <p style="font-weight:bold">Our new website is now live!</p>
               <p class="text-left">Next Features:</p>
               <ul>
                  <li>User Panel - Players can view their points, lootboxes, quests and co via the user interface.</li>
                  <li>More Content - We will try to provide all information to the servers on the website.</li>
                  <li>Bug Fixes - Please inform Sly on Discord, if there is any issue with the website.</li>
               </ul>
            </div>
            <hr />
            <div class="news-feed-body">
               <p style="font-weight:bold">New Support Policy</p>
               <p class="text-left">We will make a big change to our support policy starting now.
                  Support response time is always a big topic in our community discord, and we know
                  that sometimes tickets take hours or days, sometimes even a week to get solved.
                  The biggest reasons for that is people not including the needed information or asking for help in minor problems.
               </p>
               </br>
               <p class="text-left">
                  To focus more on the important tickets that affect the gameplay and have a much shorter response time in urgent cases, the following changes will apply now.
               </p>
               <p class="text-left">
                  There will be no support for:
               </p>
               <ul>
                  <li>Replacing kits, lootboxes or dino boxes because of server rollbacks, missclicks or bugs in any way.</li>
                  <li>Replacing your inventory or cryod dinos because of server rollbacks or bugs in any way.</li>
                  <li>Helping you or your dino getting unstuck from any location. If your dino is inside the mesh try to upload it with a Transmitter, if your player gets stuck use /suicide.</li>
                  <li>Forcejoining a player into a tribe for any reason.</li>
                  <li>Enabling engrams from Road to Alpha in any situation. If you did not get the engrams you did not meet the requirements for it.</li>
                  <li>Replacing items or dinos lost to insiding. Everything belongs to the tribe owner. It’s your own responsibility to invite people in to your tribe that you trust.</li>
                  <li>(Problems with items bought in our webshop will still be supported!</li>
               </ul>
               </br>
               <p class="text-left">
                  Tickets about these cases, crashed servers, asking when a cluster wipes or without the basic information will be closed without an answer from the Bloody Ark Team
               </p>
               </br>
               <p class="text-left">
                  Tips for faster support:
               </p>
               <ul>
                  <li>Give us as much information about your case as you can.</li>
                  <li>Follow the ticket guideline and always include the following: Cluster, Map, Steam64ID</li>
                  <li>Do not DM admins. This will lower your ticket priority.</li>
               </ul>
               <p class="text-left">
               </p>
               We hope with this changes we can ensure our community a better and faster support!
               </p>
            </div>
            <hr />
      </section>
      </div>
      <section class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <h4><?php echo $l['footer-about-title']; ?></h4>
                  <p><?php echo $l['footer-about-text']; ?></p>
               </div>
               <div class="col-md-3">
                  <h4><?php echo $l['footer-links-title']; ?></h4>
                  <ul>
                     <li><a href="http://portal.bloody-ark.com/servers"><?php echo $l['footer-links-1']; ?></a></li>
                     <li><a href="https://shop.bloody-ark.com/"><?php echo $l['footer-links-2']; ?></a></li>
                     <li><a href="https://forum.bloody-ark.com/"><?php echo $l['footer-links-3']; ?></a></li>
                     <li><a href="https://support.bloody-ark.com/"><?php echo $l['footer-links-4']; ?></a></li>
                     <li><a href="https://steamcommunity.com/groups/bloodyark"><?php echo $l['footer-links-5']; ?></a></li>
                  </ul>
               </div>
               <div class="col-md-3">
                  <h4><?php echo $l['footer-partners-title']; ?></h4>
                  <a href="https://nitra.do/BloodyARK">
                  <img class="img-fluid" src="assets/images/nitrado.png">
                  </a>
               </div>
               <div class="col-md-3">
                  <div class="powr-hit-counter" id="e0bebc7d_1594513583"></div>
                  <script src="https://www.powr.io/powr.js?platform=bootstrap"></script>
                  </a>
               </div>
            </div>
         </div>
      </section>
      <section class="footer-bottom">
         <p class="text-center"> Copyright &copy; <?php echo date("Y"); ?> BloodyARK.<?php echo $l['copyright']; ?></p>
      </section>
      <!-- JS, Popper.js, and jQuery -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      <!-- OWL Slider -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
      <!-- AOS -->
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
         AOS.init();
      </script>
      <!-- Offcanvas -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
      <script src="https://unpkg.com/js-offcanvas@1.2.0/dist/_js/js-offcanvas.pkgd.min.js"></script>
      <!-- Custom JS -->
      <script src="assets/js/main.js"></script>
      <!-- Modal Box Login -->
      <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Steam Login</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <form>
                     <div class="form-group">
                        <label">Email address</label>
                        <input type="email" class="form-control" placeholder="Enter email">
                        <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                     </div>
                     <div class="form-group">
                        <label">Password</label>
                        <input type="password" class="form-control" placeholder="******">
                     </div>
                     <div class="form-group">
                        <button type="sumbit" class="btn btn-view">Login</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>