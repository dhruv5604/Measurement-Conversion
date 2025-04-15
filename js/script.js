$(document).ready(function () {
    $("#input").keyup(function (e) {
        e.preventDefault();
        let opt1 = $("#opt1").val();
        let opt2 = $("#opt2").val();
        let type = $("#type").val();
        let input = $(this).val();
        $.ajax({
            type: "POST",
            url: "conversion",
            data: { opt1: opt1, opt2: opt2, type: type, input: input },
            dataType: "json",
            success: function (response) {
                $("#output").val(response);
            }
        });
    });
});
