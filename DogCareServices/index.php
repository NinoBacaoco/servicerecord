<?php
require_once 'includes/header.php';
require_once 'db_helper.php';

$db = new DBHelper(DBHelper::getConnection());

?>

<div class="wrapper">
  <?php include 'includes/sidebar.php' ?>
  <div class="main-panel">

    <?php if (isset($_SESSION["message"])) : ?>
      <div class="alert alert-success">
        <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
          <i class="tim-icons icon-simple-remove"></i>
        </button>
        <b><?= $_SESSION["message"]; ?></b>
      </div>
      <?php unset($_SESSION["message"]); ?>
    <?php endif; ?>
    <div class="content">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Service Records Information</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table tablesorter" id="">
                  <thead class="text-primary">
                    <tr>
                      <th>
                        Service ID
                      </th>
                      <th>
                        Service Name
                      </th>
                      <th>
                        Service Description
                      </th>
                      <th>
                        Price
                      </th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($db->get_service_record() as $servicerecord) : ?>
                      <tr>
                        <td>
                          <?= $servicerecord['id'] ?>
                        </td>
                        <td>
                          <?= $servicerecord['servicename'] ?>
                        </td>
                        <td>
                          <?= $servicerecord['servicedescription'] ?>
                        </td>
                        <td>
                          <?= $servicerecord['price'] ?>
                        </td>
                        <td>
                          <a href="update_servicerecord.php?id=<?= $servicerecord['id'] ?>" class="btn btn-primary btn-sm"><i class="nc-icon nc-settings"></i> Update</a>
                          <a href="delete.php?id=<?= $servicerecord['id'] ?>" onclick="return confirm('Are you sure you want to delete this service record?')" class="btn btn-danger btn-sm"><i class="nc-icon nc-simple-remove"></i> Delete</a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
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
<?php require_once 'includes/footer.php' ?>
