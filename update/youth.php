
<?php

include '../dist/includes/dbcon.php';

if(isset($_POST['supup'])){
    $id = $_POST['id'];

$Supplier=$_POST['Supplier'];

$phone=$_POST['phone'];
$Email=$_POST['Email'];
$Location=$_POST['Location'];
$done=$_SESSION['own'];



$sql = "UPDATE supplier SET name='$Supplier',phone='$phone',email='$Email',location='$Location',done='$done' WHERE id=' $id '";


if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert(' $Supplier  Successfully UPDATED ');</script>";
		echo "<script>window.location='../../../youth/'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}}

?>






<div class="modal fade" id="Supplierup<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
            <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                           <h4 class="modal-title" id="myModalLabel2">Update <?php echo $name; ?></h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                         
                        </div>
                        <div class="modal-body">
                         <form name="supup"   enctype="multipart/form-data"> 
                           
                  <input type="hidden" name=" id " value="<?php echo $id; ?>">
               
                  <label>Supplier Name</label>
                <input type="text" name = "Supplier" class="form-control" value="<?php echo $name; ?>">
                  <br/>
                  <label for="hgytf">Tin Number</label>
                <input type="number" name = "Tin" class="form-control" value="<?php echo $tin; ?>">
                  <br/>
                 <label for="subject">phone number</label>
                <input type="number" name = "phone" class="form-control" value="<?php echo $phone; ?>">
                  <br/>
                  <label for="subject">Email</label>
                <input type="email" name = "Email" class="form-control" value="<?php echo $email; ?>">
                  <br/>
                  <label for="subject">Location</label>
                <input type="text" name = "Location" class="form-control" value="<?php echo $location; ?>">
                  <br/>
                      
             <a href="" onclick="document.forms['supup'].submit(); return false;">
              <button  name = "update" class="btn btn-primary">Save Information</button></a>
            </form>
            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
        </div>