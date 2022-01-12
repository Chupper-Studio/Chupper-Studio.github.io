
//create a function
function createId() {
    var id = 1;
    $('.content h2').each(function () {
        $(this).attr("id", "" + $(this).text().toLowerCase().replace(/\s/g, '-'));
        id++;
    })
}

// Hàm thay đổi ngôn ngữ bằng JS
function changeLang() {
    document.getElementById('form_lang').submit();
}


//create a function that run all functions
function main() {
    createId();
    changeLang();
}

main();