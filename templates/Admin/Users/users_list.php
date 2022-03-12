<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Welcome <small><?=  $this->Identity->get('first_name').' '.$this->Identity->get('last_name');?></small></h3>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row" style="display: block;">
      <div class="clearfix"></div>
      <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Admin Users List</h2>
            <div class="clearfix"></div>
          </div>

          <div class="x_content">

           <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <!-- <p class="text-muted font-13 m-b-30">
                      DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
                    </p> -->
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Sr. No.</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Email</th>
                          <th>Created</th>
                          <th>Modified</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php foreach ($users as $index=> $user): ?>
                        <tr class="<?php echo ($index%2==0) ?'even ':'odd ';?>">
                          <td><?= $this->Number->format($index+1) ?></td>
                          <td><?= h($user->first_name) ?></td>
                          <td><?= h($user->last_name) ?></td>
                          <td><?= h($user->email) ?></td>
                          <td><?= h($user->created) ?></td>
                          <td><?= h($user->modified) ?></td>
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
</div>
<style >
  .table-responsive thead a{
    color: #ECF0F1;
  }
</style>