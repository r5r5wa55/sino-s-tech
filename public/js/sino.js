
var main =  {

    add_produst_sino(){

        var ProductID = $('#add_produst_sion [name=ProductID]').val();
        var ProductName = $('#add_produst_sion [name=Product_Name]').val();
        var CategoryID = $('#add_produst_sion [name=Product_Category]').val();
        var Price = $('#add_produst_sion [name=Price]').val();
        
        // console.log(ProductID);
        // console.log(ProductName);
        // console.log(CategoryID);
        // console.log(Price);
        // return false;
        
        var url = window.location.origin+"/index.php/Controll_soft/add_produst_sino";
       
        // console.log(url);
        // return false;
        var data = {
        'ProductID':ProductID,
        'ProductName':ProductName,
        'CategoryID':CategoryID,
        'Price':Price
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
    get_edit_produst(ProductID,ProductName,CategoryID,Price){
        // console.log(ProductID);
        // console.log(ProductName);
        // console.log(CategoryID);
        // console.log(Price);
        // return false;
        $('#edit_produst_sion [name=ProductID]').val(ProductID);  
        $('#edit_produst_sion [name=Product_Name]').val(ProductName);  
        $('#edit_produst_sion [name=Product_Category]').val(CategoryID);  
        $('#edit_produst_sion [name=Price]').val(Price);  
  
        $('#edit_produst_sion').modal('show'); 
    },
    edit_produst_sion(){
        var ProductID = $('#edit_produst_sion [name=ProductID]').val()
        var ProductName = $('#edit_produst_sion [name=Product_Name]').val();
        var CategoryID = $('#edit_produst_sion [name=Product_Category]').val();
        var Price = $('#edit_produst_sion [name=Price]').val();
        
        // console.log(ProductID);
        // console.log(ProductName);
        // console.log(CategoryID);
        // console.log(Price);
        // return false;
        var url = window.location.origin+"/index.php/Controll_soft/edit_produst_sion";

        //  console.log(ProductID);
        // console.log(ProductName);
        // console.log(CategoryID);
        // console.log(Price);
   
        var data = {
          'ProductID':ProductID,
          'ProductName':ProductName,
          'CategoryID':CategoryID,
          'Price':Price
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
    delete_produst(ProductID){
      // console.log(ProductID);
      // return false;


        var url = window.location.origin+"/index.php/Controll_soft/delete_produst";
        var data = {
          'ProductID':ProductID  
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
    check_login_user(){
    


      var Username = $('[name=ADMIN_USER]').val(); 
      var Password = $('[name=ADMIN_PASS]').val();
    

      // console.log(Username);
      // console.log(Password);
     
      // return false;
    
      var url = window.location.origin+"/index.php/Controll_soft/check_login_user";
   
      var data = {
        'Username':Username,
        'Password':Password
      }
        // console.log(data);
        //    return false;
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
        if(resp.sino == 1){
          alert(resp.msg);
          window.location.assign("http://sino-s-tech.com/index.php/Controll_soft/sino_home");
          // window.location.href = location.origin+"/index.php/Controll_soft/sino_home"
  
        }else{
          alert(resp.msg);
        }
      })
    },
    


    add_customer_sino(){

      var CusID = $('#add_customer_sion [name=CusID]').val();
      var Name = $('#add_customer_sion [name=Name]').val();
      var Surname = $('#add_customer_sion [name=Surname]').val();
      var Status = $('#add_customer_sion [name=Status] option:selected').val();
      
      // console.log(CusID);
      // console.log(Name);
      // console.log(Surname);
      // console.log(Status);
      // return false;
      
      var url = window.location.origin+"/index.php/Controll_soft/add_customer_sino";
     
      // console.log(url);
      // return false;
      var data = {
      'CusID':CusID,
      'Name':Name,
      'Surname':Surname,
      'Status':Status
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
    get_edit_customer(CusID,Name,Surname,Status){
      // console.log(CusID);
      // console.log(Name);
      // console.log(Surname);
      // console.log(Status);
      // return false;
      $('#edit_customer_sion [name=CusID]').val(CusID);  
      $('#edit_customer_sion [name=Name]').val(Name);  
      $('#edit_customer_sion [name=Surname]').val(Surname);  


      $('#edit_customer_sion [name=Status] option').each(function(key,value){
        $(value).removeAttr('selected');
          console.log($(value).val());
          // return false;
        if(Status === $(value).val()){
          $(value).attr("selected","selected")
        }
      });

      $('#edit_customer_sion').modal('show'); 
    },
    edit_customer_sion(){
      var CusID = $('#edit_customer_sion [name=CusID]').val()
      var Name = $('#edit_customer_sion [name=Name]').val();
      var Surname = $('#edit_customer_sion [name=Surname]').val();
      var Status = $('#edit_customer_sion [name=Status]').val();
      
      // console.log(CusID);
      // console.log(Name);
      // console.log(Surname);
      // console.log(Status);
      // return false;
      var url = window.location.origin+"/index.php/Controll_soft/edit_customer_sion";

      //  console.log(ProductID);
      // console.log(ProductName);
      // console.log(CategoryID);
      // console.log(Price);
 
      var data = {
        'CusID':CusID,
        'Name':Name,
        'Surname':Surname,
        'Status':Status
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
    delete_customer(CusID){
      // console.log(CusID);
      // return false;


        var url = window.location.origin+"/index.php/Controll_soft/delete_customer";
        var data = {
          'CusID':CusID  
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


    add_user(){

      var UserID = $('#add_user [name=UserID]').val();
      var Name = $('#add_user [name=Name]').val();
      var Surname = $('#add_user [name=Surname]').val();
      var Username = $('#add_user [name=Username]').val();
      var Password = $('#add_user [name=Password]').val();
      var Status = $('#add_user [name=Status] option:selected').val();
      
      // console.log(UserID);
      // console.log(Name);
      // console.log(Surname);
      // console.log(Username);
      // console.log(Password);
      // console.log(Status);
      // return false;
      
      var url = window.location.origin+"/index.php/Controll_soft/add_user";
     
      // console.log(url);
      // return false;
      var data = {
      'UserID':UserID,
      'Name':Name,
      'Surname':Surname,
      'Username':Username,
      'Password':Password,
      'Status':Status
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
    get_edit_user(UserID,Name,Surname,Username,Password,Status){
      // console.log(UserID);
      // console.log(Name);
      // console.log(Surname);
      // console.log(Username);
      // console.log(Password);
      // console.log(Status);
      // return false;
      $('#edit_user [name=UserID]').val(UserID);  
      $('#edit_user [name=Name]').val(Name);  
      $('#edit_user [name=Surname]').val(Surname);  
      $('#edit_user [name=Username]').val(Username);  
      $('#edit_user [name=Password]').val(Password); 

      $('#edit_user [name=Status] option').each(function(key,value){
        $(value).removeAttr('selected');
        if(Status === $(value).val()){
          $(value).attr("selected","selected")
        }
      });

      $('#edit_user').modal('show'); 
    },
    edit_user(){
      var UserID = $('#edit_user [name=UserID]').val()
      var Name = $('#edit_user [name=Name]').val();
      var Surname = $('#edit_user [name=Surname]').val();
      var Username = $('#edit_user [name=Username]').val();
      var Password = $('#edit_user [name=Password]').val();
      var Status = $('#edit_user [name=Status]').val();
      
      // console.log(UserID);
      // console.log(Name);
      // console.log(Surname);
      // console.log(Username);
      // console.log(Password);
      // console.log(Status);
      // return false;
      var url = window.location.origin+"/index.php/Controll_soft/edit_user";

      //  console.log(ProductID);
      // console.log(ProductName);
      // console.log(CategoryID);
      // console.log(Price);
 
      var data = {
        'UserID':UserID,
        'Name':Name,
        'Surname':Surname,
        'Username':Username,
        'Password':Password,
        'Status':Status
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
    delete_user(UserID){
      // console.log(CusID);
      // return false;


        var url = window.location.origin+"/index.php/Controll_soft/delete_user";
        var data = {
          'UserID':UserID  
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

    show_order(obj){
       

        var ProductID = $(obj).attr("data-ProductID");
        var ProductName = $(obj).attr("data-ProductName");
        var Price = $(obj).attr("data-Price");
        // var IDA = $(".show-t").attr("add-id");
        // console.log(ProductID);
        // console.log(ProductName);
        // console.log(Price);

        var a = '<div class="row hight show-t" data-id="'+ProductID+'">'+
                '<div class="col-lg-1 col-md-1 col-sm-1 hade-show id-show" name="ProductID">'+ProductID+'</div>'+
                '<div class="col-lg-3 col-md-3 col-sm-3 hade-show id-show" name="ProductName">'+ProductName+'</div>'+
                '<div class="col-lg-2 col-md-2 col-sm-2 hade-show id-show" name="Price">'+Price+'</div>'+
                '</div>';

        if($(obj).prop("checked") == true){

          $(".hearder-add2").append(a);
      
            
        }else{
          $('#add_show .show-t').each(function(key,objs){
            // console.log($(objs).attr("data-id"));
            // console.log($("input[name='vehicle1']").attr("data-ProductID"));
            if($(obj).attr("data-ProductID") ==  $(objs).attr("data-id")){
              $(objs).remove()
              // console.log($(objs).attr("data-id"));
            }
          });
        
        }

          // ข้างบนเสร็จแล้ว

          // console.log(obj);



    

     
  

   
  
       
       
    },
    
    
}
