// panggil form login
function load_form_login(){
    $.ajax({
        url:'login_form.php',
        type:'GET',
        success:function(data){
            $('#id_login_content').html(data);
        }
    });
}
// panggil form register
function call_register_form(){
    $.ajax({
        url:'register_form.php',
        type:'GET',
        success:function(data){
            $('#id_login_content').html(data);
        }
    });
}
function call_master_login(){
    $.ajax({
        url:'master_login.php',
        type:'GET',
        success:function(data){
            $('#id_login_content').html(data);
        }
    });
}