
$('#searchware').submit((e) => {
    e.preventDefault();

    $.post('src/Search/index.php', { article: $("#searchware input").val() })
        .done((response) => {
            console.log(response)
        })
        .catch((error) => {
            console.log(error)
            console.log('errr')
        })
    console.log($("#searchware input").val())
})