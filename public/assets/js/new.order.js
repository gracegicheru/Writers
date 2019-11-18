
$(".tab-wizard").steps({
    headerTag: "h6",
    bodyTag: "section",
    transitionEffect: "fade",
    titleTemplate: '<span class="step">#index#</span> #title#',
    labels: {
        finish: "Submit"
    },
    onFinished: function (event, currentIndex) {
        var form = $(this);
        // Submit form input
        form.submit();
    },

 onStepChanging: function (event, currentIndex, newIndex) {
        //console.log("hello");
        //console.log(currentIndex);
     //return true;

    if (currentIndex == 0) { //I suppose 0 is the first step
       // console.log("before ajax");


        if($('select[id=doc_name]').val()==""){
            let errorMsg="Please enter the document type";
            $("#notification").show();
            $("#error").html(errorMsg);
            //alert(" Enter the document name");
            console.log("hurray");
            $('select[id=doc_name]').val().focus();
            return false;
        }
        if($('select[id=subject_area]').val()==""){

            alert(" Enter the subject name");
            console.log("hurray");
            $('select[id=subject_area]').val().focus();
            return false;
        }

        if($('select[id=subject]').val()==""){
            alert(" Enter the subject");
            console.log("hurray");
            $('select[id=subject]').val().focus();
            return false;
        }

        if($('select[id=education]').val()==""){
            alert(" Enter the Education Level");
            console.log("hurray");
            $('select[id=education]').val().focus();
            return false;
        }

        if($('select[id=length]').val()==""){
            alert(" Enter the Length");
            console.log("hurray");
            $('select[id=length]').val().focus();
            return false;
        }

        if($('select[id=delivery]').val()==""){
            alert(" Enter the no of days");
            console.log("hurray");
            $('select[id=delivery]').val().focus();
            return false;
        }





        $.ajax({
            type: "post",
            url: "stepOne",
            data: {
                "_token": $('#token').val(),
                'orderNo': $('input[id=orderNo]').val(),
                'step': $('input[id=step]').val(),
                'doc_name': $('select[id=doc_name]').val(),
                'subject_area': $('select[id=subject_area]').val(),
                'subject': $('select[id=subject]').val(),
                'education': $('select[id=education]').val(),
                'length': $('select[id=length]').val(),
                'delivery': $('select[id=delivery]').val(),

            },
            beforeSend: function () {
            },

            success: function (data) {
                console.log("success ajax");
                if (data.status == "ok") {
                    //console.log(data);

                    $('#step').val(data.step);
                }


            },
            error: function (xhr, errmsg, err) {


                console.log("error ajax");
                    //alert("something went wrong");
                 console.log("error", xhr);
                 console.log("new", errmsg);
                 console.log("order", err);


                //return false; //this will prevent to go to next step


            }
        });


        return true;


    }else if(currentIndex == 1){
        console.log("the title");

        if($('textarea[id=title]').val()==""){
            let errorTitle="Please enter the title";
            $("#title_error").show();
            $("#titleError").html(errorTitle);
           // alert(" Enter the Title");
            console.log("title");
            $('textarea[id=title]').val().focus();
            return false;
        }
        if($('#instructions').val()==""){

            let instructionError="Please enter the Instructions";
            $("#title_instructions").show();
            $("#titleInstructions").html(instructionError);
           // alert(" Enter the Instructions");
            console.log("title");
            $('#instructions').val().focus();
            return false;
        }
        if($('#focus').val()==""){

            let errorFocus="Please enter the Focus";
            $("#focus_error").show();
            $("#focusError").html(errorFocus);
           // alert(" Enter the Focus");
            console.log("title");
            $('#focus').val().focus();
            return false;
        }
        if($('#structure').val()==""){

            let errorStructure="Please enter the structure";
            $("#structure_error").show();
            $("#structureError").html(errorStructure);

            //alert(" Enter the Title");
            console.log("title");
            $('#structure').val().focus();
            return false;
        }
        if($('#reference').val()==""){

            let errorReference="Please enter the Reference type";
            $("#reference_error").show();
            $("#referenceError").html(errorReference);

           // alert(" Enter the reference Sources");
            console.log("title");
            $('#reference').val().focus();
            return false;
        }
        if($('#number').val()==""){

            let errorNumber="Please enter the number of references";
            $("#number_error").show();
            $("#numberError").html(errorNumber);

           // alert(" Enter the Title");
            console.log("title");
            $('number').val().focus();
            return false;
        }
        if($('#suggested').val()==""){

            let errorSuggested="Please enter the suggested sources";
            $("#suggested_error").show();
            $("#suggestedError").html(errorSuggested);

            //alert(" Enter the Title");
            console.log("title");
            $('#suggested').val().focus();
            return false;
        }
        if($('#essential').val()==""){

            let errorEssential="Please enter the essential sources";
            $("#essential_error").show();
            $("#essentialError").html(errorEssential);

            //alert(" Enter the Title");
            console.log("title");
            $('#essential').val().focus();
            return false;
        }


        $.ajax({
            type: "post",
            url: "stepOne",
            data: {
                "_token": $('#token').val(),
                'orderNo': $('input[id=orderNo]').val(),
                'step': $('#step').val(),
                'title': $('#title').val(),
                'instructions': $('#instructions').val(),
                'focus': $('#focus').val(),
                'structure': $('#structure').val(),
                'reference': $('#reference').val(),
                'number': $('#number').val(),
                'suggested': $('#suggested').val(),
                'essential': $('#essential').val()

            },
            beforeSend: function () {
            },

            success: function (data) {
                console.log("success ajax");
                if (data.status == "ok") {
                    console.log(data);

                    $('#step').val(data.step);
                    $("#document").html($('#doc_name option:selected').text());
                    $("#area").html($('#subject_area option:selected').text());
                    $("#sub").html($('#subject option:selected').text());
                    $("#educ").html($('#education option:selected').text());
                    $("#len").html($('#length option:selected').text());
                    $("#del").html($('#delivery option:selected').text());
                    $("#titl").html($('textarea[id=title]').val());
                    $("#inst").html($('#instructions').val());
                    $("#foc").html($('#focus').val());
                    $("#struct").html($('#structure').val());
                    $("#style").html($('#reference').val());
                    $("#refer").html($('#number').val());
                    $("#sug").html($('#suggested').val());
                    $("#essent").html($('#essential').val());
                    $("#orderNum").html($('input[id=orderNo]').val());
                    $("#totalAmount").html(OrderPrice);

                }


            },
            error: function (xhr, errmsg, err) {
                console.log("error ajax");
                //alert("something went wrong");
                console.log("error", xhr);
                console.log("new", errmsg);
                console.log("order", err);
               // return false; //this will prevent to go to next step
            }
        });

        return true;
        // $("#orderNum").html($('input[id=orderNo]').val());
    }
    else if(currentIndex==2){
        $.ajax({
            type: "post",
            url: "stepOne",
            data: {
                "_token": $('#token').val(),
                'step': $('input[id=step]').val(),
            },
            success: function (data) {
                console.log("data");
                if (data.status == "ok") {
                    console.log("hey there");
                    $('#step').val(data.step);
                }
            },

        });
        return true;

    }



    else if(currentIndex == 3) {

        if($('#loginButton').is(':visible')){

                if($('#email2').val()=="") {
                    let errorSign="Please enter the Email";
                    $("#sign_error").show();
                    $("#signError").html(errorSign);
                    //alert(" Enter the document name");
                    console.log("hurray");
                    $('#email2').val().focus();
                    return false;

            }
                if($('#password2').val()=="") {
                    let errorPassword="Please enter the Password";
                    $("#password_error").show();
                    $("#passwordError").html(errorPassword);
                    //alert(" Enter the document name");
                    console.log("hurray");
                    $('#password2').val().focus();
                    return false;
                }

        }else if($('#submitButton').is(':visible')){


            if($('#name').val()=="") {
                let errorSign="Please enter the Name";
                $("#name_error").show();
                $("#nameError").html(errorSign);
                //alert(" Enter the document name");
                console.log("hurray");
                $('#name').val().focus();
                return false;

            }
            if($('#email').val()=="") {
                let errorSign="Please enter the Email";
                $("#email_error").show();
                $("#emailError").html(errorSign);
                //alert(" Enter the document name");
                console.log("hurray");
                $('#email').val().focus();
                return false;

            }

            if($('#password').val()=="") {
                let errorSign="Please enter the Password";
                $("#password_error").show();
                $("#passwordError").html(errorSign);
                //alert(" Enter the document name");
                console.log("hurray");
                $('#password').val().focus();
                return false;

            }

        }



        let orderNo=$('input[id=orderNo]').val();
        $.ajax({
            type: "post",
            url: "stepOne",
            data: {
                "_token": $('#token').val(),
                'orderNo': orderNo,
                'step': $('input[id=step]').val(),
            },
            success: function (data) {
                console.log("this");
                if (data.status == "ok") {
                    console.log("hello there");
                    $('#step').val(data.step);
                    $("#orderNum").html($('input[id=orderNo]').val());

                }

            },
            error: function (xhr, errmsg, err) {
                console.log("error step3");
                //alert("something went wrong");
                console.log("error", xhr);
                console.log("new", errmsg);
                console.log("order", err);
            },

        });


        return true;
    }
    return true;
 }

 });

 $("#loadingOverlay").hide();
