	$(document).ready(function(){
		$(document).on("click",".linkmenu",function(e){
			e.preventDefault();
			//$("#defaultcont").hide();
			$.ajax({
				url : $(this).attr("href"),
				type : "GET",
				dataType : "html",
				beforeSend : function(){
					//$("#cont").html("wait load page ...");
				},
				success:function(data){
					$("#cont").html(data);
				},
				error:function(){
					$("#cont").html("<h1>Tidak bisa meload page</h1>")
				} 
			});
		});
	});
	$("#btnSimpanPengguna").submit(function(){
	$.ajax({
         type: "POST",
         url: '<?php echo site_url("app/simpanPengguna")?>',
         data: $("#simpanPengguna").serialize(),
         dataType : "JSON",
         success: function (data) {
            if (data.st=='1') {
                toastr.success(data.message);
                //document.getElementById('regisPasien').click();
            }else if (data.st=='0') {
                toastr.danger(data.message);
            };
        }
	});
	return false;
	});