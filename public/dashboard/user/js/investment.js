const bankRequests=function (){
    const getAccountDetails = function () {
        $("select[name='service']").on('change',function (){
            var service = this.value;

            if($.trim(service) === ''){
                $('#bankDanger').show();
            }
            var baseURL='../service/package/'+service;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: baseURL,
                method: "GET",
                data:$(this).serialize(),
                dataType:"json",
                beforeSend:function(){
                    $('.nextBtn').attr('disabled',true);
                },
                success:function(data)
                {
                    if(data.error===true)
                    {
                        $('#accountDanger').show();
                        //return to natural stage
                        $('#accountDanger').html(data.message);
                    }

                    if(data.error ===false)
                    {
                        $('#accountDanger').hide();
                        $("select[name='package']").empty();
                        $("select[name='package']").append( $('<option></option>').val('').html('Select a Plan') )
                        $.each(data.data, function(val, text) {
                            $("select[name='package']").append( $('<option></option>').val(text.id).html(text.name) )
                        });
                        $('#service').html(data.service);
                        $('#services').html(data.service);

                    }
                },
                error:function (jqXHR, textStatus, errorThrown){

                    $('#accountDanger').show();
                    $('#accountDanger').html('Something went wrong');
                },
            });

        });
    }
    const getPlanDetails = function () {
        $("select[name='package']").on('change',function (){
            var service = this.value;

            if($.trim(service) === ''){
                $('#bankDanger').show();
            }
            var baseURL='../package/'+service;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: baseURL,
                method: "GET",
                data:$(this).serialize(),
                dataType:"json",
                beforeSend:function(){
                    $('.nextBtn').attr('disabled',true);
                },
                success:function(data)
                {
                    if(data.error===true)
                    {
                        $('#accountDanger').show();
                        //return to natural stage
                        $('#accountDanger').html(data.message);
                    }

                    if(data.error ===false)
                    {

                        $('#accountDanger').hide();
                        $('#price_tabi').show();
                        $('#planName').html(data.data.name);
                        $('#minDep').html('$'+data.data.minAmount);
                        $('#maxDep').html('$'+data.data.maxAmount);
                        $('#daily').html(data.data.daily+'%');
                        $('#weekly').html(data.data.weekly+'%');
                        $('#monthly').html(data.data.monthly+'%');
                        $('#ref').html(data.data.ref+'%');
                        $('#duration').html(data.data.duration);

                    }
                },
                error:function (jqXHR, textStatus, errorThrown){

                    $('#accountDanger').show();
                    $('#accountDanger').html('Something went wrong');
                },
            });

        });
    }
    const hideBankError=function (){
        $("select[name='service']").on('change',function (){
            if($(this).val() === ''){
                $('#bankDanger').show();
                $("select[name='package']").empty();
            }else{
                $('#bankDanger').hide();
                $("input[name='accountNumber']").val('');
                $('#accountName').hide();
            }
        });
    }

    return {
        init: function() {
            getAccountDetails();
            hideBankError();
            getPlanDetails();
        }
    };
}();

jQuery(document).ready(function() {
    bankRequests.init();
});
