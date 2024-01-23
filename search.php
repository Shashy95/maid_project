<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location:index.php");
  exit();
}
?> 

<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link href="bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="home.css" type="text/css">
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="icon" type="image/jpg" href="images/1.jpg">

</head>

<body style="background: url(images/a.jpg)">
<div class="container">

<div class="header-left">
<img src="images/1.jpg">
</div>

<h1 align="center">ONLINE MAID PORTAL SYSTEM</h1>


<div class="top">
<a  href="home.php"class="active">Home</a>
<a href="order.php">Request for Maid</a>
<a href="search.php">Search for Maid</a>
<a href="contact.php">Contact us</a>

<div class="submenu">
<a class="dropbtn">Hi <?php echo $_SESSION['username']; ?>
 <span class="arrow">&#9660;</span>
</a>
<div class="submenu-content">
<a href="profile.php">View  profile</a>
<a href="changepass.php">Change Password</a>
<a href="logout.php">Logout</a>
</div>
</div>
</div>

  

<div class="main" style="height: 1600px; margin-top: 100px;">
<form action="processsearch.php" method="POST">
<div id="search">
<label for="specialization">Specialization</label>
<select id="specialization" name="specialization">  
<option value="">Choose</option>
<option value="Care for Children">Care for Children</option>
<option value="Care for elderly/disabled" >Care for Elderly/Disabled</option>
<option value="Cooking">Cooking</option>
<option value="Cleaning the house" >Cleaning the house</option>
<option value="Washing Clothes" >Washing Clothes </option>
</select>

<label for="Age ">Age Group</label>                                        
<select id="age" name="age">
<option value="">Choose</option>
<option value="18 AND 25" > 18 to 25</option>
<option value="26 AND 30" > 26 to 30</option>
<option value="31 AND 35" >31 to 35</option>
<option value="36 AND 40" >36 to 40</option>
<option value="41 AND 50" >41 to 50</option>
</select>
 
<label for="Region">Region</label>                                        
<select id="region" name="region">
<option value="">Choose</option>
<option value="Arusha">Arusha</option>  
<option value="Dar es Salaam">Dar es Salaam</option>
<option value="Dodoma">Dodoma</option>  
<option value="Geita"> Geita</option>
<option value="Iringa">Iringa</option> 
<option value="Kagera">Kagera</option>    
<option value="Katavi"> Katavi</option>   
<option value="Kigoma">Kigoma</option>    
<option value="Kilimanjaro"> Kilimanjaro</option>   
<option value="Lindi">Lindi</option>    
<option value=Manyara"> Manyara</option>   
<option value="Mara">Mara</option>    
<option value="Mbeya">Mbeya</option>  
<option value="Morogoro"> Morogoro </option>  
<option value="Mtwara"> Mtwara  </option> 
<option value="Mwanza"> Mwanza </option>  
<option value="Njombe"> Njombe </option>  
<option value="Pemba"> Pemba  </option>
<option value="Pwani"> Pwani    </option>
<option value="Rukwa"> Rukwa    </option>
<option value="Ruvuma"> Ruvuma  </option> 
<option value="Shinyanga"> Shinyanga </option>  
<option value="Simiyu"> Simiyu    </option>
<option value="Singida"> Singida  </option> 
<option value="Songwe"> Songwe </option>
<option value="Tabora"> Tabora  </option> 
<option value="Tanga"> Tanga    </option>
<option value="Zanzibar"> Zanzibar</option>
</select>

<input type="submit" name="submit" value="Search" id="searchbtn">

</form>
</div>


<div class="list"> 
 
<?php


