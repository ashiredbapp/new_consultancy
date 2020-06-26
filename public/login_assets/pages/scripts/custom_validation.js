
$('#cancel_pass').click(function () {
        $('#old_pass').val('');
        $('#pass').val('');
        $('#cpass').val('');
        $('#change_password').modal('hide');
});

$('#change_password').on('shown.bs.modal', function () {
        $('#old_pass').val('');
        $('#pass').val('');
        $('#cpass').val('');
        $('#old_pass').focus()
});

function update_password() {
        var old_pass = $("#old_pass").val();
        var password = $("#pass").val();
        var confirm_pwd = $("#cpass").val();
        var response = null;
        if (old_pass != "" && password != "" && confirm_pwd != "")
        {
                if (old_pass.trim().length != 0 || password.trim().length != 0 || confirm_pwd.trim().length != 0)
                {
                        if (password.length > 7 && confirm_pwd.length > 7)
                        {
                                if (password == confirm_pwd)
                                {
                                        var str = /^(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$&*]{8,15}$/;
                                        if (password.match(str))
                                        {
                                                $.ajax({
                                                        url: "/mrlpay/public/index.php/user-changePassword",
                                                        type: 'post',
                                                        data: {old_password:old_pass, password:password},
                                                        statusCode: {
                                                                401: function() {
                                                                        bootbox.alert('Session expired..!! Please login again.');
                                                                        window.location= '/mrlpay/public/index.php/signout';
                                                                },
                                                        },
                                                        success: function(result){
                                                                var res = 0;
                                                                $.each(JSON.parse(result), function(i, item){
                                                                        $('#'+i+'_message').html(item);
                                                                        if(item!=1)
                                                                        $('#'+i+'_message').css('display', (item!=1)?'block':'none');
                                                                        else
                                                                        res += parseInt(item);
                                                                });
                                                                if(res != 0 )
                                                                {
                                                                        bootbox.alert("Password changed successfully..!");
                                                                        window.location='/mrlpay/public/index.php/signout';
                                                                }
                                                        }
                                                });
                                        }
                                        else
                                        {
                                                if (password.indexOf(' ') != -1)
                                                {
                                                        response = {'pass':'Password contain spaces..!','old_pass':'','cpass':''};
                                                }
                                                else
                                                {
                                                        response = {'pass':'Password should contain atleast one uppercase letter, lowercase letter, special character and number..!','old_pass':'','cpass':''};
                                                }
                                        }
                                }
                                else
                                {
                                        response = {'pass':'Password Mismatch..!','old_pass':'','cpass':''};
                                }
                        }
                        else
                        {
                                response = {'pass':'Password should have minimum 8 characters..!','old_pass':'','cpass':''};
                        }
                }
                else
                {
                        response = {'pass':'Password should contain only space..!','old_pass':'','cpass':''};
                }
        }
        else
        {
                if (old_pass.indexOf(' ') != -1)
                response = {'pass':'Old Password contain spaces..!','old_pass':'','cpass':''};
                if (old_pass == "" && password == "" && confirm_pwd == "")
                response = {'pass':'Password cannot be blank..!','old_pass':'Old Password cannot be blank..!','cpass':'Confirm Password cannot be blank..!'};
                else
                {
                        if(old_pass == '')
                        response = {'pass':'','old_pass':'Old Password cannot be blank..!','cpass':''};
                        else if (password == '')
                        response = {'pass':'Password cannot be blank..!','old_pass':'','cpass':''};
                        else
                        response = {'pass':'','old_pass':'','cpass':'Confirm Password cannot be blank..!'};
                }
        }
        parseError(response);
}
function parseError(response)
{
        var res = 0;
        $.each(response, function(i, item){
                $('#'+i+'_message').html(item);
                if(item!=1)
                $('#'+i+'_message').css('display', (item!=1)?'block':'none');
                else
                res += parseInt(item);
        });
        if(res != 0 )
        {
                bootbox.alert("Password changed successfully..!");
                window.location='/mrlpay/public/index.php/signout';
        }
}
