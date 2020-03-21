<?= view('templates/header') ?>

        <h5 class="mb-4"><div class="alert alert-success" role="alert">
          GBICTS ACADEMY PORTAL
        </div></h5>
       <div class="card">
         <div class="card-header">
          <h4>REGISTER CERTIFICATE</h4> 
         </div>
         <div class="card-body">
           <?php if(session()->error): ?>
            <?=session()->error ?>
           <?php endif; ?>

    <?php if($viewSingleData) : ?>
           <form action="<?=base_url('test/validateUpdate/'.$viewSingleData->id) ?>" method="post" enctype="multipart/form-data">
           <input type="hidden" class="form-control" id="inlineFormInputGroupUsername2" value="<?=$viewSingleData->id ?>" name="hidden">
           <div class="form-row form-group">
                <div class="col-md-6">
                <label class="sr-only" for="inlineFormInputGroupUsername2">Firstname</label>
  <div class="input-group mb-2 mr-sm-2">
    <div class="input-group-prepend">
      <div class="input-group-text"><i class="fa fa-user-circle-o"></i> </div>
    </div>
    <input type="text" class="form-control" id="inlineFormInputGroupUsername2" value="<?=$viewSingleData->firstname ?>" name="firstname">
  </div>
      </div>

                <div class="col-md-6">
                <label class="sr-only" for="inlineFormInputGroupUsername2">Lastname</label>
  <div class="input-group mb-2 mr-sm-2">
    <div class="input-group-prepend">
      <div class="input-group-text"><i class="fa fa-user"></i></div>
    </div>
    <input type="text" class="form-control" id="inlineFormInputGroupUsername2" value="<?=$viewSingleData->lastname ?>" name="lastname">
  </div>
                </div>
             </div>

      <div class="form-row form-group">
      <div class="col-md-4">
      <label >Date of Birth</label>
  <div class="input-group mb-2 mr-sm-2">
    <div class="input-group-prepend">
      <div class="input-group-text"><i class="fa fa-birthday-cake"></i></div>
    </div>
    <input type="date" class="form-control" id="inlineFormInputGroupUsername2" value="<?=$viewSingleData->dob ?>" name="dob">
  </div>
                </div>

                <div class="col-md-4">
                <label >Upload Passport</label>
  <div class="input-group mb-2 mr-sm-2">
    <div class="input-group-prepend">
      <div class="input-group-text"><i class="fa fa-folder-open"></i></div>
    </div>
    <input type="file" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Passport" name="photo">
  </div>
                </div>

                <div class="col-md-4">
                <label >Year of Award</label>
  <div class="input-group mb-2 mr-sm-2">
    <div class="input-group-prepend">
      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
    </div>
    <input type="date" class="form-control" id="inlineFormInputGroupUsername2" value="<?=$viewSingleData->year_of_award ?>" name="year">
  </div>
                </div>

      </div>

   <div class="form-row form-group">
   <div class="col-md-6">
                <label class="sr-only" for="inlineFormInputGroupUsername2">Certificate</label>
  <div class="input-group mb-2 mr-sm-2">
    <div class="input-group-prepend">
      <div class="input-group-text"><i class="fa fa-user"></i></div>
    </div>
    <input type="text" class="form-control" id="inlineFormInputGroupUsername2" value="<?=$viewSingleData->cert_number ?>" name="cert">
  </div>
                </div>

                <div class="col-md-6">
                <label class="sr-only" for="inlineFormInputGroupUsername2">Gender</label>
  <div class="input-group mb-2 mr-sm-2">
    <div class="input-group-prepend">
      <div class="input-group-text"><i class="fa fa-user"></i></div>
    </div>
    <select name="gender" id="" class="form-control" value="<?=$viewSingleData->gender ?>">
      <option value="<?=$viewSingleData->gender ?>"><?=$viewSingleData->gender ?></option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
  </div>
                </div>

   </div>

      <div class="form-group">
        <button class="btn btn-info" name="submit" >Update <i class="fa fa-sign-in"></i></button>
      </div>

           </form>
    <?php endif; ?>
         </div>
       </div>
    <?= view('templates/footer') ?>