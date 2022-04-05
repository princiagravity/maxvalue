
$(document).ready(function(e){
    $('.dashboard').ready(function(e){
    
      // do autorefresh using ajax
  
    });
  /*   $('.datepicker').datepicker({
       format: 'yyyy-mm-dd'
     });  */
    $(".select2").select2();
    $(".ajax").select2({
      ajax: {
          url: "https://api.github.com/search/repositories",
          dataType: 'json',
          delay: 250,
          data: function(params) {
              return {
                  q: params.term, // search term
                  page: params.page
              };
          },
          processResults: function(data, params) {
              // parse the results into the format expected by select2
              // since we are using custom formatting functions we do not need to
              // alter the remote JSON data, except to indicate that infinite
              // scrolling can be used
              params.page = params.page || 1;
              return {
                  results: data.items,
                  pagination: {
                      more: (params.page * 30) < data.total_count
                  }
              };
          },
          cache: true
      },
      escapeMarkup: function(markup) {
          return markup;
      }, // let our custom formatter work
      minimumInputLength: 1,
      templateResult: formatRepo, // omitted for brevity, see the source of this page
      templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
  });
  });
  $('#user-login').submit(function(e){
    e.preventDefault();
    var data=new FormData(this);
    ajaxcall(data,'user_login',function(data)
    {
      var data=JSON.parse(data)
        if(data.success==1)
        {
            swal("Welcome!", "Logged In Successfully!", "success");
            window.location.href = data.redirect_url;
        }
        else
        {
            swal("Login Failed!", "Invalid Username Or Password!", "error");
        }
      
    });
    
    
    });

$('#add_company').submit(function(e){
  e.preventDefault();
  var data=new FormData(this);
  var action=$(this).attr('action');
  ajaxcall(data,action,function(data)
    {
      var data=JSON.parse(data);
      if(data.success)
      {
        swal('Success..',data.msg,data.type);
        window.location.href=base_url+'add-company';
      }
      else
      {
        swal('Error..',data.msg,data.type);
      }
     
    });

});

$('#add_product').submit(function(e){
  e.preventDefault();
  var data=new FormData(this);
  var action=$(this).attr('action');
  ajaxcall(data,action,function(data)
    {
      var data=JSON.parse(data);
      if(data.success)
      {
        swal('Success..',data.msg,data.type);
        window.location.href=base_url+'add-product';
      }
      else
      {
        swal('Error..',data.msg,data.type);
      }
     
    });

});

$('#business_upload').submit(function(e){
  e.preventDefault();
  var data=new FormData(this);
    var action=$(this).attr('action');
    ajaxcall(data,action,function(data)
    {
     // console.log(data);
      var data=JSON.parse(data);
      if(data.success)
      {
        swal('success',data.message,'success');
        location.reload(true);
      }
      else
      {
        swal('Error',data.message,'error');
      }
  
    }); 
});
$('#incentive_upload').submit(function(e){
  e.preventDefault();
  var data=new FormData(this);
    var action=$(this).attr('action');
    ajaxcall(data,action,function(data)
    {
      //console.log(data);
      var data=JSON.parse(data);
      if(data.success)
      {
        swal('success',data.message,'success');
        location.reload(true);
      }
      else
      {
        swal('Error',data.message,'error');
      }
   
    });
});

