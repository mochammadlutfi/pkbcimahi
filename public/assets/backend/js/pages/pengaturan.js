$("#field-app_logo").change(function (event) {
    if (this.files && this.files[0]) {
        var reader = new FileReader();
        var filename = $("#field-app_logo").val();
        filename = filename.substring(filename.lastIndexOf('\\') + 1);
        reader.onload = function (e) {
            // debugger;
            $('#logo_preview').attr('src', e.target.result);
            $('.label-logo').text(filename);
        }
        reader.readAsDataURL(this.files[0]);
    }
});

$("#field-app_favicon").change(function (event) {
    if (this.files && this.files[0]) {
        var reader = new FileReader();
        var filename = $("#field-app_favicon").val();
        filename = filename.substring(filename.lastIndexOf('\\') + 1);
        reader.onload = function (e) {
            // debugger;
            $('#icon_preview').attr('src', e.target.result);
            $('.label-favicon').text(filename);
        }
        reader.readAsDataURL(this.files[0]);
    }
});


$("#form_general").submit(function(e) {
    e.preventDefault();
    var formData = new FormData($('#form_general')[0]);
    $.ajax({
        url : laroute.route('admin.pengaturan.umum'),
        type: 'post',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        // beforeSend: function(){
        //     swal({
        //         title: "Tunggu Sebentar...",
        //         text: " ",
        //         icon: laroute.url('assets/img/loading.gif'),
        //         buttons: false,
        //         allowOutsideClick: false
        //     });
        // },
        success: function (response){
                $('.is-invalid').removeClass('is-invalid');
                if (response.fail == false) {
                    $('#import_modal').modal('hide');
                    swal({
                        title: "Success",
                        text: "Data Berhasil Di Simpan",
                        timer: 3000,
                        buttons: false,
                        icon: 'success'
                    });
                    window.setTimeout(function () {
                        location.reload();
                    }, 1500);
            }else{
                swal.close();
                for (control in response.errors) {
                    $('#field-' + control).addClass('is-invalid');
                    $('#error-' + control).html(response.errors[control]);
                    $.notify({
                        icon: 'fa fa-times',
                        message: response.errors[control]
                    },{
                        delay: 7000,
                        type: 'danger'
                    });
                }
            }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSimpan').text('Simpan');
            $('#btnSimpan').attr('disabled',false);

        }
    });
});
