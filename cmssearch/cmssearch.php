
<!DOCTYPE html>
<html>
<head>
<title>PYRO</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript" src="code.jquery.com/jquery-migrate-1.1.0.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script type="text/javascript">

  $('.dropdown-toggle').dropdown();

  </script>
</head>
<style type="text/css">

tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }
    tr th{
      background-color: #0090cf;
    color: #fff;
    padding: 5px;
    border: 1px solid #333;
}
tr td{
     
    color: #020202;
    border: 1px solid #000;
    padding: 3px;
}
.table-hover>tbody>tr:hover {
    background-color: #ddd;
}
.empty:empty {
    background-color: rgba(255, 0, 0, 0.64);
}
.red{
  background-color: rgba(255, 0, 0, 0.64);
}
.leave_apply{
  color: #0090cf;
  font-weight: bold;
}
.export{
  float: right;
    margin: 10px;
    width: 131px;
    border: none;
    background: #0090cf;
    color: #fff;
    padding: 3px 0
}
.sendamail{
    float: left;
    margin: 10px;
    width: 131px;
    border: none;
    background: #0090cf;
    color: #fff;
    padding: 3px 0
}
.table-striped>tbody>tr:nth-child(even) {
    background-color: #ddd !important;
}
.nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus{
    color: #0090cf !important;
}
.nav-tabs {
    border-bottom: 1px solid #ddd;
    background: #0090cf;
    color: #fff;
}
.nav-tabs>li>a {
    margin-right: 2px;
    line-height: 1.42857143;
    border: 1px solid transparent;
    border-radius: none !important;
    color: #fff !important;
}
.nav-tabs>li>a:hover{
  background-color: #fff !important;
  color: #0090cf !important;
}
.nav-tabs>li {
    float: left;
    margin-bottom: -1px;
    width: 24% !important;
}

.con{
    background: #fff !important;
   
}
.row{
      margin-right: -15px;
    margin-left: -15px;
    margin: 10px -16px;
        border: 1px solid #cccccc4f;
    width: 99%;
    margin: 0 auto;
}
.radio{
  margin-left: 19px;
}
input[type=text]:disabled {
    background: none;
    width: 100%;
}
.empid{
      margin: 0 10px;
}
label{
      margin: 0 10px;
}
.empname {
    margin: 1px 9px;
    border: none;
    width: 79% !important;
float: left;
}
@media screen and (max-width: 720px) {
 .btn-success {
    color: #fff;
    background-color: #5cb85c;
    border-color: #4cae4c;
    width: 100%;
    margin: 10px auto;
    padding: 10px 0;
}

.checkbox label, .radio label {
    min-height: 20px;
    padding-left: 20px;
    margin-bottom: 0;
    font-weight: 400;
    cursor: pointer;
    width: 95% !important;
}
}
</style>
<script type="text/javascript">
  $(document).ready(function() {
      // Setup - add a text input to each footer cell
      $('#example1 tfoot th').each( function () {
          var title = $(this).text();
          /*$(this).html( '<input type="text" placeholder="Search '+title+'" />' );*/
      } );
   //swathi1
      // DataTable
      var table = $('#example1').DataTable();
      table.columns().every( function () {
          var that = this;
   
          $( 'input', this.footer() ).on( 'keyup change', function () {
              if ( that.search() !== this.value ) {
                  that
                      .search( this.value )
                      .draw();
              }
          } );
      } );



     $('#example2 tfoot th').each( function () {
          var title = $(this).text();
          /*$(this).html( '<input type="text" placeholder="Search '+title+'" />' );*/
      } );
   
      // DataTable
      var table = $('#example2').DataTable();
      table.columns().every( function () {
          var that = this;
   
          $( 'input', this.footer() ).on( 'keyup change', function () {
              if ( that.search() !== this.value ) {
                  that
                      .search( this.value )
                      .draw();
              }
          } );
      } );



$('input.sms').on('change', function() {
    $('input.sms').not(this).prop('checked', false);  
});


$( "#fromdate" ).datepicker({
    dateFormat: 'yy-mm-dd',//check change
    changeMonth: true,
    changeYear: true
});

$( "#todate" ).datepicker({
    dateFormat: 'yy-mm-dd',//check change
    changeMonth: true,
    changeYear: true
});

$("#fromdate").on('change', function(){
var from =new Date($("#fromdate").val());



//var to = firstOfNextMonth(from);
var dateObj = new Date(from.setMonth(from.getMonth() + 3));
var month = dateObj.getUTCMonth() + 1; //months from 1-12
var day = dateObj.getUTCDate();
var year = dateObj.getUTCFullYear();

var toDate = year + "-" + month + "-" + day;

$("#todate").val(toDate);

});




$("#srchbtn").click(function(){
});

  } );

  </script>
</head>
<body>
<header>
	<div class="container-fluid">
   <div class="head clearfix">
      <div class="logo">
         
      </div>

</header>

<section>
	<div class="container-fluid con">
<h4 style="color: #286090;margin: 10px;
    padding-left: 0;
    font-weight: bold;border-bottom: 1px solid #286090;">SMS REPORT</h4>
</div>
<div class="container-fluid">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">SMS CONTENT</a></li>
    <li role="presentation"><a href="#home2" aria-controls="home2" role="tab" data-toggle="tab">SMS SCHEDULE</a></li>

