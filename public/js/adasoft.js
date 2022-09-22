
var main =  {

    add_soft(){

        var w_name_closet = $('#add_soft [name=w_name_closet]').val();
        var price_closet = $('#add_soft [name=price_closet]').val();
        var num_closet = $('#add_soft [name=num_closet]').val();

        var url = window.location.origin+"/index.php/Controll_soft/add_soft";
        // console.log(w_name_closet);
        // console.log(price_closet);
        // console.log(num_closet);
        // return false;
        var data = {
        'w_name_closet':w_name_closet,
        'price_closet':price_closet,
        'num_closet':num_closet
        }
        // console.log(data);
        // return false;
        
        $.ajax({
            url : url,
            method : 'POST',
            dataType : 'JSON',
            data:data,
            cache : false,
            beforeSend: function(jqXHR, settings) {
            delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
            },
        }).done(function(resp) {
            if(resp.st == 1){
            alert('บันทึกสำเร็จ')
            location.reload();
            }else{
            alert('บันทึกไม่สำเร็จ')
            }
        })
    },
    get_edit_soft(w_closet_id ,w_name_closet,price_closet,num_closet){
        // console.log(w_closet_id);
        // console.log(w_name_closet);
        // console.log(price_closet);
        // console.log(num_closet);
        // return false;
        $('#edit_soft [name=w_closet_id]').val(w_closet_id);  
        $('#edit_soft [name=w_name_closet]').val(w_name_closet);  
        $('#edit_soft [name=price_closet]').val(price_closet);  
        $('#edit_soft [name=num_closet]').val(num_closet);  
  
        $('#edit_soft').modal('show'); 
    },
    edit_soft(){
        var w_closet_id = $('#edit_soft [name=w_closet_id]').val()
        var w_name_closet = $('#edit_soft [name=w_name_closet]').val();
        var price_closet = $('#edit_soft [name=price_closet]').val();
        var num_closet = $('#edit_soft [name=num_closet]').val();
        var url = window.location.origin+"/index.php/Controll_soft/edit_soft";

        // console.log(w_closet_id),
        // console.log(w_name_closet);
        // console.log(price_closet);
        // console.log(num_closet);
        // return false 
        // console.log(window.location.origin);
        // return false;
        var data = {
          'w_closet_id':w_closet_id,
          'w_name_closet':w_name_closet,
          'price_closet':price_closet,
          'num_closet':num_closet
        }
        // console.log(data);
        // return false;
        $.ajax({
          url : url,
          method : 'POST',
          dataType : 'JSON',
          data:data,
          cache : false,
          beforeSend: function(jqXHR, settings) {
            delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
          },
        }).done(function(resp) {
          if(resp.st == 1){
            alert('บันทึกสำเร็จ')
            location.reload();
          }else{
            alert('บันทึกไม่สำเร็จ')
          }
        })
    },

    delete_soft(w_closet_id){
      // console.log(w_closet_id);
      // return false;
        var url = window.location.origin+"/index.php/Controll_soft/delete_soft";
        var data = {
          'w_closet_id':w_closet_id  
        }
        var datas = confirm("ท่านต้องการลบข้อมูลนี้หรือไม่");
        if(confirm("ยืนยันการลบ") === false){
          return false;
        }
        $.ajax({
          url : url,
          method : 'POST',
          dataType : 'JSON',
          data:data,
          cache : false,
          beforeSend: function(jqXHR, settings) {
            delete jqXHR.setRequestHeader('X-CSRF-TOKEN');
          },
        }).done(function(resp) {
            // console.log(resp);
            // return false;
          
          if(resp.st == 1){
            alert('ลบสำเร็จ')
            location.reload();
          }else{
            alert('ลบไม่สำเร็จ')
          }
        })
    },
}