$("#doc_name").change(function () {
    let value=$(this).val();
    let doctype = $(this).val();

    $.ajax({
        type: "post",
        url: "subjectArea",
        data: {doctype: value,  "_token": $('#token').val()},
        beforeSend: function () {
            $("#loadingOverlay").show();
        },
        success: function (data) {
            $("#loadingOverlay").hide();
             // console.log(data);
            if(data.status == "ok"){
                let html = "";
                let subject="";
                let time="";
                let education="";

                $.each(data.subjectareas, function(key, val){
                     // console.log(key, val);
                    html += '<option value="'+val.id+'">'+val.subjectarea_name+'</option>';
                });

                $("#subject_area").html(html);
                $.each(data.time, function(key, val){

                    if(val.urgency_type==1) {

                        //console.log(key, val);
                        time += '<option value="' + val.id + '">' + val.urgency_time + ' days</option>';
                    }else{
                        time += '<option value="' + val.id + '">' + val.urgency_time + ' hours</option>';
                    }
                });

                $("#delivery").html(time);

                $.each(data.subject, function(key, val){
                    // console.log( "subject",key, val);
                    subject += '<option value="'+val.id+'">'+val.docsubject+'</option>';
                });

                $("#subject").html(subject);
                $.each(data.education, function(key, val){
                    // console.log("basic",key, val);
                    education += '<option value="'+val.edu_name+'">'+val.edu_name+'</option>';
                });

                $("#education").html(education);
            }
            getPrice()

        },
        error:function(data){

            $("#loadingOverlay").hide();

        }
    });
});




