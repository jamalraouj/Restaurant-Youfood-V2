<div class=" d-flex justify-content-center align-items-center flex-column" style="height:81vh ;">
    <h2 class="text-green">Search for a Menu </h2>
    <div class="p-3 col-md-6 col-sm-8 col-10 mt-3">
        <form method="post" action="">
        <div class="form-group">
            <input type="date" name="menu_date" class="form-control p-3 text-green " >
            <input type="submit" name="save" class="button mt-4 w-100 text-white fw-bold">
        </div>
        </form>
    </div>
    <div>
    <?php if(isset($_SESSION['msg'])){ ?>
        <div class="alert alert-warning w-100 d-flex align-items-center" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
        <div>
        <?php echo 'the menu of ' . $_SESSION['msg'] . ' has been resereved'  ?>
  </div>
</div>
<?php
       
    } 
        unset($_SESSION['msg'] ) 
        ?>;

    </div>
 </div>