$('.company_select').change(function(e){
  e.preventDefault();
  var data={id:$(this).val()};
  var html="";
  ajaxcall1(data,'get_product_list',function(data){
    if(data)
    {
    var data=JSON.parse(data);  
    html+=`<option selected disabled value="">Choose Product</option>`;
    $.each(data,function(index,value){
      html+=`<option value="`+index+`">`+value+`</option>`;
    });
    $('.product_select').html(html);
    }
 
    
  })
})



  
  $('#add_avp').submit(function(e){
    e.preventDefault();
    var data=new FormData(this);
    var action=$(this).attr('action');
    ajaxcall(data,action,function(data)
    {
      var data=JSON.parse(data);
      if(data.success)
      {
        swal('Success..',data.msg,data.type);
        window.location.href=base_url+'add-avp';
      }
      else
      {
        swal('Error..',data.msg,data.type);
      }
     
    });
  });
  $('#add_am').submit(function(e){
    e.preventDefault();
    var data=new FormData(this);
    var action=$(this).attr('action');
    ajaxcall(data,action,function(data)
    {
      var data=JSON.parse(data);
      if(data.success)
      {
        swal('Success..',data.msg,data.type);
        window.location.href=base_url+'add-am';
      }
      else
      {
        swal('Error..',data.msg,data.type);
      }
     
    });
  });

  $('#add_zm').submit(function(e){
    e.preventDefault();
    var data=new FormData(this);
    var action=$(this).attr('action');
    ajaxcall(data,action,function(data)
    {
      var data=JSON.parse(data);
      if(data.success)
      {
        swal('Success..',data.msg,data.type);
        window.location.href=base_url+'add-zm';
      }
      else
      {
        swal('Error..',data.msg,data.type);
      }
     
    });
  });
  $('#add_region').submit(function(e){
    e.preventDefault();
    var data=new FormData(this);
    var action=$(this).attr('action');
    ajaxcall(data,action,function(data)
    {
      var data=JSON.parse(data);
      if(data.success)
      {
        swal('Success..',data.msg,data.type);
        window.location.href=base_url+'add-region';
      }
      else
      {
        swal('Error..',data.msg,data.type);
      }
     
    });
  });

  $('#add_branch').submit(function(e){
    e.preventDefault();
    var data=new FormData(this);
    var action=$(this).attr('action');
    ajaxcall(data,action,function(data)
    {
      var data=JSON.parse(data);
      if(data.success)
      {
        swal('Success..',data.msg,data.type);
        window.location.href=base_url+'add-branch';
      }
      else
      {
        swal('Error..',data.msg,data.type);
      }
     
    });
  });
  $('#add_canvasser').submit(function(e){
    e.preventDefault();
    var data=new FormData(this);
    var action=$(this).attr('action');
    ajaxcall(data,action,function(data)
    {
      var data=JSON.parse(data);
      if(data.success)
      {
        swal('Success..',data.msg,data.type);
        window.location.href=base_url+'add-canvasser';
      }
      else
      {
        swal('Error..',data.msg,data.type);
      }
     
    });
  });
  $('#get_business_report').submit(function(e){
    e.preventDefault();
    var data=new FormData(this);
    var action=$(this).attr('action');
    var html="";
    var fromdate= moment($('#fromdate').val(), "YYYY-MM-DD")
    .format('DD-MM-YYYY');
    var todate=moment($('#todate').val(), "YYYY-MM-DD")
    .format('DD-MM-YYYY');
    var selectors={avp:$('#avp').val(),
     zm:$('#zm').val(),
     region:$('#region').val(),
     am:$('#am').val(),
     branch:$('#branch').val()};
    ajaxcall(data,action,function(data){
      $('.bus_report').show();
     
     
      var data=JSON.parse(data);
      if(data.bus_sum==="" || data.bus_sum.length==0)
      {
        html+=`<span class="text-danger">Data Not Found</span>`;
      }
      else
      {
        html+=` <input type="button" class="btn btn-success exportocsvtbl"  id="busrepbtn"  value="Export to CSV">
        <table class="table mb-0 table-borderless searchtbl ">`;
       
        $.each(data.bus_sum,function(index,value){
        html+=`<thead class="custsearchtbody"></thead>
        <tbody>
        <tr><td colspan="3">Company</td><td colspan="3">`+value.company+`</td> </tr>
        <tr><td colspan="3">Product</td><td colspan="3">`+value.product+`</td></tr>
        <tr><td colspan="3">Clearing Date Range</td><td colspan="3">`+fromdate+' To '+todate+`</td></tr>`;
        $.each(selectors,function(key,val){
          if(val)
          {
          html+=`<tr><td colspan="3">`+key.toUpperCase()+`</td>`;
          html+=`<td colspan="3">`+val+`</td></tr>`;
          }
        });

        html+=`
        <tr><td colspan="3">Total Case</td><td colspan="3">`+value.total_case+`</td></tr>
        <tr><td colspan="3">Total Shares Purchased</td><td colspan="3">`+value.shares_purchased+`</td></tr>
        <tr><td colspan="3">Total Investment Amount</td><td colspan="3">`+value.investment_amount+`</td></tr>
       `;
      
      }); 
      html+=`<tr style="display:none;">`;
      var entrykeys="";
      var i=j=0;
      $.each(data.bus_entries[0],function(index,value){
        html+=`<td>`+index.toUpperCase()+`</td>`;
        entrykeys[i]=index;
        i++;
      });
      html+=`</tr>`;
      var entrycount=data.bus_entries.length;
      for (let j = 0; j < entrycount; j++) {
        i=0;
        html+=`<tr style="display:none;">`;
        $.each(data.bus_entries[j],function(index,value){
          html+=`
          <td>`+value+`</td>
          `;
          i++;
        });
        html+=`</tr>`;
      }
        html+=`</tbody>`;
      `</table>`;
      }
      $('.busreporttbl').html(html);
      $(window).scrollTop($('.busreporttbl').offset().top);

    });
  });

  $('#get_incentive_report').submit(function(e){
    e.preventDefault();
    var data=new FormData(this);
    var action=$(this).attr('action');
    var html="";
   
    var monthrange= moment($('#frommonth').val(), "YYYY-MM")
    .format('MM-YYYY');
    var tom=$('#tomonth').val();
    if(tom !="")
    {
      monthrange=monthrange+' To '+moment(tom, "YYYY-MM")
      .format('MM-YYYY');
    }
    /*  var tom=moment($('#tomonth').val(), "YYYY-MM")
    .format('MM-YYYY'); */
    var selectors={
     region:$('#region').val(),
     branch:$('#branch').val()};
    ajaxcall(data,action,function(data){
      $('.incentive_report').show();
     // console.log(data);
      var data=JSON.parse(data);
      if(data.inc_sum==="" || data.inc_sum.length==0)
      {
        html+=`<span class="text-danger">Data Not Found</span>`;
      }
      else
      {
        html+=` <input type="button" class="btn btn-success exportocsvtbl"  id="increpbtn"  value="Export to CSV">
        <table class="table mb-0 table-borderless searchtbl ">`;
        $.each(data.inc_sum,function(index,value){
        html+=`<thead class="custsearchtbody"></thead>
        <tbody>
        <tr><td colspan="3">Company</td><td colspan="3">`+value.company+`</td> </tr>
        <tr><td colspan="3">Product</td><td colspan="3">`+value.product+`</td></tr>`;
        $.each(selectors,function(key,val){
          if(val)
          {
            html+=`<tr><td colspan="3">`+key.toUpperCase()+`</td>`;
            html+=`<td colspan="3">`+val+`</td></tr>`;
          }
        });

        html+=`
        <tr><td colspan="3">Month & Year</td><td colspan="3">`+monthrange+`</td></tr>
        <tr><td colspan="3">Total Case</td><td colspan="3">`+value.total_case+`</td></tr>
        <tr><td colspan="3">Sum Of Business</td><td colspan="3">`+value.sum_of_business+`</td></tr>
        <tr><td colspan="3">Sum Of Payout Amount</td><td colspan="3">`+value.sum_of_payout_amount+`</td></tr>`;
      }); html+=`<tr style="display:none;">`;
      var entrykeys="";
      var i=j=0;
      $.each(data.inc_entries[0],function(index,value){
        html+=`<td>`+index.toUpperCase()+`</td>`;
        entrykeys[i]=index;
        i++;
      });
      html+=`</tr>`;
      var entrycount=data.inc_entries.length;
      for (let j = 0; j < entrycount; j++) {
        i=0;
        html+=`<tr style="display:none;">`;
        $.each(data.inc_entries[j],function(index,value){
          html+=`
          <td>`+value+`</td>
          `;
          i++;
        });
        html+=`</tr>`;
      }
        html+=`</tbody></table>`;
      }
      $('.incentivereporttbl').html(html);
      $(window).scrollTop($('.incentivereporttbl').offset().top);

    });
  });
  $('#get_mis_report').submit(function(e){
    e.preventDefault();
    var data=new FormData(this);
    var action=$(this).attr('action');
    var html="";
    var category=$('#staffcategory').val().toUpperCase();
    var staff=$('#stafflist').val().toUpperCase();
    var fromdate= moment($('#fromdate').val(), "YYYY-MM-DD")
    .format('DD-MM-YYYY');
    var todate=moment($('#todate').val(), "YYYY-MM-DD")
    .format('DD-MM-YYYY');
    ajaxcall(data,action,function(data){
      console.log(data);
      $('.mis_report').show();
     
     
      var data=JSON.parse(data);
      if(data.bus_sum==="" || data.bus_sum.length==0)
      {
        html+=`<span class="text-danger">Data Not Found</span>`;
      }
      else
      {
        html+=` <input type="button" class="btn btn-success exportocsvtbl"  id="misrepbtn"  value="Export to CSV">
        <table class="table mb-0 table-borderless searchtbl">
        <thead class="custsearchtbody">
        <tr><th colspan="5" scope="col">Category:`+category+`</th></tr>
        <tr><th colspan="5" scope="col">Staff/Branch:`+staff+`</th></tr>
        <tr><th colspan="5" scope="col">Date Range:`+fromdate+' To '+todate+`</th></tr>
        <tr><th scope="col">Company</th>
        <th scope="col">Product</th>
        <th scope="col">Total Case</th>
        <th scope="col">Total Shares Purchased</th>
        <th scope="col">Total Investment</th>
        </tr>
        </thead>
        <tbody>`;
        $.each(data.bus_sum,function(index,value){
       
        html+=`<tr><td>`+value.company+`</td>
        <td>`+value.product+`</td>
        <td>`+value.total_case+`</td>
        <td>`+value.shares_purchased+`</td>
        <td>`+value.investment_amount+`</td></tr>`;
      }); 
      html+=`<tr></tr><tr style="display:none;">`;
      var entrykeys="";
      var i=j=0;
      $.each(data.bus_entries[0],function(index,value){
        html+=`<td>`+index.toUpperCase()+`</td>`;
        entrykeys[i]=index;
        i++;
      });
      html+=`</tr>`;
      var entrycount=data.bus_entries.length;
      for (let j = 0; j < entrycount; j++) {
        i=0;
        html+=`<tr style="display:none;">`;
        $.each(data.bus_entries[j],function(index,value){
          html+=`
          <td>`+value+`</td>
          `;
          i++;
        });
        html+=`</tr>`;
      }
        html+=`</tbody>`;
      `</table>`;
      }
      $('.misreporttbl').html(html);
      $(window).scrollTop($('.misreporttbl').offset().top);
    });
  });

  $('#customer_search').submit(function(e){
    e.preventDefault();
    var data=new FormData(this);
    var action=$(this).attr('action');
    // var formvalid=$('#formvalid').val();
    var html="";
    ajaxcall(data,action,function(data)
    {
      $('.custsearchresult').show();
      var data=JSON.parse(data);
      $('.custsearchreport').hide();
      if(data==="" || data.length==0)
      {
        html+=`<span class="text-danger">Data Not Found</span>`;
      }
      else
      {
        html+=`<table class="table mb-0 table-borderless " style="font-size: 13px;">
        <thead>
         <tr class="d-flex">
           <th class="col-2">Customer Name</th> 
           <th class="col-1">Contact no</th>
           <th class="col-2">Pan No</th>
           <th class="col-2">Aadhar No</th>
           <th class="col-3">Address</th>
           <th class="col-2">Report</th>
         </tr>
       </thead>
       <tbody class="">`;
        $.each(data,function(index,value){
          html+=`<tr class="d-flex">
          <td class="col-2">`+value.customer_name+`</td>
          <td class="col-1 text-center">`+value.customer_mobile+`</td>
          <td class="col-2 text-center">`+value.pan_no+`</td>
          <td class="col-2">`+value.aadhar_no+`</td>
          <td class="col-3">`+value.customer_address+`<p>Email id:`+value.email_id+`</p></td>
          <td class="col-2"><input type="hidden" class="custid" value="`+value.id+`">
          <a class="btn btn-danger text-white getreport">get report</a></td>
          </tr>`;
        });
        html+=`
        </tbody> 
      </table>`;
     
    }
    $('.custsearchtbl').html(html);
    });
   
  });
