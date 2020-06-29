@extends('layout.frontmaster')
@section('content')


<div class="row" id="row-content">
    <div class="col-sm-8 offset-sm-2">
        <div class="card">
            <div class="card-body" style="min-height: 250px;">
                <div class="card-title text-center">
                    <h3></h3>
                </div>
               
                <div class="col-sm-10 offset-sm-1 mt-5 text-center" >
                   
                    {{Form::open(['name'=>'hydroxychloroquine','id'=>'hydroxychloroquine','url' => '', 'method' => 'post'])}}
                     <input type="hidden" id="mobile_no" name="custId" value="{{ $mobile }}">
                      <input type="hidden" id="code" name="custIdq" value="{{ $code }}">
                   <div class="form-check-inline" style="font-weight: bold;font-size: 17px;">
                          <label class="form-check-label" for="radio1">
                            <input type="radio" class="form-check-input" id="radio1" name="optradio" value="Yes" >Yes
                          </label>
                        </div>
                        <div class="form-check-inline" style="font-weight: bold;font-size: 17px;">
                          <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="No">No
                          </label>
                        </div>

                      <button type="button" class="btn btn-primary" id="sub_but">Submit</button>
                    {!! Form::close() !!}
                </div>


                
                
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
 $(document).ready(function(){
    
    $("#sub_but").click(function(){

    
    //var sURLVariables = sPageURL.split('&');
    // for (var i = 0; i < sURLVariables.length; i++)
    // {
    //     var sParameterName = sURLVariables[i].split('=');
    //     if (sParameterName[0] == sParam)
    //     {
    //         return decodeURIComponent(sParameterName[1]);
    //     }
    // }

      var radioValue = $("input[name='optradio']:checked").val();
      var mobile_no=$("#mobile_no").val();
      var code=$("#code").val();
            if(radioValue){
                       var token = $("input[name='_token']").val();
                    $.ajax({
                      type: "post",
                      url: "submit_yes_no",
                      data:{_token:token,radioValue:radioValue,mobile_no:mobile_no,code:code},
                      dataType: 'json',
                      success: function (data) {

                        if(data.status == 1){
                            $.alert({
                                title: 'Success',
                                type: 'green',
                                icon: 'fa fa-check',
                                content: 'Success!!!',
                          });
                        }else{

                            $.alert({
                                title: 'Unsuccess',
                                type: 'red',
                                icon: 'fa fa-warning',
                                content: 'Mobile Number and Unique code not match',
                          });
                        }
                       

                               
                      },
                      error: function (jqXHR, textStatus, errorThrown) {
                        $(".se-pre-con").fadeOut("slow");
                        var msg = "";
                        if (jqXHR.status !== 422 && jqXHR.status !== 400) {
                            msg += "<strong>" + jqXHR.status + ": " + errorThrown + "</strong>";
                        } else {
                            if (jqXHR.responseJSON.hasOwnProperty('exception')) {
                                msg += "Exception: <strong>" + jqXHR.responseJSON.exception_message + "</strong>";
                            } else {
                                msg += "Error(s):<strong><ul>";
                                $.each(jqXHR.responseJSON['errors'], function (key, value) {
                                    msg += "<li>" + value + "</li>";
                                });
                                msg += "</ul></strong>";
                            }
                        }
                        $.alert({
                            title: 'Error!!',
                            type: 'red',
                            icon: 'fa fa-warning',
                            content: msg,
                        });
                    }
                  });
            }else{
                $.alert({
                    title: 'Error!!',
                    type: 'red',
                    icon: 'fa fa-warning',
                    content: 'Please Check Hydroxychloroquine Yes or No',
             });
            }
      

    });

 });
function redirectPost_newTab(url, data1) {
                   var $form = $("<form />");
                   $form.attr("action", url);
                   $form.attr("method", "post");
            $form.attr("target", "_blank");
                   for (var data in data1)
                       $form.append('<input type="hidden" name="' + data + '" value="' + data1[data] + '" />');
                   $("body").append($form);
                   $form.submit();
               }


</script>

@endsection
