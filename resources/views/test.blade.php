@extends('layout.frontmaster')
@section('content')


<div class="row" id="row-content">
    <div class="col-sm-8 offset-sm-2">
        <div class="card">
            <div class="card-body" style="min-height: 250px;">
                <div class="card-title text-center">
                    <h3>Have you taken HCQS Tablets?<br/> আপনি কি HCQS ট্যাবলেট খেয়েছেন?</h3>
                </div>
                <div class="col-sm-10 offset-sm-1 mt-5 text-center" id="yes_no_form" style="display: none;">
                    {{Form::open(['name'=>'hydroxychloroquine','id'=>'hydroxychloroquine','url' => '', 'method' => 'post'])}}
                        <div class="form-check-inline" style="font-weight: bold;font-size: 17px;">
                          <label class="form-check-label" for="radio1">
                            <input type="radio" class="form-check-input" id="radio1" name="optradio" value="Yes" >Yes(হ্যাঁ)
                          </label>
                        </div>
                        <div class="form-check-inline" style="font-weight: bold;font-size: 17px;">
                          <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="No">No(না)
                          </label>
                        </div>
                      <button type="button" class="btn btn-primary" id="sub_but">Submit</button>
                    {!! Form::close() !!}
                </div>
                <div class="col-sm-10 offset-sm-1 mt-5 text-center" id="message" style="display: none;">The provided host name is not valid for this server.It should be <a href="https://www.malda.gov.in" style="color: blue;">https://www.malda.gov.in</a></div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
 $(document).ready(function(){
     var code={{$code}};
     var token = $("input[name='_token']").val();
      $.ajax({
                      type: "post",
                      url: "check_unique_code",
                      data:{_token:token,code:code},
                      dataType: 'json',
                      success: function (data) {

                        if(data.status == 1){

                            $("#yes_no_form").show();
                            $("#message").hide();

                        }else{
                            $("#yes_no_form").hide();
                            $("#message").show();

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



    $("#sub_but").click(function(){
      var radioValue = $("input[name='optradio']:checked").val();
      var code={{$code}};
      //var code=$("#code").val();
         //alert(code);
            if(radioValue){
                       var token = $("input[name='_token']").val();
                    $.ajax({
                      type: "post",
                      url: "submit_yes_no",
                      data:{_token:token,radioValue:radioValue,code:code},
                      dataType: 'json',
                      success: function (data) {

                        if(data.status == 1){
                           $.confirm({
                                title: 'SUCCESS!',
                                type: 'green',
                                icon: 'fa fa-check',
                                content: "Success!!",
                                buttons: {
                                    ok: function () {
                                        location.reload();
                                    }

                                }
                            });
                        }else{

                            $.alert({
                                title: 'Unsuccess',
                                type: 'red',
                                icon: 'fa fa-warning',
                                content: 'Something going wrong',
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
</script>

@endsection