</ul>

</div>

<form action="#" id="insert_form" method="post">
 <div class="tab-content">


     <div role="tabpanel" class="tab-pane active" id="home">

      <div class="container-fluid">
<div class="row" style="height:20px;"></div>


      	<div class="row" >

<div class="col-md-4"><label>From:</label> <input type="text" value="" name="fromdate" id="fromdate" placeholder="From"></div>
<div class="col-md-4"><label>To:</label> <input type="text" value="" name="todate" id="todate" placeholder="To"></div>

<div class="col-md-2"><input type="button" value="search" id="srchbtn">

</div>
</div>      

<div class="row" style="height:30px;"></div>
	<div class="row" hidden>

<div class="col-md-3"><label>Date:</label> <input type="date" value="" name="ddate"></div>
<div class="col-md-2"><label>Time:</label> <input type="time" value="" name="dtime"></div>

<div class="col-md-6"><label>Opco:</label>

<input type="checkbox" value="BSNL_North" name="check_list[]">BSNL_North &nbsp;&nbsp;
<input type="checkbox" value="BSNL_South" name="check_list[]">BSNL_South &nbsp;&nbsp;
<input type="checkbox" value="BSNL_North" name="check_list[]">BSNL_East &nbsp;&nbsp;
<input type="checkbox" value="BSNL_South" name="check_list[]">BSNL_West &nbsp;&nbsp;
<input type="checkbox" value="MTML" name="check_list[]">BSNL_West

</div>
</div>
      	<table class="table">
  <table id="example2" class="display table-hover" cellspacing="0" width="100%">
        <thead>
            
            <tr>
                <th>Id</th>
                <th>Sms</th>
                <th>Date</th>
                <th>Time</th>
                <th>Opco</th>
                <th>Circle</th>
                <th>Cdt</th>
            </tr>

        </thead>
        <tfoot>
            
            <tr><th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            
        </tfoot>
        <tbody>
    <?php
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "password";
            $dbname = "cms";
            $link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

       		 $query = "SELECT * FROM sms where cdt >= now()-interval 2 month";
            $result = mysqli_query($link,$query);
            while($row = mysqli_fetch_array($result)){

            ?>

           <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['sms'];?></td>
                <td><?php echo $row['ddate'];?></td>
                <td><?php echo $row['dtime'];?></td>
                <td><?php echo $row['opco'];?></td>
                <td><?php echo $row['circle'];?></td>
                <td><?php echo $row['cdt'];?></td>
          </tr>


  <?php } ?>
</tbody>
</table>
</table>
<input type="submit" name="submit" value="Submit"></input>
</form>


      </div>
	</div>
	 <div role="tabpanel" class="tab-pane" id="home2">
      <div class="container-fluid">

      	<table class="table">
  <table id="example2" class="display table-hover" cellspacing="0" width="100%">
        <thead>
            
            <tr>
                <th>Id</th>
                <th>Sms</th>
                <th>Date</th>
                <th>Time</th>
                <th>Opco</th>
                <th>Circle</th>
                <th>Cdt</th>
            </tr>

        </thead>
        <tfoot>
            
            <tr><th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            
        </tfoot>
        <tbody>
    <?php
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "password";
            $dbname = "cms";
            $link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

       		 $query = "SELECT * FROM sms limit 6";
            $result = mysqli_query($link,$query);
            while($row = mysqli_fetch_array($result)){

            ?>

           <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['sms'];?></td>
                <td><?php echo $row['ddate'];?></td>
                <td><?php echo $row['dtime'];?></td>
                <td><?php echo $row['opco'];?></td>
                <td><?php echo $row['circle'];?></td>
                <td><?php echo $row['cdt'];?></td>
          </tr>


  <?php } ?>
</tbody>
</table>
</table>

      </div>
	</div>
</div>

</section>
<?php
include('config.php');
$link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$query = "SELECT * FROM sms_data";
$result = mysqli_query($link,$query);
while($row = mysqli_fetch_array($result)){
$id = $row['id'];
$msisdn = $row['msisdn'];
$amount = $row['amount'];
$zone = $row['zone'];
}
?>


<?php
if(isset($_POST['submit'])){

  $orgdate = $_POST['ddate'];
  $time = $_POST['dtime'];
  $date = str_replace('/', '-', $orgdate );
  $newDate = date("Y-m-d", strtotime($date));

if(!empty($_POST['data_id'])){

foreach($_POST['data_id'] as $selected){

$query1 = "SELECT service_name,sms FROM sms_data where id=$selected";
$result1 = mysqli_query($link,$query1);
$row1 = mysqli_fetch_assoc($result1);
$service_name = trim($row1['service_name']);
$sms = $row1['sms'];

$query2 = "SELECT  pid FROM smsportals where servicename='$service_name'";
$result2 = mysqli_query($link,$query2);
$row2 = mysqli_fetch_assoc($result2);
$pid = $row2['pid'];


$ress = mysqli_query($link,"update sms_data set status='0' where id=$selected");
}
}


if(!empty($_POST['check_list'])){
foreach($_POST['check_list'] as $val){
 $val;

 $query3 = "insert into sms(pid,ddate,dtime,sms,cdt,opco) values($pid,'$newDate','10:00:00','$sms',now(),'$val')";

$res = mysqli_query($link,$query3);

}
}

}

?>
</body>
</html>
