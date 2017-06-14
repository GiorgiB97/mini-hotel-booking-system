/**
 * Created by sai on 6/14/17.
 */
$('#tab3').on('click', function (evt) {


  var room_id = $("#checked_room_id:checked").val();
  var menu_id = $("#checked_menu_id:checked").val();
  if (room_id && menu_id) {
    $.post("/hotel-booking/count-price",
      {
        menu_id: menu_id,
        room_id: room_id
      },
      function (data, status) {
        $('.lastPrice1').attr('value',data);
    });
  }
});