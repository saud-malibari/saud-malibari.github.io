function returnBooks(){
    var search = document.getElementById('search').value
    document.getElementById('list-books').innerHTML=""
    console.log(search)

    $.ajax({
        url: "https://www.googleapis.com/books/v1/volumes?q="+search,
        datatype: "json",

        success: function(data){
            console.log(data)
        },

        type: 'GET'
    });
}

document.getElementById('button').addEventListener('click', returnBooks, false)