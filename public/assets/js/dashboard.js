/* globals Chart:false, feather:false */

(function () {
    'use strict';
    feather.replace();

}())

function readURL(input, id) {
    if (input.files && input.files[0]) {
        let reader = new FileReader();

        reader.onload = function (e) {
            document.getElementById(id).setAttribute('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
        document.getElementById(id).classList.remove('hidden');
    }
}

$(document).ready(function () {
    if ($('.crop_image').attr('data-model') === 'products') {
        $image_crop = $('#image_crop').croppie({
            enableExif: true,
            viewport: {
                width: 200,
                height: 217,
                type: 'square' //circle square
            },
            boundary: {
                width: 300,
                height: 300
            }
        });
    } else {
        $image_crop = $('#image_crop').croppie({
            enableExif: true,
            viewport: {
                width: 270,
                height: 130,
                type: 'square' //circle square
            },
            boundary: {
                width: 300,
                height: 150
            }
        });
    }

    $('#insert_image').on('change', function () {
        var reader = new FileReader();
        reader.onload = function (event) {
            $image_crop.croppie('bind', {
                url: event.target.result
            }).then(function () {
                console.log('jQuery bind complete');
            });
        }
        reader.readAsDataURL(this.files[0]);
        $('#insertimageModal').modal('show');
    });
    const model = $('.crop_image').attr('data-model');
    $('.crop_image').click(function (event) {
        $image_crop.croppie('result', {
            type: 'canvas',
            size: 'viewport'
        }).then(function (response) {

            $.ajax({
                url: '/api/' + model + '/insert_image',
                type: 'POST',
                data: {"image": response},
                success: function (data) {
                    $('#insertimageModal').modal('hide');
                    output = `
          <input type="hidden" name="file_name" value="${data}">
          <div class="row">
            <div class="col-md-2" style="margin-bottom:16px;">
              <img src="/assets/images/${model}/${data}" class="img-thumbnail" alt="Preview"/>
            </div>
          </div>`;
                    $('#store_image').html(output);

                }
            })
        });
    });
});
