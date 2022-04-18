<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Booking $booking
 */
?>


<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3><?= __('View Booking') ?></h3>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row" style="display: block;">
      <div class="clearfix"></div>
      <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
          <div class="x_title">
            <h2><?= __('Booking Details') ?></h2>
            <div class="clearfix"></div>
          </div>

          <div class="x_content">

           <div class="row">
            <div class="col-sm-12">
                    <!-- <p class="text-muted font-13 m-b-30">
                      DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
                    </p> -->
        <div class="bookings view content">
            <h3><?= h($booking->name) ?></h3>
            <table class="table">
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($booking->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($booking->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($booking->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h(($booking->type=='face_to_face')?'Face to Face':'Zoom') ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h(ucfirst($booking->status)) ?></td>
                </tr>
                <tr>
                    <th><?= __('Schedule Starts At') ?></th>
                    <td><?= h($booking->scheduled_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Scheduled Ends At') ?></th>
                    <td><?= h($booking->schedule_ends_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reminder Mail Sent') ?></th>
                    <td><?= h($booking->reminder_email_sent=='sent'?'Sent':'Not Sent') ?></td>
                </tr>
                <tr>
                    <th><?= __('Service Type') ?></th>
                    <td><?= h(['office_phone'=>'Office Phone','nbn_interent'=>'NBN & Internet','1300_1800_numbers'=>'1300/1800 Numbers','mobiles_tablets'=>'Mobiles & Tablets','cloud_pbx_desktop'=>'Cloud PBX & Desktop','office365_g_suite_other_services'=>'Office365, G Suite & Other Services','consumer_products'=>'Consumer Products'][$booking->service_type]) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($booking->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($booking->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($booking->description)); ?>
                </blockquote>
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


<style>
blockquote p{
    color: unset !important;
}
</style>