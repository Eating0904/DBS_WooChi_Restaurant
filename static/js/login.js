function login() {
    let url = "../php/login.php";
    let data = {
        "account" : $("input[name='account']").val(),
        "password" : $("input[name='password']").val(),
    };

    $.post(
        url,
        data,
        (response, status) => {
            if (status == "success") {
                if (response["status"] == "success") {
                    window.location.href = "../home";
                }
                else {
                    console.log(response["error"]);
                }
            }
        }
    )
}

$(document).ready(() => {
    $("#submit").click(() => {
        login();
    })
});