<script>
    function get_menu() {
        var role = $("#role").val();
        
        $.ajax({
            url: '<?= base_url(); ?>Menu_access/get_menu?role=' + role,
            cache: false,
            success: function(response) {
                $("#tampil_disini").html(response);

            }
        });
    }

    $(function() {
        $('#formuser').unbind('submit').bind('submit', function(e) { //<-- e defined here
            e.preventDefault();
            var form = $(this);
            var data = new FormData(this);
            $.ajax({
                url: form.attr('action'),
                type: form.attr('method'),
                data: data,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    if(data.status == 'success'){
                        alert(data.msg);
                        get_menu();
                    }else{
                        alert(data.msg);
                    }
                },
                error: function(err){
                    console.log(err);
                    alert(err);
                }
            });
            return false;
        });
    });
</script>