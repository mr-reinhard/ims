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
// panggil master login
function call_master_login(){
    $.ajax({
        url:'master_login.php',
        type:'GET',
        success:function(data){
            $('#id_login_content').html(data);
        }
    });
}
// panggil beranda untuk home master login
function call_beranda_master_login(){
    $.ajax({
        url:'',
        type:'GET',
        success:function(data){
            $('').html(data);
        }
    });
}