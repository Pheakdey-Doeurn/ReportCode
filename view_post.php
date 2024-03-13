<?php $pageTitle = "actionstudents";    include 'homeheader.php';
include 'config/config.php'; 
?>
<?php
    if(isset($_GET['title'])){
        if($_GET['title'] == null){
            redirect('actionstudents.php','');
        }
    }else{
        redirect('actionstudents.php','');
    }

    $titile = validate($_GET['title']);
    $post = "SELECT * FROM post WHERE id AND title='$tile' LIMIT 1";
    $result = mysqli_query($conn, $post);
    if(!$result){
        redirect('actionstudents.php','');
    }

    $rowData = mysqli_fetch_assoc($result);
?>

<div class="py-4 bg-secondary">
    <div class="container">
        <h2 class="text-white text-center"> Action Students</h2>
    </div>
</div>

<div class="py-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h4><?= $rowData[''] ?></h4>
                <div class="underline"></div>
                    <?= $rowData[''] ?>
                <div class="mb-3">
                    <?php  if($rowData['image']!= '') : ?>
                        <img src="<?= $rowData['image']; ?>">
                    <?php else: ?>
                        <img src="admin/uploads/no_pictures.png">
                    <?php endif; ?>
                </div>
            </div>          
        </div>
    </div>

</div>
<?php include("homefooter.php");?>
