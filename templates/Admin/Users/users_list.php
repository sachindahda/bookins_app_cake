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

            <div class="table-responsive">
              <table class="table table-striped jambo_table bulk_action">
                <thead>
                  <tr class="headings">
                    <th>
                      <input type="checkbox" id="check-all" class="flat">
                    </th>
                    <th class="column-title"><?= $this->Paginator->sort('id') ?></th>
                    <th class="column-title"><?= $this->Paginator->sort('role') ?></th>
                    <th class="column-title"><?= $this->Paginator->sort('first_name') ?></th>
                    <th class="column-title"><?= $this->Paginator->sort('last_name') ?></th>
                    <th class="column-title"><?= $this->Paginator->sort('email') ?></th>
                    <th class="column-title"><?= $this->Paginator->sort('created') ?></th>
                    <th class="column-title"><?= $this->Paginator->sort('modified') ?></th>
                    <!-- <th class="column-title no-link last actions"><span class="nobr"><?= __('Actions') ?></span> -->
                    </th>
                    <th class="bulk-actions" colspan="7">
                      <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                    </th>
                  </tr>
                </thead>

                <tbody>
                  <?php foreach ($users as $index=> $user): ?>
                    <tr class="<?php echo ($index%2==0) ?'even ':'odd ';?> pointer">
                      <td class="a-center ">
                        <input type="checkbox" class="flat" name="table_records">
                      </td>
                      <td><?= $this->Number->format($user->id) ?></td>
                      <td><?= h($user->role) ?></td>
                      <td><?= h($user->first_name) ?></td>
                      <td><?= h($user->last_name) ?></td>
                      <td><?= h($user->email) ?></td>
                      <td><?= h($user->created) ?></td>
                      <td><?= h($user->modified) ?></td>
                     <!--  <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                      </td> -->
                    </tr>
                  <?php endforeach; ?>

                </tbody>
              </table>
              <?= $this->Paginator->numbers();?>
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