$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Connection Failed" . mysql_error());
}
  $select_db = mysqli_select_db($connection,'maids');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}


    /*How many records you want to show in a single page.*/
        $limit = 12;
        /*How may adjacent page links should be shown on each side of the current page link.*/
        $adjacents = 5;
        /*Get total number of records */
        $sql = "SELECT COUNT(ID) AS 'total_rows' FROM list";
        $res = mysqli_fetch_object(mysqli_query($connection, $sql));
        $total_rows = $res->total_rows;
        /*Get the total number of pages.*/
        $total_pages = ceil($total_rows / $limit);
        
        
        if(isset($_GET['page']) && $_GET['page'] != "") {
            $page = $_GET['page'];
          $offset = $limit * ($page-1);
        } else {
          $page = 1;
          $offset = 0;
        }

        
    $query="SELECT * from list limit $offset, $limit ";
    $result=mysqli_query($connection,$query);

    while($row=mysqli_fetch_array($result))
        {
            $maid_img=$row[1];
            $maid_id=$row[2];
            $maid_name=$row[3];
            $maid_age=$row[4];
            $maid_status=$row[5];
            $maid_spec=$row[6];
            $maid_region=$row[7];
            $maid_exp=$row[8];
            $maid_children=$row[9];
            $maid_dis=$row[10];


          ?>
              <p style="float: left; width:33.3%; margin-top: 10px;"> 
              <img src="admin/uploads/<?php echo $row[1]; ?>" width="100px" height="120px"><br/>
               <b>Maid ID:</b>             <?php echo $maid_id;  ?><br/>
            <b>Name: </b>                 <?php echo $maid_name;  ?><br/>
            <b>Age:</b>                   <?php echo $maid_age;  ?><br/>
            <b>Marital Status:</b>              <?php echo $maid_status;  ?><br/>
            <b> Region:</b>      <?php echo $maid_region;  ?><br/>
              <b>Number of times she has worked: </b>  <?php echo $maid_exp;  ?><br/>
             <b> Children: </b>   <?php echo $maid_children;  ?><br/>
             <b>Specialization: </b>        <?php echo $maid_spec;  ?><br/>
              <a href="view.php?id=<?php echo $row['0']; ?>" >View Maid</a>

           
            
                         
</p>
<?php } ?>

 <?php
  if($total_pages <= (1+($adjacents * 2))) {
          $start = 1;
          $end   = $total_pages;
        } else {
          if(($page - $adjacents) > 1) {           //Checking if the current page minus adjacent is greateer than one.
            if(($page + $adjacents) < $total_pages) {  //Checking if current page plus adjacents is less than total pages.
              $start = ($page - $adjacents);         //If true, then we will substract and add adjacent from and to the current page number  
              $end   = ($page + $adjacents);         //to get the range of the page numbers which will be display in the pagination.
            } else {                   //If current page plus adjacents is greater than total pages.
              $start = ($total_pages - (1+($adjacents*2)));  //then the page range will start from total pages minus 1+($adjacents*2)
              $end   = $total_pages;               //and the end will be the last page number that is total pages number.
            }
          } else {                     //If the current page minus adjacent is less than one.
            $start = 1;                                //then start will be start from page number 1
            $end   = (1+($adjacents * 2));             //and end will be the (1+($adjacents * 2)).
          }
        }
        //If you want to display all page links in the pagination then
        //uncomment the following two lines
        //and comment out the whole if condition just above it.
        /*$start = 1;
        $end = $total_pages;*/
        ?>
        
        <?php if($total_pages > 1) { ?>
          <ul class="pagination pagination-sm justify-content-center">
            <!-- Link of the first page -->
            <li class='page-item <?php ($page <= 1 ? print 'disabled' : '')?>'>
              <a class='page-link' href='search.php?page=1'>&lt;&lt;</a>
            </li>
            <!-- Link of the previous page -->
            <li class='page-item <?php ($page <= 1 ? print 'disabled' : '')?>'>
              <a class='page-link' href='search.php?page=<?php ($page>1 ? print($page-1) : print 1)?>'>&lt;</a>
            </li>
            <!-- Links of the pages with page number -->
            <?php for($i=$start; $i<=$end; $i++) { ?>
            <li class='page-item <?php ($i == $page ? print 'active' : '')?>'>
              <a class='page-link' href='search.php?page=<?php echo $i;?>'><?php echo $i;?></a>
            </li>
            <?php } ?>
            <!-- Link of the next page -->
            <li class='page-item <?php ($page >= $total_pages ? print 'disabled' : '')?>'>
              <a class='page-link' href='search.php?page=<?php ($page < $total_pages ? print($page+1) : print $total_pages)?>'>&gt;</a>
            </li>
            <!-- Link of the last page -->
            <li class='page-item <?php ($page >= $total_pages ? print 'disabled' : '')?>'>
              <a class='page-link' href='search.php?page=<?php echo $total_pages;?>'>&gt;&gt;</a>
            </li>
          </ul>
        <?php } ?>


</div>
</div>

<div class="footer" style="margin-top: 70px;">
    <ul>
  Quick Links
<li><a  href="home.php">Home</a></li>
<li><a href="order.php">Request for Maid</a></li>
<li><a href="search.php">Search for Maid</a></li>
<li><a href="contact.php">Contact us</a></li>
<center>Copyright &copy; 2018 Online Maid Portal System. All Rights Reserved</center>
</ul>
</div>
   
 
 