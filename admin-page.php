<?php 
  require "dbConnect.php";
  require "cases_info.php";
  require "process/show-list.php";

  session_start();
  // Info Admin
  $id = $_SESSION['id'];
  $take = $con->prepare("SELECT * FROM data_user WHERE id_user=:id");
  $take->bindParam(':id', $id);
  $take->execute();

  $fetch = $take->fetch(PDO::FETCH_ASSOC);
  $owner = $fetch['owner'];
  $uname = $fetch['username'];

  // Growth info
  $growth = $con->prepare("SELECT * FROM data_statistic ORDER BY id_statistic DESC LIMIT 1");
  $growth->execute();

  $gr = $growth->fetch(PDO::FETCH_ASSOC);
  $gr_pos = $gr['positive'];
  $gr_rec = $gr['healed'];
  $gr_dea = $gr['dead'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- More CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/Chart.min.css">

    <link rel="icon" type="image/png" href="assets/image/icon.png">

    <title>Admin Page | Coronavirus Web</title>
</head>
<body class="admin-only">

    <svg class="admin-only-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgb(182, 4, 102)" fill-opacity="1" d="M0,288L24,272C48,256,96,224,144,218.7C192,213,240,235,288,245.3C336,256,384,256,432,224C480,192,528,128,576,117.3C624,107,672,149,720,149.3C768,149,816,107,864,96C912,85,960,107,1008,112C1056,117,1104,107,1152,117.3C1200,128,1248,160,1296,170.7C1344,181,1392,171,1416,165.3L1440,160L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>

    <div class="wrapper-admin">
        <div class="box-admin-wrapper shadow">
            <div class="header-box">
                <div class="container">
                    <div class="row">
                        <div class="col-8">
                            <h5>Welcome, <?php echo $owner; ?></h5>
                        </div>
                        <div class="col-4 mt-1 text-right">
                            <h6><i class="fas fa-user-circle"></i>&nbsp; <?php echo $uname; ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="body-box">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="admin-bg-light statistic-infected shadow">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <h6>Pencatatan Kasus Covid-19 <small>per <?php echo $date_only; ?></small></h6>
                                            <form class="form-inline mt-5 pt-3">
                                                <button type="button" class="btn btn-success btn-sm" style="width: 60%; margin-right: 5px;" data-toggle="modal" data-target="#update-cases">Update</button>
                                                <button type="submit" class="btn btn-primary btn-sm refresh" style="width: 35%;"><i class="fas fa-sync-alt"></i></button>
                                            </form>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="total">
                                                <div class="detail-total positive">
                                                    <h6 class="ml-3 text-white"><?php echo $positive; ?> kasus positif Covid</h6>
                                                    <div class="growth-total growth-total-positive pt-2 text-center">
                                                        <small class="text-white"><i class="fas fa-arrow-up"></i>&nbsp;<?php echo $gr_pos; ?></small>
                                                    </div>
                                                </div>
                                                <div class="detail-total recovered">
                                                    <h6 class="ml-3 text-white"><?php echo $healed; ?> sembuh</h6>
                                                    <div class="growth-total growth-total-recovered pt-2 text-center">
                                                        <small class="text-white"><i class="fas fa-arrow-up"></i>&nbsp;<?php echo $gr_rec; ?></small>
                                                    </div>
                                                </div>
                                                <div class="detail-total death">
                                                    <h6 class="ml-3 text-white"><?php echo $dead; ?> kasus meninggal</h6>
                                                    <div class="growth-total growth-total-death pt-2 text-center">
                                                        <small class="text-white"><i class="fas fa-arrow-up"></i>&nbsp;<?php echo $gr_dea; ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="grafik">
                                                <div style="width: 150px;height: 130px; margin: auto;">
                                                    <canvas id="myChart"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php if(isset($_GET['success_update'])): ?>

                                <div class="alert alert-<?php echo $_GET['type']; ?> alert-dismissible alert-info-admin fade show text-center text-white" role="alert">
                                  <?php echo $_GET['act']; ?>
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>

                                <?php endif; ?>

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="admin-bg-light hospital-info-admin shadow">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5>Hospital list</h5>
                                        </div>
                                        <div class="col-12" style="background-color: rgb(231, 87, 3); padding: 10px;">
                                            <form style="width: 100%;" action="process/hospital-act.php" method="post">
                                                <div class="form-row">
                                                  <div class="col-9">
                                                    <select class="form-control form-control-sm" name="prov" style="width: 100%;">
                                                        <?php
                                                          while($prov = $show_select->fetch(PDO::FETCH_ASSOC)):
                                                        ?>
                                                        <option <?php if(isset($_GET['id_prov'])){if($_GET['id_prov'] == $prov['id_province']){echo "selected";}} ?> value="<?php echo $prov['id_province']; ?>"><?php echo $prov['province']; ?></option>
                                                        <?php endwhile; ?>
                                                    </select>
                                                  </div>
                                                  <div class="col-3 text-right">
                                                    <button type="submit" style="width: 100%;" name="submit-prov" class="btn btn-primary btn-sm">Go</button>
                                                  </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="add text-right mt-2" style="width: 100%;">
                                          <a href="#" class="icon-blue mt-2 mr-3" title="Add" data-toggle="modal" data-target="#add">
                                            <i class="fas fa-plus"></i>
                                          </a>
                                        </div>
                                        <div class="col-12 mt-3 hospital-list">
                                                      
                                            <table class="table table-sm table-hover">
                                                <thead>
                                                  <tr>
                                                    <th scope="col" colspan="2" class="text-center">Hospital</th>
                                                    <th scope="col" style="width: 30%;" class="text-center">Action</th>
                                                  </tr>
                                                </thead>
                                                <tbody>

                                                  <?php
                                                    if(isset($_GET['id_prov'])){
                                                      $hosp = $con->prepare("SELECT LEFT(hospital_name, 10) AS name, id_hospital FROM data_hospital WHERE id_province=:id");
                                                      $hosp->bindParam(':id', $_GET['id_prov']);
                                                    } else {
                                                      $hosp = $con->prepare("SELECT LEFT(hospital_name, 10) AS name, id_hospital FROM data_hospital WHERE id_province='P-ACH'");
                                                    }
                                                    $hosp->execute();

                                                    while($record = $hosp->fetch(PDO::FETCH_ASSOC)):

                                                      $detail = $con->prepare("SELECT * FROM data_hospital h, data_province p WHERE h.id_province=p.id_province AND id_hospital=:id_hosp");
                                                      $detail->bindParam(':id_hosp', $record['id_hospital']);
                                                      $detail->execute();

                                                      $fetch_d = $detail->fetch(PDO::FETCH_ASSOC);
                                                      $hosp_name = $fetch_d['hospital_name'];
                                                      $hosp_add = $fetch_d['address_telp'];
                                                      $hosp_reg = $fetch_d['province'];
                                                  ?>

                                                  <tr>
                                                    <td><?php echo $record['name']; ?> ..&nbsp;&nbsp; </td>
                                                    <td><button type="button" style="width: 75px; border-radius: 4px;" class="btn btn-info btn-sm" data-toggle="modal" data-target="#detail" data-name="<?php echo $hosp_name; ?>" data-address="<?php echo $hosp_add; ?>" data-region="<?php echo $hosp_reg; ?>">Detail</button></td>
                                                    <td class="text-center">
                                                      <a href="#" class="icon-green" title="Edit" data-toggle="modal" data-target="#edit" data-id="<?php echo $record['id_hospital']; ?>" data-nam="<?php echo $hosp_name; ?>" data-add="<?php echo $hosp_add; ?>" data-reg="<?php echo $hosp_reg; ?>">
                                                        <i class="fas fa-edit"></i>
                                                      </a>
                                                      <a href="#" class="icon-red" title="Delete" data-toggle="modal" data-target="#delete" data-id="<?php echo $record['id_hospital']; ?>">
                                                        <i class="fas fa-trash"></i>
                                                      </a>
                                                    </td>
                                                  </tr>

                                                  <?php endwhile; ?>
                                                  
                                                </tbody>
                                              </table>
                                        </div>
                                    </div>
                                </div>
                                <?php if(isset($_GET['success'])): ?>

                                <div class="alert alert-<?php echo $_GET['type']; ?> alert-dismissible alert-info-admin fade show text-center text-white" role="alert">
                                  <?php echo $_GET['act']; ?>
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>

                                <?php endif; ?>
                                
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="admin-bg-light bottom-box admin-list shadow">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-6">
                                            <h6>Admin list</h6>
                                        </div>
                                        <div class="col-6 admin-list-view-all text-right pr-4">
                                            <h6><a href="#" data-toggle="modal" data-target="#admin-list">View All</a></h6>
                                        </div>
                                        <div class="col-12">
                                            <table class="table table-sm table-hover mt-2">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">Owner</th>
                                                    <th scope="col">Username</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                  while($rec_admin = $show_admin->fetch(PDO::FETCH_ASSOC)):
                                                ?>
                                                  <tr>
                                                    <td><?php echo $rec_admin['owner']; ?></td>
                                                    <td><?php echo $rec_admin['username']; ?></td>
                                                  </tr>
                                                  <?php endwhile; ?>
                                                </tbody>
                                              </table>
                                        </div>
                                    </div>
                                </div>
                                
                            <?php if(isset($_GET['success_add'])): ?>

                            <div class="alert alert-<?php echo $_GET['type']; ?> alert-dismissible alert-info-admin fade show text-center text-white" role="alert">
                              <?php echo $_GET['act']; ?>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                            </div>

                            <?php endif; ?>

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="admin-bg-light bottom-box bottom-box-scnd province-list shadow">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-6">
                                            <h6>Province</h6>
                                        </div>
                                        <div class="col-6 admin-list-view-all text-right pr-4">
                                            <h6><a href="#" data-toggle="modal" data-target="#province-list">View All</a></h6>
                                        </div>
                                        <div class="col-12">
                                            <table class="table table-sm table-hover mt-2">
                                                <thead>
                                                  <tr>
                                                    <th scope="col" width="30%">Id</th>
                                                    <th scope="col">Province</th>
                                                  </tr>
                                                </thead>
                                                <tbody>

                                                  <?php
                                                    while($rec_prov = $show_province->fetch(PDO::FETCH_ASSOC)):
                                                  ?>

                                                  <tr>
                                                    <td><?php echo $rec_prov['id_province']; ?></td>
                                                    <td><?php echo $rec_prov['province']; ?></td>
                                                  </tr>

                                                  <?php endwhile; ?>
                                                </tbody>
                                              </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals -->
    <div class="modal fade" id="update-cases" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Kasus</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="process/update_cases.php" method="POST">
              <div class="form-group">
                <small class="form-text mb-1">Penambahan kasus positif</small>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text bg-red text-white"><i class="fas fa-arrow-up"></i></div>
                  </div>
                  <input type="number" class="form-control positive-input" name="positive" placeholder="Positive Cases" required>
                </div>
              </div>
              <div class="form-group">
                <small class="form-text mb-1">Penambahan kasus sembuh</small>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text bg-green text-white"><i class="fas fa-arrow-up"></i></div>
                  </div>
                  <input type="number" class="form-control recovered-input" name="recovered" placeholder="Recovered Cases" required>
                </div>
              </div>
              <div class="form-group">
                <small class="form-text mb-1">Penambahan kasus meninggal</small>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text bg-gray text-white"><i class="fas fa-arrow-up"></i></div>
                  </div>
                  <input type="number" class="form-control death-input" name="death" placeholder="Death Cases" required>
                </div>
              </div>
              <div class="form-group text-center">
                <button type="submit" style="width: 50%; margin: auto;" class="btn btn-primary mt-2">Submit</button>
              </div>
            </form>
          </div>
          <div class="modal-footer">
              <small class="text-muted">*Anda hanya dapat mengupdate satu kali dalam sehari</small>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="admin-list" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Admin List</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <table class="table table-hover table-striped mt-3">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col" style="width: 10%;">#</th>
                        <th scope="col" style="width: 45%;">Owner</th>
                        <th scope="col" style="width: 45%;">Username</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $no_adm = 1;
                        while($rec_all_admin = $show_all_admin->fetch(PDO::FETCH_ASSOC)):
                      ?>
                      <tr>
                        <th scope="row"><?php echo $no_adm; ?></th>
                        <td><?php echo $rec_all_admin['owner']; ?></td>
                        <td><?php echo $rec_all_admin['username']; ?></td>
                      </tr>
                      <?php $no_adm++; endwhile; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add-data">Add Data</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="province-list" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Province List</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <table class="table table-hover table-striped mt-3">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col" style="width: 30%;">Id Province</th>
                        <th scope="col" style="width: 70%;">Province</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        while($rec_all_province = $show_all_province->fetch(PDO::FETCH_ASSOC)):
                      ?>
                      <tr>
                        <td><?php echo $rec_all_province['id_province']; ?></td>
                        <td><?php echo $rec_all_province['province']; ?></td>
                      </tr>
                      <?php endwhile; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="add-data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-gray">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="process/add-admin.php" method="post">
              <div class="form-row">
                <div class="col-md-6">
                  <small>Owner</small>
                  <input type="text" class="form-control" id="validationDefault01" name="owner" placeholder="Enter here" required>
                </div>
                <div class="col-md-6">
                  <small>Username</small>
                  <input type="text" class="form-control" id="validationDefault01" name="username" placeholder="Enter here" required>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-6">
                  <small>Password</small>
                  <input type="password" class="form-control" id="validationDefault01" name="password" placeholder="Enter here" required>
                </div>
                <div class="col-md-6">
                  <small>Confirm Password</small>
                  <input type="password" class="form-control" id="validationDefault01" name="confirm" placeholder="Enter here" required>
                </div>
              </div>
              <div class="form-row">
                <div class="col-12 text-center">
                  <button class="btn btn-primary mt-3 mb-2" style="margin: auto; width: 50%;" type="submit">Submit</button>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title name" id="exampleModalCenterTitle"></h5>
          </div>
          <div class="modal-body">
            <small class="address"></small>
          </div>
          <div class="modal-footer">
            <p class="region"></p>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Edit Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container pt-2">
              <form action="process/hospital-act.php?id_prov=<?php echo $_GET['id_prov']; ?>" method="post">
                <div class="form-group">
                  <label for="exampleFormControlSelect1" disabled>Province</label>
                  <input type="text" class="form-control edit-region" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Hospital</label>
                  <textarea class="form-control edit-hospital" rows="2" name="hospital"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Address</label>
                  <textarea class="form-control edit-address" rows="3" name="address"></textarea>
                </div>
                <div class="form-group text-center">
                  <button type="submit" name="edit" class="btn btn-success" style="width: 50%;">Save changes</button>
                </div>
                <div class="id"></div>
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <small class="text-muted">Province tidak dapat diedit</small>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Edit Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container pt-2">
              <form action="process/hospital-act.php?id_prov=<?php echo $_GET['id_prov']; ?>" method="post">
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Province</label>
                  <select class="form-control form-control" name="prov" style="width: 100%;">
                      <?php
                        while($prov = $show_select_add->fetch(PDO::FETCH_ASSOC)):
                      ?>
                      <option value="<?php echo $prov['id_province']; ?>"><?php echo $prov['province']; ?></option>
                      <?php endwhile; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Hospital</label>
                  <textarea class="form-control edit-hospital" rows="2" name="hospital" required></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Address</label>
                  <textarea class="form-control edit-address" rows="3" name="address" required></textarea>
                </div>
                <div class="form-group text-center">
                  <button type="submit" name="add" class="btn btn-success" style="width: 50%;">Add Data</button>
                </div>
                <div class="id"></div>
              </form>
            </div>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Please confirm</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body pt-3 pb-3">
            Anda yakin ingin menghapus data ini?
            <form action="process/hospital-act.php?id_prov=<?php echo $_GET['id_prov']; ?>" method="post" class="text-right mt-3">
              <div class="id"></div>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
              <button type="submit" class="btn btn-danger" name="delete">Yes</button>
            </form>
          </div>
          <div class="modal-footer">
            
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Modals -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- More JS -->
    <script src="assets/js/all.min.js"></script>
    <script src="assets/js/Chart.min.js"></script>
    <script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'doughnut',
			data: {
				datasets: [{
					data: [<?php echo $positive; ?>, <?php echo $healed; ?>, <?php echo $dead; ?>],
					backgroundColor: [
					'rgb(253, 0, 0)',
					'rgb(11, 131, 0)',
					'rgb(88, 88, 88)',
					],
					
					borderWidth: 1
				}]
			},
			options: {
			}
		});
	</script>
  <script>
    $('#detail').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var name = button.data('name')
      var address = button.data('address')
      var region = button.data('region') // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)
      modal.find('.name').text(name)
      modal.find('.address').text(address)
      modal.find('.region').text(region)
    }),
    $('#delete').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var id = button.data('id') // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)
      modal.find('.id').html("<input type='hidden' name='id' value='"+id+"'>")
    }),
    $('#edit').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var id = button.data('id')
      var name = button.data('nam')
      var address = button.data('add')
      var region = button.data('reg') // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)
      modal.find('.id').html("<input type='hidden' name='id' value='"+id+"'>")
      modal.find('.edit-region').val(region)
      modal.find('.edit-hospital').val(name)
      modal.find('.edit-address').val(address)
    })
  </script>

</body>
</html>