total=0;
price=0;
OrderPrice=0;
currentCurrency="";
function getPrice () {
    console.log("hello");
    let doctype = $("#doc_name").val();
    let subjectArea = $("#subject_area").val();
    let sub = $("#subject").val();
    let edu = $("#education").val();
    let time = $("#delivery").val();
    let len = $("#length").val();
    let spacing=$("#toggle").val();

    $.ajax({
        type: "post",
        url: "price",
        data: {
            doctype: doctype,
             subjectArea: subjectArea,
            sub: sub,
             edu: edu,
            time: time,
            len:len,
            spacing:spacing,
            "_token": $('#token').val()
        },
        beforeSend: function () {
            $("#loadingOverlay").show();
        },
        success: function (data) {
            $("#loadingOverlay").hide();
            //console.log("price", data);
            if (data.status == "ok") {
                let html = "";

                 currentCurrency= $("#curr_submit").val();

                  price = data.base_price;
                  priceAndPrefix = "$" + price;
                  total=data.total_cost;
                  priceAndSign= "$" +total;
                  OrderPrice=priceAndSign;
                  priceTotal=total;


                  $("#cost_per_page").html(priceAndPrefix);
                  $("#amt_paid").html(priceAndSign);
                  $("#base_price").html(priceAndSign);

                getCurrency(currentCurrency)
            }
            //getPrice()
            $("#loadingOverlay").hide();
        },
        error: function (xhr, errmsg, err) {
            console.log("error ajax");
            //alert("something went wrong");
            console.log("price", xhr);
            console.log("error", errmsg);
            console.log("find", err);
            $("#loadingOverlay").hide();

        }
    });
}
$("#education").change(function () {
    getPrice()


});
$("#education").change(function () {
    getPrice()


});
$("#delivery").change(function () {
    getPrice()


});
$("#length").change(function () {
    getPrice()


});
$("#spacing").change(function () {
    getPrice()


});

