let transformation = {
    all: (resolved) => true,
    not_resolved: (resolved) => !resolved,
    resolved: (resolved) => resolved
};

function readURL(input) {
    if (input.files && input.files[0]) {

        var reader = new FileReader();

        reader.onload = function(e) {
            $('.image-upload-wrap').hide();

            $('.file-upload-image').attr('src', e.target.result);
            $('.file-upload-content').show();

            $('.image-title').html("");
        };

        reader.readAsDataURL(input.files[0]);

    } else {
        removeUpload();
    }
}

function removeUpload() {
    $('.file-upload-input').replaceWith($('.file-upload-input').clone());
    $('.file-upload-content').hide();
    $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function() {
    $('.image-upload-wrap').addClass('image-dropping');
});
$('.image-upload-wrap').bind('dragleave', function() {
    $('.image-upload-wrap').removeClass('image-dropping');
});

$(document).ready(function() {
    $(".clasif").on("change", event => {
        $(".myTable tr").each((idx, val) => {
            let estado = $(val).children(".estado").eq(0).attr("estado-value");
            estado = Boolean(Number(estado))
            $(val).toggle(transformation[event.target.value](estado));
        })
    });
});