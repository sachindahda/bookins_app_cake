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
    <div id="CalenderModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel2">Edit Calendar Entry</h4>
          </div>
          <div class="modal-body">

            <div id="testmodal2" style="padding: 5px 20px;">
              <form id="antoform2" class="form-horizontal calender" role="form">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Title</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="title2" name="title2">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Description</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" style="height:55px;" id="descr2" name="descr"></textarea>
                  </div>
                </div>

              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary antosubmit2">Save changes</button>
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
                    // select: function (e, a, t) {
                    //   alert('ithe');
                    //     $("#fc_create").click(),
                    //         (o = e),
                    //         (ended = a),
                    //         $(".antosubmit").on("click", function () {
                    //             var e = $("#title").val();
                    //             return a && (ended = a), $("#event_type").val(), e && i.fullCalendar("renderEvent", { title: e, start: o, end: a, allDay: t }, !0), $("#title").val(""), i.fullCalendar("unselect"), $(".antoclose").click(), !1;
                    //         });
                    // },
                    // eventClick: function (e, a, t) {

                    //     $("#fc_edit").click(),
                    //         $("#title2").val(e.title),
                    //         $("#event_type").val(),
                    //         $(".antosubmit2").on("click", function () {
                    //             (e.title = $("#title2").val()), i.fullCalendar("updateEvent", e), $(".antoclose2").click();
                    //         }),
                    //         i.fullCalendar("unselect");
                    // },
                    editable: 0,
                    displayEventEnd:true,
                    timeFormat: 'h(:mm)a',
                    events:{url:'/admin/bookings/calendar-bookings'}
                    // events: [
                    //     { title: "All Day Event", start: new Date(n, t, 1) },
                    //     { title: "Long Event", start: new Date(n, t, a - 5), end: new Date(n, t, a - 2) },
                    //     { title: "Meeting", start: new Date(n, t, a, 10, 30), allDay: !1 },
                    //     { title: "Lunch", start: new Date(n, t, a + 14, 12, 0), end: new Date(n, t, a+14, 14, 0), allDay: !1 },
                    //     { title: "Birthday Party", start: new Date(n, t, a + 1, 19, 0), end: new Date(n, t, a + 1, 22, 30), allDay: !1 },
                    //     { title: "Click for Google", start: new Date(n, t, 28), end: new Date(n, t, 29), url: "http://google.com/" },
                    // ],
                });
          });

        </script>