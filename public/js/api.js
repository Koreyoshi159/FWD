let all = [];
let categories;

$(document).ready(function () {
    categories = fillArray();
    fillFilter(categories);
    filter();
});

function fillArray() {
    $('.filter').each(function() {
        let text;
        text = $(this).html().replace(/ /g, '').replace(/&amp;/, 'and').replace(/&/, 'and');
        all.push(text);
        $(this).parent('tr').addClass(text);
    });
    return uniqueArray(all);
}

function uniqueArray(array) {
    let a = [];
    for (let i = 0; i < array.length; i++){
        if (a.indexOf(array[i]) === -1 && array[i] !== ''){
            a.push(array[i]);
        }
    }
    return a;
}

function fillFilter(array) {
    for(let i = 0; i < array.length; i++) {
        $('.filterSelect').append('<option value="' + array[i] + '">'+ array[i] +'</option>');
    }
}

function filter() {
    $('.filterSelect').change(function (){
        let filter = $('.filterSelect').val();
        console.log(filter);
        for(let i = 0; i < categories.length; i++) {
            console.log(filter === categories[i]);
            if (filter === "") {
                $('.'+categories[i]).removeClass('hidden');
            } else if(filter === categories[i]) {
                $('.'+categories[i]).removeClass('hidden');
            } else {
                $('.'+categories[i]).addClass('hidden');
            }
        }
    })
}