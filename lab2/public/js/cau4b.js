




$(document).ready(function () {

    //Xử lý sau khi validate thành công
    $.validator.setDefaults({
        submitHandler: function () {
            alert("submitted!");
        }
    });

    //Xử lý validate
    $('#formValidate').validate({
        rules: {
            txtTenCuaBan: {
                required: true,
            },
            txtHoCuaBan: {
                required: true
            },
            txtTenDangNhap: {
                required: true,
                minlength: 2
            },
            txtEmail: {
                required: true,
                email: true
            },
            txtPassword: {
                required: true,
                minlength: 5
            },
            txtRePassword: {
                required: true,
                minlength: 5,
                equalTo: "#txtPassword"
            },
            chkaccept: {
                required: true
            }
        },
        messages: {
            txtTenCuaBan: "Bạn chưa nhập vào họ tên của bạn",
            txtHoCuaBan: "Bạn chưa nhập vào họ của bạn",
            txtTenDangNhap: {
                required: "Bạn chưa nhập vào tên đăng nhập",
                minlength: "Bạn phải nhập tên đăng nhập 2 ký tự trở lên"
            },
            txtEmail: {
                required: "Bạn chưa nhập email",
                email: "Địa chỉ email không hợp lệ"
            },
            txtPassword: {
                required: "Bạn chưa nhập mật khẩu",
                minlength: "Bạn phải nhập tối đa 5 ký tự trở lên"
            },
            txtRePassword: {
                required: "Bạn chưa nhập mật khẩu",
                minlength: "Bạn phải nhập tối đa 5 ký tự trở lên",
                equalTo: "vui lòng nhập đúng với mật khẩu phía trên"
            },
            chkaccept: "Bạn phải đồng ý với các quy định của chúng tôi"
        },
        errorElement: "em",
        errorPlacement: function (error, element) {
            error.addClass('help-block');
            if (element.prop('type') === "checkbox") {
                error.insertAfter(element.parent('label'));
            }
            else {
                error.insertAfter(element);
            }
        },
        highlight:function(element,errorClass,validClass){
            $(element).parent('label').parent('.checkbox').addClass('has-error').removeClass('has-success');
            $(element).parent('.col-sm-4').addClass('has-error').removeClass('has-success');
        },
        unhighlight:function(element,errorClass,validClass)
        {
            $(element).parent('label').parent('.checkbox').addClass('has-success').removeClass('has-error');
            $(element).parent('.col-sm-4').addClass('has-success').removeClass('has-error');
        }
        
    });
});