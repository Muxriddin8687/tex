// Заполнить таблицу

// $('#confirmPar').submit(function() {
//     $("#loading").show();
//     var data_params = 'teacher_id='+$("#teacher_id").val()+'&subject_id='+$("#subject_id").val()+'&curdate='+$("#curdate").val()+'&hours='+$("#hours").val()+'&para='+$("#para").val()+'&group_id='+$("#group_id").val();
//     $.ajax({
//         url: "cruds/journal_practic_group_select.php",
//         type: "POST",
//         data: data_params,
//         success: function(response)
//         {
//             // localStorage.setItem('test', 1);
//             $("#loading").fadeOut();
//         }
//     });
// });

// $('#confirmPar').submit(function() {
//   return false;
// });

// $(document).ready(function() {
//   $(window).keydown(function(event){
//     if(event.keyCode == 13) {
//       event.preventDefault();
//       return false;
//     }
//   });
// });

// $( ".target" ).change(function() {
//   alert( "Handler for .change() called." );
// });


// Посещаемость и оценивать

$( ".row_ball" ).change(function() {
  var loading = $(this).parent().parent().find(".loading-row");
  loading.show();
  var data_params = 'row_id='+$(this).parent().find(".row_id").val()+'&row_ball='+$(this).val();
  if($(this).val() == 0 || $(this).val() == '') {
    $(this).val('');
    $(this).parent().parent().find('.nb_value').attr('disabled', false);
  } else {
    $(this).parent().parent().find('.nb_value').attr('disabled', true);
  }
  $.ajax({
      url: "cruds/journal_practic_list_update.php",
      type: "POST",
      data: data_params,
      success: function(response)
      {
          loading.hide();
      }
  });
});


$(".nb_value").bind("change",function(){
  var loading = $(this).parent().parent().parent().find(".loading-row");
  loading.show();
  if($(this).is(":checked")) {
    $(this).parent().parent().parent().find(".row_ball").attr('disabled',true);
    $(this).parent().parent().parent().find(".reason_value").attr('disabled',false);
    var data_params = 'row_id='+$(this).parent().parent().parent().find(".row_id").val()+'&nb_value=1';
  }
  else {
    $(this).parent().parent().parent().find(".row_ball").attr('disabled',false);
    $(this).parent().parent().parent().find(".reason_value").attr('disabled',true);
    var data_params = 'row_id='+$(this).parent().parent().parent().find(".row_id").val()+'&nb_value=0';
  }

  $.ajax({
      url: "cruds/journal_practic_list_update_nb.php",
      type: "POST",
      data: data_params,
      success: function(response)
      {
          loading.hide();
      }
  });

});

$(".reason_value").bind("change",function(){
  var loading = $(this).parent().parent().parent().find(".loading-row");
  loading.show();
  if($(this).is(":checked")) {
    var data_params = 'row_id='+$(this).parent().parent().parent().find(".row_id").val()+'&reason_value=1';
  }
  else {
    var data_params = 'row_id='+$(this).parent().parent().parent().find(".row_id").val()+'&reason_value=0';
  }

  $.ajax({
      url: "cruds/journal_practic_list_update_reason.php",
      type: "POST",
      data: data_params,
      success: function(response)
      {
          loading.hide();
      }
  });

});


// Потвердить журнала

$(".confirm-journal").click(function() {

  $.confirm({
    title: 'Внимание',
    content: 'После подтверждения журнала, нельзя изменить.',
    buttons: {
        saveThis: {
          text: 'Подтвердить',
          btnClass: 'btn-success',
          keys: ['enter', 'shift'],
          action: function(){
            
            $.ajax({
                url: "cruds/journal_update_status.php",
                type: "POST",
                data: 'id=' + $("#journal_id").val(),
                success: function(response)
                {
                    if(response == 'true') {
                      $(".row_ball").attr('disabled',true);
                      $(".reason_value").attr('disabled',true);
                      $(".nb_value").attr('disabled',true);
                      $(".confirm-journal").hide();
                      $(".badge").show();
                    } else {
                      alert('Неизвестная ошибка!');
                    }
                }
            });


          }
        },
        cancelThis: {
          text: 'Назад',
          btnClass: 'btn-danger',
          action: function(){
          }
        }
    }
  });

});

