$(document).ready(function () {

    $("#regForm").submit(function () {

        let phone = $("input[name='phone']").val();

        if (phone.length != 10) {
            alert("Phone Number must contain 10 digits");
            return false;
        }

        return true;
    });

});