$( ".exchange" ).click(function(event) {
    let currency=$(this).prop('id');
    //console.log("nCurrency",currency);
    $(".c_btn").removeClass('curr-btn-active');
    $(this).addClass('curr-btn-active');
    getCurrency(currency);
    $("#curr_submit").val(currency);
});

function getCurrency(currency){
    console.log("current",currency);
    let USD = $("#dollar").val();
    let EUR = $("#euro").val();
    let GBP = $("#pound").val();
    let AUD = $("#aust").val();
   // console.log("new", getCurrency);

    $.ajax({
        type:"get",
        url:"https://api.exchangeratesapi.io/latest?base=USD",
        data:{
            dollar:USD,
            euro:EUR,
            pound:GBP,
            aust:AUD,
            "_token": $('#token').val()
        },
        success:function(data){
            //console.log("response", data);

                rate= data.rates;
                //console.log("rate",rate );

                if (currency=="USD") {
                    dollars= rate.USD;
                    //console.log("dollar",dollars);

                    pageDollar=price * dollars;
                    pageDollarSign= "$" + pageDollar;
                    dollarPrice = total * dollars;
                    dollarPriceSign= "$" + dollarPrice;
                   // console.log("dollar",dollarPriceSign);
                    dollarDiscount= "$" + 0.00;
                    //console.log("new",pageDollar);
                    OrderPrice=dollarPriceSign;
                    //priceTotal=dollarPrice;
                    $("#cost_per_page").html(pageDollarSign);
                    $("#total_discount").html(dollarDiscount);
                    $("#amt_paid").html(dollarPriceSign);
                    $("#base_price").html(dollarPriceSign);
                }
                else if(currency=="EUR") {
                    euros= rate.EUR;
                   // console.log("euro",euros);
                    eurosRound=euros.toFixed(2);
                    pageEuro= price *eurosRound;
                    //console.log("total",pageEuro);
                    pageEuroSign= "€" + pageEuro;
                    euroPrice = total * euros;
                    euroRound= euroPrice.toFixed(2);
                    euroPriceSign= "€" + euroRound;
                    euroDiscount= "€" + 0.00;
                    //console.log("euro", euroPrice);
                    OrderPrice=euroPriceSign;
                    //priceTotal=euroPrice;
                    $("#cost_per_page").html(pageEuroSign);
                    $("#total_discount").html(euroDiscount);
                    $("#amt_paid").html(euroPriceSign);
                    $("#base_price").html(euroPriceSign);

                }
                else if(currency=="GBP") {

                    pounds=rate.GBP;
                   // console.log("pound",pounds);
                    poundsRound= pounds.toFixed(2);
                    pagePound= price * poundsRound;
                    pagePoundSign= "£" + pagePound;
                    poundPrice = total * pounds;
                    poundPriceRound= poundPrice.toFixed(2);
                    poundPriceSign = "£" + poundPriceRound;
                    poundDiscount= "£" + 0.00;
                    //console.log("poundPrice",poundPrice);
                    OrderPrice=poundPriceSign;
                   // priceTotal=poundPrice;
                    $("#cost_per_page").html(pagePoundSign);
                    $("#total_discount").html(poundDiscount);
                    $("#amt_paid").html(poundPriceSign);
                    $("#base_price").html(poundPriceSign);

                }else if(currency=="AUD") {

                    australian =rate.AUD;
                    //console.log("aust", australian);
                    australianRound= australian.toFixed(2);
                    pageAustralian= price * australianRound;
                    pageAustralianRound=pageAustralian.toFixed(2);
                    pageAustralianSign= "A$" + pageAustralianRound;
                     australianPrice = total * australianRound;
                     australianPriceRound= australianPrice.toFixed(2);
                     australianPriceSign = "A$" + australianPriceRound;
                     australianDiscount= "A$" + 0.00;
                   // console.log("hello",australianPrice);
                   // console.log("hurray",australianPrice);
                    OrderPrice=australianPriceSign;
                    //priceTotal=australianPriceRound;
                    $("#cost_per_page").html(pageAustralianSign);
                    $("#total_discount").html(australianDiscount);
                    $("#amt_paid").html(australianPriceSign);
                    $("#base_price").html(australianPriceSign);
               }






        },

    });

}

