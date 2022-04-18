var site = {url:"http://localhost/go"};

$(document).ready(function(){

    $(document).on('submit', '#trackingForm', function(e) {
        e.preventDefault();
        var code = $('#trackcode').val();
        // if (code == '') {toastr.error("Referral Link is needed for Registration.");return;}
        if (code == '') {alert("Referral Link is needed for Registration.");return;} else{alert("Code is working");return;}
        // swal({
        //     position:'top',type: 'info',title:'New Account',
        //     onBeforeOpen: () => {
        //         Swal.showLoading();
        //         $.ajax({
        //             url: site.url+'/assets/php/Auth.php?action=new-account',
        //             type: 'POST',cache: false,dataType: 'JSON',
        //             data: $(this).serialize(),
        //             success: function(response){
        //                 if ('error' in response) {
        //                     Swal.close();
        //                     $.each(response.error, function(index, msg) {
        //                         toastr.error(msg);
        //                     });
        //                 } else {
        //                     swal({
        //                         position:'top',type: 'success',title:'Registration Successful!',
        //                         html: "<hr>"+response.success+"<hr>",
        //                     }).then((result)=>{
        //                         window.location.href = site.url+'/dashboard';
        //                     });
        //                 }
        //             }
        //         });
        //     },allowOutsideClick:false,html: "<hr>Creating your Account<br>Please wait, your account is been created."
        // });
    });

});