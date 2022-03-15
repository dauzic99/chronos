function clearForm(selector, image = null, summer = null, imageUrl = null) {
    $(':input', selector)
        .not(':button, :submit, :reset, :hidden')
        .val('')
        .prop('checked', false)
        .prop('selected', false)
        .css({
            "border-color": "",
        });
    if (image != null) {
        $(image).attr('src', imageUrl);
    }
    if (summer != null) {
        $(summer).summernote('reset');

    }
}

function isArray(what) {
    return Object.prototype.toString.call(what) === '[object Array]';
}

function toastSuccess(message) {
    iziToast.success({
        title: 'Success!',
        message: message,
        position: 'topRight'
    });
}

function toastError() {
    iziToast.error({
        title: 'Error!',
        message: 'Silahkan cek kembali input anda',
        position: 'topRight'
    });
}

function formValidateSuccess(selector) {
    $(selector).each(function (i, obj) {
        $(obj).css({
            "border-color": "#28a745",
        });
    });
}

function formValidateError(error, selector = '') {
    jQuery.each(error, function (key, val) {
        $("#form-" + key + selector).css({
            "border-color": "#dc3545",
        });
        $('#error-' + key + selector).html(val);
        $('#error-' + key + selector).show();
    });
}

function initializeSummer(selector, placeholder) {
    $(selector).summernote({
        placeholder: placeholder,
        tabsize: 2,
        height: 300,
    });
}

function imagePreview(inputSelector, imageSelector) {
    $(inputSelector).change(function () {
        let reader = new FileReader();
        reader.onload = (e) => {
            $(imageSelector).attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    });
}

function modalTrigger(button, selector) {
    $(button).click(function (e) {
        e.preventDefault();
        $(selector).modal('show');
    });
}

function htmlDecode(data) {
    var txt = document.createElement('textarea');
    txt.innerHTML = data;
    return txt.value
}

function formatState(opt) {
    if (!opt.id) {
        return opt.text.toUpperCase();
    }

    var optimage = $(opt.element).attr('data-image');
    if (!optimage) {
        return opt.text.toUpperCase();
    } else {
        var $opt = $(
            '<span><img src="' + optimage + '" width="60px" /> ' + opt.text.toUpperCase() +
            '</span>'
        );
        return $opt;
    }
};

function formatStateIcon(opt) {
    if (!opt.id) {
        return opt.text.toUpperCase();
    }

    var optimage = $(opt.element).attr('data-icon');
        var $opt = $(
            '<span><i class="flag-icon flag-icon-'+optimage.toLowerCase()+' flag-icon-squared" style="margin-left:10px;height:10px;"></i>' + opt.text.toUpperCase() +
            '</span>'
        );
        return $opt;

};

function formatStateBrand(opt) {
    if (!opt.id) {
        return opt.text.toUpperCase();
    }

    var optimage = $(opt.element).attr('data-icon');
        var $opt = $(
            '<span><i class="fab fa-'+optimage.toLowerCase()+' flag-icon-squared" style="margin-right:5px;height:10px;"></i></span>'
        );
        return $opt;

};

function getEditData(url, imageUrl = null, modal) {
    $(document).on('click', '.edit', function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        $.ajax({
            type: "GET",
            url: url + "/" + id,
            dataType: "JSON",
            success: function (response) {
                console.log(response);
                jQuery.each(response.data, function (key, val) {
                    if (key == 'image') {
                        $("#form-" + key + '-edit').attr('src',
                            imageUrl + "/" + val);
                    }else if (key == 'country') {
                        var countryArray = [];
                        jQuery.each(val, function (keyCountry, valCountry) {
                            countryArray.push(valCountry.id);
                        });
                        $("#form-country_id-edit").val(countryArray).trigger("change");
                    } else if ($("#form-" + key + '-edit').hasClass('summer')) {
                        $("#form-" + key + '-edit').summernote("code", val);
                    } else if ($("#form-" + key + '-edit').hasClass('select2')) {
                        $("#form-" + key + '-edit').val(val).trigger("change");
                    } else {
                        $("#form-" + key + '-edit').val(val);
                    }
                });
            }
        });
        $(modal).modal('show');
    });
}

function detailData(url, imageUrl = null, modal) {
    $(document).on('click', '.view', function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        $.ajax({
            type: "GET",
            url: url + "/" + id,
            dataType: "JSON",
            success: function (response) {
                jQuery.each(response.data, function (key, val) {
                    if (typeof val == 'object') {
                        jQuery.each(val, function (keyArray, valArray) {
                            $("#detail-" + key+"-"+keyArray).html(valArray);
                        });
                    } else {
                        if (key == 'image') {
                            $("#detail-" + key).attr('src',
                                imageUrl + "/" + val);
                        } else {
                            $("#detail-" + key).html(val);
                        }
                    }


                });
            }
        });
        $(modal).modal('show');
    });
}

function deleteData() {
    $(document).on('click', '.delete', function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        $('#form-id-delete').val(id);
        $('#modalDelete').modal('show');
    });

    $('#deleteForm').submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: 'DELETE',
            url: $('#deleteForm').attr('action'),
            data: $('#deleteForm').serialize(),
            success: function (response) {
                if (response.hasOwnProperty('success')) {
                    $('#modalDelete').modal('hide');
                    toastSuccess(response.success);
                    $('#index-table').DataTable().ajax
                        .reload();
                } else {
                    toastError();
                }
            },
        });
    });
}