$('#registerId').click(function(event) {
     console.log("click", $(this));
     $('#register').show();
     $('#signIn').hide();

});
$('#signId').click(function(event) {
    console.log("click", $(this));
    $('#signIn').show();
    $('#register').hide();

});

    $("#registerButton").click(function () {
    let value=$(this).val();

    $.ajax({
        type:"post",
        url:'/register',
        data:{
            "_token": $('#token').val(),
            register:value,
            name:$('#name').val(),
            email:$('#email').val(),
            password:$('#password').val(),

        },
        success:function(data){
            if(data.status=="ok"){

            }

        },
        error: function (xhr, errmsg, err) {


            console.log("mistake ajax");
            //alert("something went wrong");
            console.log("error", xhr);
            console.log("register", errmsg);
            console.log("wrong", err);
            }

    });

});



$("#loginButton").click(function () {
   // let value=$(this).val();

    $.ajax({
        type:"post",
        url:'/login',
        headers: {
            // 'content-type': 'application/json',
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        },
         data:{
             email:$('#email2').val(),
             password:$('#password2').val(),

          },

        success:function(data){
            console.log("login",data);
            var errorMsg= data.message;
            console.log("errorMsd", errorMsg);
            $("#notification").show();
            $("#error").html(errorMsg);

            if(data.status=="ok"){
                $("#signIn").removeClass('show');
                $("#signIn").addClass('hide');
                $("#otpdiv").removeClass('hide');
                $("#otpdiv").addClass('show');

            }

        },
        error: function (xhr, errmsg, err) {


            console.log("mistake ajax");
            //alert("something went wrong");
            console.log("error", xhr);
            console.log("register", errmsg);
            console.log("wrong", err);
        }

    });

});


$("#otpsubmit").click(function(event){
    event.preventDefault();
    let otp = $("#otp").val();

    $.ajax({
        type: "POST",
        url: "/otp",
        headers: {
            // 'content-type': 'application/json',
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        },
        data: { otp: otp,},
        dataType: "json",
        success: function(data){
            var message= data.errMsg;
            $("#notify").show();
            $("#new").html(message);

            if(data.status == "ok") {
               // window.location.href = "success";
                //console.log("success", data);

            }
        },
        error: function(xhr,errmsg,err){

            //btn.prop("disabled", false).html('Log In');
            //Show error message
            console.log("error", errmsg);
        }

    });
});



