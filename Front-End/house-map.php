<?php 
  
  session_start();

  if (!isset($_SESSION['HomeID'])){
        header("Location: http://www2.macs.hw.ac.uk/~jw97/Tanthricat-master/Front-End/login.php");
    } else {
        
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Home Automation Web Application">
    <meta name="author" content="Tanthricat Solutions">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>House Map</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">

    <!-- Custom CSS for this page -->

    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/house-map.css">

    <!--External CSS -->

        <!-- Font Awesome -->
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

</head>



<body class="light-sidebar-nav">

    <section id="container">
        <!--header start-->
        <header class="header white-bg">
            <div class="sidebar-toggle-box">
                <i class="fa fa-bars"></i>
            </div>
            <!--logo start-->
            <a href="index.php" class="logo"><span>Tanthricat</span></a>
            <!--logo end-->
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="img/avatar1_small.jpg">
                            <?php
                                if (isset($_SESSION['HomeID'])){
                                    echo '<span class="username">'.$_SESSION['First Name'].' '. $_SESSION['Last Name'].'</span>';
                                } else {

                                }

                            ?>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout dropdown-menu-right">
                            <div class="log-arrow-up"></div>
                            <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="#"><i class="fa fa-bell-o"></i> Notification</a></li>
                            <li><a href="logout.php"><i class="fa fa-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->


        <!--sidebar start-->
        <aside>
          <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="index.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="devices.php">
                        <i class="fa fa-desktop"></i>
                        <span>Devices</span>
                    </a>
                </li>

                <li>
                    <a class="active" href="house-map.php">
                        <i class="fa fa-home"></i>
                        <span>House Map</span>
                    </a>
                </li>

                <li>
                    <a href="reports.php">
                        <i class="fa fa-bar-chart-o"></i>
                        <span>Reports</span>
                    </a>
                </li>

                <li>
                    <a href="index.php">
                        <i class="fa fa-gears"></i>
                        <span>Settings</span>
                    </a>
                </li>
            </ul>
              <!-- sidebar menu end-->
          </div>
        </aside>
        <!--sidebar end-->


        <!--main content start-->

        <?php 

                // when the user types something incorrect into the text boxes an error message will be dispaled 
                // telling them what they did wrong

                if (isset($_GET['error'])) {
                  
                  if ($_GET['error'] == "emptyfields") {
                    echo '<p style="color:red; font-size:20px;">   Fill in all fields!</p> ';
                  }
                  else if ($_GET['error'] == "sqlerror") {
                    echo '<p style="color:red; font-size:20px;">   SQL Error (Systems are Currently Down)</p> ';
                  }
                  else if ($_GET['error'] == "devicealreadythere") {
                    echo '<p style="color:red; font-size:20px;">   Device Has Already Been Added</p> ';
                  }
                  else if ($_GET['error'] == "Roomadded") {
                    echo '<p style="color:green; font-size:20px;">   Device Has Been Added</p> ';
                  }
                  else if ($_GET['error'] == "Roomdeleted") {
                    echo '<p style="color:red; font-size:20px;">   Device Has Been Added</p> ';
                  }
                }
        ?>

        <section id="main-content">
          <section class="wrapper">

                <div id="board" class="board">
                    <button class="btn btn-primary create-column">Add New Room</button>
                    <div class="column-container">
                    </div>
                </div>

          </section>
        </section>
        <!--main content end-->


        <!--footer start-->
        <footer class="site-footer">
            <div class="text-center">
                2020 &copy; Tanthricat Solutions.
                <a href="#" class="go-top">
                    <i class="fa fa-angle-up"></i>
                </a>
            </div>
        </footer>
        <!--footer end-->
    </section>


    <!-- LOADING JS FILES -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/jquery.customSelect.min.js" ></script>
    <script src="js/respond.min.js" ></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!-- Additonal JS files -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://code.jquery.com/ui/1.11.4/jquery-ui.min.js'></script>
    <?php
    echo'<script>';

    echo"
        $(function () {

          //function randomString() generates ID number for cards and columns
          function randomString() {
            var chars = '0123456789abcdefghiklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXTZ';
            var str = '';
            for (var i = 0; i < 10; i++) {
              str += chars[Math.floor(Math.random() * chars.length)];
            }
            return str;
          }

          ";

    echo"
          // Column class
          function Column(name) {
            var self = this;
            this.id = randomString();
            this.name = name;
            this.element = createColumn();

            function createColumn() {
              // components of column
              var column = $('<div>').addClass('column');
              var columnTitle = $('<h4>').addClass('column-title').text(self.name);
              var columnDelete = $('<button>').addClass('delete btn btn-danger');
              var columnCardList = $('<ul>').addClass('column-card-list');
              // var columnAddCard = $('<button>').addClass('btn add-card').text('Add a card');

              ";

        echo"

              //events for column
              columnDelete.click(function () {
                self.removeColumn();";
                echo' window.location.href="housemapphp.php?delete="+name;';


        echo"
              });
              // columnAddCard.click(function () {
              //   self.addCard(new Card(prompt('Enter the name of the card')));
              // });

              // construction of column components
              column.append(columnTitle)
                .append(columnCardList)
                .append(columnDelete);

                // .append(columnAddCard)

              // return of created column
              return column;
            }
          }

        ";

        echo"

          Column.prototype = {
            addCard: function (card) {
              this.element.children('ul').append(card.element);
            },
            removeColumn: function () {
              this.element.remove();
            }
          };

          function Card(description, state) {
            var self = this;

            this.id = randomString();
            this.description = description;
            this.state = state;
            this.element = createCard();

            console.log(self.description);

            ";

        echo"

            function createCard() {

              // creating cards
              var card = $('<li>').addClass('card').addClass(self.state);
              var cardDescription = $('<div>').addClass('card-description').text(self.description);

              // event for card - removing it
              // cardDelete.click(function () {
              //   self.removeCard();
              // });

              //combaining the blocks
              card.append(cardDescription);

              // combining the blocks (new version)
              // card.append(cardDescription);

              // returning the card
              return card;

            }
          }

          ";

        echo"
          Card.prototype = {
            removeCard: function () {
              this.element.remove();
            }
          };

          var board = {
            name: 'Kanban Board',
            addColumn: function (column) {
              this.element.append(column.element);
              initSortable();
            },
            element: $('#board .column-container')
          };

          function initSortable() {
            $('.column-card-list').sortable({
              connectWith: '.column-card-list',
              placeholder: 'card-placeholder'
            }).disableSelection();
          }

        ";

        echo"
          $('.create-column')
            .click(function () {
              var name = prompt('Enter the room name (No Spaces):');
              ";
              echo'
              if (name !== ""){
                ';

                echo"
                var column = new Column(name);
                board.addColumn(column);
                ";
            
                echo'
                window.location.href="housemapphp.php?name="+name;
                
        

              }
              else{
                alert("Sorry, your room name cannot be empty");
              }
            });

            ';

            
              require'db.php'; 

              if (isset($_SESSION['HomeID'])) {

                $sql = '
                SELECT * FROM RoomsTanthricat WHERE KeyID="'.$_SESSION['HomeID'].'";
                        ';
                
                // query db
                $result = mysqli_query($conn, $sql);

                // if the query worked then set userid to a variable
                if ($result) {

                      while ($row = mysqli_fetch_assoc($result)) {
                        $room = $row['Room'];
                                  echo"
                                         var column".$room." = new Column('".$room."');
                                         board.addColumn(column".$room.");


                                  ";

                                  }
                           
                        

                  // free the variable and connection for next statement
                  mysqli_free_result($result);
                  
                  
                    }


                }

    ?>

    <?php


            require'db.php'; 

              if (isset($_SESSION['HomeID'])) {

                $sql2 = '
                    SELECT * FROM DevicesTanthricat WHERE KeyID="'.$_SESSION['HomeID'].'";
                        ';
                
                // query db
                $result2 = mysqli_query($conn, $sql2);

                // if the query worked then set userid to a variable
                if ($result2) {

                      while ($row = mysqli_fetch_assoc($result2)) {
                        $room = $row['Room'];
                        $state= $row['State'];
                        $Name= $row['Name'];
                        $Nickname= $row['Nickname'];
                        if($room!=''){

                         if ($row['State'] == 0) {

                            echo"
                                        var card1 = new Card('".$Nickname."','red-state');
                                        column".$room.".addCard(card1);


                                  ";

                         }else {

                            echo"
                                        var card1 = new Card('".$Nickname."','green-state');
                                        column".$room.".addCard(card1);


                                  ";

                         }

                     }
                                  

                                  }

                           
                        

                  // free the variable and connection for next statement
                  mysqli_free_result($result2);
                  
                  
                    }
                }

                
               

              
                


            echo"


        });

       
    ";
    

    echo'</script>';

    ?>


    
  </body>
</html>