$('.custsearchtbl').on('click','.getreport',function(e){
var data={custid:$(this).siblings('.custid').val()};
var html="";
ajaxcall1(data,'customer_report',function(data){
 
     var data=JSON.parse(data);
      $('.custsearchreport').show();
      if(data.customer==="" || data.customer.length==0)
      {
        html+=`<span class="text-danger">Data Not Found</span>`;
      }
      else
      {
        $('#cust_name').val(data.customer.customer_name);
        html+=`
        <input type="button" class="btn btn-success exportocsvtbl" id="cust_reportbtn" value="Export to CSV">
        <table class="table mb-0 table-borderless searchtbl ">
        <thead  class="custsearchtbody">
        <tr><th colspan="5">Customer Details</th></tr></thead><tbody>`;
        html+=`<tr><td>`+'Name:'+`</td><td>`+data.customer.customer_name+`</td></tr>
        <tr><td>`+'Mobile:'+`</td><td>`+data.customer.customer_mobile+`</td></tr>
        <tr><td>`+'Address:'+`</td><td colspan="4">`+data.customer.customer_address+`</td></tr>
        <tr><td>`+'Aadhar No:'+`</td><td>`+data.customer.aadhar_no+`</td></tr>
        <tr><td>`+'PAN No:'+`</td><td>`+data.customer.pan_no+`</td></tr>`;
         html+=`<tr><td colspan="5"></td></tr><tr>
           <td><h4>Company</h4></td>
           <td><h4>Product</h4></td>
           <td><h4>Total Case</h4></td>
           <td><h4>Total Shares Purchased</h4></td>
           <td><h4>Total Investment</h4></td> 
   
         </tr>`;
        $.each(data.business,function(index,value){
          html+=`<tr>
          <td>`+value.company+`</td>
          <td>`+value.product+`</td>
          <td>`+value.total_case+`</td>
          <td>`+value.shares_purchased+`</td>
          <td>`+value.investment_amount+`</td>
          </tr>`;
        });
        html+=`
        </tbody> 
      </table>`;
      }
      $('.custreporttbl').html(html);
      $(window).scrollTop($('.custreporttbl').offset().top);
    
})

   
});

  $('.custreporttbl,.busreporttbl,.misreporttbl,.incentivereporttbl').on('click','.exportocsvtbl',function(e){  
    e.preventDefault();  
    var id=$(this).attr('id');
    var filename="";
    if(id=="busrepbtn")
    {
      filename="business-report"+"-"+$("#company_select option:selected").html()+'-'+$("#product_select option:selected").html()+'.csv';
    }
    else if(id=="misrepbtn")
    {
      filename='misreport.csv';
    }
    else if(id=="cust_reportbtn")
    {
    var cust=$('#cust_name').val();
    filename='customer-report-'+cust+'.csv';
    }
    else if(id=="increpbtn")
    {
      var type=$('#inctype').val();
      var monthrange=$('#frommonth').val();
      if($('#tomonth').val())
      {
        monthrange=monthrange+'to'+$('#tomonth').val();
      }
      filename="incentive-report"+"-"+$("#company_select option:selected").html()+'-'+$("#product_select option:selected").html()+"-"+type+'_'+monthrange+'.csv';
    }
        $(".searchtbl").table2csv({
          file_name: filename
        });
  });
  
  
  $('.chk_customername').on('keypress keyup',function(e){
    var data={key:$(this).val()};
    var html="";
    if($(this).val() !="")
    {
    ajaxcall1(data,'check_customer_name',function(data){
      //console.log(data);
      var data=JSON.parse(data);
      $('.custsearchreport').hide();
      if(data==="" || data.length==0)
      {
        /* $('.custsearchresult').hide(); */
      /*   $('.custsearchtbl').html(""); */
        $('#formvalid').val(0);
        $('#cust_id').val("");
        html+=`<span class="text-danger">Data Not Found</span>`;
      }
      else
      {
       
        $('.custsearchresult').show();
        html+=`<table class="table mb-0 table-borderless " style="font-size: 13px;">
        <thead>
         <tr class="d-flex">
           <th class="col-2">Customer Name</th> 
           <th class="col-1">Contact no</th>
           <th class="col-2">Pan No</th>
           <th class="col-2">Aadhar No</th>
           <th class="col-3">Address</th>
           <th class="col-2">Report</th>
         </tr>
       </thead>
       <tbody>`;
        $.each(data,function(index,value){
          html+=`<tr class="d-flex">
          <td class="col-2">`+value.customer_name+`</td>
          <td class="col-1 text-center">`+value.customer_mobile+`</td>
          <td class="col-2 text-center">`+value.pan_no+`</td>
          <td class="col-2">`+value.aadhar_no+`</td>
          <td class="col-3">`+value.customer_address+`<p>Email id:`+value.email_id+`</p></td>
          <td class="col-2">
          <input type="hidden" class="custid" value="`+value.id+`">
          <a class="btn btn-danger text-white getreport">get report</a></td>
          </tr>`;
        });
        html+=`
        </tbody> 
      </table>`;
    
    }
    $('.custsearchtbl').html(html);
    },'hide');
  }
  else
  {
    $('.custsearchreport').hide();
    $('.custsearchresult').hide();
  }
  })
  $(".custname_stat").on("click change",".custsearch li",function(){
   $('.chk_customername').val($(this).text());
   $('#formvalid').val(1);
   $('#cust_id').val($(this).val());
   $('.custsearch').hide();
});

  $('.delete_item').click(function(e){
    e.preventDefault();
    var id=$(this).siblings('.delid').val();
    var type=$(this).siblings('.delitem').val();
    var deltype=$(this).siblings('.deltype').val();
    var swltext="Are you sure want to delete?";
    var funurl="delete_item";
    if(deltype=="business" || deltype=="incentive")
    {
      swltext="Are you sure want to delete Entire File Data?";
      funurl="delete_uploaded_data"
    }
    var sweet_data = {
        title : "Delete "+type,
        text : swltext,
        icon :"warning",
    };
    sweetalertConfirm(sweet_data,function(data){
        if(data==true)
        {
          $.ajax({
            url: funurl,
            type: 'POST',
            data: {
                id:id,
                type:deltype
            },
            dataType: 'json',
            beforeSend: function() {
           
              // setting a timeout
              $('.loadingbar').css("display", "block");
          },
            success: function(data) {
              
             /*  var data=JSON.parse(data); */
              if(data.success==1)
              {
                swal("Deletion Successfull");
                window.location.href = data.redirect_url;
              }
              else
              {
                swal("Deletion Failed");
              }
            },
            complete: function() {
              $('.loadingbar').css("display", "none");
            }
        });
        }
     
    });  
  });
  function sweetalertConfirm(sweet_data,handle)
  {
    swal({
        title: sweet_data.title,
        text: sweet_data.text,
        icon: sweet_data.icon,
        buttons:true,
        dangerMode:true,
      
      }).then((willDelete)=>{
          if(willDelete)
          {
            handle(true);
          }
          else
          {
            handle(false)
          }
        });
    
  
  }
  ////////////////////////
  
  
  
  function ajaxcall(formElem,ajaxurl,handle,loading="")
  {
    $.ajax({
      url: base_url+"AdminController/"+ajaxurl,
      type: 'POST',
      data:formElem,
      processData:false,
      contentType:false,
      cache:false,
      async:false,
      beforeSend: function() {
        // setting a timeout
        if(loading=="")
        $('.loadingbar').css("display", "block");
    },
      success: function(data) {
        handle(data);
      },
    complete: function() {
      if(loading=="")
        $('.loadingbar').css("display", "none");
    }

  });
  }
  function ajaxcall1(data,ajaxurl,handle,loading="")
  {
    $.ajax({
      url: base_url+"AdminController/"+ajaxurl,
      type: 'POST',
      data:data,
      datatype:'json',
      beforeSend: function() {
        // setting a timeout
        if(loading=="")
        $('.loadingbar').css("display", "block");
    },
      success: function(data) {
        handle(data);
      },
      complete: function() {
        if(loading=="")
        $('.loadingbar').css("display", "none");
      }
  });
  }

  $('#staffcategory').change(function(e){
    var html="";
if($('#fromdate').val()=="" || $('#todate').val()=="" )
{
  $(this).val("");
  swal("Please Correct date range first");
}
else
{
  if($(this).val() !="")
  {
    /* var category=$(this).val(); */
    var data={staffcat:$(this).val(),fromdate:$('#fromdate').val(),todate:$('#todate').val()};
    ajaxcall1(data,'get_stafflist',function(data){
      var data=JSON.parse(data);
      html+=`<option value="">Choose One</option>`
      if(data==="" || data.length==0)
      {
        html+=`<option disabled value="">No Staffs Found</option>`;
      }
      else
      {
        $.each(data,function(index,value){
          html+=`<option value="`+value.stafflist+`">`+value.stafflist+`</option>`;
        });
      }
      $('#stafflist').html(html);
    });
  }
  else
  {
    html+=`<option value="">Choose One</option>
    <option value="" disabled>Choose Category First</option>`;
    $('#stafflist').html(html); 
  }
}
  });

  
 

  
  