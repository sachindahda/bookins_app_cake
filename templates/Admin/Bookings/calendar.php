<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Calendar </h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Bookings </h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id='calendar_bookings'></div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- calendar modal -->
    
    <!-- calendar modal -->
    <div id="CalenderModalNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">New Calendar Entry</h4>
          </div>
          <div class="modal-body">
            <div id="testmodal" style="padding: 5px 20px;">
              <form id="antoform" class="form-horizontal calender" role="form">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Title</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="title" name="title">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Description</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" style="height:55px;" id="descr" name="descr"></textarea>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary antosubmit">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <div id="CalenderModalEdit" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

          <!-- <div class="modal-header">
            <h4 class="modal-title">Booking Details</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
          </div> -->
          <div class="modal-body">

            <div id="testmodal2" >
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
            <table class="table">
                <tr>
                    <th><?= __('Name') ?></th>
                    <td id="booking_name"></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td id="booking_phone"></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td id="booking_email"></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td id="booking_type"></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td id="booking_status"></td>
                </tr>
                <tr>
                    <th><?= __('Schedule Starts At') ?></th>
                    <td id="booking_schedule_starts_at"></td>
                </tr>
                <tr>
                    <th><?= __('Scheduled Ends At') ?></th>
                    <td id="booking_schedule_ends_at"></td>
                </tr>
                <tr>
                    <th><?= __('Reminder Mail Sent') ?></th>
                    <td id="booking_reminder_email_sent"></td>
                </tr>
                <tr>
                    <th><?= __('Service Type') ?></th>
                    <td id="booking_service_type"></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td id="booking_created"></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td id="booking_modified"></td>
                </tr>
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
          <div class="modal-footer">
            <!-- <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary antosubmit2">Save changes</button> -->
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div id="fc_create" data-toggle="modal" data-target="#CalenderModalNew"></div>
    <div id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit"></div>
    <!-- /calendar modal -->
<style>
  .fc-content{
    color: #fff;
  }
</style>
        <script >
          $(document).ready(function(){
        console.log("init_calendar");
            var o,
                e = new Date(),
                a = e.getDate(),
                t = e.getMonth(),
                n = e.getFullYear(),
                i = $("#calendar_bookings").fullCalendar({
                    header: { left: "prev,next today", center: "title", right: "month,agendaWeek,agendaDay,listMonth" }, 
                    selectable: !0,
                    selectHelper: !0,
                    // eventClick: function (info,e) {
                    //   console.log(info)
                    //   console.log(e)
                    //   e.preventDefault(); 
                    //   if (info.url) {
                    
                    //     window.open(info.url);
                    //   }

                    // },
                    eventClick: function (info) {
                      console.log(info);
                      console.log(info.type);


                        $("#fc_edit").click(),
                        $("#booking_name").text(info.name),
                        $("#booking_phone").text(info.phone),
                        $("#booking_email").text(info.email),
                        $("#booking_type").text(info.type),
                        $("#booking_status").text(info.status),
                        $("#booking_schedule_starts_at").text(info.schedule_start_time),
                        $("#booking_schedule_ends_at").text(info.schedule_end_time),
                        $("#booking_reminder_email_sent").text(info.reminder_email_sent),
                        $("#booking_service_type").text(info.service_type),
                        $("#booking_created").text(info.created),
                        $("#booking_modified").text(info.modified),
                        i.fullCalendar("unselect");
                    },
                    editable: 0,
                    displayEventEnd:true,
                    timeFormat: 'h(:mm)a',
                    events:{url:'/admin/bookings/calendar-bookings'}
                });
          });

        </script>