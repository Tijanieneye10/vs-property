<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gbicts Academy certificate verified</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://bootswatch.com/4/simplex/bootstrap.min.css"/>

</head>
<body>
    
</body>
</html>



<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
             <?php   if(isset($_SESSION['cert_number'])) : ?>
                <div class="card-body">
                  
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="image-container">
                                    <img src="<?=base_url('assets/images/'.$sess->image) ?>" id="imgProfile" style="width: 100px; height: 100px" class="img-thumbnail" />
                                    <div class="middle">
                                        <!-- <input type="button" class="btn btn-secondary" id="btnChangePicture" value="Change" /> -->
                                        <input type="file" style="display: none;" id="profilePicture" name="file" />
                                    </div>
                                </div> 
                                <!-- <div class="userData ml-3">
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a href="javascript:void(0);"><div class="alert alert-info" role="alert">Certificate Details </div></a></h2>
                                 
                                </div> -->
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Basic Info</a>
                                    </li>
                                     <!-- <li class="nav-item">
                                        <a class="nav-link" id="connectedServices-tab" data-toggle="tab" href="#connectedServices" role="tab" aria-controls="connectedServices" aria-selected="false">Connected Services</a>
                                    </li>  -->
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Firstname</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                               <span style="color:blue"><strong><?= $sess->firstname ?></strong></span> 
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Lastname</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            <span style="color:blue"><strong><?= $sess->lastname ?></strong></span>  
                                            </div>
                                        </div>
                                        <hr />
                                        
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Date of Birth</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            <span style="color:blue"><strong><?= $sess->dob ?></strong></span>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Certificate Number</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            <span style="color:blue;"><strong><?= $sess->cert_number ?></strong></span> 
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Gender</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            <span style="color:blue"><strong><?= $sess->gender ?></strong></span> 
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Obtained</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            <span style="color:blue"><strong><?= $sess->year_of_award ?></strong></span>
                                            </div>
                                        </div>
                                        <hr />

                                    <div>
                                        <a href="<?=base_url('registration/logout') ?>" class="btn btn-info">Logout</a>
                                        <a href="" class="btn btn-warning" onclick="window.print()">Print</a>
                                    </div>

                                    </div>
                                    <div class="tab-pane fade" id="connectedServices" role="tabpanel" aria-labelledby="ConnectedServices-tab">
                                        Facebook, Google, Twitter Account that are connected to this account
                                    </div>
                                </div>
                            </div>
                        </div>

             <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
