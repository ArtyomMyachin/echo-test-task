$(document).ready(() => {
    $(".calculator__form").submit( event => {
        event.preventDefault();

        var errorMessage = "";
        var date = document.querySelector("#calculator__date").value;
        var summ = document.querySelector("#calculator__summ").value;
        var summAdd = document.querySelector("#calculator__summ-add").value;
        if(date === "") {
            errorMessage = errorMessage.concat("Date is not chosen\n");
        }
        if(!/[0-9]+/.test(summ) || !(summ >= 1000 && summ <= 3000000)) {
            errorMessage = errorMessage.concat("Summ is incorrect\n");
        }
        if(!/[0-9]+/.test(summAdd) || !(summAdd >= 1000 && summAdd <= 3000000)) {
            errorMessage = errorMessage.concat("Summ adding is incorrect\n");
        }
        if(errorMessage !== "") {
            alert("error:\n" + errorMessage);
            return;
        }

        $.ajax({
            type: "POST",
            url: "calc.php",
            data: $('.calculator__form').serialize(),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                $(".calculator__result-text").html(data.result);
            }
        });
    })
})