<script>
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
                        window.location.href = "<?=base_url()?>auth";
                    }else{
                        alert(data.msg);
                    }
                },
                error: function(err){
                    alert(err);
                }
                
            });
            return false;
        });
    });

</script>