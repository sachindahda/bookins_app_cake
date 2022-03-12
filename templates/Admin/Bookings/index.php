
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3><?= __('Bookings') ?></h3>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row" style="display: block;">
      <div class="clearfix"></div>
      <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
          <div class="x_title">
            <h2><?= __('Bookings') ?></h2>
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
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Email</th>
                          <th>Scheduled At</th>
                          <th>Meeting Type</th>
                          <th>Status</th>
                          <th>Created At</th>
                          <th class="actions"><?= __('Actions') ?></th>

                        </tr>
                      </thead>


                      <tbody>
                        <?php foreach ($bookings as $index=> $booking): ?>
                <tr>
                    <td><?= $this->Number->format($index+1) ?></td>
                    <td><?= h($booking->name) ?></td>
                    <td><?= h($booking->phone) ?></td>
                    <td><?= h($booking->email) ?></td>
                    <td><?= h($booking->scheduled_at) ?></td>
                    <td><?= h(($booking->type=='face_to_face')?'Face to Face':'Zoom') ?></td>
                    <td><?= h(ucfirst($booking->status)) ?></td>

                    <td><?= h($booking->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $booking->id],['class'=>'btn btn-primary']) ?>
                        <?php if($booking->status=='inactive') {?>
                        <?= $this->Form->postLink(__('Confirm'), ['action' => 'edit', $booking->id],['confirm' => __('Are you sure you want to Confirm  # {0} Appointment?', $booking->id),'class'=>'btn btn-success']) ?>
                    <?php }?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $booking->id], ['confirm' => __('Are you sure you want to delete # {0}?', $booking->id),'class'=>'btn btn-danger']) ?>
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
</div>
<style >
  .table-responsive thead a{
    color: #ECF0F1;
  }
</style>
